<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;
use App\Models\Division;

class Section extends Model
{
    use HasFactory;

    protected $table = 'sections';
    protected $fillable = [
        'name',
        'page_id'
    ];

    public function pages()
    {
        return $this->belongsTo(Page::class);
    }

    public function divisions()
    {
        return $this->hasMany(Division::class);
    }
}
