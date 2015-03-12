<?php

    class WeekDayFinder {


        function findDay($date) {

            // $weekdays = array("Mon" => "Monday", "Tue" => "Tuesday", "Wed" => "Wednesday", "Thu" => "Thursday", "Fri" => "Friday", "Sat" => "Saturday", "Sun" => "Sunday");
            //
            // $date = new DateTime($date);
            // $day = $date->format('D');
            //
            // return $weekdays[$day];

            //each number cooresponds to
            $days_in_month = array(1 => 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
            //days of the week in order from today
            $weekdays = array("Thurday", "Friday", "Saturday", "Sunday", "Monday", "Tuesday", "Wednesday");

            //the input array for day's date
            $today = explode("/", $date);

            $day_today = intval($today[1]);
            $month_today = intval($today[0]);
            $year_today = intval($today[2]);

            for($i = 1; $i < $today[0]; $i++)

            return "Thursday";

        }
    }




?>
