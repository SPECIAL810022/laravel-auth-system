<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Mouse extends Model implements AuthenticatableContract
{
    use Authenticatable; // Use the Authenticatable trait

    protected $fillable = [
        'name',
        'number',
        'email',
        'age',
        'password',
        'image'
    ];

    // If you're using timestamps
    public $timestamps = true;

    // Other model methods and relationships can go here
}
