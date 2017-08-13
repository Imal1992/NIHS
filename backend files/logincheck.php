<?php
include('database.php'); /* Import database.php file in to the logincheck.php file.*/
session_start();

$error='';


if (isset($_POST['submit'])){

    if (empty($_POST['Email_address']) || empty($_POST['password'])){ /* Check whether the entered user name or password is empty */
		$error = "Email Address or Password is invalid";

    }
	else {

		$Email_address = $_POST['Email_address'];
		$password = $_POST['password'];
		$password = MD5($password);// create a MD5 hash of the password
//		$Type = $_POST['Type'];

        $query = "SELECT * FROM userdetail WHERE Email_address = '$Email_address'  AND Password = '$password' AND Type = 'user' "; /* Query to select email address and password for relevant user */
        $query1 = "SELECT * FROM userdetail WHERE Email_address = '$Email_address'  AND Password = '$password' AND Type = 'Admin' "; /* Query to select email address and password for relevant user */
        $result = $db->query($query); /* Create the object of the query */
        $result1 = $db->query($query1); /* Create the object of the query */


		$rowcount = mysqli_num_rows($result); /* Take the row count for the relevant object */
		$rowcount1 = mysqli_num_rows($result1); /* Take the row count for the relevant object */

		if($rowcount != 0){

			while($row = mysqli_fetch_assoc($result)){ /* Fetch a result row as an associative array */

				$dbuseremail = $row['Email_address'];
				$dbpassword = crypt($row['Password']);

				$Type  = $row['Type'];
				$dbname = $row['First_name'];
				$_SESSION['username']=$dbname; /* Create a session called username */

				$userid = $row['User_ID'];
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
			header("Location: ../pages/userprofile.php"); /* If the session is true redirect to Aftereg.php page */

		}
		else {
			$error = "Username or Password is invalid for a user"; /* If the entered username or password incorrect print this msg  */
		}

		if ($rowcount1 == 1) {  /* If the rowcount=1 and the type= Admin session username starts */
			$_SESSION['username']=$dbname;

			$_SESSION['adminLoggedIn'] = true;
			header("Location: ../pages/adminpanel.php");  /* If the session is true, redirect to adminPanel.php page */

		}


		else {
			$error = "Username or Password is invalid for a admin"; /* If the entered username or password incorrect print this msg  */
		}
		$result->free();
        $error = "<b>Username and Password do not match</b><br/>";  /* If the entered username or password mismatched print this msg  */
    }
}
?>