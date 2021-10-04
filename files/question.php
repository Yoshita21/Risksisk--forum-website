<!DOCTYPE html>
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

                <li><a href="#home" class="scroll">Add your Own Question</a></li>
                <li><a href="news.php" class="scroll">News</a></li>
                <li><a href="health.html" class="scroll">Health</a></li>
                <li><a href="household.html" class="scroll">Household</a></li>
                <li><a href="technical.html" class="scroll">Technical</a></li>
                <li><a href="welcome.html" class="scroll">Home</a></li>
      </ul>
      </div>
    </div>
  </nav>
    
    
  <div id="home" class="content-section">
    <div class="container">
      <div class="row">
        
          <h1><br>Add your Own Question<br></h1>
          <form action="qc.php" method="post">
                <textarea style="color:black;font-size:26px;"placeholder="Question" name="questionn" rows=12 cols=90></textarea><br>
                <textarea style="color:black;font-size:26px;" placeholder="Answer" name="answer" rows=12 cols=90></textarea><br>
                <input type="radio" name="gang" value="news">NEWS
                <input type="radio" name="gang" value="health">HEALTH
                <input type="radio" name="gang" value="household">HOUSEHOLD 
                <input type="radio" name="gang" value="technical">TECHNICAL   
                <button>Submit</button>          
          </form>
       </div>
     </div>
   </div>

</body>
</html>