<?php
include 'conn.php';
session_start();?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Wall Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="styleland.css">
</head>
<body>
<!-- partial:index.partial.html -->
<link href='https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700,400italic|Montserrat:400,700|Cardo:400italic|Advent+Pro:100' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- NAVIGATION -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand scroll" href="#home">RISKSISK</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        <li><a href="question.html" class="scroll">Add your Own Question</a></li>
        <li><a href="news.php" class="scroll">News</a></li>
        <li><a href="health.php" class="scroll">Health</a></li>
        <li><a href="household.php" class="scroll">Household</a></li>
        <li><a href="technical.php" class="scroll">Technical</a></li>
        <li><a href="welcome.html" class="scroll">Home</a></li>
      </ul>
      </div>
    </div>
  </nav>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
    $question=$_POST['questionn'];
    $answer=$_POST['answer'];
    $gang=$_SESSION['gang'];
echo '
    <table cellspacing="50" width="100%" align="center">
       <tr> 
        <th style="color:black; font-size:22;font-style:bold;">Question</th>
        <th style="color:black;  font-size:22;">Answer</th>
        <th style="color:black;  font-size:22;">Date</th>
        </tr>
        ';
        
         $q=mysqli_query($conn," SELECT  `questionn`, `answer`,  `date` FROM `question` where gang='health'" );
        

      
        include 'all_print.php';
        
      echo' </table>';
      ?>
    
  
  
  


</body>
</html>