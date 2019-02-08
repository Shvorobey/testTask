<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class randomDays extends Model
{
    public $randomDays;

    public function getRandomDays()
    {
        $randomDays = randomDays::inRandomOrder()->limit(3)->get();
        return $randomDays;
    }
}
