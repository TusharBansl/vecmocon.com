<main class="wrap">
  <section class="content">
      <h1>{{ $code }}</h1>
      <h4>{{ $msg }}</h4>
      @isset($link)
      @if($link)
      <small>return to <a href="/">home page</a>.</small>
      @endif
      @endisset
  </section>
</main>