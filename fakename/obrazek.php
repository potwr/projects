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

for($a = 1; $a <= 5; $a++)
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

<style>
.wiersz {
	height: 50px;
	width: 300px;
	margin: auto;
}

.komorka {
	width: 50px;
	height: 50px;
	float: left;
}
</style>