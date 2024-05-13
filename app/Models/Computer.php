<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'ram',
        'hard_disk',
        'number_cores',
        'processor',
        'operative_system',
        'date_creation',
        'graphic_memory?',
        'cc_graphic_memory',
        'image',
        'categorie_id',
        'description',
        'price'
    ];

    public function categorie(){
        return $this->belongsTo(Category::class, 'categorie_id', 'id');
    }


}
