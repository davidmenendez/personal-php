$(function () {
    $("#project").on("click", "#workNav .btn", function (e) {
        e.preventDefault();
        var loadermessage = setTimeout(function () {
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
    //progress
    function progressFill(value) {
        $(".progressbar").each(function () {
            var self = $(this);
            var filler = self.find(".progressfiller");
            var progressNum = value || filler.data("progress");
            var progress = ((progressNum > 100) ? 100 : progressNum) + "%";
            filler.animate({"width": progress}, 1000);
            var num = self.children('.progressPercentage').find("span");
            $({countNum: num.text()}).animate({countNum: progressNum}, {
                duration: 1000,
                easing: 'linear',
                step: function () {
                    num.text(Math.floor(this.countNum));
                },
                complete: function () {
                    num.text(this.countNum);
                }
            });
        });
    }
    setTimeout(function () {
        progressFill()
    }, 3000);
    $("#resumeDoc").on("click", function(){
        ga('send', 'event', 'DOC Downdload', 'click', "Doc");
    });
    $("#resumePDF").on("click", function(){
        ga('send', 'event', 'Resume Download', 'click', "PDF");
    });
});