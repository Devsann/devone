@extends('admin.layout.app')

@section('title','Contact')

@section('content')

    <div class="container">
        <h4 class="mi5_h4">Contact Us</h4>
        <div class="row contact_row1" style="width: 98%; margin-left: auto; margin-right: auto;">
            <div class="col-lg-4 col-md-4 contact_img1">
                <img src="{{asset('/admin/img/page/MDY_addressRe.png')}}" alt="" style="margin-top: 6px;">
                 {{--360 x 288--}}
            </div>
            <div class="col-lg-4 col-md-4 contact_text1">
                <img src="{{asset('/admin/img/MDY_address.png')}}" alt="" style="margin-top: 6px;">
            </div>
            <div class="col-lg-4 col-md-4 contact_map1">
                <div class="g_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.6205312813395!2d96.10670631536524!3d21.949134985507076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDU2JzU2LjkiTiA5NsKwMDYnMzIuMCJF!5e0!3m2!1sen!2smm!4v1547872776722" width="300" height="260"></iframe>
                </div>
            </div>
        </div>

        <div class="row contact_row2" style="width: 98%; margin-left: auto; margin-right: auto;">
            <div class="col-lg-4 col-md-4 contact_img2">
                <img src="{{asset('/admin/img/page/YGN_addressRe.png')}}" alt="" style="margin-top: 6px;">
            </div>
            <div class="col-lg-4 col-md-4 contact_text2">
                <img src="{{asset('/admin/img/YGN_address.png')}}" alt="" style="margin-top: 6px;">
            </div>
            <div class="col-lg-4 col-md-4 contact_map2">
                <div class="g_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d954.8479393982232!2d96.1810019284986!3d16.806910381198964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecc59c9f7a59%3A0xbe55137eba5cf8fd!2sMicrostack!5e0!3m2!1sen!2smm!4v1547888380001" width="300" height="260"></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection