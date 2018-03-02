$(".link-page").on("click", function () {
    var url = "../controller/" + $(this).attr("id") + ".php";
    var pageToGet = $(this).attr("id") + "-li";
    var id = "#" + pageToGet + " , ." + pageToGet + "-father";
    jQuery.ajax({
        url: url,
        data: 'userID=' + 1,
        method: 'POST',
        success: function (answer) {
            $(".page-content").fadeOut(500, function () {
                jQuery('.page-content').html(answer);
                $(".list-unstyled li").removeClass("active");
                $(id).addClass("active");
            }).fadeIn(500);
        }
    });
});