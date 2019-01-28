@extends('admin.layout.app')

@section('title','Home')
@section('content')

<div class="container" id="home-main">
  <div class="row home_row_above_a" style="width: 98%; margin-left: auto; margin-right: auto;">
        <div class="col-lg-8 col-md-8 col-sm-8 home_side_content">
                  <h3 class="mi_title1">Microstack Technology Co.,ltd </h3><br>
                  <div class="company_text1">
                          <p class="p1">Welcome to Microstack Co.ltd<br>
                              Microstack is a software development company with the mission of providing innovative services and vision of serving clients.
                              Microstack is established in 2012 and has become  a dynamic and fast-moving company in software development in mynamar.
                              We specialize in desktop applications, mobile applications  and embedded applications development.<br><br>

                              Please visit around the our website to know more about our services and solutions.</p>
                  </div>
        </div>

        <div class="col-lg-4 col-md-4 home_side_col1">
            <a href=""><img src="{{asset('/admin/img/cover_a.png')}}" alt="laptop-1" class="home_side_img1"></a>
        </div>
  </div>
  <div class="row home_second_row" style="width: 96%; margin-left: auto; margin-right: auto;">
            <h3 class="mi5_a">Karaoke Software</h3>

      <div class="row kra_img1">
          <div class="col-lg-6 col-md-6">
              <img src="{{asset('/admin/img/HomePagedata1s.png')}}" alt="Karaoke IMG" class="home_kara1">
          </div>
          <div class="col-lg-6 col-md-6">
              <img src="{{asset('/admin/img/HomePagedata2s.png')}}" alt="Karaoke IMG" class="home_kara2">
          </div>
      </div>
  </div>
</div>

@endsection
