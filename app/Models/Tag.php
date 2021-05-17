<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'property_category';
    protected $guarded = [];
    protected $slugField     = 'slug';
    protected $slugFromField = 'name';
}
