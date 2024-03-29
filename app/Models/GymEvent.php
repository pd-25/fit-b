<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymEvent extends Model
{
    use HasFactory;

    public function gymSubEvents()
    {
        return $this->hasMany(Comment::class, 'foreign_key', 'local_key'); 
    }
}
