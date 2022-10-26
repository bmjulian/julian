<!-- JULIAN JESUS BUENROSTRO MARINEZ 5PM
5/10/22 -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVIDAD 4</title>
</head>
<body>
    
    <h1 id="samu">soy una simple pagina111 =( =(</h1>
    <button id="btrojo" style="background-color:red;" onmouseover="rojo()"> Red</button>
    <button id="btazul" style="background-color:blue;" onmouseover="azul()">Blue</button>
    <button id="btnegro" style="background-color:negro;" onmouseover="negro()">Black</button>

    <script>
        function rojo(){
            //alert("a weno soy rojo jsjsjs");
            document.getElementById("samu").style.backgroundColor ="red";

        }
        function azul(){
            //alert("aweno doy azul");
            document.getElementById("samu").style.backgroundColor ="blue";

        }
        function negro(){
            //alert("a weno soy negro xd");
            document.getElementById("samu").style.backgroundColor ="black";
        }

        
    </script>
</body>
</html>