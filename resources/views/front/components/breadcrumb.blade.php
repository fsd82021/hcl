<nav class="main-breadcrumb" aria-label="breadcrumb"  style="background-image: url('{{ asset('site/images/bgs/breadcrumb_bg.jpg') }}')">
    <div class="container">
        <div class="breadcrumb-title">
            <h2>{{$name}}</h2>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">{{trans('site.home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
            </ol>
        </nav>
    </div>
</nav>
