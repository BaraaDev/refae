<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    protected $guarded = [];


    public function saveCloneByID($clone_id){

        $old = parent::find($clone_id);

        if(empty($old)) return false;

        $old->title = $old->title." - Copy";
        $new = $old->replicate();
        $new->save();

    }
}
