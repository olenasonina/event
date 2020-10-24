<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Service_cat;

class Service extends Model
{
    use HasFactory;

    // public function getCategory() {
    //     return Service::find($this->category_id);
    // }

    public function category() {
        return $this->belongsTo('App\Models\Service_cat', 'service_cat_id');
    }
}
