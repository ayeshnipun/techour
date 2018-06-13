<link rel="stylesheet" href="css/app.css">

<div id="mySidenav" class="sidenav">
    <a href="/posts">Posts</a>
    <a href="/comments">Comments</a>
    <a class="" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </div>
  
  <!-- Use any element to open the sidenav -->
  
  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
  

<script>
    /*
$(function() {
    var $menu = $('#mySidenav'), 
        $target = $('#main');

    $menu.on('click', '> a', function(event) {
        var $this = $(this);
        event.preventDefault();
        $target.load($this.attr('href'));
    });
}); */
</script>
                
           
<style>
    .sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-image: url('img/sidebar2.png') !important;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Page content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none !important;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #f1f1f1;
}

.namebtn{
    position: relative;
    top: 0;
    font-size: 36px;
    margin-left: 50px;
}

/* Position and style the close button (top right corner) */


/* Style page content - use this if you want to push the page content to the right when you open the side navigation */


/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>



