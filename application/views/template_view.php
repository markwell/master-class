]<!DOCTYPE html>
<html lang="ru">
   <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Мастер-классы</title>
    <link rel="stylesheet" type="text/css" href="css/calendar.css" />
    <link rel="stylesheet" type="text/css" href="css/custom_2.css" />
    <script src="js/modernizr.custom.63321.js"></script>
	  <link href="css/jumbotron-narrow.css" rel="stylesheet">
	  <link href="css/bootstrap.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   </head>
     <body>
       <div class="container">
         <div class="header">
          <img src="images/Shapka.jpg">
           <ul class="nav nav-pills">
             <li><a href="main">Главная</a></li>
             <li><a href="news">Новости</a></li>
             <li><a href="calendar">Календарь</a></li>
             <li><a href="calendar">Журнал</a></li>
             <li><a href="feedback">Обратная связь</a></li>
             <li class="navbar-right"><a href="login" data-toggle="modal" data-target="#myModal">Вход</a></li>
           </ul>
         </div>
         <?php include 'application/views/'.$content_view; ?>
   </body>
</html>