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
  <span>migrations</span>
</div>
  
<div class='title'>
    <h2>Migrations</h2>
</div>

<div class='info'>
	<span class='mark'>примеры задания структуры таблиц базы данных</span>
	<p>
		&nbsp;Schema::create('store_events', function (Blueprint $table) {<br>
        	&nbsp;&nbsp;&nbsp;$table->increments('id');<br>
            &nbsp;&nbsp;&nbsp;$table->timestamps();<br>
            &nbsp;&nbsp;&nbsp;$table->softDeletes();<br>
        &nbsp;});<br><br>

        &nbsp;Schema::create('store_categories', function (Blueprint $table) {<br>
            &nbsp;&nbsp;&nbsp;$table->increments('id');<br>
            &nbsp;&nbsp;&nbsp;$table->string('alias')->unique();<br>
            &nbsp;&nbsp;&nbsp;$table->string('npp');<br>
            &nbsp;&nbsp;&nbsp;$table->string('name');<br>
            &nbsp;&nbsp;&nbsp;$table->string('short_name');<br>
            &nbsp;&nbsp;&nbsp;$table->timestamps();<br>
            &nbsp;&nbsp;&nbsp;$table->softDeletes();<br>
        &nbsp;});<br><br>

        &nbsp;Schema::create('store_collections', function (Blueprint $table) {<br>
            &nbsp;&nbsp;&nbsp;$table->increments('id');<br>
            &nbsp;&nbsp;&nbsp;$table->integer('event_id')->unsigned();<br>
            &nbsp;&nbsp;&nbsp;$table->integer('category_id')->unsigned();<br>
           	&nbsp;&nbsp;&nbsp;$table->string('value')->nullable();<br>
            &nbsp;&nbsp;&nbsp;$table->timestamps();<br>
        &nbsp;});<br><br>

        &nbsp;Schema::table('store_collections', function(Blueprint $table) {<br>
            &nbsp;&nbsp;&nbsp;$table->foreign('event_id')->references('id')->on('store_events');<br>
            &nbsp;&nbsp;&nbsp;$table->foreign('category_id')->references('id')->on('store_categories');<br>
        &nbsp;});<br>
	</p>
</div>

<div class='links'>
</div>

</body>

</html>
