<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="{{route('homepage')}}">Blog Demo</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('homepage')}}">Anasayfa</a>
        </li>
        @isset($pages)
        @foreach ($pages as $page)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('page',$page->slug) }}">{{$page->title}}</a>
        </li>
        @endforeach
        @endisset
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">İletişim</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Header -->
<!-- vscode hata olarak algılasa da çalışıyor -->
<header class="masthead" style="background-image: url(' @yield('headerBg',asset('/front/img/home-bg.jpg')) ')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h2>@yield('headerTitle', 'Blog Demo')</h2>
          <span class="subHeaderTitle">@yield('subHeaderTitle')</span>
        </div>
      </div>
    </div>
  </div>
</header>