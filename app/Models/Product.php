<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = ['name'];

    public function tags(){
        return $this->belongsToMany('App\Models\Tag','product_tag', 'product_id', 'tag_id');
    }
}
