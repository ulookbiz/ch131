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
  <span>artisan</span>
</div>
  
<div class='title'>
    <h2>Artisan</h2>
</div>

<div class='info'>
  <span class='mark'>php arisan make:auth</span> - основные представления и маршруты входа и регистрации в скаффолде<br>
  <span class='mark'>php arisan make:command</span> - создание новой команды Artisan<br>
  <span class='mark'>php arisan make:controller </span> - создание нового класса контроллера<br>
  <span class='mark'>php arisan make:event</span> - создание нового класса события<br>
  <span class='mark'>php arisan make:job</span> - создание нового класса заданий<br>
  <span class='mark'>php arisan make:listener</span> - создание нового класса прослушивателя событий<br>
  <span class='mark'>php arisan make:mail</span> - создание нового класса электронной почты<br>
  <span class='mark'>php arisan make:middleware</span> - создание нового класса посредника<br>
  <span class='mark'>php arisan make:migration </span> - создание нового файла миграции<br>
  <span class='mark'>php arisan make:model</span> - создание нового класса модели Eloquent<br>
  <span class='mark'>php arisan make:notification</span> - создание нового класса уведомлений<br>
  <span class='mark'>php arisan make:policy</span> - создание нового класса политики<br>
  <span class='mark'>php arisan make:provider</span> - создание нового класса сервис провайдера<br>
  <span class='mark'>php arisan make:request</span> - создание нового класса запроса формы<br>
  <span class='mark'>php arisan make:seeder</span> - создание нового seeder класса<br>
  <span class='mark'>php arisan make:test</span> - создание нового тестового класса<br>
  <span class='mark'>php arisan route:list</span> - список зарегистрированых маршрутов приложения<br>
</div>

<div class='links'>
	<a href='https://medium.com/@volodymyrafanasiev/%D1%81%D0%BF%D0%B8%D1%81%D0%BE%D0%BA-%D0%B8%D0%B7-16-%D1%82%D0%B8-artisan-make-%D0%BA%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4-%D1%81-%D0%BF%D0%B0%D1%80%D0%B0%D0%BC%D0%B5%D1%82%D1%80%D0%B0%D0%BC%D0%B8-e75fc6c987e7'>Список и описание 16-ти artisan make - команд</a>
</div>


<div class='info'>
  <table>
  <th><td colspan='2' class='mark'>Список команд artisan к обработке</td></th>
  <tr><td></td><td></td></tr>  
  <tr><td><a href='/receipts/web/php/laravel/artisan/clear-compiled' target='_blank' class='white'>clear-compiled</a></td>
      <td class='mark'>Remove the compiled class file</td></tr>
  <tr><td class='mark'>down</td>                 <td class='white'>Put the application into maintenance mode</td></tr>
  <tr><td class='mark'>env</td>                  <td class='white'>Display the current framework environment</td></tr>
  <tr><td class='mark'>help</td>                 <td class='white'>Displays help for a command</td></tr>
  <tr><td class='mark'>inspire</td>              <td class='white'>Display an inspiring quote</td></tr>
  <tr><td class='mark'>list</td>                 <td class='white'>Lists commands</td></tr>
  <tr><td class='mark'>migrate</td>              <td class='white'>Run the database migrations</td></tr>
  <tr><td class='mark'>optimize</td>             <td class='white'>Cache the framework bootstrap files</td></tr>
  <tr><td class='mark'>serve</td>                <td class='white'>Serve the application on the PHP development server</td></tr>
  <tr><td class='mark'>test</td>                 <td class='white'>Run the application tests</td></tr>
  <tr><td class='mark'>tinker</td>               <td class='white'>Interact with your application</td></tr>
  <tr><td class='mark'>ui</td>                   <td class='white'>Swap the front-end scaffolding for the application</td></tr>
  <tr><td class='mark'>up</td>                   <td class='white'>Bring the application out of maintenance mode</td></tr>
  <tr><td class='mark'>auth</td><td class='white'></td></tr>
  <tr><td class='mark'>auth:clear-resets</td>    <td class='white'>Flush expired password reset tokens</td></tr>
  <tr><td class='mark'>cache</td><td class='white'></td></tr>
  <tr><td class='mark'>cache:clear</td>          <td class='white'>Flush the application cache</td></tr>
  <tr><td class='mark'>cache:forget</td>         <td class='white'>Remove an item from the cache</td></tr>
  <tr><td class='mark'>cache:table</td>          <td class='white'>Create a migration for the cache database table</td></tr>
  <tr><td class='mark'>config</td><td class='white'></td></tr>
  <tr><td class='mark'>config:cache</td>         <td class='white'>Create a cache file for faster configuration loading</td></tr>
  <tr><td class='mark'>config:clear</td>         <td class='white'>Remove the configuration cache file</td></tr>
  <tr><td class='mark'>db</td><td class='white'></td></tr>
  <tr><td class='mark'>db:seed</td>              <td class='white'>Seed the database with records</td></tr>
  <tr><td class='mark'>db:wipe</td>              <td class='white'>Drop all tables, views, and types</td></tr>
  <tr><td class='mark'>event</td><td class='white'></td></tr>
  <tr><td class='mark'>event:cache</td>          <td class='white'>Discover and cache the application's events and listeners</td></tr>
  <tr><td class='mark'>event:clear</td>          <td class='white'>Clear all cached events and listeners</td></tr>
  <tr><td class='mark'>event:generate</td>       <td class='white'>Generate the missing events and listeners based on registration</td></tr>
  <tr><td class='mark'>event:list</td>           <td class='white'>List the application's events and listeners</td></tr>
  <tr><td class='mark'>key</td><td class='white'></td></tr>
  <tr><td class='mark'>key:generate</td>         <td class='white'>Set the application key</td></tr>
  <tr><td class='mark'>make</td><td class='white'></td></tr>
  <tr><td class='mark'>make:channel</td>         <td class='white'>Create a new channel class</td></tr>
  <tr><td class='mark'>make:command</td>         <td class='white'>Create a new Artisan command</td></tr>
  <tr><td class='mark'>make:component</td>       <td class='white'>Create a new view component class</td></tr>
  <tr><td class='mark'>make:controller</td>      <td class='white'>Create a new controller class</td></tr>
  <tr><td class='mark'>make:event</td>           <td class='white'>Create a new event class</td></tr>
  <tr><td class='mark'>make:exception</td>       <td class='white'>Create a new custom exception class</td></tr>
  <tr><td class='mark'>make:factory</td>         <td class='white'>Create a new model factory</td></tr>
  <tr><td class='mark'>make:job</td>             <td class='white'>Create a new job class</td></tr>
  <tr><td class='mark'>make:listener</td>        <td class='white'>Create a new event listener class</td></tr>
  <tr><td class='mark'>make:mail</td>            <td class='white'>Create a new email class</td></tr>
  <tr><td class='mark'>make:middleware</td>      <td class='white'>Create a new middleware class</td></tr>
  <tr><td class='mark'>make:migration</td>       <td class='white'>Create a new migration file</td></tr>
  <tr><td class='mark'>make:model</td>           <td class='white'>Create a new Eloquent model class</td></tr>
  <tr><td class='mark'>make:notification</td>    <td class='white'>Create a new notification class</td></tr>
  <tr><td class='mark'>make:observer</td>        <td class='white'>Create a new observer class</td></tr>
  <tr><td class='mark'>make:policy</td>          <td class='white'>Create a new policy class</td></tr>
  <tr><td class='mark'>make:provider</td>        <td class='white'>Create a new service provider class</td></tr>
  <tr><td class='mark'>make:request</td>         <td class='white'>Create a new form request class</td></tr>
  <tr><td class='mark'>make:resource</td>        <td class='white'>Create a new resource</td></tr>
  <tr><td class='mark'>make:rule</td>            <td class='white'>Create a new validation rule</td></tr>
  <tr><td class='mark'>make:seeder</td>          <td class='white'>Create a new seeder class</td></tr>
  <tr><td class='mark'>make:test</td>            <td class='white'>Create a new test class</td></tr>
  <tr><td class='mark'>migrate</td><td class='white'></td></tr>
  <tr><td class='mark'>migrate:fresh</td>        <td class='white'>Drop all tables and re-run all migrations</td></tr>
  <tr><td class='mark'>migrate:install</td>      <td class='white'>Create the migration repository</td></tr>
  <tr><td class='mark'>migrate:refresh</td>      <td class='white'>Reset and re-run all migrations</td></tr>
  <tr><td class='mark'>migrate:reset</td>        <td class='white'>Rollback all database migrations</td></tr>
  <tr><td class='mark'>migrate:rollback</td>     <td class='white'>Rollback the last database migration</td></tr>
  <tr><td class='mark'>migrate:status</td>       <td class='white'>Show the status of each migration</td></tr>
  <tr><td class='mark'>notifications</td><td class='white'></td></tr>
  <tr><td class='mark'>notifications:table</td>  <td class='white'>Create a migration for the notifications table</td></tr>
  <tr><td class='mark'>optimize</td><td class='white'></td></tr>
  <tr><td class='mark'>optimize:clear</td>       <td class='white'>Remove the cached bootstrap files</td></tr>
  <tr><td class='mark'>package</td><td class='white'></td></tr>
  <tr><td class='mark'>package:discover</td>     <td class='white'>Rebuild the cached package manifest</td></tr>
  <tr><td class='mark'>queue</td><td class='white'></td></tr>
  <tr><td class='mark'>queue:failed</td>         <td class='white'>List all of the failed queue jobs</td></tr>
  <tr><td class='mark'>queue:failed-table</td>   <td class='white'>Create a migration for the failed queue jobs database table</td></tr>
  <tr><td class='mark'>queue:flush</td>          <td class='white'>Flush all of the failed queue jobs</td></tr>
  <tr><td class='mark'>queue:forget</td>         <td class='white'>Delete a failed queue job</td></tr>
  <tr><td class='mark'>queue:listen</td>         <td class='white'>Listen to a given queue</td></tr>
  <tr><td class='mark'>queue:restart</td>        <td class='white'>Restart queue worker daemons after their current job</td></tr>
  <tr><td class='mark'>queue:retry</td>          <td class='white'> a failed queue job</td></tr>
  <tr><td class='mark'>queue:table</td>          <td class='white'>Create a migration for the queue jobs database table</td></tr>
  <tr><td class='mark'>queue:work</td>           <td class='white'>Start processing jobs on the queue as a daemon</td></tr>
  <tr><td class='mark'>route</td><td class='white'></td></tr>
  <tr><td class='mark'>route:cache</td>          <td class='white'>Create a route cache file for faster route registration</td></tr>
  <tr><td class='mark'>route:clear</td>          <td class='white'>Remove the route cache file</td></tr>
  <tr><td class='mark'>route:list</td>           <td class='white'>List all registered routes</td></tr>
  <tr><td class='mark'>schedule</td><td class='white'></td></tr>
  <tr><td class='mark'>schedule:run</td>         <td class='white'>Run the scheduled commands</td></tr>
  <tr><td class='mark'>session</td><td class='white'></td></tr>
  <tr><td class='mark'>session:table</td>        <td class='white'>Create a migration for the session database table</td></tr>
  <tr><td class='mark'>storage</td><td class='white'></td></tr>
  <tr><td class='mark'>storage:link</td>         <td class='white'>Create the symbolic links configured for the application</td></tr>
  <tr><td class='mark'>stub</td><td class='white'></td></tr>
  <tr><td class='mark'>stub:publish</td>         <td class='white'>Publish all stubs that are available for customization</td></tr>
  <tr><td class='mark'>ui</td><td class='white'></td></tr>
  <tr><td class='mark'>ui:auth</td>              <td class='white'>Scaffold basic login and registration views and routes</td></tr>
  <tr><td class='mark'>ui:controllers</td>       <td class='white'>Scaffold the authentication controllers</td></tr>
  <tr><td class='mark'>vendor</td><td class='white'></td></tr>
  <tr><td class='mark'>vendor:publish</td>       <td class='white'>Publish any publishable assets from vendor packages</td></tr>
  <tr><td class='mark'>view</td><td class='white'></td></tr>
  <tr><td class='mark'>view:cache</td>           <td class='white'>Compile all of the application's Blade templates</td></tr>
  <tr><td class='mark'>view:clear</td>           <td class='white'>Clear all compiled view files</td></tr>
  </table>
</div>

</body>

</html>
