<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static $validation = [
		'url_youtube'           => 'required|string',
    ];

    public static $validationUpdate = [
		'url_youtube'           => 'string',
    ];
}
