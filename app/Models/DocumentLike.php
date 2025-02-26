<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentLike extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'document_id'];

    public function pdf()
    {
        return $this->belongsTo(related: Document::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
