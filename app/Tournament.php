<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Tournament extends Model
{
    use Resizable;
    public function normalizeDate() {
        $arr = explode("-", explode(" ", $this->t_start_date)[0]);
        return $arr[2].".".$arr[1].".".$arr[0];
    }
    public function normalizeTime() {
        return substr(explode(" ", $this->t_start_date)[1], 0, 5);
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
