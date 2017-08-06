
var indexFn = {};
//焦点图
indexFn.switchable = function(){
    var boxDiv = $("#index-slide");
    boxDiv.switchable({
        triggers: boxDiv.find(".trigger-box a"),
        panels: "li",
        effect: "fade",
        interval: 5,
        autoplay: !0,
        prev: $("#slide_prev"),
        next: $("#slide_next")
        //beforeSwitch: function (b, c) {a(c)}
    })
};

//60秒闪购
indexFn.buy60sSilde = function() {
    var slideDiv = $("#buy60s_silde");  
    slideDiv.switchable({
        triggers: $("#buy60s_trig").find('a'),
        panels: slideDiv.find("ul"),
        effect: "scrollLeft",
        triggerType: "click",
        prev: $("#buy60s_prve"),
        next: $("#buy60s_next"),
        api: !0,
/*        onSwitch: function (a, b) {
            k["ul" + b] !== !0 && d(b)
        }*/
    });
    $("#buy60s_main").on("mouseenter", function () {
        $(this).addClass("buy60s_ishover");
    }).on("mouseleave", function () {
        $(this).removeClass("buy60s_ishover");
    })
};

//闪购\热门活动 倒计时
/*
indexFn.flashTimeDown = function (str) {
    var timer = null,
        e = parseInt(str / 1000),
        f = $("#buy60s_timer").find("em").eq(0)[0],
        h = $("#buy60s_timer").find("em").eq(1)[0];

    function fn() {
        var b = "", c = [];
        return 0 > e ? clearInterval(timer) : (b = 10 > e ? "0" + e : e, b = "" + b, c = b.split(
            ""), f.className = "s" + c[0], h.className = "s" + c[1], void e--)
    }

    timer = setInterval(fn, 1000);
    fn();
}; */

indexFn.hotTimeDown = function ($id) {
    $id.find("li").each(function () {
        var This = $(this),
            timeDiv = This.find(".time"),
            endTime = timeDiv.data("time");
        timeDownFn({
            elem: timeDiv,
            endTime: endTime,
            endFunc: function () {
                timeDiv.html("特卖已结束")
            }
        })
    })
}

//楼层浮动导航
indexFn.toFixNav = function() {
    var anchors = $(".anchor");
    var len = anchors.length;
    var arr = [];
    var fix = $("#floor_nav");
    var fixLi = $("#floor_nav li");
    var num = 550;
    //遍历锚点  
    for (var i = 0; i < len; i++) {
        arr.push($(anchors[i]));
    }

    //点击事件
    for (var i = 0; i < len; i++) {
        fixLi.eq(i).click((function(k) {
            return function() {
                $("html, body").animate({ scrollTop: arr[k].offset().top - 50 }, 600);
                return false;
            };
        })(i));
    }

    //fixLi.mouseover(function() {
        //$(this).removeClass("current");
    //});

    function update() {
        var scrollH = $(window).scrollTop();
        if (scrollH > 500) {
            fix.fadeIn();
        } else {
            fix.fadeOut();
        }
        //console.log(scrollH, $(document).height()-900);
        if (scrollH > $(document).height()-870) {
            fix.css({ "top": "auto", "bottom": "580px", "margin-top": "0" });
        } else {
            fix.css({ "top": "50%", "bottom": "auto", "margin-top": "-146px" });
        }

        for (var i = 0; i < len; i++) {
            var mdHeight = arr[i].offset().top - 150;
            if (mdHeight < scrollH) {
                var j = i + 1;
                navon(j);
            }
        }
    }

    //高亮导航菜单  
    function navon(id) {
        fixLi.removeClass("current");
        fix.find("li.f0" + id).addClass("current");
    }

    //绑定滚动事件  
    $(window).bind("scroll", update);

};

$(function () {

    indexFn.toFixNav();
    indexFn.switchable();
    indexFn.buy60sSilde();
    //indexFn.flashTimeDown(6000);
    //indexFn.hotTimeDown($("#hot_active"));
    indexFn.hotTimeDown($("#hot_items"));

});

