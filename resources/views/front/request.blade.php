@extends('front.layouts.master')
@section('title')
    {{ settings()->website_title }} | {{ trans('site.contact') }}
@endsection
@section('content')
      <!--breadcrumb-->
      <nav class="main-breadcrumb" aria-label="breadcrumb" style="background-image:url('images/bgs/breadcrumb_bg.jpg')">
        <div class="container">
          <div class="breadcrumb-title">
            <h2>request quote</h2>
          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">request quote</li>
            </ol>
          </nav>
        </div>
      </nav>
      <!--breadcrumb-->
      <!--request quote-->
      <section class="request-quote">
        <div class="container">
          <div class="content">
            <!--success message-->
            <div class="submit-success">
              <div class="success-icon"><i class="bi bi-check2-all"></i></div>
              <h3>your request is submitted successfully</h3>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="stepwizard">
                  <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step"><a class="btn btn-rounded active" href="#step-1" type="button"> <i class="bi bi-person"></i></a>
                      <p>Shipper Information</p>
                    </div>
                    <div class="stepwizard-step"><a class="btn btn-rounded" href="#step-2" type="button" disabled="disabled"> <i class="bi bi-box2"></i></a>
                      <p>Package Details</p>
                    </div>
                  </div>
                </div>
                <div class="stepwizard-form">
                  <form role="form">
                    <div class="setup-content" id="step-1">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="First Name">
                            <div class="invalid-feedback">Please select a valid state.</div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="email" placeholder="E-mail">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Company">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Address">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="City">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="ZIP">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Telephone (include country code)">
                          </div>
                        </div>
                      </div>
                      <div class="stepwizard-btn">
                        <button class="btn nextBtn" type="button">Next</button>
                      </div>
                    </div>
                    <div class="setup-content" id="step-2">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Number Of Pieces">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Total Weight (LBS)">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Height (inches)">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Width (inches)">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Depth (inches)">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Commodity">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Message Subject"></textarea>
                          </div>
                        </div>
                        <div class="stepwizard-btn">
                          <button class="btn nextBtn" type="submit">submit now</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--request quote-->
@endsection
