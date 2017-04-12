<?php session_start();?>  <!-- Start the session -->

<?php

	include('database.php'); /* include the file database.php */

	$Type = "user";
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$nur_id = $_POST['nur_id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = MD5($password);
	$password_confirmation = $_POST['password_confirmation'];

	$query1 = "SELECT * FROM userdetail WHERE Email_address = '{$email}'"; /* query to find the details of user where the the email address is given */

	$result1=$db->query($query1);

	$nur_id_unique=True;

	//$result=$db->query($query3);

	if(mysqli_num_rows($result1)==0){ /* Take the rowcount of the result */
		if($nur_id_unique){
		    if($password == $password_confirmation){
                $query3 = "INSERT INTO userdetail ( Type, First_name, Last_name, Nur_id, Email_address, Password)
                  VALUES ( '{$Type}', '{$fname}', '{$lname}', '{$nur_id}', '{$email}', '{$password}')";
                $result=$db->query($query3);  /* Insert in to the table called userdetail */
            }
            else{
                echo "Passwords do not match";
            }
                $query4 = "SELECT User_ID FROM UserDetail WHERE Email_address = '{$email}'";
                $result4=$db->query($query4);
                while($row = mysqli_fetch_assoc($result4)){ /* Fetch a result row as an associative array */
                    $User_ID = $row['User_ID'];
                }

                header('Location: ../pages/signin.php');

		}
		else{
			echo "failed, Nursing id is already exsits ";
		}
	}
	else{
		echo "failed, Email address is already exsits ";
	}


?>
<?php

$db->mysqli_close();
?>