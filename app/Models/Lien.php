<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lien extends Model
{
    use HasFactory;

    protected $table = 'liens';
    protected $fillable = [
        'link_content',
        'link'
    ];

    public function divisions()
    {
        return $this->belongsTo(Division::class);
    }
}
