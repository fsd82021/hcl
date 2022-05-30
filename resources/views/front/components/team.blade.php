<section class="team">
    <div class="container">
        <div class="main-title"><span class="sub-title">{{ $team_page->title }}</span>
            <h2>{{ $team_page->sub_title }}</h2>
        </div>
        <div class="content">
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-6 box">
                        <div class="team-box">
                            <div class="team-top"><a href="#!">
                                    <div class="image"><img class="img-fluid"
                                            data-src="{{ asset($team->main_image) }}" alt="{{ $team->title }}"></div>
                                </a>
                                <ul class="social-link">
                                    <li><a href="{{ $team->facebook }}" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $team->twiter }}" target="_blank"><i
                                                class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="{{ $team->instgram }}" target="_blank"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-details">
                                <h3 class="title">{{ $team->title }}</h3>
                                <p class="position">{{ $team->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
