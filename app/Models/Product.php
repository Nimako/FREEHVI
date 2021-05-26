<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'product_name',
        "amount_GH",
        "amount_CF",
        "details",
        "how_to_use",
        'benefits',
        "ingredeant",
        "featured_image",
        "image_1",
        "image_2",
        "image_3",
        "image_4",
        "image_5",
        "image_6", 
        "category_id",
        "date_created",    
        "created_by",
        "updated_by",
        'status',
    ];

}
