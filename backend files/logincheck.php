<?php
session_start();
include ('database.php'); /* Import database.php file in to the logincheck.php file.*/

$error='';


if (isset($_POST['submit'])){

    if (empty($_POST['Nur_id']) || empty($_POST['password'])){ /* Check whether the entered user name or password is empty */
		$error = "Nursing ID or Password is invalid";

    }
	else {

		$nur_id = $_POST['Nur_id'];
		$password = $_POST['password'];
		$password = MD5($password);// create an MD5 hash of the password
//		$Type = $_POST['Type'];

        $query = "SELECT * FROM userdetail WHERE Nur_id = '{$nur_id}'  AND Password = '{$password}' AND Type != 'some' "; /* Query to select email address and password for relevant user */
        $result = $db->query($query); /* Create the object of the query */


		$rowcount=mysqli_num_rows($result); /* Take the row count for the relevant object */

		if($rowcount !=0){

			while($row = mysqli_fetch_assoc($result)){ /* Fetch a result row as an associative array */

				$dbusernurid = $row['Nur_id'];
				$dbpassword = $row['Password'];
				$Type  = $row['Type'];
				$dbname = $row['First_name'];
				$_SESSION['username']=$dbname; /* Create a session called username */

				$userid = $row['id'];
				$_SESSION['usrid']=$userid; /* Create a session called usrid */

			}

		}

        if ($rowcount === false) {

            echo "Could not successfully run query ($query) from DB: " . mysqli_error();
            exit;
        }

        if ($rowcount == 1 && $Type == 'user') { /* If the rowcount=1 and the type= consumer session username starts */
			$_SESSION['username']=$dbname;

			$_SESSION['isLoggedIn'] = true;
			header("Location: ../pages/userprofile.html"); /* If the session is true redirect to Aftereg.php page */

		}

		else if ($rowcount == 1 && $Type == 'Admin') {  /* If the rowcount=1 and the type= Admin session username starts */
			$_SESSION['username']=$dbname;

			$_SESSION['adminLoggedIn'] = true;
			header("Location: ../pages/adminpanel.html");  /* If the session is true, redirect to adminPanel.php page */

		}


		else {
			$error = "Username or Password is invalid for a user"; /* If the entered username or password incorrect print this msg  */
		}
		$result->free();
        $error = "<b>Username and Password do not match</b><br/>";  /* If the entered username or password mismatched print this msg  */
    }
}
?>