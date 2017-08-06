$(function () {

    $('#header_mymember').hover(function () {
        $(this).toggleClass('hover');
    });

    $('#header_guanzhu').hover(function () {
        $(this).toggleClass('hover');
    });
    $("#nav li").mouseover(function () { $(this).find('.drop-down').stop().css("display", "block"); });
    $("#nav li").mouseout(function () { $(this).find('.drop-down').fadeOut(200); });

    var itime;
    $('#header_cart').mouseenter(function () {
        if (itime != "") {
            clearTimeout(itime);
        }
        $(this).addClass("head_cart_hover");
    }).mouseleave(function () {
        itime = setTimeout(function () {
            $('#header_cart').removeClass("head_cart_hover")
        }, 500);
    });
    console.log("\u6613\u793e\u7f51\u7edc\u7535\u5546\u65b9\u6848\u6280\u672f\u652f\u6301\u0020\u0068\u0074\u0074\u0070\u003a\u002f\u002f\u0077\u0077\u0077\u002e\u0075\u0072\u0073\u0065\u006c\u0065\u0063\u0074\u002e\u0063\u006f\u006d");
    //右侧浮动导航高度	

    //头部导航经过效果
    $('#main_nav').hover(function () {
        $(this).toggleClass('main_cate_hover');
    });

    $('#g_sidebar li').hover(function () {
        $(this).toggleClass('hover');
    });

    $('#g_sidebar .back2top').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    })

    $('#g_sidebar').height($(window).height());
});

function addToFav() {
    var a = window.location, b = document.title;
    document.all ? window.external.AddFavorite(a, b) : window.sidebar && window.sidebar.addPanel ? window.sidebar.addPanel(b, a, "") : alert("\u5bf9\u4e0d\u8d77\uff0c\u60a8\u7684\u6d4f\u89c8\u5668\u4e0d\u652f\u6301\u6b64\u64cd\u4f5c!\n\u8bf7\u60a8\u4f7f\u7528\u83dc\u5355\u680f\u6216Ctrl+D\u6536\u85cf\u672c\u7ad9\u3002")
};


$(function () {
    var href = location.href;
    if (href.indexOf("/news-") == -1) {
        //head-fix
        $(window).scroll(function () {
            if ($(window).scrollTop() > 40) {
                if (!$(".header").hasClass("header-fix")) {
                    $(".header").addClass("header-fix");
                }
            } else {
                $(".header").removeClass("header-fix");
            }
        });
    }
});