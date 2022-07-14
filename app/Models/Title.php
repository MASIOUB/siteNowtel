<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    protected $table = 'titles';
    protected $fillable = [
        'content',
        'color_content',
        'position',
        'color_id'
    ];

    public function divisions()
    {
        return $this->belongsTo(Division::class);
    }
}
