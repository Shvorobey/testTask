<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 08.02.2019
 * Time: 15:44
 */

namespace App\Servises;

use App\randomDays;


class GetDays
{
    public $randomDays;

    public function getRandomDays()
    {
        $randomDays = randomDays::inRandomOrder()->where('id', '!=', date("w"))->limit(3)->get();
        return $randomDays;
    }
}