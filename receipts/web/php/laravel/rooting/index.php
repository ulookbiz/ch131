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
  <span>rooting</span>
</div>
  
<div class='title'>
    <h2> Rooting </h2>
</div>

<div class='info'>
	<span class='mark'>Варианты:</span>
		<ol>
			<li>
				Route::get('foo', function () { return 'Hello World'; });
			</li>
			<li>
				Route::get('/user', 'UserController@index');
			</li>
			<li>
				Route::get($uri, $callback);<br>
				Route::post($uri, $callback);<br>
				Route::put($uri, $callback);<br>
				Route::patch($uri, $callback);<br>
				Route::delete($uri, $callback);<br>
				Route::options($uri, $callback);<br>
			</li>
			<li>	
				Route::redirect('/here', '/there');<br>
				Route::redirect('/here', '/there', 301);<br>
			</li>
			<li>	
				Route::view('/welcome', 'welcome');<br>
				Route::view('/welcome', 'welcome', ['name' => 'Taylor']);<br>
			</li>
			<li>	
				Route::get('user/{id}/{name}', function ($id, $name) { // })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);<br>
			</li>
			<li>
				Route::match(['get', 'post'], '/', function () { // });<br>
				Route::any('/', function () { // }) <br>
			</li>
			<li>
				Route::middleware(['first', 'second'])->group(function () {<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Route::get('/', function () { // });<br>
			    &nbsp;&nbsp;&nbsp;&nbsp;Route::get('user/profile', function () { // });<br>
				});
		</ol>
		<p> Формы, указывающие на POST, PUT, PATCH, or DELETE требуют CSRF-защиты </p>
</div>

<div class='links'>
	<ol>
		<li><a href='https://laravel.com/docs/7.x/routing' target='_blank'>Rooting на laravel.com</a></li>
	</ol>
</div>

</body>

</html>
