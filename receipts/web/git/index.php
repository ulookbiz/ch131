<html>

<head>
 <link rel='stylesheet' href='/receipts/styles.css'>
</head>

<body>
<div class='uri'>
  <a href='/receipts'>receipts</a> ==>>
  <a href='/receipts/web'>web</a> ==>>    
  <span>git</span>
</div>
  
<div class='title'>
    <h2> GIT </h2>
</div>

<div class='info'>
	<span class='mark'>Создать ветку и сразу на нее перейти:</span>
	<p>
		&nbsp;&nbsp;$ git checkout -b 'branchName'<br>
					&nbsp;&nbsp;что равносильно:<br>
					&nbsp;&nbsp;$ git branch 'branchName'<br>
					&nbsp;&nbsp;$ git checkout 'branchName'<br>
	</p>					
	<span class='mark'>Сделать commit</span>
	<p>	
					&nbsp;&nbsp;$ git commit -a -m 'added a new data'
	</p>
	<span class='mark'>Вернуться в основную ветку master и включить изменения в продукт</span>
	<p>	
					&nbsp;&nbsp;$ git checkout master<br>
					&nbsp;&nbsp;$ git merge 'branchName'
	</p>
</div>

<div class='links'>
	<ol>
		<li><a href='https://git-scm.com' target='_blank'>Git - all you need</a></li>
		<li><a href='https://techrocks.ru/2019/02/14/git-cheatsheet-for-beginners/' target='_blank'>Подробное введение в Git</a></li>	
		<li><a href='https://techrocks.ru/2020/01/29/git-branching-tutorial/' target='_blank'>Ветвление в Git</a></li>
		<li><a href='https://www.youtube.com/playlist?list=PLmRNNqEA7JoM77hOJkPrLOfJQGizCLR3P' target='_blank'>Git - быстрый старт</a></li>
	</ol>	
</div>

</body>

</html>
