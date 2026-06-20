<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
</head>
<body>
    <h1>Practicando codigo php</h1>
    <br>
    <?php
    echo "Hola Mundo";
    ?>
    <br>
    <?php
    $bienvenida ="Hola mundooo";

    echo $bienvenida;
    ?>
    <br>
    <h3> Dos valores (a=3000 y b=3500) y 5 formas de calcularlos:</h3>
    <?php

    $pipo = 3000;
    $marta = 3500;


    $suma= $pipo+ $marta;
     $resta= $marta- $pipo;
    $multiplicaciòn=$pipo* $marta;
    $divisiòn=$marta/ $pipo;
    $resto=$pipo% $marta;
    
   
   
   echo "Los sumamos:".$suma. "<br>";
   
   echo"Los restamos:".$resta. "<br>";
   
   echo " Los multiplicamos:".$multiplicaciòn. "<br>";
   
   echo " Los dividimos:".$divisiòn. "<br>";
   
   echo "Resultado de resto:" .$resto. "<br>";
    
    ?>
    <?php
    $celsius = 20;
    $fahrenheit= ($celsius* 1.8)+32;

    echo $celsius. " ºC convertido a ºF=".$fahrenheit. "<br>";
    ?>
    <h2>Calculo en base a un rectangulo cuya base es de 18 y altura 12:</h2>
    <?php
    $base= 18;
    $altura = 12;
    $perimetro= 2* ($base * $altura);
    $area= $base*$altura;

    echo " Perìmetro del rectangulo=".$perimetro. "<br>";

    echo " Area del rectangulo=".$area. "<br>";

    ?>
    <h2> Calculo en base a un circulo cuyo radio es de 30</h2>
    <?php
    $radio=30;
    $perimetro=2*pi()*$radio;
    echo "perimetro=".$perimetro."<br>";
    $areac= pi()* pow($radio,2);
    echo "area=".$areac."<br>";
    ?>

</body>    
</html>