<?php
namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\SEO;

class News extends BaseModel
{
     protected $table = 'news';
    protected $guarded = [];
    protected $slugField     = 'slug';
    protected $slugFromField = 'title';



}
