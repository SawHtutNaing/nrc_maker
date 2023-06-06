

<?php 

    $hostname = "localhost";
        $username = 'sawhtut';
        $password = "sawhtut";
        $database ='nrc';
        
        $auth = mysqli_connect($hostname, $username , $password , $database);
      $GLOBALS['auth'] = $auth;