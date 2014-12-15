$(function () {
    $("#work").on("click", "#workNav .btn", function (e) {
        e.preventDefault();
        var scroller = $("#work").offset();
        var link = $(this).attr("href");
        $("#work").animate({opacity: 0}, 1000);
        $("body,html").animate({scrollTop: scroller.top}, 1000).promise().done(function () {
            $.ajax({
                url: link,
                dataType: "html",
                success: function (html) {
                    var div = $(".mainContent", $(html));
                    var title = $(html).filter('title').text();
                    $("title").text(title);
                    $("#work").html(div);
                    pageLoadAnimate();
                    history.pushState(null, null, link);
                }
            });
        });
    });

    pageLoadAnimate();
    function pageLoadAnimate() {
        $("#work").animate({
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