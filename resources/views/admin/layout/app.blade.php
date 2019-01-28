<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('admin.layout.head')
  </head>
  <body>

    @include('admin.layout.nav')

    @yield('content')

    @include('admin.layout.footer')



    <script>

        // // Google Map Start
        // var map;
        // function initMap() {
        //     map = new google.maps.Map(document.getElementById('map'), {
        //         center: {lat: -34.397, lng: 150.644},
        //         zoom: 8
        //     });
        // };

        // End Google Map

        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function langFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        };

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        };

        // $(document).ready(function() {
        //     $('.custom-menu').hide();
        //     if(screen.width<1026){//get the screen width
        //         //get element form document
        //         $('.custom-menu').show();//toggle visibility
        //     };
        // });

        // -----------------------------------------------------------------------------------------------------------

        // custom-mobile-menu

        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        };

        function productFunction(){
            document.getElementById("productDrop").classList.toggle("show");
        };

        window.onclick = function(e) {
            if (!e.target.matches('.product_drop')) {
                var productDrop = document.getElementById("productDrop");
                if (productDrop.classList.contains('show')) {
                    productDrop.classList.remove('show');
                }
            }
        };

        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })

    </script>
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"--}}
            {{--async defer>--}}
  </body>
</html>
