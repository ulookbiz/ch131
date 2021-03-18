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
  <a href='/receipts/web/php/laravel/validation'>validation</a> ==>>  
  <span>rules</span>
</div>
  
<div class='title'>
    <h2>Правила валидации</h2>
</div>

<div class='main'>
  <ul class='bigul'>
  </ul>
</div>  

<div class='info'>
	<p class='mark'>Пример задания правил валидации</p>
    public function store(Request $request)<br>
    {<br>
    &nbsp;&nbsp;$this->validate(request(), [<br>
    &nbsp;&nbsp;&nbsp;&nbsp;'name' => 'required',<br>
    &nbsp;&nbsp;&nbsp;&nbsp;'email' => 'required|email|unique:users|max:50',<br>
    &nbsp;&nbsp;&nbsp;&nbsp;'password' => 'required|confirmed',<br>
    &nbsp;&nbsp;]);<br>
    <br>
</div>

<div class='links'>
	<ol>
		<li><a href='https://laravel.com/docs/7.x/validation' target='_blank'>Валидация on laravel.com</a></li>
    <li><a href='http://ch131.pp.ua/receipts/web/php/laravel/blade/templates/' target='_blank'>
      Пример html-кода для отображения ошибок
    </a></li>
	</ol>
</div>

</body>

</html>
