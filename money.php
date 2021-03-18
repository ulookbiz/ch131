<?php

//	инвестиции
 	$investings = array();
	$investings[] = ["date"=>"23-02-2020", "sum"=>49800];
	$investings[] = ["date"=>"24-02-2020", "sum"=>7200];
	$investings[] = ["date"=>"25-02-2020", "sum"=>38000];
	$investings[] = ["date"=>"07-04-2020", "sum"=>10000];
	$investings[] = ["date"=>"19-05-2020", "sum"=>19000];
	$investings[] = ["date"=>"22-05-2020", "sum"=>23500];
	$investings[] = ["date"=>"24-05-2020", "sum"=>25700];
	$investings[] = ["date"=>"30-05-2020", "sum"=>19000];
	$investings[] = ["date"=>"02-06-2020", "sum"=>20000];
	$investings[] = ["date"=>"06-06-2020", "sum"=>23800];
	$investings[] = ["date"=>"06-06-2020", "sum"=>60000];

// возвраты
 	$returns = array();
//	$returns[] = ["date"=>"19-02-2020", "sum"=>2000];

// выплаты %
	$payments = array();
	$payments[] = ["date"=>"24-03-2020", "sum"=>1153];
	$payments[] = ["date"=>"08-04-2020", "sum"=>540];
	$payments[] = ["date"=>"24-04-2020", "sum"=>700];
	$payments[] = ["date"=>"08-05-2020", "sum"=>520];
	$payments[] = ["date"=>"24-05-2020", "sum"=>780];
	$payments[] = ["date"=>"02-06-2020", "sum"=>300];
	$payments[] = ["date"=>"10-06-2020", "sum"=>1160];
	$payments[] = ["date"=>"23-06-2020", "sum"=>1550];
	$payments[] = ["date"=>"10-07-2020", "sum"=>2020];
	$payments[] = ["date"=>"23-07-2020", "sum"=>1550];
	$payments[] = ["date"=>"07-08-2020", "sum"=>1780];
	$payments[] = ["date"=>"26-08-2020", "sum"=>2260];
	$payments[] = ["date"=>"13-09-2020", "sum"=>2150];
	$payments[] = ["date"=>"25-09-2020", "sum"=>1600];
	$payments[] = ["date"=>"14-10-2020", "sum"=>2080];	
	$payments[] = ["date"=>"23-10-2020", "sum"=>1070];
	$payments[] = ["date"=>"10-11-2020", "sum"=>2140];
	$payments[] = ["date"=>"21-11-2020", "sum"=>1310];	
	$payments[] = ["date"=>"10-12-2020", "sum"=>2260];
	$payments[] = ["date"=>"20-12-2020", "sum"=>1580];
	$payments[] = ["date"=>"10-01-2021", "sum"=>2106];
	$payments[] = ["date"=>"22-01-2021", "sum"=>1428];
	$payments[] = ["date"=>"10-02-2021", "sum"=>2260];
	$payments[] = ["date"=>"22-02-2021", "sum"=>1400];
	$payments[] = ["date"=>"12-03-2021", "sum"=>2170];

//	корректировки
	$correct = 0;

// установки
	$rate = 15.25;

//	расчетные суммы
	$today = date("d-m-Y");
//$today = "24-03-2020";
	$sum_passed = 0;
	$all_passed = 0;
	$all_compensated = 0;
	foreach($investings as $in){
		$sum_passed += round(diff($today,$in["date"])/366*$in['sum']*$rate/100,2);
		$all_passed += $in['sum'];
	}
//	корректировка начисленных %
	$sum_passed = round($sum_passed/1.03682,2);

	$sum_compensated = 0;
	foreach($returns as $ret){
		$sum_compensated += round(diff($today,$ret["date"])/366*$ret['sum']*$rate/100,2);
		$all_compensated += $ret['sum'];
	}
	$payment = 0;
	foreach($payments as $pay){
		$payment += $pay["sum"];
	}

	$accrued_sum = $sum_passed - $sum_compensated;
	$result = round($accrued_sum - $payment + $correct,2);

	echo "<html>";
	echo "Сегодня: ".$today." Ставка: ".$rate."%";
	echo "<hr>";

	echo "Инвестиции:<br> ";
	for($i=0; $i<count($investings); $i++){
		echo($investings[$i]['date']." ==> ".$investings[$i]['sum']."<br>");
	}
	echo "Итого: ".$all_passed."<br>";
	echo "<hr>";

	echo "Возвраты:<br> ";
	for($i=0; $i<count($returns); $i++){
		echo($returns[$i]['date']." ==> ".$returns[$i]['sum']."<br>");
	}
	echo "Итого: ".$all_compensated."<br>";
	echo "<hr>";

	echo "Вего начислено по %: ";
	echo($accrued_sum."<br>");
	echo "<hr>";

	echo "Выплаты:<br> ";
	for($i=0; $i<count($payments); $i++){
		echo($payments[$i]['date']." ==> ".$payments[$i]['sum']."<br>");
	}
	echo "Итого: ".$payment."<br>";
	echo "<hr>";

	echo "Корректировка: ";
	echo $correct."<br>";

	echo "<hr>";

	if($result >= 0)
		echo "Начислено, но не оплачено:  ".$result;
	else
		echo "Переплата:  ".round(-$result,2);

	print "</html>";

	exit();


//--------------------------------------------
	function diff($d1,$d2){
		$diff = strtotime($d1)-strtotime($d2);
		return round($diff/(60 * 60 * 24));
	}
