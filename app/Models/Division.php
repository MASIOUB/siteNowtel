<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

class Division extends Model
{
    use HasFactory;

    protected $table = 'divisions';
    protected $fillable = [
        'name',
        'title_id',
        'small_title_id',
        'image_id',
        'paragraph_id',
        'button_id',
        'lien_id',
        'section_id'
    ];

    public function sections()
    {
        return $this->belongsTo(Section::class);
    }

    public function titles()
    {
        return $this->hasMany(Title::class);
    }

    public function small_titles()
    {
        return $this->hasMany(Smalltitle::class);
    }

    public function paragraphs()
    {
        return $this->hasMany(Paragraph::class);
    }

    public function buttons()
    {
        return $this->hasMany(Button::class);
    }

    public function liens()
    {
        return $this->hasMany(Lien::class);
    }
}
