<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_desc',
        'price'
    ];

    // Default value ko lagi
    protected $attributes = [
        'old_price' => '',
    ];

    // Different function name xa bhaney foreign key pass garna parxa natra pardaina
    // public function cat(){
    //     return $this->belongsTo(Category::class,'category_id');
    // }

    public function category(){
        return $this->belongsTo(Category::class);
    }


}


