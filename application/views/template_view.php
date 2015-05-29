<!DOCTYPE html>
<html lang="ru">
   <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Мастер-классы</title>
	  <!-- Bootstrap -->
	  <link href="css/jumbotron-narrow.css" rel="stylesheet">
	  <link href="css/bootstrap.css" rel="stylesheet">
	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.pond/xs.42/respond.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.pond/xs.42/respond.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.pond/xs.42/respond.min.js"></script>
	  <![endif]-->
   </head>
     <body>
       <div class="container">
         <div class="header">
          <h3 class="text-muted">Мастер-классы</h3>
          <h3 class="text-muted">по программированию</h3>
          <!-- <img src="images/dvfu_logo.jpg"> -->
           <ul class="nav nav-pills">
             <li><a href="main">Главная</a></li>
             <li><a href="news">Новости</a></li>
             <li>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                    Пункт <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                </ul>
             </li>
             <li><a href="calendar">Календарь</a></li>
             <li><a href="feedback">Обратная связь</a></li>
           </ul>
           
         </div>

         <?php include 'application/views/'.$content_view; ?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	  <!-- Include all compiled plugins (below), or include individual files as needed -->
   </body>
</html>