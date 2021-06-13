<?php

namespace App\Jobs;

use Goutte\Client;
use App\Models\Content;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class WebCrawler implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $contentID;

    public function __construct($contentID)
    {
        $this->contentID = $contentID;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $urlContent = Content::find($this->contentID);
        $url = $urlContent->content_url;

        $client = new Client();
        $crawler = $client->request('GET', $url);
        $title_collection = $crawler->filter('title')->each(function ($node) {
             return ['title'=> $node->getNode(0)->textContent];
        });
        $description = $crawler->filterXpath('//meta[@name="description"]')->attr('content');
        $title = $title_collection[0]['title'];
        $preview = $crawler->filterXpath('//meta[@property="og:image"]')->attr('content');
        $urlContent->update(['content_title' => $title, 'content_excerpt' => $description, 'content_heading_image_url' => $preview]);
    }
}
