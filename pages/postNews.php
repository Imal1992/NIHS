<?php

    //session_start();  /* Start of the session */
    include ('../backend files/database.php');

    if(isset($_FILES['files']) && isset($_POST['news'])){
        $news = $_POST['news'];
        $errors= array();
        foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
            $file_name = $key.$_FILES['files']['name'][$key];
            $file_size =$_FILES['files']['size'][$key];
            $file_tmp =$_FILES['files']['tmp_name'][$key];
            $file_type=$_FILES['files']['type'][$key];  
            if($file_size > 2097152){
                $errors[]='File size must be less than 2 MB';
            }       
            $query="INSERT into post_news (`File_name`,`File_size`,`File_type`,`News`) VALUES('$file_name','$file_size','$file_type','$news');";
            $desired_dir="postedNews";
            if(empty($errors)==true){
                if(is_dir($desired_dir)==false){
                    mkdir("$desired_dir", 0700);        // Create directory if it does not exist
                }
                if(is_dir("$desired_dir/".$file_name)==false){
                    move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
                }else{                                  // rename the file if another one exist
                    $new_dir="$desired_dir/".$file_name.time();
                     rename($file_tmp,$new_dir) ;               
                }
            $db->query($query);           
            }else{
                    print_r($errors);
            }
        }
        if(empty($errors)){
            echo "Success";
        }
    }
?>