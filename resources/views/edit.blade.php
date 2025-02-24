@extends('header')

<div class="news-feedd" >




    <header class="news-feed__header">
        <div class="news-feed__header__post-userimage">
            <!-- صورة صاحب المنشور -->
            <img src="./assets/images/user-image.jpg" alt="">
        </div>

        <div class="news-feed__header__post-meta">
            <div class="news-feed__header__post-meta__name">Nour Homsi</div>
            <div class="news-feed__header__post-meta__info">
                <span class="privacy"><i class="ri-earth-line"></i></span>
                <div class="date">{{ $post->created_at }}</div>
            </div>
        </div>
    </header>

    <section class="news-feed__feed">
    <!--  نص المنشور مع الصورة-->
    <form action="{{route('update',$post->id)}}" method="POST" enctype="multipart/form-data">

        @csrf


        <p class="news-feed__feed__text">
        <input type="text" name="post" value="{{ $post->post }}">
         </p>
        <label class="custom-file-upload">
            اضف صورة
            <input type="file" name="media" style="display: none; ">
        </label>

        <label class="custom-file-upload">
            Update
         <button type="submit"></button>
         </label>

        </form>


        @if (!empty($post->media))
            <img class="news-feed__feed__image " src="{{ asset('img/' . $post->media) }}" width="100%">
        @endif
    </section>


</div>


{{-- <form action="{{route('update',$post)}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <input type="text" name="post">
    <input type="file" name="media">
<button type="submit">submit</button>
</form> --}}
