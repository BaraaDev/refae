<?php
namespace App\Models;

use App;
use App\BaseModel;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends BaseModel
{
    use SoftDeletes;
    protected $table = 'contact';
    protected $fillable = [
        'name',
        'email',
        'message',
        'status',
        'phone',
        'subject',
        'map_lat',
        'map_long',
        'map_zoom'
    ];

//    protected $cleanFields = ['message'];
}
