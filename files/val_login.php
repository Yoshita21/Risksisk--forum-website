<?php
    include 'conn.php';
?>
<html>
    <head>
        <?php
            mysqli_set_charset($conn, "utf8");
            $mail=$_POST['email'];
            $pass=$_POST['pass'];
            $_SESSION["mail"] = $mail;
            $_SESSION["pass"] = $pass;
            // $q =  mysqli_query($conn,"select email,password from login");
            $r =  mysqli_query($conn,"select email,password from login where email = '$mail'");
            $flag=0;
                $row = mysqli_fetch_assoc($r);
                if($row["email"]==$mail){
                    $flag=1;
                    if($row["password"]==$pass){   
                        echo '<meta http-equiv="Refresh" content="0; url=welcome.html">;';
                    }
                    else{
                        echo '<script>alert("INVALID PASSWORD")</script>';
                        echo '<meta http-equiv="Refresh" content="0; url=index.php">;';
                    }
                }
                if($flag==0){
                    echo '<script>alert("CREATE ACCOUNT BEFORE LOGGING IN")</script>';
                    echo '<meta http-equiv="Refresh" content="0; url=index.php">;';
                }
        ?>
    </head>
    <body>
    </body>
</html>
