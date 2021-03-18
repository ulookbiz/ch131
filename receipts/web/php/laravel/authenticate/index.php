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
  <span>authenticate</span>
</div>
  
<div class='title'>
    <h2>Authenticate</h2>
</div>

<div class='main'>
</div>  

<div class='info'>
	<p class='mark'>Создаются файлы с контроллерами и видами аутентификации:</p>
	composer require laravel/ui<br>
	php artisan ui vue --auth<br>

	<p class='mark'>Фасад аутентификации</p>
	use Illuminate\Support\Facades\Auth;<br>

	<p class='mark'>Проверка того, что пользователь аутентифицирован</p>
	if (Auth::check()) {...	}<br>

	<p class='mark'>Вход пользователя в приложение посредством метода attempt класса Auth:</p>
	$credentials = $request->only('email', 'password');<br>
	if (Auth::attempt($credentials)) {<br>
    &nbsp;&nbsp;return Redirect::to('user/profile');<br>
	}<br>
	<p class='mark'>или:</p>
	if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {<br>
    	// The user is active, not suspended, and exists.<br>
	}<br>
	
</div>

<div class='links'>
	<ol>
		<li><a href='https://laravel.ru/docs/v5/authentication' target='_blank'>Аутентификация на laravel.ru</a></li>
		<li><a href='https://laravel.com/docs/7.x/authentication' target='_blank'>Authentication on laravel.com</a></li>
		<li><a href='https://vegibit.com/how-to-create-user-registration-in-laravel' target='_blank'>Пример регистрации</a></li>
	</ol>
</div>

</body>

</html>
