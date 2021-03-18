<?php

//	Команды
	$team = group_b();


//	Результирующие несортированные данные
/* 	$stat = array();
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];
	$stat[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0]; */

	$stat = init(13);

//	Матчи, счет
 	$match = array();
	$match[] = ["rnd"=>1, "name1"=>'Нікополь', "name2"=>'Металург',"sc1"=>0,"sc2"=>3];
	$match[] = ["rnd"=>1, "name1"=>'Дніпро', "name2"=>'Метал',"sc1"=>0,"sc2"=>4];
	$match[] = ["rnd"=>1, "name1"=>'Реал Фарма', "name2"=>'Кривбас',"sc1"=>0,"sc2"=>1];
	$match[] = ["rnd"=>1, "name1"=>'Перемога', "name2"=>'Балкани',"sc1"=>0,"sc2"=>0];
	$match[] = ["rnd"=>1, "name1"=>'Миколаїв-2', "name2"=>'Енергія',"sc1"=>1,"sc2"=>2];
	$match[] = ["rnd"=>1, "name1"=>'Таврія Сімферополь', "name2"=>'Яруд',"sc1"=>1,"sc2"=>1];

//	Обработка результатов
	foreach($match as $mt){
		$i1 = array_search($mt['name1'], $team);
		$i2 = array_search($mt['name2'], $team);
		if($i1 === false || $i2 === false)
			continue;
		if($mt['sc1'] === null || $mt['sc2'] === null)
			continue;
		$stat[$i1]['game']++;
		$stat[$i2]['game']++;
		if($mt["sc1"] > $mt["sc2"]){
			$stat[$i1]['win']++;
			$stat[$i2]['defeat']++;
			$stat[$i1]['point'] += 3;
		}
		elseif($mt["sc1"] < $mt["sc2"]){
			$stat[$i1]['defeat']++;
			$stat[$i2]['win']++;
			$stat[$i2]['point'] += 3;			
		}
		else{
			$stat[$i1]['draw']++;
			$stat[$i2]['draw']++;
			$stat[$i1]['point'] += 1;
			$stat[$i2]['point'] += 1;
		}
		$stat[$i1]['score'] += $mt["sc1"];
		$stat[$i1]['concede'] += $mt["sc2"];		
		$stat[$i2]['score'] += $mt["sc2"];
		$stat[$i2]['concede'] += $mt["sc1"];		
	}

// Сортировка
	$pl = array(0,1,2,3,4,5,6,7,8,9,10,11,12);
	do{
		$q=0;
		for($i=0;$i<count($pl)-1;$i++){
			$i1 = $pl[$i];
			$i2 = $pl[$i+1];
			if($stat[$i1]['point'] > $stat[$i2]['point'])
				continue;
			elseif($stat[$i1]['point'] == $stat[$i2]['point']){
//				равенство очков
				$b1 = $stat[$i1]['score'] - $stat[$i1]['concede'];
				$b2 = $stat[$i2]['score'] - $stat[$i2]['concede'];
				if($b1 >= $b2)
					continue;
				else
//				перемещение по разнице мячей
				$q++;
				$pl[$i] = $i2;
				$pl[$i+1] = $i1;
			}
			else{
//				перемещение по количеству очков				
				$q++;
				$pl[$i] = $i2;
				$pl[$i+1] = $i1;
			}
		}
	}
	while($q > 0);
?>

<html>
	<head>
		<style type='text/css'>
			.marg{margin-top: 20px; margin-left:40px;}
			td,th{padding-top: 10px; padding-left:10px;}
			.red{color: red;}
			.right{text-align: right;}
		</style>
	</head>
	<body>

<?php
	echo "<table class='marg'>";
		echo "<tr>";
			echo "<th>";
			echo "</th>";
			echo "<th>";
				echo "Команда";
			echo "</th>";
			echo "<th>";
				echo "И";
			echo "</th>";
			echo "<th>";
				echo "В";			
			echo "</th>";
			echo "<th>";
				echo "Н";
			echo "</th>";
			echo "<th>";
				echo "П";			
			echo "</th>";
			echo "<th>";
				echo "М";			
			echo "</th>";
			echo "<th>";
				echo "О";			
			echo "</th>";
		echo "</tr>";

	for($i=0; $i<count($pl); $i++){
		$ind = $pl[$i];
		echo("<tr>");
			echo "<td class='right'>";
				echo($i+1);
			echo "</td>";

			if($i < 2)			
				echo "<td class='red'>";
			else
				echo "<td>";			

				echo $team[$ind];
			echo "</td>";

			echo "<td>";
				echo $stat[$ind]['game'];
			echo "</td>";
			echo "<td>";
				echo $stat[$ind]['win'];
			echo "</td>";
			echo "<td>";
				echo $stat[$ind]['draw'];
			echo "</td>";
			echo "<td>";
				echo $stat[$ind]['defeat'];		
			echo "</td>";
			echo "<td>";
				echo $stat[$ind]['score']." - ";echo $stat[$ind]['concede'];
			echo "</td>";
			echo "<td>";
				echo $stat[$ind]['point'];	
			echo "</td>";
		echo("</tr>");
	}

	echo "</table>";

	echo "<div class='marg'>";
		for($i=1; $i<13; $i++ ){
			echo "<h4 class='marg'>".$i." тур</h4>";
			echo "<table>";
			foreach($match as $mt){
				if($mt['rnd'] == $i){
					echo("<tr>");
						echo "<td>".$mt['name1']." - ".$mt['name2']."</td>";
						if( is_numeric($mt['sc1']))
							echo "<td>".$mt['sc1'].":".$mt['sc2']."</td>";
						else
							echo "<td></td>";
					echo("</tr>");
				}
			}
			echo "</table>";
		}
	echo "</div>";

	print "</body></html>";

	exit();

//...............................................................
//	Состав группы "B"	
function group_b(){

//	Команды
 	$team = array();
	$team[] = "Металург";
	$team[] = "Черкащина";
	$team[] = "Балкани";
	$team[] = "Кривбас";
	$team[] = "Енергія";
	$team[] = "Миколаїв-2";
	$team[] = "Таврія Сімферополь";
	$team[] = "Реал Фарма";
	$team[] = "Нікополь";
	$team[] = "Перемога";
	$team[] = "Метал";
	$team[] = "Дніпро";
	$team[] = "Яруд";

	return $team;
}

//...............................................................
//	Инициализация массива
//	$q - размер массива
function init($q){

	$mas = array();
	for($i=0; $i<$q; $i++)
		$mas[] = ["game"=>0, "win"=>0,"draw"=>0,"defeat"=>0,"score"=>0,"concede"=>0,"point"=>0];		

	return $mas;
}	
