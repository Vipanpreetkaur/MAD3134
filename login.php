<?php
//include('database.php');
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>login</title>
      <link href = "design.css" rel = "stylesheet">
      
   </head>
	
   <body >
      
      <h2>Admin Login</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'admin@123') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'php';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "select.php" method = "post">
            <fieldset>
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <table><tr><th>
            <label for="name">Name</label></th>
           <td> <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" 
               required autofocus></br></td></tr>
         <tr><th>      <label for="password">Password</label></th>
           <td> <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required><br> </td></tr></table>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"  
               name = "login" >Login</button>
            </fieldset>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>