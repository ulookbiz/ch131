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
  <span>validation</span>
</div>
  
<div class='title'>
    <h2>Валидация</h2>
</div>

<div class='main'>
  <ul class='bigul'>
    <li>
      <a href='/receipts/web/php/laravel/validation/rules'>Правила валидации</a>
    </li>
    <li>
      <a href='/receipts/web/php/laravel/validation/errors'>Ошибки валидации</a>
    </li>
  </ul>
</div>  

<div class='info'>
	<p class='mark'>Пример валидации при обработке данных FORM</p>

	&nbsp;&nbsp;namespace App\Http\Requests;<br>
    <br>
	&nbsp;&nbsp;use Illuminate\Foundation\Http\FormRequest;<br>
	<br>
	&nbsp;&nbsp;class ForgotPost extends FormRequest<br>
	<br>
    &nbsp;&nbsp;public function authorize()<br>
    &nbsp;&nbsp;{<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return true;<br>
    &nbsp;&nbsp;}<br>
	<br>
    &nbsp;&nbsp;public function rules()<br>
    &nbsp;&nbsp;{<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return [<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'email' => 'required|email|exists:users',<br>
        &nbsp;&nbsp;&nbsp;&nbsp;];<br>
    &nbsp;&nbsp;}<br>
	<br>
    &nbsp;&nbsp;public function messages()<br>
    &nbsp;&nbsp;{<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return [<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'email.required' => 'Надо задать адрес email',<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'email.email' => 'Адрес email некорректный',<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'email.exists' => 'Указанный адрес email не зарегистрирован',<br>
        &nbsp;&nbsp;&nbsp;&nbsp;];<br>
    &nbsp;&nbsp;}<br>
	<br><br>

	&nbsp;&nbsp;class ForgotController extends Controller<br>
	&nbsp;&nbsp;{<br>
	<br>
    &nbsp;&nbsp;public function send(ForgotPost $request)<br>
    &nbsp;&nbsp;{<br>
        &nbsp;&nbsp;&nbsp;&nbsp;$request->validated();<br>
        &nbsp;&nbsp;&nbsp;&nbsp;...
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
