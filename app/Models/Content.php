<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = ['pocket_id', 'content_url', 'content_title', 'content_excerpt' ,'content_heading_image_url'];

    public function pocket(){
        return $this->belongsTo(Pocket::class);
    }
}
