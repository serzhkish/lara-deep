<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">    
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">        
          @foreach($menu as $item)
            <li class="nav-item">
              <a class="nav-link" href="{{ route($item['alias']) }}">{{ $item['title'] }}</a>
            </li>
          @endforeach        
      </ul>
    </div>
  </div>
</nav>