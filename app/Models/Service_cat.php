<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Service_cat extends Model
{
    use HasFactory;

    protected $fillable = ['cat_code', 'cat_name', 'cat_image'];

    

    public function services() {
        return $this->hasMany(Service::class);
    }

}
