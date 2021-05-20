<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;
class MediaFile extends Model
{
    protected $table = 'media_files';
    protected $guarded = [];
}
