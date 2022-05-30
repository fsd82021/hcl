      <!--partners-->
      <section class="partners">
          <div class="container">
              <div class="content">
                  @foreach ($partners as $partner)
                      <div class="item"><img class="img-fluid" data-src="{{asset($partner->main_image)}}"
                              alt="image"></div>
                  @endforeach
              </div>
          </div>
      </section>
      <!--partners-->
