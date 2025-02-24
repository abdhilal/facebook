<section class="page-content__right" data-include="views/page-content/content-right">
    <div class="wrapper">





        <h4 class="seperator">uesrs login</h4>



        <div class="facebook-contacts">
            {{$x=null}}
@foreach ($post as $users )

         @if($users->user->name!==$x)
            <div class="facebook-contacts__contact">
                <img src="{{ asset('img/' .$users->user->image_profile) }}" alt=""
                    class="facebook-contacts__contact--image">
                <div class="facebook-contacts__contact--text">
                    <a href="{{route('profiles',$users->user->id)}}"><span>{{$x=$users->user->name}}</span></a>




                </div>
            </div>
            @endif

     @endforeach
