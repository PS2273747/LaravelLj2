<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;
    protected $table = 'bands';
    protected $fillable = [
        'band_name',
        'genre',
        'founded',
        'active_till',
    ];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
