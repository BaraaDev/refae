<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'property_category';
    protected $guarded = [];
    protected $slugField     = 'slug';
    protected $slugFromField = 'title';


}
