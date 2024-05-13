<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'priority'
    ];

    public function computers(){
        return $this->hasMany(Computer::class, 'categorie_id', 'id');
    }
}
