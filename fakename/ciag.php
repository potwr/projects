<?php
function capitalized()
{
	switch(rand(1, 23))
	{
	case 1:
	echo 'A';
	break;
	
	case 2:
	echo 'B';
	break;
	
	case 3:
	echo 'C';
	break;
	
	case 4:
	echo 'D';
	break;
	
	case 5:
	echo 'E';
	break;
	
	case 6:
	echo 'F';
	break;
	
	case 7:
	echo 'G';
	break;
	
	case 8:
	echo 'H';
	break;
	
	case 9:
	echo 'I';
	break;
	
	case 10:
	echo 'J';
	break;
	
	case 11:
	echo 'K';
	break;
	
	case 12:
	echo 'L';
	break;
	
	case 13:
	echo 'M';
	break;
	
	case 14:
	echo 'N';
	break;
	
	case 15:
	echo 'O';
	break;
	
	case 16:
	echo 'P';
	break;
	
	case 17:
	echo 'R';
	break;
	
	case 18:
	echo 'S';
	break;
	
	case 19:
	echo 'T';
	break;
	
	case 20:
	echo 'U';
	break;
	
	case 21:
	echo 'W';
	break;
	
	case 22:
	echo 'Y';
	break;
	
	case 23:
	echo 'Z';
	break;
	}
}

function randomletter()
{
	switch(rand(1, 23))
	{
		case 1:
		echo 'a';
		break;
	
		case 2:
		echo 'b';
		break;
	
		case 3:
		echo 'c';
		break;
	
		case 4:
		echo 'd';
		break;
		
		case 5:
		echo 'e';
		break;
	
		case 6:
		echo 'f';
		break;
	
		case 7:
		echo 'g';
		break;
	
		case 8:
		echo 'h';
		break;
	
		case 9:
		echo 'i';
		break;
	
		case 10:
		echo 'j';
		break;
	
		case 11:
		echo 'k';
		break;
	
		case 12:
		echo 'l';
		break;
	
		case 13:
		echo 'm';
		break;
	
		case 14:
		echo 'n';
		break;
	
		case 15:
		echo 'o';
		break;
	
		case 16:
		echo 'p';
		break;
	
		case 17:
		echo 'r';
		break;

		case 18:
		echo 's';
		break;
	
		case 19:
		echo 't';
		break;
	
		case 20:
		echo 'u';
		break;
	
		case 21:
		echo 'w';
		break;
	
		case 22:
		echo 'y';
		break;
	
		case 23:
		echo 'z';
		break;
	}
}

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

/*DZIAŁY*/
$dzial[0] = 'wiadomości z Polski';
$dzial[1] = 'wiadomości ze świata';
$dzial[2] = 'pogoda';
$dzial[3] = 'gry';
$dzial[4] = 'sport';
$dzial[4] = 'finanse';
$dzial[5] = 'technologia';
$dzial[6] = 'motoryzacja';
$dzial[7] = 'muzyka';
$dzial[8] = 'film';
$dzial[9] = 'z ostatniej chwili';
$dzial[10] = 'rozrywka';
$dzial[11] = 'zdrowie';
$dzial[12] = 'turystyka';

?>
<div class="artykul">
<?php
echo '<div class="naglowek"><div class="dzial">'.$dzial[rand(0, 12)].'</div>';

echo '<div class="data">'.date("d").' ';
switch(date("F"))
{
	case 'January':
	echo 'stycznia';
	break;
	
	case 'February':
	echo 'lutego';
	break;
	
	case 'March':
	echo 'marca';
	break;
	
	case 'April':
	echo 'kwietnia';
	break;
	
	case 'May':
	echo 'maja';
	break;
	
	case 'June':
	echo 'czerwca';
	break;
	
	case 'July':
	echo 'lipca';
	break;
	
	case 'August':
	echo 'sierpnia';
	break;
	
	case 'September':
	echo 'września';
	break;
	
	case 'October':
	echo 'października';
	break;
	
	case 'November':
	echo 'listopada';
	break;
	
	case 'December':
	echo 'grudnia';
	break;
}

echo ' '.date("Y, H:i").'</div></div>';
/*TYTUŁ*/
echo '<h1>';
$l_wyrazow2 = rand(3, 10);
	for($c=1; $c<=$l_wyrazow2; $c++)
	{
	/*JEDEN WYRAZ*/
	$l_znakow2 = rand(3, 10);
	for($d=1; $d<=$l_znakow2; $d++)
	{
		if($d == 1)
		{
			if($c == 1)
			{
				capitalized();
			}
			else
			{
				randomletter();
			}
		}
		else
		{
			randomletter();
		}
	}
	if($c < $l_wyrazow2)
	{
		$przecinek_wtyt = rand(1, 5);
		if($przecinek_wtyt == 1)
		{
			echo ',';
		}
		echo ' ';
	}
}
echo '</h1>';
?>
<div class="podpis">Adrian Kędzierski</div>
<?php
/*JEDEN AKAPIT*/
echo '<p class="lead">';
$l_zdan = rand(1, 4);
for($b=1; $b<=$l_zdan; $b++)
{
	/*JEDNO ZDANIE*/
	$l_wyrazow = rand(5, 10);
	for($c=1; $c<=$l_wyrazow; $c++)
	{
		/*JEDEN WYRAZ*/
		$l_znakow = rand(3, 13);
		for($d=1; $d<=$l_znakow; $d++)
		{
			if($d == 1)
			{
				if($c == 1)
				{
					capitalized();
				}
				else{
					randomletter();
				}
			}
			else
			{
				randomletter();
			}
		}
		if($c<$l_wyrazow)
		{
			$przecinek = $l_wyrazow-2;
			if($c <= $przecinek)
			{
				if(rand(1, 5) == 1)
				{
					echo ',';
				}
			}
			echo ' ';
		}
	}
	echo '. ';
}
?>
<div class="obrazek">
<?php
/*OBRAZEK*/
for($a = 1; $a <= 2; $a++)
{
	echo '<div class="wiersz">';
	for($b = 1; $b <= 5; $b++)
	{
		echo '<div class="komorka" style="background-color: #';
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

<?php
/*CAŁY TEKST*/
$l_akapitow = rand(3, 10);
for($a=1; $a<=$l_akapitow; $a++)
{
	/*JEDEN AKAPIT*/
	if($a == 1)
	{
		echo '<p class="paragrafp">';
	}
	else
	{
		echo '<p class="paragraf">';
	}
	$l_zdan = rand(2, 20);
	for($b=1; $b<=$l_zdan; $b++)
	{
		/*JEDNO ZDANIE*/
		$l_wyrazow = rand(3, 10);
		for($c=1; $c<=$l_wyrazow; $c++)
		{
			/*JEDEN WYRAZ*/
			$l_znakow = rand(3,13);
			for($d=1; $d<=$l_znakow; $d++)
			{
				if($d == 1)
				{
					if($c == 1)
					{
						capitalized();
					}
					else{
						randomletter();
					}
				}
				else
				{
					randomletter();
				}
			}
			if($c<$l_wyrazow)
			{
				$przecinek = $l_wyrazow-2;
				if($c <= $przecinek)
				{
					if(rand(1, 5) == 1)
					{
						echo ',';
					}
				}
				echo ' ';
			}
		}
		echo '. ';
	}
}
?>
</div>
<style>
body {
	margin: auto;
	width: 500px;
	font-family: Georgia;
	color: #404040;
	background-color: #<?php for($z = 1; $z <= 6; $z++){color();}?>;
}

.lead {
	font-weight: bold;
	text-align: justify;
	font-size: 16px;
	margin-top: 0px;
}

.artykul {
	width: 500px;
	padding-top: 20px;
	padding-bottom: 20px;
	padding-left: 30px;
	padding-right: 30px;
	margin: 0px;
	background-color: #fff;
}

.paragrafp:first-letter {
	font-size: 45px;
	float: left;
	font-weight: 900;
	margin-right: 5px;
	padding-left: 3px;
	padding-right: 3px;
	color: #fff;
	background-color: #404040;
}

.paragrafp {
	text-indent: 0px;
	text-align: justify;
	font-size: 15px;
}

.paragraf {
	text-indent: 40px;
	text-align: justify;
	font-size: 15px;
}

h1 {
	margin-bottom: 0px;
	margin-top: 5px;
	text-align: justify;
}

.dzial {
	float: left;
	text-transform: uppercase;
	font-size: 13px;
	font-family: Segoe UI;
	color: #000;
	padding-right: 5px;
	margin-right: 5px;
	border-right: 1px solid grey;
}

.data {
	font-size: 13px;
	font-family: Segoe UI;
	color: grey;
	float: left;
	margin: 0px;
	padding: 0px;
}

.naglowek {
	width: 600px;
	float: none;
	height: 13px;
	margin-bottom: 10px;
}

.podpis {
	font-size: 12px;
	text-indent: 20px;
	color: grey;
	margin-bottom: 10px;
	margin-top: 10px;
}

.obrazek {
	width: 500px;
	height: 200px;
	margin: auto;
}

.wiersz {
	height: 100px;
	width: 600px;
}

.komorka {
	width: 100px;
	height: 100px;
	float: left;
}
</style>	