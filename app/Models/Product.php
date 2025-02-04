<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'photoURL',
        'description',
        'price',
        'reducedPrice',
        'yearOfRelease',
        // 'color',
        'rating',
    ];
    
    public $timestamps = false;
    protected $table = 'products';


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
