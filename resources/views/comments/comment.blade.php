<footer class="news-feed__footer">
    <div class="news-feed__footer__reactions">
        <i class="ri-thumb-up-fill"></i>
        <i class="ri-heart-fill"></i>
        <i class="ri-emotion-happy-fill"></i>
    </div>
    <div class="news-feed__comments">
                    @include('comments/show_com')
    </div>
</footer>

<form action="{{route('create.comment',$posts->id)}}" method="POST">
    @csrf
    <div class="news-feed__comment-box">
        <div class="input-box__text">

            <label for="create-comment">
                <input type="text" id="create-comment" placeholder="Comment as Nour?" name="comment">
            </label>

            <label class="custom-file-upload" style="width: fit-content">
                Submit
                <button type="submit"></button>
            </label>

        </div>

    </div>
</form>

