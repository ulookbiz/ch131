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
  <span>validation</span>
</div>
  
<div class='title'>
    <h2>Ошибки валидации</h2>
</div>

<div class='main'>
</div>  

<div class='info'>
	<p class='mark'>Пример валидации</p>

    namespace App\Http\Controllers;<br>
    <br>
    use Illuminate\Http\Request;<br>
    use App\User;<br>
    ...<br>
    public function store(Request $request)<br>
    {<br>
    &nbsp;&nbsp;$this->validate(request(), [<br>
    &nbsp;&nbsp;&nbsp;&nbsp;'name' => 'required',<br>
    &nbsp;&nbsp;&nbsp;&nbsp;'email' => 'required|email|unique:users|max:50',<br>
    &nbsp;&nbsp;&nbsp;&nbsp;'password' => 'required|confirmed',<br>
    &nbsp;&nbsp;]);<br>
    <br>
    В этом примере автоматически осуществляется возврат на предыдущую страницу из-за таких ошибок:<br>
    - попытка регистрации, в которой повторяется уже имеющийся email<br>
    - невыполнение любого из правил<br>

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
