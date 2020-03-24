<?php

//	инвестиции
 	$investings = array();
	$investings[] = ["date"=>"23-02-2020", "sum"=>49800];
	$investings[] = ["date"=>"24-02-2020", "sum"=>7200];
	$investings[] = ["date"=>"25-02-2020", "sum"=>38000];

// возвраты
 	$returns = array();
//	$returns[] = ["date"=>"19-02-2020", "sum"=>2000];

// выплаты %
	$payments = array();
	$payments[] = ["date"=>"24-03-2020", "sum"=>1153];	

//	корректировки
	$correct = -41.11;

// установки
	$rate = 15.25;

//	расчетные суммы
	$today = date("d-m-Y");
	$sum_passed = 0;
	$all_passed = 0;
	$all_compensated = 0;	
	foreach($investings as $in){
		$sum_passed += round(diff($today,$in["date"])/366*$in['sum']*$rate/100,2);
		$all_passed += $in['sum'];
	}
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
	$result = $accrued_sum - $payment + $correct;

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

	echo "Выплаты:<br> ";
	for($i=0; $i<count($payments); $i++){
		echo($payments[$i]['date']." ==> ".$payments[$i]['sum']."<br>");		
	}
	echo "Итого: ".$payment."<br>";	
	echo "<hr>";

	echo "Корректировка: ";
	echo $correct."<br>");		

	echo "<hr>";
	
	if($result >= 0)
		echo "Начислено, но не оплачено:  ".$result;
	else
		echo "Переплата:  ".-$result;		

	print "</html>";

	exit();


//--------------------------------------------
	function diff($d1,$d2){
		$diff = strtotime($d1)-strtotime($d2);
		return round($diff/(60 * 60 * 24));
	}
