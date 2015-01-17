$(function () {
    $("#project").on("click", "#workNav .btn", function (e) {
        e.preventDefault();
        var loadermessage = setTimeout(function(){
            $("#pageloading").fadeIn();
        }, 3000);
        var scroller = $("#project").offset();
        var link = $(this).attr("href");
        $("#project").animate({opacity: 0}, 1000);
        $("body,html").animate({scrollTop: scroller.top}, 1000).promise().done(function () {
            $.ajax({
                url: link,
                dataType: "html",
                beforeSend: function () {
                    loadermessage;
                },
                success: function (html) {
                    clearTimeout(loadermessage);
                    $("#pageloading").fadeOut();
                    var div = $(".mainContent", $(html));
                    var title = $(html).filter('title').text();
                    $("title").text(title);
                    $("#project").html(div);
                    pageLoadAnimate();
                    history.pushState(null, null, link);
                }
            });
        });
    });
    pageLoadAnimate();
    function pageLoadAnimate() {
        $("#project").animate({
            opacity: 1
        }, 1000);
    }
    $("#navicon").on("click", function () {
        $("#siteHeader").find("nav").slideToggle();
    });

    $(".fancybox").fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        }
    });
});