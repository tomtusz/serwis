<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Serwis</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">

  </head>
  <body>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="{{action('OrderController@create')}}">Dodaj zgoszenie</a>
          <a class="navbar-brand" href="{{action('OrderController@index')}}">Lista zgłoszeń</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          {!! Form::open(['url'=>'order/search','method'=>'POST','class'=>'navbar-form navbar-left', 'role'=>'search']) !!}

						<div class="form-group">
              {!! Form::text('uniqid', null, ['placeholder' => 'Wpisz Nr zgłoszenia..','class'=>'form-control']) !!}
						</div>
            {!! Form::submit('Szukaj', ['class'=>'btn btn-default']) !!}

					{!! Form::close() !!}
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="{{action('AdminparamsController@admin')}}">Administracja</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Urzytkownik<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Wyloguj</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Zarządzaj kontem</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>
		</div>
	</div>
	<div  id="content" class="row">
      @yield('content')
  </div>
</div>


<div class="footer">
  <div class="container">
    <p>
      STOPKAstopkaSTOPKAstopkaSTOPKAstopkaSTOPKAstopkaSTOPKAstopkaSTOPKAstopkaSTOPKAstopkaSTOPKAstopkaSTOPKAstopkaSTOPKAstopka
    </p>
  </div>
</div>

    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/scripts.js') }}"></script>
  </body>
</html>
