<div class="menu">
  @foreach($menu as $item)
    <div class="menu-items">
      <a class="menu-items-a" href="{{ route($item['alias']) }}">{{ $item['title'] }}</a>
    </div>
  @endforeach
</div>