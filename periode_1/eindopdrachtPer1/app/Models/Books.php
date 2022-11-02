<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     */
    protected $table = 'books';
    protected $fillable = [
        'title',
        'author',
        'created_at',
        'updated_at',
    ];
}
