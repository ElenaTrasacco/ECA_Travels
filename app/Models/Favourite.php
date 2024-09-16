<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favourite extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'region', 'price'];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
