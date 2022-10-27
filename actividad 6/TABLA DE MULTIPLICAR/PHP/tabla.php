<!-- 
    JULIAN JESUS BUENROSTRO MARTINEZ
    12/10/2022
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLAS DE MULTIPLICAR</title>
    <link rel="stylesheet" href="estilos.css">
 </head>
    </head>
    <body>   
       
        <?php
        $numero=intval($_POST['numero']);
        
        if ($numero>0){
                    
        echo "<h1>Tabla del "; 
        
           
        echo $numero;
        echo "        </h1>
              <ul>";
            
            for($i=1;$i<=10;$i++){
              if ($i%2==0){ // Es par $i
                echo "<li><span style='color:red'>$numero x $i = ";
                echo $numero*$i;
                echo "</span></li>";                            
              }    //Fin del if
              else{
                echo "<li>$numero x $i = ";
                echo $numero*$i;
                echo "</li>";
              } //Fin del else
            } //Fin del for            
                        
        echo "</ul>";
        }
        else{
            echo "<p>El valor introducido ";
            echo $_POST['numero'];
            echo " no es correcto, debería haber sido un número entero positivo.</p>";
            echo "<p>Variable numero= $numero</p>";
            echo "<p><a href='tabla.html'>Pruebe de nuevo</a></p>";
        }
        ?>
        
    </body>
</head>
</html>