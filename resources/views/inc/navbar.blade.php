<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

<nav class="navbar navbar-expand-md fixed-top cstm">
  <a class="navbar-brand brandcstm" href="/">{{ config('app.name', 'Tec Hour') }}</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
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
  .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}
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
    padding-left: 30px !important;
  }

  .navbar-nav > li{
    padding-left:30px;
    padding-right:30px;
  }

  .btncstm{
  }
</style> 
<!-- navbar-dark bg-dark  -->