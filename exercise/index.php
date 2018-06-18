<!DOCTYPE html>
<html>
	<head>
		<title>Day 1</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<body>
			<div class="all">
				<?php
				$name = 'sameh shahin' ;
				$day = 1 ;
				echo "<h1 class= \"middle\"> Exercise 1:" ;
				echo "  $name, day nr $day  ";
				echo '</h1>';
				?>
				<hr>
				<?php
				echo "<h1 class= \"date\"> Exercise 2: " ;
				$monthd=date("d");
				$weekd=date("D");
				if ($weekd == "mon")
				echo " have a nice monday haha";
				else
				echo " have a nice day";
				echo "<br>";
				if ( $monthd <= 05)
				echo "month is starting";
				elseif ($monthd <= 25)
				echo " the month is ending hang in thier ";
				else
				echo "work work work work";
				echo '</h1>';
				
				?>
				<hr>
				<?php
				echo "<h1 class= \"date\"> Exercise 3:  " ;
				$d=date("D");
				if ($d == "Mon")
				echo " have a nice monday haha";
				elseif ($d == "Tue")
				echo " daa! Today is Tuesday!";
				elseif ($d == "Wed")
				echo "daa! Today is Wednesday!";
				elseif ($d == "Thu")
				echo "daa! Today is Thursday!";
				elseif ($d == "Fri")
				echo "daa! Today is Friday!";
				elseif ($d == "Sat")
				echo "daa! Today is Saturday!";
				elseif ($d == "Sun")
				echo "daa! Today is Sunday!" ;
				echo '</h1>';
				
				?>
				<hr>
				<?php
				echo "<h1 class= \"loop\"> Exercise 4:  for " ;
				for ( $i=0 ; $i<50 ;$i++ )
				{
					echo '<br>';
					global $name ;
					echo $i ,"-", $name ;
				}
				echo '<br>';
				echo '<br>';
				echo '</h1>';


				echo "<h1 class= \"loop\">  Exercise 4:  while " ;
				$s = 0 ;
				while ($s < 50) {
				echo "<br> " ;
					global $name ;
					echo $s ,"-", $name ;
					$s++ ;
				}
				echo "<br> " ;
				echo '</h1>';
				echo " <h1 class= \"loop\"> Exercise 4: do while " ;
				$n = 0;
				do  {
				echo "<br> " ;
					global $name ;
					echo $s ,"-", $name ;
					$n++ ;
				}
				while ($n < 50);
				echo '</h1>';
				?>
				<hr>

				<?php 
				echo " <h1 class= \"foreach\"> Exercise 5: for each " ;

				$test = array (6,5,4,3,2,1);

				foreach ($test as $value) {
    			echo  ".. " ,$value ;
				}



				echo '</h1>';

				?>

				<?php 
				echo " <h1 class=\"array\"> Exercise 6: array " ;
					echo "<br>";
				$tv = array (
				"cartoon" => "Mickey Mouse" ,
				"games" => "mario",
				"anime" => "guko"
				);
				echo "manual output " , $tv["cartoon"],"<br>" ;
				echo "for each output";
 				foreach ($tv as $value) {
    			echo  "<br>" ,$value ;
				}
				echo "<br><br>";
				echo "2d array <br>" ;
				$tv2 = array(
					"tv" => array(
						'old' =>"Mickey Mouse",
				        "new" => "guko" ),

				 "games" => array(
				 	"old" =>"mario",
				 	"new" =>"super mario"
				 )
			);
				echo "manual output " , $tv2["tv"]["old"],"<br><br>" ;
				echo " loop:  <br>";
				
					$last = count($tv2) - 1;
					foreach ($tv2 as $i => $row) {
						 $isFirst = ($i == 0);
   						 $isLast = ($i == $last);
   						 echo  $row['old'] ,"<br>", $row['new'];
   						 echo "<br>";
					}

				echo '</h1>';

				?>
				

			</div>
			
		</body>
	</html>