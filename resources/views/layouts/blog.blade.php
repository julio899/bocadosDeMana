<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS 
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  -->
  <link href="{{ asset('css/bootswatch.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet">

  <style>
  h1.title{
    font-weight: 200 !important;
    font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
  }
  .f-txt{
    font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;    
  }
  p{
    font-size: 24px;
    font-weight: 300;
    line-height: 1.1;
    display: block;
    font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
    line-height: 1.3;
    text-align: justify;
  }
  ul.recientes li{
    /*list-style: none;*/
  }
  ul.recientes li > a ,ul.recientes li > a.f-txt{
    color: #adadad!important;
    font-style: oblique;
    font-weight: 600;
  }
  ul.recientes li>a.f-txt:hover{
    color: #000!important;
  }
a.navbar-brand{
  font-weight: 200!important;
  font-size: 1.5em;
  text-decoration: none;
  color:#fff;
}
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      @if(session('page')==='blogi')
      <a href="/blog" class="navbar-brand">Bocados de Mana</a>
      @endif
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/blog">Blog</a>
          </li>
        <!--
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Sample Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('../../img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            @if(session('page')==='blog')
            <div class="site-heading">
              <h1 class="title">Bocados de Mana</h1>
              <span class="subheading">Palabra de Dios para tu vida.</span>
            </div>
            @endif

            @if(session('page')==='blogi')
            <div class="post-heading">
              <h1 class="title" >{{$bocado->title}}</h1>
              <!-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2> -->
            </div>
            @endif

        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
@if(session('page')==='blog')
   @yield('content')
@endif

@if(session('page')==='blogi')
  @yield('contenti')
@endif

<hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/clean-blog.min.js') }}"></script>

</body>

</html>
