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
  <span>session</span>
</div>
  
<div class='title'>
    <h2>Session</h2>
</div>

<div class='info'>
	<span class='mark'>Retrieving Data:</span>
	<p>
	public function show(Request $request, $id){<br>
        $value = $request->session()->get('key');<br>
        //
    }
	</p>
   	<span class='mark'>или глобально:</span>
   	<p>
   	Route::get('home', function () {<br>
    // Retrieve a piece of data from the session...<br>
    $value = session('key');
	</p>

	<span class='mark'>Storing Data:</span>
	<p>
	// Via a request instance...<br>
	$request->session()->put('key', 'value');<br>
	// Via the global helper...<br>
	session(['key' => 'value']);
	</p>

	<span class='mark'>Deleting Data:</span>
	<p>
	// Forget a single key...<br>
	$request->session()->forget('key');<br>
	// Forget multiple keys...<br>
	$request->session()->forget(['key1', 'key2']);<br>
	$request->session()->flush();
	</p>
</div>
<div class='links'>
	<ol>
		<li><a href='https://laravel.com/docs/7.x/session' target='_blank'>Session на laravel.com</a></li>
	</ol>
</div>

</body>

</html>
