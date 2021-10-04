<?php
session_start();
    include 'conn.php';
?>
<html>
    <head>
        <?php
            mysqli_set_charset($conn, "utf8");
            $questionn=$_POST['questionn'];
            $answer=$_POST['answer'];
            $gang=$_POST['gang'];
            $_SESSION['gang']=$gang;
            $q =  mysqli_query($conn,"select question,answer,gang from question where questionn = '$questionn'");
            $row = mysqli_fetch_assoc($q);
            if(empty($row["questionn"])){
                $r =  mysqli_query($conn,"INSERT INTO `question`(`id`, `questionn`, `answer`, `gang`, `date`) 
                VALUES (DEFAULT,'$questionn','$answer','$gang',DEFAULT);");
               
              echo '<meta http-equiv="Refresh" content="0; url=question.html">;';
              echo '<script>alert("question entered sucessfully")</script>';
            } 
            else{
                echo '<script>alert("question ALREADY PRESENT")</script>';
                echo '<meta http-equiv="Refresh" content="0; url=question.html">;';
            }
        ?>
    </head>
    <body>
    </body>
</html>