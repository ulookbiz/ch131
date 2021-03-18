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
  <span>crud</span>
</div>
  
<div class='title'>
    <h2> CRUD </h2>
</div>

<div class='info'>
	<span class='mark'>Характерный набор маршрутов:</span>
	<p>
		Route::get('notes', 'NotesController@index');<br>
		Route::get('notes/create', 'NotesController@create');<br>
		Route::get('notes/store', 'NotesController@store');<br>
		Route::get('notes/{id}/edit', 'NotesController@edit');<br>
		Route::get('notes/{id}/update', 'NotesController@update');<br>
		Route::get('notes/{id}/show', 'NotesController@show');<br>
		Route::get('notes/{id}/destroy', 'NotesController@destroy');<br>
	</p>
	<span class='mark'>Все вышеперечисленное задается одной строкой:</span>
	<p>
		Route::resource('notes', 'NotesController');
	</p>
	<span class='mark'>Проверка маршрутов:</span>
	<p>
	 	php artisan route:list
	</p>
	<span class='mark'>Соответствующий HTML-код:</span>
	<p>
		&lt;a href="/node/create"...&gt;...&lt;/a&gt;<br>
		&lt;a href="/node/{{ $node->id }}...&gt;...&lt;/a&gt;<br>
 		&lt;a href="/node/{{ $node->id }}/edit"...&gt;...&lt;/a&gt;<br>
	    &lt;a href="/node/{{ $node->id }}/destroy"...&gt;...&lt;/a&gt;<br>
	</p>
</div>

<div class='links'>
	<ol>
	<ol>
		<li><a href='https://vivasart.com/lab/bystryy-start-s-laravel-55-vuejs-prostoy-crud' target='_blank'>Быстрый старт с Laravel 5.5 + Vue.js: простой CRUD</a></li>
		<li><a href='https://www.youtube.com/watch?v=vjaskRFVa0Q' target='_blank'>CRUD, видеопоказ</a></li>
	</ol>
	</ol>
</div>

</body>

</html>
