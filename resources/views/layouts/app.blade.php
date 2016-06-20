<!DOCTYPE html>
<html lang="ru">
	<head>
    <meta name="author" content="Andrej Potapov">
    

    <title>Магия Ларки и срастания страниц</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	</head>
		<body>
		<div>
		<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="/about">Главная</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Страницы<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="/insert">Добавление в БД</a>
								</li>
								<li>
									<a href="/laravel">Подробнее о Laravel</a>
								</li>
								
							</ul>
						</li>
					</ul>
					
				</div>
				
			</nav>
			</div>
		@yield('content')
		</body>
</html>