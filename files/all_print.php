<?php
if($q)
{
while($row=mysqli_fetch_assoc($q)){
    echo '<tr>';
    foreach($row as $value){
        echo '<td>'.$value.'</td>';
    }
    echo ' </tr>';
}
}
else 
{
    echo '<script>alert("INVALID PASSWORD")</script>';
}
?>
<html>
    <head>
    <style>
            td{
                font-size:20px;
                color:#000062;
                white-space:pre-line;
                height:70;
                width=50;
            }
            </style>
            </head>
            </html>