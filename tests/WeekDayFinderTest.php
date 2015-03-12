<?php

    require_once "src/WeekDayFinder.php";

    class WeekDayFinderTest extends PHPUnit_Framework_TestCase {

        /*
        Input: 03/12/2015 ("String")
        Output: Thursday ("String")
        Spec: Enter the date 3/12/2015 because it's today, and return the string 'Thursday'
        */
        function test_findDay_Today() {
            $test_weekDayFinder = new WeekDayFinder;
            $input = "03/12/2015";

            $result = $test_weekDayFinder->findDay($input);

            $this->assertEquals("Thursday", $result);
        }

        /*
        input: 03/11/2015
        output: "Wednesday"
        Spec: Enter the date 3/11/2015 because it's yesterday and return the string "Wednesday"
        */
        function test_findDay_yesterday() {
            $test_weekDayFinder = new WeekDayFinder;
            $input = "03/11/2015";

            $result = $test_weekDayFinder->findDay($input);

            $this->assertEquals("Wednesday", $result);
        }

    }
 ?>
