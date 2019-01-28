<div class="header-top-area">
    <div class="container-fluid">
                <div class="custom-logo-area">
                    {{--<a href="#"><img src="{{asset('/admin/img/logo/logo.png')}}" alt="" /></a>--}}
                    <a href="{{route('home')}}"><img src="{{asset('/admin/img/microstack_logo.png')}}" alt="" /></a>
                    <p class="logotext_small" style="font-size: 10px; width: 150px;">T e c h n o l o g y</p>
                </div>
                <div class="custom-header-top-menu">
                    <div class="dropdown">
                        <button onclick="langFunction()" class="dropbtn"><a href="{{route('home')}}">Language <span class="caret"></span></a></button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="{{url('locale/en')}}">English</a>
                            <a href="{{url('locale/ch')}}">Chinese</a>
                            <a href="#contact">Japanese</a>
                        </div>
                    </div>
                </div>
    </div>
</div>


<!-- Start Header Top Area -->
{{--<div class="header-top-area">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-4 col-md-4 lang-col1" >--}}
                {{--<div class="custom-logo-area">--}}
                    {{--<a href="#"><img src="{{asset('/admin/img/logo/logo.png')}}" alt="" /></a>--}}
                    {{--<a href="{{route('home')}}"><img src="{{asset('/admin/img/mi-logo-01.png')}}" alt="" /></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-8 col-md-8 lang-col2" style="width: 170px;">--}}
                {{--<div class="custom-header-top-menu">--}}
                    {{--<div class="dropdown">--}}
                        {{--<button onclick="langFunction()" class="dropbtn">Language <span class="caret"></span></button>--}}
                        {{--<div id="myDropdown" class="dropdown-content">--}}
                            {{--<a href="{{url('locale/en')}}">English</a>--}}
                            {{--<a href="{{url('locale/ch')}}">Chinese</a>--}}
                            {{--<a href="#contact">Japanese</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
{{--<div class="mobile-menu-area">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                {{--<div class="mobile-menu">--}}
                    {{--<nav id="dropdown">--}}
                        {{--<ul class="mobile-menu-nav">--}}
                            {{--<li><a data-toggle="collapse" data-target="#Charts" href="{{route('home')}}">Home</a>--}}
                                {{--<ul class="collapse dropdown-header-top">--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a data-toggle="collapse" data-target="#demoevent" href="#">Products</a>--}}
                                {{--<ul id="demoevent" class="collapse dropdown-header-top">--}}
                                    {{--<li><a href="#">Inbox</a></li>--}}
                                    {{--<li><a href="{{route('product.index')}}"><img src="{{asset('/admin/img/mobile_nav_view1.png')}}" alt="MI5 IMG" class="nav_product1"></a></li>--}}
                                    {{--<li><a href="#"><img src="{{asset('/admin/img/mobile_nav_view1.png')}}" alt="MI5 IMG" class="nav_product2"></a></li>--}}
                                    {{--<li><a href="#"><img src="{{asset('/admin/img/mobile_nav_view2.png')}}" alt="MI5 IMG" class="nav_product3"></a></li>--}}
                                    {{--<li><a href="#"><img src="{{asset('/admin/img/mobile_nav_view2.png')}}" alt="MI5 IMG" class="nav_product4"></a></li>--}}
                                    {{--<li><a href="view-email.html">View Email</a></li>--}}
                                    {{--<li><a href="compose-email.html">Compose Email</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a data-toggle="collapse" data-target="#democrou" href="#">Prices</a>--}}
                                {{--<ul id="democrou" class="collapse dropdown-header-top">--}}
                                    {{--<li><a href="animations.html">Animations</a></li>--}}
                                    {{--<li><a href="google-map.html">Google Map</a></li>--}}
                                    {{--<li><a href="data-map.html">Data Maps</a></li>--}}
                                    {{--<li><a href="code-editor.html">Code Editor</a></li>--}}
                                    {{--<li><a href="image-cropper.html">Images Cropper</a></li>--}}
                                    {{--<li><a href="wizard.html">Wizard</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a data-toggle="collapse" data-target="#demolibra" href="#">Download</a>--}}
                                {{--<ul id="demolibra" class="collapse dropdown-header-top">--}}
                                    {{--<li><a href="flot-charts.html">Flot Charts</a></li>--}}
                                    {{--<li><a href="bar-charts.html">Bar Charts</a></li>--}}
                                    {{--<li><a href="line-charts.html">Line Charts</a></li>--}}
                                    {{--<li><a href="area-charts.html">Area Charts</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a data-toggle="collapse" data-target="#demodepart" href="#">Service</a>--}}
                                {{--<ul id="demodepart" class="collapse dropdown-header-top">--}}
                                    {{--<li><a href="normal-table.html">Normal Table</a></li>--}}
                                    {{--<li><a href="data-table.html">Data Table</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a data-toggle="collapse" data-target="#demo" href="#">Contact</a>--}}
                                {{--<ul id="demo" class="collapse dropdown-header-top">--}}
                                    {{--<li><a href="form-elements.html">Form Elements</a></li>--}}
                                    {{--<li><a href="form-components.html">Form Components</a></li>--}}
                                    {{--<li><a href="form-examples.html">Form Examples</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</nav>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- Mobile Menu end -->
{{--custom Mobile Menu start--}}
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="custom-mobile-menu">
                    <div class="topnav" id="myTopnav">
                        <a href="{{route('home')}}" class="custom-mobile-active"><u>Home</u></a>
                        <a href="#" class="product_drop" onclick="productFunction()"><u>Products</u>
                            <div class="product_dropdown_content" id="productDrop">
                                <a href="{{route('product.index')}}" style="border-top: 1px solid black;"><img src="{{asset('/admin/img/Mi5.png')}}" alt="" style="height: 70px;" class="mobile_mi5"></a>
                                <a href="{{route('product.index')}}" style="border-bottom: 1px solid black;"><p class="p_mobile_mi5" style="height: 70px; margin-bottom: 0px;">Mi5 Karaoke System</p></a>
                                <a href="{{route('product.index')}}" ><img src="{{asset('/admin/img/MI7.png')}}" alt="" style="height: 70px;" class="mobile_mi7"></a>
                                <a href="{{route('product.index')}}" style="border-bottom: 1px solid black;"><p class="p_mobile_mi7" style="height: 70px; margin-bottom: 0px;">MI7 Karaoke System</p></a>
                            </div>
                        <a href="#"><u>Prices</u></a>
                        <a href="{{route('down.view')}}"><u>Download</u></a>
                        <a href="#"><u>Service</u></a>
                        <a href="{{route('contact')}}"><u>Contact</u></a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--custom Mobile Menu End--}}

<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40" style="margin: 3px 0px 7px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nav_title">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro" style="background-color:#ffffff30;">
                    <li class="{{ Request::is('/') ? 'active' : '' }} col-lg-2 col-md-2"><a href="{{route('home')}}"><i class="notika-icon notika-house"></i>@lang('product.home_menu')</a>
                    </li>
                    <li class="{{ Request::is('page/product') ? 'active' : '' }} col-lg-2 col-md-2"><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i>@lang('product.product_menu')</a>
                    </li>
                    <li class="col-lg-2 col-md-2"><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> @lang('product.prices_menu')</a>
                    </li>
                    <li class="col-lg-2 col-md-2"><a href="{{route('down.view')}}"><i class="notika-icon notika-bar-chart"></i> @lang('product.download_menu')</a>
                    </li>
                    <li class="col-lg-2 col-md-2"><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> @lang('product.service_menu')</a>
                    </li>
                    <li class="{{ Request::is('page/contact') ? 'active' : '' }} col-lg-2 col-md-2"><a href="{{route('contact')}}"><i class="notika-icon notika-form"></i> @lang('product.contact_menu')</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content" >
                    <div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
                    </div>
                    <div id="mailbox" class="{{ Request::is('page/product') ? 'active' : '' }} tab-pane in notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <div class="menu_product_img1">
                                <a href="{{route('product.index')}}"><img src="{{asset('/admin/img/Mi5.png')}}" alt="laptop-1" class="product_img_a"></a>
                            </div>

                            <div class="menu_product_img1" >
                                <a href=""><img src="{{asset('/admin/img/MI7.png')}}" alt="laptop-1" class="product_img_b"></a>
                            </div>
                        </ul>
                    </div>
                    <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">

                    </div>
                    <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">

                    </div>
                    <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">

                    </div>
                    <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">

                    </div>
                    <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">

                    </div>
                    <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
