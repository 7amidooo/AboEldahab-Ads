<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
    protected $table = 'banners';
    protected $fillable = ['id','image','link','member_id'];
    public function ads(){
        return $this->belongsTo('App\Models\ads','ad_id');
    }
}
