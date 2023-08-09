<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprite extends Model
{
    use HasFactory;

    protected $fillable = ["name", "width", "height", "data", "user_id"];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
