<?php
    include 'conn.php';
?>
<html>
    <head>
        <?php
            mysqli_set_charset($conn, "utf8");
            $mail=$_POST['email'];
            $pass=$_POST['pass'];
            $fname=$_POST['first_name'];
            $lname=$_POST['last_name'];
            $q =  mysqli_query($conn,"select email,password from login where email = '$mail'");
            $row = mysqli_fetch_assoc($q);
            if(empty($row["email"])){
                $r =  mysqli_query($conn,"INSERT INTO `login` (`first_name`, `last_name`, `email`, `password`)
             VALUES ('$fname', '$lname', '$mail', '$pass');");
              echo '<meta http-equiv="Refresh" content="0; url=welcome.html">;';
            } 
            else{
                echo '<script>alert("ACCOUNT ALREADY PRESENT")</script>';
                echo '<meta http-equiv="Refresh" content="0; url=index.php">;';
            }
        ?>
    </head>
    <body>
    </body>
</html>