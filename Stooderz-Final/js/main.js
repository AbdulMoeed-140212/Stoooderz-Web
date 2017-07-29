$(document).ready(
            function() {
                $('#formUp').hide();
                $(window).scroll(function() {

                    if ($(this).scrollTop() > 250) {
                        $('#formUp').slideDown();
                    } else {
                        $('#formUp').slideUp();
                    }

                });
                if(!$("#testing").is(":hidden")){
                    $(".carousel .item").css("height","200px");
                    $(".carousel-inner > .item > img").css("height","200px");
                    $(".search").css("height","200px");
                }

            }
        );