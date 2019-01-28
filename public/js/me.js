// function fivedetail(){
//     // document.getElementById("fivedetail").style.display = "block";
//     var x = document.getElementById("fivedetail");
//     if (x.style.display === "none") {
//         x.style.display="block";
//     }else{
//         x.style.display="none";
//     }
//
// }

$(document).ready(function(){
    $(".detail1").click(function(){
        $("#five_remotescreenshot").hide();
        $("#fivedetail").show();
    });


    $(".screenshot1").click(function () {
        $("#fivedetail").hide();
        $("#five_remotescreenshot").show();
    });

    $(".mi5_product_img1").click(function () {
        $("#fivedetail").hide();
        $("#five_remotescreenshot").hide();
    });

});