<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use HasFactory;

    public function getUrlPathAttribute()
    {
        return Storage::url($this->thumbnail);
    }

    protected $guarded = [];
}
