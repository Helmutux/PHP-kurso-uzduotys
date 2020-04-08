<?php 
    session_start(); 

    // logout logic
    if(isset($_GET['action']) and $_GET['action'] == 'logout'){
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['logged_in']);
        print('Logged out!');
    }
?>
<html lang = "en">
   <head>
      <title>Login</title>
   </head>
   <body>
      <h2>Enter Username and Password</h2> 
      <div>
         <?php
            $msg = '';
            if (isset($_POST['login']) 
                && !empty($_POST['username']) 
                && !empty($_POST['password'])
            ) {	
               if ($_POST['username'] == 'Donatas' && 
                  $_POST['password'] == '55555'
                ) {
                  $_SESSION['logged_in'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'Donatas';
                  echo 'You have entered valid use name and password';
               } else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div>
      <div>
        <?php 
            if($_SESSION['logged_in'] == true){
               print('<h1>You can only see this if you are logged in!</h1>');
            }
        ?>
        <form action = "" method = "post">
            <h4><?php echo $msg; ?></h4>
            <input type = "text" name = "username" placeholder = "write username" required autofocus></br>
            <input type = "password" name = "password" placeholder = "write password" required>
            <button type = "submit" name = "login">Login</button>
        </form>
            Click here to <a href = "index.php?action=logout"> logout.
      </div> 
   </body>
</html>