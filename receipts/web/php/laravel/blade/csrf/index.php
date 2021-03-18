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
  <a href='/receipts/web/php/laravel/blade'>blade</a> ==>>
  <span>csrf</span>
</div>
  
<div class='title'>
    <h2>
      csrf protection
    </h2>
</div>

<div class='info'>
  <span class='mark'>Задание в HTML-тексте:</span>
  <p>&lt;form method="POST" action="/profile"&gt;<br>
    &nbsp;&nbsp; @csrf<br>
    &nbsp;&nbsp;...<br>
    &lt;/form&gt;
  </p>
  <p class='mark'>Метод VerifyCsrfToken из web middleware group проверит созданный токен автоматически.</p>
  <span class='mark'>Исключение URI из защиты CSRF:</span>
  <p>
      namespace App\Http\Middleware;<br>
      use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;<br>
      class VerifyCsrfToken extends Middleware<br>
      {<br>
      /**<br>
      * @var array<br>
      */<br>
      &nbsp;&nbsp;protected $except = [<br>
      &nbsp;&nbsp;&nbsp;&nbsp;'stripe/*',<br>
      &nbsp;&nbsp;&nbsp;&nbsp;'http://example.com/foo/bar',<br>
      &nbsp;&nbsp;&nbsp;&nbsp;'http://example.com/foo/*',<br>
      &nbsp;&nbsp;];<br>
      }<br>
  </p>  
</div>

<div class='links'>
  <ol>
    <li><a href='https://laravel.com/docs/7.x/csrf' target='_blank'>Laravel CSRF protection</a></li>
  </ol>
</div>


</body>

</html>
