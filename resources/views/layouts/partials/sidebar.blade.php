<nav class="navmenu navmenu-inverse navmenu-fixed-left" role="navigation">
<a class="navmenu-brand" href="#">Brand</a>

  <ul class="nav navmenu-nav">
    <li><a href="#">Link</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
      <ul class="dropdown-menu navmenu-nav" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li><a href="#">Separated link</a></li>
        <li><a href="#">One more separated link</a></li>
      </ul>
    </li>
    <li><a href="{{ route('sessions.destroy') }}">Sign out</a></li>
  </ul>
</nav>
