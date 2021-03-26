<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messeger extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'messegens';
    protected $fillable = [
        'id',
        'title',
        'thumbnail',
        'description',
        'view',
        'user_id',
    ];

}