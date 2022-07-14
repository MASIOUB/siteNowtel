<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'nowtel_pages';
    protected $fillable = [
        'name',
        'url',
        'image_id'
    ];

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
