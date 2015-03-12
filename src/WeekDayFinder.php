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
            $weekdays = array("Thursday", "Friday", "Saturday", "Sunday", "Monday", "Tuesday", "Wednesday");

            //the input array for the date enter
            //Ex ["03", "12", "2015"]
            $input_date = explode("/", $date);
            $s_input_date = $input_date[1];
            $s_input_month = $input_date[0];
            $s_input_year = $input_date[2];
            //number of day's since start of year
            $number_of_days = 0;

            //information for today's date
            $days_to_today = 71;

            echo "M " . $input_date[0] . " - ";

            echo "D " . $input_date[1] . " - ";

            //input month, day, year
            $input_date = intval($s_input_date);
            $input_month = intval($s_input_month);
            $input_year = intval($s_input_year);

            echo $input_date . " D - ";
            echo $input_month . " M - ";
            echo $input_year . " Y - ";

            //add the days in the month since the beginning of this year to the total
            for($i = 1; $i < $input_month; $i++) {
                echo "$i - ";
                $number_of_days += $days_in_month[$i];
            }
            //add the remaining days in the month
            $number_of_days += $input_date;

            echo $number_of_days;

            $difference_of_days = $number_of_days - $days_to_today;

            if($difference_of_days < 0) {
                return $weekdays[(7 + $difference_of_days & 7)];
            }
            else {
                return $weekdays[$difference_of_days % 7];
            }
        }
    }




?>
