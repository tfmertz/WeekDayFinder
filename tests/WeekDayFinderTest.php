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

        /*
        input: 03/10/2015
        output: "Tuesday"
        Spec: Enter the date 3/10/2015 because it's 2 days ago and return the string "Tuesday"
        */
        function test_findDay_twoDaysAgo() {
            $test_weekDayFinder = new WeekDayFinder;
            $input = "03/10/2015";

            $result = $test_weekDayFinder->findDay($input);

            $this->assertEquals("Tuesday", $result);
        }

        /*
        input: 03/13/2015
        output: "Friday"
        Spec: Enter the date 3/13/2015 because it's tomorrow and return the string "Friday"
        */
        function test_findDay_tomorrow() {
            $test_weekDayFinder = new WeekDayFinder;
            $input = "03/13/2015";

            $result = $test_weekDayFinder->findDay($input);

            $this->assertEquals("Friday", $result);
        }

        /*
        input: 03/19/2015
        output: "Thursday"
        Spec: Enter the date 3/19/2015 because it's next Thursday and return the string "Thursday"
        */
        function test_findDay_nextWeek() {
            $test_weekDayFinder = new WeekDayFinder;
            $input = "03/19/2015";

            $result = $test_weekDayFinder->findDay($input);

            $this->assertEquals("Thursday", $result);
        }

        /*
        input: 03/05/2015
        output: "Thursday"
        Spec: Enter the date 3/19/2015 because it's next Thursday and return the string "Thursday"
        */
        function test_findDay_lastWeek() {
            $test_weekDayFinder = new WeekDayFinder;
            $input = "03/05/2015";

            $result = $test_weekDayFinder->findDay($input);

            $this->assertEquals("Thursday", $result);
        }

        /*
        input: 01/01/2015
        output: "Thursday"
        Spec: Enter the date 1/01/2015 because it's the first Thursday in the year and return the string "Thursday"
        */
        function test_findDay_firstDayOfYear() {
            $test_weekDayFinder = new WeekDayFinder;
            $input = "01/01/2015";

            $result = $test_weekDayFinder->findDay($input);

            $this->assertEquals("Thursday", $result);
        }

        /*
        input: 12/31/2015
        output: "Thursday"
        Spec: Enter the date 11/31/2015 because it's the last Thursday in the year and return the string "Thursday"
        */
        function test_findDay_lastDayOfYear() {
            $test_weekDayFinder = new WeekDayFinder;
            $input = "12/31/2015";

            $result = $test_weekDayFinder->findDay($input);

            $this->assertEquals("Thursday", $result);
        }

        /*
        input: 03/12/2016
        output: "Thursday"
        Spec: Enter the date 03/12/2016 because it is one year from now and return the string "Saturday"
        */
        function test_findDay_oneYear() {
            $test_weekDayFinder = new WeekDayFinder;
            $input = "03/12/2016";

            $result = $test_weekDayFinder->findDay($input);

            $this->assertEquals("Saturday", $result);
        }

        /*
        input: 03/12/2014
        output: "Thursday"
        Spec: Enter the date 03/12/2014 because it is one year ago and return the string "Wednesday"
        */
        function test_findDay_oneYearAgo() {
            $test_weekDayFinder = new WeekDayFinder;
            $input = "03/12/2014";

            $result = $test_weekDayFinder->findDay($input);

            $this->assertEquals("Wednesday", $result);
        }
    }
 ?>
