
<div data-include="views/nav">
    <nav class="nav">
        @include('search')
        <div class="nav__middle">
            <div class="facebook-icons">
                <div class="facebook-icons__icon active"><a href="{{route('show')}}"><i class="ri-home-fill"></i></a></div>
                <div class="facebook-icons__icon"><i class="ri-flag-2-line"></i></div>
                <div class="facebook-icons__icon"><i class="ri-movie-line"></i></div>
                <div class="facebook-icons__icon"><i class="ri-group-2-line"></i></div>
                <div class="facebook-icons__icon"><i class="ri-microsoft-line"></i></div>
            </div>
        </div>

        <div class="nav__right">
            <div class="facebook-services">
                <div class="user-icon">
                    <img src="{{ asset('img/' . Auth::user()->image_profile) }}" alt="user image" class="img-rounded">
                </div>
                <div class="facebook-services__service"><i class="ri-grid-fill"></i></div>
                <div class="facebook-services__service"><i class="ri-messenger-fill"></i></div>
                <div class="facebook-services__service"><i class="ri-notification-4-fill"></i></div>
                <div class="facebook-services__service"><i class="ri-arrow-down-s-fill"></i></div>
            </div>
        </div>
    </nav>
</div>
