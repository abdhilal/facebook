<div>
    <span class="hover-text">
        Comments  {{$posts->comments->count();}}
        <div class="popup">

            @foreach ($posts->comments as $coo )
            <div class="comments">
                <div class="comment">
                    <img src="{{ asset('img/' .$coo->user->image_profile) }}" class="avatar" alt="Avatar">
                    <div class="text">
                        <span class="username">{{$coo->user->name}}</span>
                        <p>{{$coo->comment}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </span>
</div>
