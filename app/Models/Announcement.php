<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    public static $validation = [
		'title'           => 'required|string',
		'description'     => 'required|string',
		'thumbnail'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public static $validationUpdate = [
		'title'           => 'string',
		'description'     => 'string',
		'thumbnail'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];
}
