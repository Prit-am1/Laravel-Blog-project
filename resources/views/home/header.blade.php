<div class="header_main">
    <div class="mobile_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo_mobile"><a href="#"><img src="images/logo.png"></a></div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
        <div class="menu_main">
            <ul>
                <li class="active"><a href="#">Home</a></li>

                @if(Route::has('login'))
                @auth
                <li><x-app-layout>

                    </x-app-layout></li>

                    <li><a href="{{url('create_post')}}">Create Post</a></li>
                    <li><a href="{{url('my_post')}}">My Post</a></li>
                @else
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
                @endauth
                @endif
            </ul>
        </div>
    </div>
</div>