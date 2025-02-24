@extends('index')
@section('post')
    <section class="page-content__middle" data-include="views/page-content/content-middle">
        <div class="wrapper">

            @include('store')

            @include('create')




            <!-- قسم التغذية الإخبارية: يعرض المنشورات الخاصة بالأصدقاء -->
            @foreach ($item as $posts)
                <div class="news-feed">



                    <header class="news-feed__header">
                        <div class="news-feed__header__post-userimage">
                            <!-- صورة صاحب المنشور -->
                            <img src="./assets/images/user-image.jpg" alt="">
                        </div>
                        <div class="news-feed__header__post-meta">
                            <div class="news-feed__header__post-meta__name">Nour Homsi</div>
                            <div class="news-feed__header__post-meta__info">
                                <span class="privacy"><i class="ri-earth-line"></i></span>
                                <div class="date">{{ $posts->created_at }}</div>
                            </div>
                        </div>
                        <!-- كبست التعديل -->
                        <div class="dropdown">
                            <button class="dropbtn">...</button>
                            <div class="dropdown-content">
                                <a href="{{ route('edit', $posts->id) }}">تعديل</a>
                                <a href="{{route('destroy.post',$posts->id)}}">حذف</a>
                            </div>
                        </div>

                    </header>
                    <!--  نص المنشور مع الصورة-->
                    <section class="news-feed__feed">
                        <p class="news-feed__feed__text">{{ $posts->post }}</p>
                        @if (!empty($posts->media))
                            <img class="news-feed__feed__image" src="{{ asset('img/' . $posts->media) }}" width="100%">
                        @endif
                    </section>
                   @include('comments/comment')

                </div>
            @endforeach









        </div>
    </section>
@endsection
