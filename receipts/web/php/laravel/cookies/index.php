<html>

<head>
 <link rel='stylesheet' href='/receipts/styles.css'>
</head>

<body>
<div class='uri'>
  <a href='/receipts'>receipts</a> ==>>
  <a href='/receipts/web'>web</a> ==>>
  <a href='/receipts/web/php'>php</a> ==>>  
  <a href='/receipts/web/php/laravel'>laravel</a> ==>>    
  <span>cookies</span>
</div>
  
<div class='title'>
    <h2>Cookies</h2>
</div>

<div class='info'>
	<span class='mark'>Чтение значения cookie:</span>
	<p>$name = Cookie::get('name');</p>
	<span class='mark'>Чтение значения со значением по умолчанию, если cookie не определена:</span>
	<p>$name = Cookie::get('name', 'Fred');</p>
	<span class='mark'>Установка cookie с удалением через 60 минут:</span>
	<p>Cookie::put('name', 'Fred', 60);</p>
	<span class='mark'>Установка cookie со сроком истечения 5 лет («навсегда»):</span>
	<p>Cookie::forever('name', 'Fred');</p>
	<span class='mark'>Удаление cookie:</span>
	<p>Cookie::forget('name');</p>
</div>

<div class='links'>
	<ol>
		<li><a href='https://laravel.com/docs/7.x/requests#cookies' target='_blank'>Cookies на laravel.com</a></li>
	</ol>
</div>

</body>

</html>
