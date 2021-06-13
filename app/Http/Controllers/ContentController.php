<?php

namespace App\Http\Controllers;

use App\Models\Pocket;
use App\Models\Content;
use App\Jobs\WebCrawler;
use App\Events\NewContentURLAdded;
use Illuminate\Http\Request;
use App\Http\Requests\ContentCreate;
use App\Http\Resources\ContentResource;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pocketID)
    {
        return view('newContent', compact('pocketID'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentCreate $request ,$id)
    {
        $content = Content::create(
            [
                'pocket_id' => $id,
                'content_url' => $request->content_url,
                'content_title' => '',
                'content_excerpt' => ''
            ]         
        );
        $contentID = $content->id;
        //dispatch(new WebCrawler($content->id));
        event(new NewContentURLAdded($contentID));
        return back()->with('success', 'Content created successfully.');

        //return new ContentResource($content);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ContentResource($content);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        if($content){
             $content->delete();
            return back()->with('success', 'Content Deleted successfully.');
        }
    }
}
