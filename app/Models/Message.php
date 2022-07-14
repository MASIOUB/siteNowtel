<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';
    protected $fillable = [
        'content',
        'user_id',
        'subject_id'
    ];

    public function messages()
    {
        return $this->belongsTo(User::class);
    }
}
