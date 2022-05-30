<div class="content">
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up">
                <div class="blogs-box">
                    <div class="details">
                        <ul class="meta">
                            <li class="date"><i class="fa-solid fa-calendar-days"></i>
                                {{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}
                            </li>
                        </ul>
                        <div class="title">
                            <h3><a href="{{ route('single-blog', $blog->id) }}">{{ $blog->title }}</a></h3>
                        </div>
                        <p>{!! substr($blog->description, 0, 210) !!} ...</p><a class="read-more"
                            href="{{ route('single-blog', $blog->id) }}">@lang('site.read_more') <i
                                class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @php
        $route = Route::currentRouteName();
    @endphp
    @if ($route == 'home')
        <div class="blogs-btn"><a class="btn" href="{{ route('blog') }}">@lang('site.more_blog') <i
                    class="fa-solid fa-chevron-right"></i></a></div>
    @endif
</div>
