<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <meta name="description" content="">

 <meta name="author" content="">
	
 <title>Blog Template for Bootstrap</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link rel="stylesheet" href="/css/blog.css">

</head>

<body>


 @include('layouts.nav')

  
  <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">The Bootstrap Blog</h1>
          <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
  </div>
 

    <div class="container">
      <div class="row">

    	@yield('content')


    	@include('layouts.sidebar')
    	
    </div>
 	
 </div>

 @include('layouts.footer')


</body>
</html>