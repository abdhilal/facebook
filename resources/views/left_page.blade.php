<section class="page-content__left" data-include="views/page-content/content-left">
    <div class="wrapper">
        @auth
            <ul class="facebook-shortcuts">
                <li class="facebook-shortcuts__shortcut">
                    <i class="ri-user-fill"></i>
                    <span class="facebook-shortcuts__shortcut--text"><a href="{{route("profile")}}">{{Auth::user()->name}}</a></span>
                </li>
                <li class="facebook-shortcuts__shortcut">
                    <i class="ri-group-2-line"></i>
                    <span class="facebook-shortcuts__shortcut--text">Groups</span>
                </li>
                <li class="facebook-shortcuts__shortcut">
                    <i class="ri-movie-line"></i>
                    <span class="facebook-shortcuts__shortcut--text">Watch</span>
                </li>
                <li class="facebook-shortcuts__shortcut">
                    <i class="ri-store-2-line"></i>
                    <span class="facebook-shortcuts__shortcut--text">Marketplace</span>
                </li>

                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <li class="facebook-shortcuts__shortcut">
                        <i class="ri-history-fill"></i>
                        <button type="submit" style="color:red">Log Out</button>
                    </li>
                </form>

            </ul>

        @endauth

        @guest
            <ul class="facebook-shortcuts">
                <li class="facebook-shortcuts__shortcut">
                    <i class="ri-user-fill"></i>
                    <span class="facebook-shortcuts__shortcut--text"><a href="{{route('login')}}">Login</a></span>
                </li>
                <li class="facebook-shortcuts__shortcut">
                    <i class="ri-group-2-line"></i>
                    <span class="facebook-shortcuts__shortcut--text"><a href="{{route('signup')}}">Signup</a></span>
                </li>
            </ul>
        @endguest

    </div>
</section>
