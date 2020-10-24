<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_cat extends Model
{
    use HasFactory;

    public function services() {
        return $this->hasMany('App\Models\Service');
    }

}
