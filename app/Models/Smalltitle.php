<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smalltitle extends Model
{
    use HasFactory;

    protected $table = 'small_titles';
    protected $fillable = [
        'content',
        'color_id'
    ];

    public function divisions()
    {
        return $this->belongsTo(Division::class);
    }
}
