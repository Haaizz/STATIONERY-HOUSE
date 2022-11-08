<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Admin Page</title>
<link rel="stylesheet" href = "register_select.css">
</head>

<body>

   <div class="main">
      <div class="wrapper">
         <div class="header">
            
            <nav>
               
               <ul >
                  <li><a href="#"></a></li>
                  <li><a href="register_select.html">REGISTER</a></li>
                  <li><a href="list_select.html" style="color: blueviolet;">LIST</a></li>
                  <li><a href="search_select.html">SEARCH</a></li>
                

               </ul>
            </nav>
            <div class="overlay">
            <div class="content">
              
               <?php include("header.php");?>

               <h2> Edit a record </h2>

         <?php
         //look for a valid user id, either through GET or POST
         if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
            $id = $_GET['id'];
         } elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
            $id = $_POST['id'];
         } else {
            echo '<p class = "error"> This page has been accesses in error.</p>';
            exit();
         }

         if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $error = array();

            //look for firstname
            if(empty($_POST['FullName_U'])) {
               $error[] = 'You forgot to enter the First Name.';
            } else {
               $n = mysqli_real_escape_string($connect, trim($_POST['FullName_U']));
            }

            //look for lastname
            if(empty($_POST['UserName_U'])) {
               $error[] = 'You forgot to enter the Last Name';
            }  else {
               $l = mysqli_real_escape_string($connect, trim($_POST['UserName_U'])) ;
            }

            //look for Insurance Number
            if (empty($_POST['Phone_U'])) {
               $error [] = 'You forgot to enter the Insurance Number.';
            }  else {
               $in = mysqli_real_escape_string($connect,trim($_POST['Phone_U'])) ;
            }


            //look for Diagnose
            if (empty($_POST['Password_U'])) {
               $error [] = 'You forgot to enter the Diagnose.';
            }  else {
               $d = mysqli_real_escape_string($connect,trim($_POST['Password_U'])) ;
            }


            //if no problem occured
            if(empty($error)) {

               $q = "SELECT ID_U FROM user WHERE Password_U = '$in' AND ID_U != $id";

               $result = @mysqli_query($connect,$q);

               if(mysqli_num_rows($result) == 0) {
                  $q = "UPDATE user SET FullName_U = '$n', UserName_U = '$l', Phone_U = '$in', Password_U = '$d' WHERE ID_U = '$id' LIMIT 1";

                  $result = @mysqli_query($connect,$q);

                  if(mysqli_affected_rows($connect) == 1) {

                     echo '<h3> The user has been edited</h3>';
                  } else {
                     echo '<p class ="error"> The user has no be edited due to the system error.We apologize for any inconvenience.</p>';
                     echo '<p>' .mysqli_error($connect). '<br> query : ' .$q. '</p>';     
                  }

               }  else {
                  echo '<p class = "error"> The no ic has already been registered</p>';
               }
            }  else {
               echo '<p class = "error"> The following error (s) occured : <br>';
               foreach ($error as $msg) 
               {
                  echo " -$msg<br> \n";   
               }
               echo '</p><p> Please try again.</p>';
            }
         }

         $q = "SELECT FullName_U, UserName_U, Phone_U, Password_U FROM user WHERE ID_U = $id";
         $result = @mysqli_query($connect,$q);

         if(mysqli_num_rows($result) == 1) {
            //get patient information
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
            //create the form
            echo '<form action = "edit_customer.php" method = "post">
            <p><label class = "label" for = "FullName_U"> Full Name : </label>
            <input id = "FullName_U" type = "text" name = "FullName_U" size = "30" maxlength = "30" value = "'.$row[0].'"></p>

            <p><label class = "label" for = "UserName_U"> User Name : </label>
            <input id = "UserName_U" type = "text" name = "UserName_U" size = "30" maxlength = "30" value = "'.$row[1].'"></p>

            <p><label class = "label" for = "Phone_U"> Phone Number : </label>
            <input id = "Phone_U" type = "text" name = "Phone_U" size = "30" maxlength = "30" value = "'.$row[2].'"></p>

            <p><label class = "label" for = "Password_U"> Password : </label>
            <input id = "Password_U" type = "text" name = "Password_U" size = "30" maxlength = "30" value = "'.$row[3].'"></p>


            <br><p><input id = "submit" type = "submit" name = "submit" value = "Edit"></p>

            <br><input type = "hidden" name = "id" value = "'.$id.'"/>
            
            </form>';


         } else {
            echo '<p class = "error"> This page has been accessed in error.</p>';
         }

         mysqli_close($connect);

         ?>

            </div>
         </div>
         </div>
      </div>
   </div>
</body>
</html>
