<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'category_id', 'photo', 'email'
    ];

    // protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
        // return $this->belongsTo(Category::class, 'id', 'category_id');
    }
}
