<html>
<body>
<form method="POST" action="3.php">
<input type="submit" name="buton1" value="İsim">  <!-- Buton -->
<input type="image" name="buton2" value="Soyisim"> <!-- Resim -->
</form>
<?php
$a=0;
function Sayac1(){
	$a +=1;
    echo "Ferhat";
}
function Sayac2(){
    echo "Akbulut";
}
if(isset($_POST["buton1"])==1 && $_POST["buton1"]=="İsim"){  //Butona tıklayınca
 Sayac1();
}
if(isset($_POST["buton2"])){   // Resme tılayonca
 Sayac2();
}

?>

</body>
</html>