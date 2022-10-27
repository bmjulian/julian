<!-- 
    JULIAN JESUS BUENROSTRO MARTINEZ 5PM
    26/10/22
 --> 
 <?php
 $edad=$_GET['edad'];
 if(isset($_GET['edad'])){
    $vividos=$edad*365;
    echo"<h3> Los dias vividos son $vividos</h3> ";
 }
 ?>