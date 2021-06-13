<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pocket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id'];

    public function contents(){
        return $this->hasMany(Content::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
