<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    {{ Html::style('css/default.css') }}
	{{ Html::style('css/login.css') }}
  </head>
  <body>
    <div class="container-fluid" style="padding:0;">
      <div class="header">
        @include('partials.header')
      </div>
	  <div class="collapse navbar-collapse" style="width: 70%;margin: 0 auto;">
		@include('partials.nav')
	  </div>
      <div class="section">
        @include('pages.'.$page)
      </div>
      <div class="footer">

      </div>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  {{ HTML::script('js/master.js') }}
</html>
