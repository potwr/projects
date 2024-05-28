<div class="strona">
<h1 class="tytul">FAKE NAME GENERATOR</h1>
<div class="zdjecie">
<?php
function color()
{
	$color = rand(0, 15);
	switch($color)
	{
		case 10:
		echo 'A';
		break;
		
		case 11:
		echo 'B';
		break;
		
		case 12:
		echo 'C';
		break;
		
		case 13:
		echo 'D';
		break;
		
		case 14:
		echo 'E';
		break;
		
		case 15:
		echo 'F';
		break;
		
		default:
		echo $color;
		break;
	}
}

for($a = 1; $a <= 3; $a++)
{
	echo '<div class="kwadrat">';
	for($b = 1; $b <= 3; $b++)
	{
		echo '<div class="kwadrat" style="background-color: #';
		for($c = 1; $c <= 6; $c++)
		{
			color();
		}
		echo ';"></div>';
	}
	echo '</div>';
}
?>
</div>
<div class="komorka">
<?php
$imie_f = file("imiona-f.txt");
$nazwisko_f = file("nazwiska-f.txt");
$ulica = file("ulice.txt");
$miasto = file("miasta.txt");

echo '<font class="nazwisko">'.$imie_f[rand(0, 49)].' '.$nazwisko_f[rand(0, 4999)].'<br></font>';
echo $ulica[rand(0, 2833)];
echo rand(1, 140);
if(rand(1, 7) < 7)
{
	echo '/'.rand(1, 18);
}
echo '<br>';
$kod_2 = rand(0, 85);
$kod_3 = rand(001, 550);

if($kod_2 < 10)
	echo '0'.$kod_2.'-';
else
	echo $kod_2.'-';

if($kod_3 < 10)
	echo '00'.$kod_3;
elseif($kod_3 < 100)
	echo '0'.$kod_3;
else
	echo $kod_3;

$numermiasta = rand(0, 922);
echo ' '.$miasto[$numermiasta].'<br>województwo ';

if($numermiasta < 91)
	echo 'dolnośląskie';
elseif($numermiasta < 143)
	echo 'kujawsko-pomorskie';
elseif($numermiasta < 190)
	echo 'lubelskie';
elseif($numermiasta < 232)
	echo 'lubuskie';
elseif($numermiasta < 276)
	echo 'łódzkie';
elseif($numermiasta < 337)
	echo 'małopolskie';
elseif($numermiasta < 423)
	echo 'mazowieckie';
elseif($numermiasta < 458)
	echo 'opolskie';
elseif($numermiasta < 509)
	echo 'podkarpackie';
elseif($numermiasta < 549)
	echo 'podlaskie';
elseif($numermiasta < 591)
	echo 'pomorskie';
elseif($numermiasta < 662)
	echo 'śląskie';
elseif($numermiasta < 695)
	echo 'świętokrzyskie';
elseif($numermiasta < 744)
	echo 'warmińsko-mazurskie';
elseif($numermiasta < 857)
	echo 'wielkopolskie';
else
	echo 'zachodniopomorskie';

echo '<br>telefon: ';
$num1 = rand(0, 999);
$num2 = rand(0, 999);
$num3 = rand(0, 999);

if($num1 < 10)
	echo '00'.$num1.' ';
elseif($num1 < 100)
	echo '0'.$num1.' ';
else
	echo $num1.' ';

if($num2 < 10)
	echo '00'.$num2.' ';
elseif($num2 < 100)
	echo '0'.$num2.' ';
else
	echo $num2.' ';

if($num3 < 10)
	echo '00'.$num3;
elseif($num3 < 100)
	echo '0'.$num3;
else
	echo $num3;

echo '<br>data urodzenia: ';
$miesiac = rand(1, 12);
if($miesiac == 1 || $miesiac == 3 || $miesiac == 5 || $miesiac == 7 || $miesiac == 8 || $miesiac == 10 || $miesiac == 12)
	$dzien = rand(1,31);
elseif($miesiac == 2)
	$dzien = rand(1,28);
else
	$dzien = rand(1,30);

if($dzien < 10)
	echo '0'.$dzien.'.';
else
	echo $dzien.'.';

if($miesiac < 10)
	echo '0'.$miesiac.'.';
else
	echo $miesiac.'.';

echo rand(1950,2000).' r.';
	
?>
</div>
<div class="zdjecie">
<?php
for($d = 1; $d <= 3; $d++)
{
	echo '<div class="kwadrat">';
	for($e = 1; $e <= 3; $e++)
	{
		echo '<div class="kwadrat" style="background-color: #';
		for($f = 1; $f <= 6; $f++)
		{
			color();
		}
		echo ';"></div>';
	}
	echo '</div>';
}
?>
</div>
<div class="komorka">
<?php
$imie_m = file("imiona-m.txt");
$nazwisko_m = file("nazwiska-m.txt");
$ulica = file("ulice.txt");
$miasto = file("miasta.txt");

echo '<font class="nazwisko">'.$imie_m[rand(0, 49)].' '.$nazwisko_m[rand(0, 4999)].'<br></font>';
echo $ulica[rand(0, 2833)];
echo rand(1, 140);
if(rand(1, 7) < 7)
{
	echo '/'.rand(1, 18);
}
echo '<br>';
$kod_2 = rand(0, 85);
$kod_3 = rand(001, 550);

if($kod_2 < 10)
	echo '0'.$kod_2.'-';
else
	echo $kod_2.'-';

if($kod_3 < 10)
	echo '00'.$kod_3;
elseif($kod_3 < 100)
	echo '0'.$kod_3;
else
	echo $kod_3;

$numermiasta = rand(0, 922);
echo ' '.$miasto[$numermiasta].'<br>województwo ';

if($numermiasta < 91)
	echo 'dolnośląskie';
elseif($numermiasta < 143)
	echo 'kujawsko-pomorskie';
elseif($numermiasta < 190)
	echo 'lubelskie';
elseif($numermiasta < 232)
	echo 'lubuskie';
elseif($numermiasta < 276)
	echo 'łódzkie';
elseif($numermiasta < 337)
	echo 'małopolskie';
elseif($numermiasta < 423)
	echo 'mazowieckie';
elseif($numermiasta < 458)
	echo 'opolskie';
elseif($numermiasta < 509)
	echo 'podkarpackie';
elseif($numermiasta < 549)
	echo 'podlaskie';
elseif($numermiasta < 591)
	echo 'pomorskie';
elseif($numermiasta < 662)
	echo 'śląskie';
elseif($numermiasta < 695)
	echo 'świętokrzyskie';
elseif($numermiasta < 744)
	echo 'warmińsko-mazurskie';
elseif($numermiasta < 857)
	echo 'wielkopolskie';
else
	echo 'zachodniopomorskie';

echo '<br>telefon ';
$num1 = rand(0, 999);
$num2 = rand(0, 999);
$num3 = rand(0, 999);

if($num1 < 10)
	echo '00'.$num1.' ';
elseif($num1 < 100)
	echo '0'.$num1.' ';
else
	echo $num1.' ';

if($num2 < 10)
	echo '00'.$num2.' ';
elseif($num2 < 100)
	echo '0'.$num2.' ';
else
	echo $num2.' ';

if($num3 < 10)
	echo '00'.$num3;
elseif($num3 < 100)
	echo '0'.$num3;
else
	echo $num3;
?>
</div>
</div>

<style>
body {
	font-family: Helvetica;
	background-color: #dedede;
	font-size: 14px;
}
	
.komorka {
	width: 240px;
	float: left;
	margin-left: 10px;
}

.zdjecie {
	width: 90px;
	float: left;
}

table {
	margin: auto;
}

.strona {
	width: 680px;
	margin: auto;
	background-color: #fff;
	overflow: auto;
	padding: 10px;
	margin-bottom: 20px;
}

.nazwisko {
	font-weight: bold;
	font-size: 20px;
}

.tytul {
	font-family: Calibri Light;
	font-size: 60px;
	color: #000;
	font-weight: 100;
	margin: 0px;
	margin-bottom: 10px;
}

.wiersz {
	height: 30px;
	width: 90px;
	margin: auto;
}

.kwadrat {
	width: 30px;
	height: 30px;
	float: left;
}
</style>