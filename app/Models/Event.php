<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function services() {
        return $this->belongsToMany('App\Models\Service');
    }

    public function saveEvent() {
        if($this->status == 0) {
            $this->status == 1;
            $this->save();
            // session()->forget('eventId');
            return true;
        } else {
            return false;
        }
    }
}
