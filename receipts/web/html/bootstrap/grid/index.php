<html>

<head>
 <link rel='stylesheet' href='/receipts/styles.css'>
</head>

<body>
<div class='uri'>
  <a href='/receipts'>receipts</a> ==>>
  <a href='/receipts/web'>web</a> ==>>
  <a href='/receipts/web/html'>html</a> ==>>
  <a href='/receipts/web/html/bootstrap'>bootstrap</a> ==>>  
  <span>grid</span>
</div>
  
<div class='title'>
    <h2>Bootstrap grid</h2>
</div>

<div class='info'>
  <span class='mark'>Пример задания сетки:</span>
  <p>
  	&lt;div class="container"&gt;<br>
  	&nbsp;&nbsp;&lt;div class="row"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 of 2<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 of 2<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
  	&nbsp;&nbsp;&lt;/div&gt;<br>
  	&nbsp;&nbsp;&lt;div class="row"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 of 3<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 of 3<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 of 3<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
  	&nbsp;&nbsp;&lt;/div&gt;<br>
	&lt;/div&gt;<br>
  </p>

  <span class='mark'>Ячейки разной ширины</span>
  <p>
  	&lt;div class="container"&gt;<br>
  	&nbsp;&nbsp;&lt;div class="row"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 of 3<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col-6"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 of 3 (wider)<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 of 3<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
  	&nbsp;&nbsp;&lt;/div&gt;<br>
  	&nbsp;&nbsp;&lt;div class="row"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 of 3<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col-5"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 of 3 (wider)<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 of 3<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
  	&nbsp;&nbsp;&lt;/div&gt;<br>
	&lt;/div&gt;<br>
  </p>

  <span class='mark'>Ячейка настраивается на ширину содержимого:</span>
  <p>
  	&lt;div class="col-md-auto"&gt;<br>
    &nbsp;&nbsp;Variable width content<br>
    &lt;/div&gt;<br>
  </p>	

  <span class='mark'>Вертикальное размещение ячеек:</span>
  <p>
	&lt;div class="container"&gt;<br>
  	&nbsp;&nbsp;&lt;div class="row align-self-start"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One of three columns<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
    &nbsp;&nbsp;&lt;/div&gt;<br>    
  	&nbsp;&nbsp;&lt;div class="row align-self-center"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One of three columns<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
    &nbsp;&nbsp;&lt;/div&gt;<br>        
  	&nbsp;&nbsp;&lt;div class="row align-self-end"&gt;<br>    
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col"&gt;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One of three columns<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
  	&nbsp;&nbsp;&lt;/div&gt;<br>
	&lt;/div&gt;<br>
  </p>
</div>

<div class='links'>
  <ol>
    <li><a href='https://getbootstrap.com/docs/4.0/layout/grid/'>Bootstrap grid</a></li>
  </ol>
</div>

</body>

</html>
