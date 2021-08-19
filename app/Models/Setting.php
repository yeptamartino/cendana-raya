<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static $validationUpdate = [
        'terms_and_conditions' => 'string',
        'logo'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];
}
