<form action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="create-post">
        {{-- انشاء منشور --}}

        <div class="input-box__text">
            <img src="{{ asset('img/' .Auth::user()->image_profile) }}" alt="" class="create-post__image">
            <label for="create-post">
                <input type="text" name="post" id="create-post "
                    placeholder="What's on your mind, {{Auth::user()->name}}?">
            </label>

            <label class="custom-file-upload" style="width: fit-content; ">
               <b> share</b>
                <button type="submit"></button>
            </label>


        </div>

        <div class="create-post__buttons">
            <div class="create-post__buttons__button">
                <i class="ri-video-add-fill"></i>
                <span>Live Video</span>
            </div>
            <div class="create-post__buttons__button">
                <i class="ri-image-line"></i>
                <label class="custom-file-upload">

                <input type="file" name="media" style="display: none;">

                <span >Photo/video</span>
            </label>
            </div>
            <div class="create-post__buttons__button">
                <i class="ri-emotion-happy-line"></i>
                <span>Feeling/activity</span>
            </div>
        </div>
    </div>
</form>
