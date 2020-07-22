<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use Carbon\Carbon;

class Post extends Model
{
    use Resizable;
    public function categories(){
        return $this->belongsToMany('App\Category', 'posts_categories');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function createdAtFormated(){
        $carbon = new Carbon($this->created_at, 'Europe/Moscow');
        $carbon->locale('ru');
        $return = $carbon->format('d').' '. $carbon->getTranslatedShortMonthName('Do MMMM').' '.$carbon->isoFormat('Y').' '.$carbon->isoFormat('HH:mm');

        if($carbon->format('Y-m-d') == date('Y-m-d'))
            $return = __('today').' '.$carbon->isoFormat('HH:mm');

        if($carbon->format('Y-m-d') == date('Y-m-d', strtotime(date('Y-m-d').' -1 day')))
            $return = __('yestoday').' '.$carbon->isoFormat('HH:mm');

        return $return;
    }
}
