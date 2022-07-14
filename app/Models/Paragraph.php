<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    use HasFactory;

    protected $table = 'paragraphs';
    protected $fillable = [
        'content',
        'color_id'
    ];

    public function divisions()
    {
        return $this->belongsTo(Division::class);
    }
}
