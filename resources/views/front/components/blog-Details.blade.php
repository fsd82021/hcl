      <!--single blog-->
      <section class="single-blog">
          <div class="container">
              <div class="content">
                  <div class="row">
                      <div class="col-lg-8">
                          <div class="things-details-content">
                              <div class="image"><img class="img-fluid"
                                      data-src="{{ asset($blog->main_image) }}" alt="{{ $blog->title }}"></div>
                              <div class="details">
                                  <div class="title">
                                      <h3>{{ $blog->title }}</h3>
                                  </div>
                                  <div class="text">
                                    {!! $blog->description !!}
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="side-widget">
                              <div class="other-things">
                                  <div class="title">
                                      <h3>all blogs</h3>
                                  </div>
                                  @php
                                  $url_path = parse_url( URL::full(), PHP_URL_PATH);
                                  $parts = explode("/", $url_path)
                                 @endphp
                                  <ul>
                                      @foreach ($blogs as $blog)
                                      <li class="<?php if ((int)end($parts) == $blog->id) {echo "active"; } else  {echo "";}?>"><a href="{{route('single-blog',$blog->id)}}">{{$blog->title}}</a></li>
                                      @endforeach
                                  </ul>
                              </div>
                              <div class="need-support"
                                  style="background-image:url('/site/images/bgs/sidebar_support.jpg')">
                                  <div class="title">
                                      <h3>{{ $contact_page->title }}</h3>
                                      <p>{{ $contact_page->sub_title }}</p>
                                  </div><a class="btn" href="{{ route('contact') }}">@lang('site.contact')</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!--single blog-->
