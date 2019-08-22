<!-- Navigation -->
@if($data['show'])

  <nav id="{{ $id ?? 'main-nav'}}" class="navbar navbar-expand {{ $data['position'] }}">
  @if($data['brand']['show'])
    <div class="navbar-brand">
      @include ('toolbox.logoPlaceHolder',[
      'link' => 1,
      'height' => 48,
      'width' => 48  
      ])
    </div> 
  @endif

  <div class="navbar-nav ml-auto">
   private function nav($data['link'], $list = [] ){
    @foreach($data['link'] as $item => $object)
      @if($object['type'] == 'menuitem')
      <a class="btn btn-lg nav navbar-nav nav-link" href="{{ $object['url'] }}">{{ $item }}</a>
      @elseif($object['type']=='submenu')
      <ul class="nav navbar-nav">
      <!-- recursive loops -->
      <li class="active"><a class="btn btn-lg nav-link" href="">{{ $item }}</a>
        $list[$item] = $this->nav($data['link'], $list);
      </li>
      <ul>
      @endif
    @endforeach
  }
  </div>
  </nav>
@endif