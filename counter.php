<?php

    session_start();

    function check_file($file_name , $def_val){

        if(!file_exists($file_name))
        {
            $file = fopen($file_name , "w");
            fwrite($file , $def_val);
            fclose($file);
        }
    }

    function incre_counter( $file_name){
        $file = fopen($file_name , "r");
        $counter = (int)fgets($file);;
        $counter++;
        fclose($file);
        $file = fopen($file_name , "w");
        fwrite($file , (string)$counter);
        fclose($file);
        
    }
    

    check_file("/home/pramodh/counters/counter_uniq.txt" , "0");
    check_file("/home/pramodh/counters/counter_visits.txt" , "0");

    if(!isset($_SESSION['hasVisited']))
    {
        $_SESSION['hasVisited'] = "YES";
        incre_counter("/home/pramodh/counters/counter_visits.txt");
        incre_counter("/home/pramodh/counters/counter_uniq.txt");
    }
    
    else{
            incre_counter("/home/pramodh/counters/counter_visits.txt");
    }



?>
