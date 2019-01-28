@extends('admin.layout.app')

@section('title','Products')

@section('content')

    <div class="container">
        <h4 class="mi5_h4">MI5 Karaoke System</h4>
        <div class="row product-blade-row1" style="width: 98%; margin-left: auto; margin-right: auto;">
            <div class="col-lg-4 col-md-4 productimg1">
                <a href=""><img src="{{asset('/admin/img/Remote.png')}}" alt="MI5 IMG" class="mi5_product_img1"></a>
                <p class="product_over1">Remote Version</p>
                <div class="row" style="width: 98%; margin-left: auto; margin-right: auto; background: #ffffff80;">
                    <div class="col-xs-6" style="border-right: 1px solid #000;">
                        {{--<a href="{{route('fiveremote')}}" class="detail1" onclick="fivedetail()"><p>Detail</p></a>--}}
                        <a href="#fivedetail" class="detail1"><p>Detail</p></a>
                    </div>
                    <div class="col-xs-6">
                        <a href="#five_remotescreenshot" class="screenshot1"><p>Screenshot</p></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 productimg2">
                <a href=""><img src="{{asset('/admin/img/Tablet.png')}}" alt="MI5 IMG" class="mi5_product_img2"></a>
                <p class="product_over2">Tablet Version</p>

                <div class="row" style="width: 98%; margin-left: auto; margin-right: auto; background: #ffffff50;">
                    <div class="col-xs-6" style="border-right: 1px solid #000;">
                        <a href="" class="detail1"><p>Detail</p></a>
                    </div>
                    <div class="col-xs-6">
                        <a href="" class="screenshot1"><p>Screenshot</p></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 productimg3">
                <a href=""><img src="{{asset('/admin/img/Touchscreen.png')}}" alt="MI5 IMG" class="mi5_product_img3"></a>
                <p class="product_over3">Touchscreen Version</p>

                <div class="row" style="width: 98%; margin-left: auto; margin-right: auto; background: #ffffff50;">
                    <div class="col-xs-6" style="border-right: 1px solid #000;">
                        <a href="" class="detail1"><p>Detail</p></a>
                    </div>
                    <div class="col-xs-6">
                        <a href="" class="screenshot1"><p>Screenshot</p></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="fivedetail">
                <div class="mi5remote-title">
                    <h4>MI5 Remote Version Detail</h4>
                </div>
                <div class="remote_content">
                    <img src="{{asset('/admin/img/page/remoteedit-1.png')}}" alt="mi5Remote">
                </div>
            </div>

            {{--mi5 remoteScreenshot start--}}
            <div id="five_remotescreenshot" style="width: 98%; margin-left: auto; margin-right: auto; margin-top: 50px;">
                <div class="row screenshot_row1">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic1.jpg')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic2.jpg')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>

                <div class="row screenshot_row2">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic3.jpg')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic4.jpg')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>

                <div class="row screenshot_row2">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic5.jpg')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic6.jpg')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>

                <div class="row screenshot_row2">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic7.jpg')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic8.jpg')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection