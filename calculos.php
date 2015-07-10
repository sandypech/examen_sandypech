<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="estilos-multi.css">
</head>
<body>
	<?php
		function crearTablas($opcion){
			switch ($opcion) {
				case 'while':
				$a=0;
					while ( $a <= 10) {
						$a++;
						echo "<table id='tabla' border=1>";
							echo "<tr>";
								echo "<td>";
							
						if ($a==1) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}

						if ($a==2) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==3) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==4) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==5) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==6) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==7) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==8) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==9) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==10) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}

						echo "</td>";
							echo "</tr>";
						echo "</table>";






					}
					break;
				
				case 'for':
					for($a=1; $a<=10; $a++){
						echo "<table id='tabla' border=1>";
							echo "<tr>";
								echo "<td>";
							
						if ($a==1) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}

						if ($a==2) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==3) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==4) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==5) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==6) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==7) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==8) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==9) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==10) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						echo "</td>";
							echo "</tr>";
						echo "</table>";

					}
					

					break;
					case 'do while':
					$a=0;
						do{
							$a++;
							echo "<table id='tabla' border=1>";
							echo "<tr>";
								echo "<td>";
							if ($a==1) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==2) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==3) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==4) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==5) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==6) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==7) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==8) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==9) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}
						if ($a==10) {
							$res= $a*1; echo "  $a*1= $res <br />";
							$res= $a*2; echo " $a*2= $res <br />";
							$res= $a*3; echo " $a*3= $res <br />";
							$res= $a*4; echo " $a*4= $res <br />";
							$res= $a*5; echo " $a*5= $res <br />";
							$res= $a*6; echo " $a*6= $res <br />";
							$res= $a*7; echo " $a*7= $res <br />";
							$res= $a*8; echo  "$a*8= $res <br />";
							$res= $a*9; echo " $a*9= $res <br />";
							$res= $a*10; echo "$a*10= $res <br />";
							
						}

							echo "</td>";
							echo "</tr>";
						echo "</table>";
						}while( $a<10);
						

					break;

					}
			}
			$selct=$_POST['a'];
		
crearTablas($selct);
	?>
</body>
</html>