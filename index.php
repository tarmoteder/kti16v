<!doctype html>

<html>
<head>
<title>KIT16V</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
</head>

<body>

<h1>Lehe pealkiri</h1>

<p><strong>Minu esimene veebileht</strong></p>

<p>Veel teksti</p>

<a href="http://google.com">Google</a>
<br>
<?php
// lisame allika
include "functions.php";
back_home();
//string
$greetnig = "<p>Meie esimene PHP skript</p>";
//integer
$nr = 5;
$nr2 = 8;
//float
$nr3 = 10.18;
$nr4 = 9.08;

echo $greetnig."<br>";

echo $nr+$nr2.'<br>' ;

echo "Esimene on $nr3 lahutame $nr4. <br>";
// ujukoma
echo $nr3-$nr4."<br>";

vremja();
?>

<img src="cat-300572_960_720.jpg">

</body>



</html>
