<?php

class FilesArray {

    private static $files_list_ = array();

    static function load_()
    {
        self::$files_list_[] = array("school"=>"*", "class"=>"*", "name"=>"important_event_calendar", "uri"=>"../data/2019-20/important-event-calendar-23102019.pdf");
        
        self::$files_list_[] = array("school"=>"*", "class"=>"*", "name"=>"wifi_app_form", "uri"=>"../data/2018-19/WIFIform.pdf");

        self::$files_list_[] = array("school"=>"JSD", "class"=>"*", "name"=>"Termwise_Sports_Events_2019_20", "uri"=>"../data/2019-20/sports-calendar-js-201920-21062019.pdf");

        self::$files_list_[] = array("school"=>"PSD", "class"=>"*", "name"=>"Termwise_Sports_Events_2019_20", "uri"=>"../data/2019-20/sports-calendar-ps-201920-21062019.pdf");

        self::$files_list_[] = array("school"=>"SSD", "class"=>"*", "name"=>"Termwise_Sports_Events_2019_20", "uri"=>"../data/2019-20/sports-calendar-ss-201920-21062019.pdf");
    }

    static function GetUrl($name) {
        
        self::load_();

        $class = $_SESSION['portal_CurrentClass'];
        $school = $_SESSION['portal_School'];
        /*
        echo $name. "<br>";
        echo $class. "<br>";
        echo $school. "<br><br>";
        */

        foreach(self::$files_list_ as $row)
        {

            //echo $row['school']. "<br>";

            if( $row['name'] == $name &&
                ($row['class'] == "*" || $row['class'] == $class) &&
                ($row['school'] == "*" || $row['school'] == $school))
            {

                return $row['uri'];

            }
        }
        
    }


    

}
