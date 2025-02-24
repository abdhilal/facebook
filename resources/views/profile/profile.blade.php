@extends('index')
@section('profile')
    @include('left_page')

    <section class="page-content__middle" data-include="views/page-content/content-middle">
        <div class="wrapper">
            <!-- صورة الغلاف المستطيلة -->
            <div class="cover-image">
                <img src="{{ asset('img/' . Auth::user()->image_cover) }}" alt="Cover Image">
            </div>

            <!-- صورة الملف الشخصي الدائرية -->
            <div class="profile-image">
                <img src="{{ asset('img/' . Auth::user()->image_profile) }}" alt="Profile Image" class="rounded-img">
            </div>

            <!-- اسم المستخدم أسفل الصورة الشخصية -->
            <div class="profile-name">
                <h3>{{ Auth::user()->name }}</h3> 
            </div>

            <!-- زر تعديل الملف الشخصي -->
            <div class="edit-profile">
                <button class="edit-profile-btn"><a href="{{ route('edit.profile') }}">تعديل الملف الشخصي</a></button>
            </div>

            <!-- المنشورات -->
            @foreach (Auth::user()->posts as $post)
                <div class="news-feed">


                    <header class="news-feed__header">
                        <div class="news-feed__header__post-userimage">
                            <img src="{{ asset('img/' . Auth::user()->image_profile) }}" alt="User Image">
                        </div>
                        <div class="news-feed__header__post-meta">
                            <div class="news-feed__header__post-meta__name">{{ $post->user->name }}</div>
                            <div class="news-feed__header__post-meta__info">
                                <span class="privacy"><i class="ri-earth-line"></i></span>
                                <div class="date">{{ $post->created_at }}</div>
                            </div>
                        </div>
                    </header>
                    <section class="news-feed__feed">
                        <p class="news-feed__feed__text">{{ $post->post }}</p>
                        @if (!empty($post->media))
                            <img class="news-feed__feed__image" src="{{ asset('img/' . $post->media) }}" width="100%">
                        @endif
                    </section>
                </div>
            @endforeach
        </div>
    </section>

    <section class="page-content__right" data-include="views/page-content/content-right">
        <div class="wrapper">

        @endsection
