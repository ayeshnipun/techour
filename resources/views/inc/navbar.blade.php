<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<nav class="navbar navbar-expand-md fixed-top cstm">
  <a class="navbar-brand brandcstm" href="#">{{ config('app.name', 'Tec Hour') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link compcol" href="#">About Us<span class="sr-only">(current)</span></a>  
      </li>
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle compcol" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre onclick="document.getElementById('myDropdown').classList.toggle('show');">
          Tutorials<span class="caret"></span>
        </a>
      
        <div class="dropdown-menu" id="myDropdown" aria-labelledby="navbarDropdown">
            <a class="dropdown-item compcol" href="#">Link 1</a>
            <a class="dropdown-item compcol" href="#">Link 2</a>
            <a class="dropdown-item compcol" href="#">Link 3</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<style>
  .dropdown-menu{
    background-color: transparent !important;
  }

  a:hover{
    background-color: transparent !important;
    opacity: 0.2;
  }

  .cstm{
    background-color: transparent !important;
  }

  .compcol{
    color: white !important;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 0.6cm;
  }

  .dropdown-menu:hover{
    color: transparent !important;
  }

  .brandcstm{
    color: white !important;
    font-size: 0.8cm;
  }

  .navbar-nav > li{
    padding-left:30px;
    padding-right:30px;
  }
</style>
<!-- navbar-dark bg-dark  -->