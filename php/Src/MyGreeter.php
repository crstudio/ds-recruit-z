<?php

namespace Src;

class MyGreeter
{

    public function greeting()
    {
        $hour = date("H");
        if ($hour >= 6 &&$hour < 12) {
            //6点到12点之间
            return "Good morning";
        } elseif ($hour >= 12 && $hour < 18) {
            //12点到18点之间
            return "Good afternoon";
        } else {
            //18点到第二天6点之间
            return "Good evening!";
        }
    }
}