<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    use HasFactory;

    protected $table = 'buttons';
    protected $fillable = [
        'button_content',
        'button_link'
    ];

    public function divisions()
    {
        return $this->belongsTo(Division::class);
    }
}
