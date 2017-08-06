var AjaxCart = {
    loadWaiting: false,
    usepopupnotifications: false,
    topcartselector: '',
    topwishlistselector: '',
    flyoutcartselector: '',
    init: function (usepopupnotifications, topcartselector, topwishlistselector, flyoutcartselector) {
        this.loadWaiting = false;
        this.usepopupnotifications = usepopupnotifications;
        this.topcartselector = topcartselector;
        this.topwishlistselector = topwishlistselector;
        this.flyoutcartselector = flyoutcartselector;
    },
    setLoadWaiting: function (display) {
        displayAjaxLoading(display);
        this.loadWaiting = display;
    },
    delproduct: function (id) {
        if (this.loadWaiting != false) {
            return;
        }
        this.setLoadWaiting(true);
        var d = dialog({
            content: '<div class="tip_confirm"><i class="iconfont">ä</i>确定要删除该商品吗？</div>',
            cancel: false,
            cancelValue: '取消',
            cancel: function () {
                AjaxCart.setLoadWaiting(false);
                return;
            },
            okValue: '确定',
            ok: function () {
                $.ajax({
                    cache: false,
                    url: "/shoppingcart/removecartitem",
                    data: { sciId: id },
                    type: 'post',
                    success: function (rep) {
                        if (rep.success) {
                            $("#content").html(rep.html);
                        }
                        AjaxCart.setLoadWaiting(false);
                    }
                });
                return true;
            },
            width: 240
        });
        d.show();
    },
    delproducts: function () {
        if (this.loadWaiting != false) {
            return;
        }
        this.setLoadWaiting(true);
        var ids = [];
        $("input[name=chkitem]:checked").each(function (i, t) {
            ids.push($(this).val());
        });
        if (ids.length == 0) {
            var d = dialog({
                content: '<div class="tip_warn"><i class="iconfont">ã</i>请选择要删除的商品</div>',
                okValue: '确定',
                ok: function () {
                    AjaxCart.setLoadWaiting(false);
                    return true;
                },
                width: 200
            });
            d.show();
            return false;
        }
        ids = ids.join(",");
        var d = dialog({
            content: '<div class="tip_confirm"><i class="iconfont">ä</i>确定要删除这些商品吗？</div>',
            cancel: false,
            cancelValue: '取消',
            cancel: function () {
                AjaxCart.setLoadWaiting(false);
                return;
            },
            okValue: '确定',
            ok: function () {
                $.ajax({
                    cache: false,
                    url: "/shoppingcart/removecartitems",
                    data: { sciIds: ids },
                    type: 'post',
                    success: function (rep) {
                        if (rep.success) {
                            $("#content").html(rep.html);
                        }
                        AjaxCart.setLoadWaiting(false);
                    }
                });
                return true;
            },
            width: 240
        });
        d.show();
    },
    post: function () {
        if (this.loadWaiting != false) {
            return;
        }
        this.setLoadWaiting(true);
        var urladd = "/shoppingcart/updatecartall";
        var formselector = "#cart-summary-form";
        $.ajax({
            cache: false,
            url: urladd,
            data: $(formselector).serialize(),
            type: 'post',
            success: function (rep) {
                if (rep.success) {
                    $("#content").html(rep.html);
                } else {
                    $("#content").html(rep.html);
                    var d = dialog({ content: rep.warn });
                    d.show();
                    setTimeout(function () {
                        d.close().remove();
                    }, 2000);
                }
                AjaxCart.setLoadWaiting(false);
            }
        });
    },
    checkout: function () {
        if ($("#topay").hasClass("topay_ok")) {
            var ids = [];
            $("input[name=chkitem]:checked").each(function (i, t) {
                ids.push($(this).val());
            });
            ids = ids.join(",");
            $.ajax({
                cache: false,
                url: "/shoppingcart/startcheckout",
                data: { sciIds: ids },
                type: 'post',
                success: function (rep) {
                    if (rep.error) {
                        if (rep.url) {
                            window.location.href = rep.url;
                        }
                    }
                    if (rep.success) {
                        window.location.href = rep.url;
                    }
                }
            });
        }
    },
    addproducttocart: function (urladd, formselector) {
        if (this.loadWaiting != false) {
            return;
        }
        this.setLoadWaiting(true);

        $.ajax({
            cache: false,
            url: urladd,
            data: $(formselector).serialize(),
            type: 'post',
            success: this.successprocess,
            complete: this.resetLoadWaiting,
            error: this.ajaxFailure
        });
    },
    successprocess: function (response) {
        if (response.updatetopcartsectionhtml) {
            $(AjaxCart.topcartselector).html(response.updatetopcartsectionhtml);
            if (response.updatetopcartsectionhtml == "1") {
                $(AjaxCart.topcartselector).css("visibility", "visible");
            }
        }
        if (response.updatetopwishlistsectionhtml) {
            $(AjaxCart.topwishlistselector).html(response.updatetopwishlistsectionhtml);
        }
        if (response.updateflyoutcartsectionhtml) {
            $(AjaxCart.flyoutcartselector).replaceWith(response.updateflyoutcartsectionhtml);
        }
        if (response.message) {
            //display notification
            if (response.success == true) {
                //success
                if (AjaxCart.usepopupnotifications == true) {
                    var d = dialog(
                        {
                            title: '',
                            content: response.message,
                            icon: 'ok',
                            width: 340,
                            onshow: function () {
                                $("#dialog_close").click(function () {
                                    d.close().remove();
                                })
                            }
                        });
                    d.show();
                    //displayPopupNotification(response.message, 'ok', true);
                }
                else {
                    //specify timeout for success messages
                    displayBarNotification(response.message, 'ok', 3500);
                }
            }
            else {
                //error
                if (AjaxCart.usepopupnotifications == true) {
                    displayPopupWarn(response.message, null, 3000);
                    //displayPopupNotification(response.message, 'error', true);
                }
                else {
                    //no timeout for errors
                    displayBarNotification(response.message, 'error', 0);
                }

            }
            return false;
        }
        if (response.redirect) {
            location.href = response.redirect;
            return true;
        }
        return false;
    },
    resetLoadWaiting: function () {
        AjaxCart.setLoadWaiting(false);
    },
    ajaxFailure: function () {
        alert('Failed to add the product to the cart. Please refresh the page and try one more time.');
    }
};
