<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function menus(){
        return $this->hasMany(Menu::class);
    }

    public function histories(){
        return $this->hasMany(History::class);
    }

    public function favorites(){
        return $this->hasMany(Favorite::class);
    }
}
