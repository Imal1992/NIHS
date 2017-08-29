<?php

    //session_start();  /* Start of the session */
    include ('../backend files/database.php');

    if(isset($_POST['event']) && isset($_POST['eventdate'])){

        $event = $_POST['event'];
        $eventdate = $_POST['eventdate'];
        //$eventdate = date('Y-m-d H:i:s');        
        $errors= array();
        
        $query="INSERT into add_event (`Event_details`,`Event_date`) VALUES('$event','$eventdate');";

        if(empty($errors)==true){                
            $db->query($query);           
        }else{
            print_r($errors);
        }
        if(empty($errors)){
            echo "Success";
        }
    }
?>