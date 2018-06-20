
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

<?php
$navigation=[
        'welcome'=> route('home'), 
        'login'=> route('auth.login'), 
        'logout'=> '', 
        'carreers'=> route('carreers'), 
        'about'=> route('about')
    ];
?>
        @foreach($navigation as $name => $url)


          @if( 
              ($name != 'logout' && $name != 'login' ) 
            || 
              ( Auth::user() && $name=='logout' ) 
            || 
              ( !Auth::user() && $name=="login")  
            )
        
            <li class="nav-item">
                <a 
                    class="nav-link {{ (url()->current() == $url) ? 'active'  : '' }}" 
                    href="{{$url}}">
                    {{$name}}
                </a>
            </li>

          @endif

        @endforeach


    
    </ul>
  </div>
</nav>
