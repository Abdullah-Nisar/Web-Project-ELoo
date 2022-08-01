<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}

?>

<style>
  li {
    transition: 300ms;
  }
  li:hover{  
    background-color: #18636e;
  }
</style>
<nav class="navbar navbar-default fixed-top" style="margin-bottom:0 !important; padding: 10px; background-color: #2F8F9D;">
    <div class="container-fluid" style="display: flex; align-items: center">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a style="color: #fff" class="navbar-brand" href="/">ELoo</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a style="color: white" href="/">Home</a></li>
          <li><a style="color: white" href="/myorders">Orders</a></li>
          <li><a style="color: white" href="/testimonials">Testimonials</a></li>
          <li><a style="color: white" href="/partners">Partners</a></li>
          <li><a style="color: white" href="/about">About</a></li>
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a style="color: white" href="/cartlist">cart({{$total}})</a></li>
          @if(Session::has('user'))
          <li class="dropdown">
            <a style="color: white" class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a style="color: white" href="/login">Login</a></li>
          <li><a style="color: white" href="/register">Register</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>