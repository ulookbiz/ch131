<html>

<head>
 <link rel='stylesheet' href='/receipts/styles.css'>
</head>

<body>
<div class='uri'>
  <a href='/receipts'>receipts</a> ==>>
  <a href='/receipts/web'>web</a> ==>>
  <a href='/receipts/web/php'>php</a> ==>>  
  <span>localhost</span>
</div>
  
<div class='title'>
    <h2>Local Host</h2>
</div>

<div class='info'>
	<span class='mark'>Создание локального сервера под Linux:</span>
	<ol>
		<li>
Устанавливаем Apache<br>
<b>sudo apt-get install apache2</b>
		</li><li>
Снимаем комментарий с кодировки UTF-8<br>
<b>nano /etc/apache2/conf-available/charset.conf</b>
		</li><li>
Устанавливаем PHP<br>
<b>sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql</b>
		</li><li>
Устанавливаем MySQL<br>
<b>sudo apt-get install mysql-server</b>
		</li><li>
Устанавливаем phpmyadmin<br>
<b>sudo apt-get install phpmyadmin</b><br>
<b>gksudo gedit /etc/apache2/apache2.conf</b>
		</li><li>
Добавляем в конец файла строку:<br>
<b>Include /etc/phpmyadmin/apache.conf</b>
		</li>    
	</ol>
</div>

<div class='links'>
</div>

</body>

</html>
