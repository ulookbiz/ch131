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
  <span>templates</span>
</div>
  
<div class='title'>
    <h2>Blade templates</h2>
</div>

<div class='info'>
	<span class='mark'>Типичный div(в layout), содержащий сообщения об ошибках</span>
	<p>
    	@if($errors->any())<br>
        	&nbsp;&nbsp;&lt;div class='form-group'&gt;<br>
            	&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class='alert-danger'&gt;<br>
                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&gt;<br>
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@foreach($errors as $error)<br>
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li>{{ $error }}&lt;/li&gt;<br>
	                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@endforeach<br>
    	            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br>
        	    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
	        &nbsp;&nbsp;&lt;/div&gt;<br>
    	@endif<br>
    </p>	
</div>

<div class='links'>
  <ol>
    <li><a href='https://laravel.com/docs/7.x/blade' target='_blank'>Blade templates на laravel.com</a></li>
  </ol>
</div>

</body>

</html>
