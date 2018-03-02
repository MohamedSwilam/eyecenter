$(".btn-dropdown").on("click", function () {
    $(".btn-dropdown-menu").toggleClass("show");
});

$(".btn-dropdown-menu-item").on("click", function () {
    $(".btn-dropdown").html($(this).html());
    $(".btn-dropdown-menu").toggleClass("show");
});

$(".edit-employee-table tr").on("click", function () {
    if (!$(this).hasClass("no-action")) {
        var userID = $(this).attr("id");
        jQuery.ajax({
            url: "../controller/employee-controller.php",
            data: {
                to: "edit",
                userID: userID
            },
            method: 'POST',
            success: function (answer) {
                $(".block").fadeOut(500, function () {
                    $('.block2').html(answer).fadeIn(500);
                    $(".btn-edit-employee-cancel").on("click", function (e) {
                        e.preventDefault();
                        $('.block2').fadeOut(500, function () {
                            $(".block1").fadeIn(500)
                        });
                    });
                });
            }
        });
    }
});

$(".delete-employee-table tr").on("click", function () {
    if (!$(this).hasClass("no-action")) {
        var userID = $(this).attr("id");
        jQuery.ajax({
            url: "../controller/employee-controller.php",
            data: {
                to: "delete",
                userID: userID
            },
            method: 'POST',
            success: function (answer) {
                $(".block").fadeOut(500, function () {
                    $('.block2').html(answer).fadeIn(500);
                    $(".btn-delete-employee-cancel").on("click", function (e) {
                        e.preventDefault();
                        $('.block2').fadeOut(500, function () {
                            $(".block1").fadeIn(500)
                        });
                    });
                });
            }
        });
    }
});

$(".show-employee-table tr").on("click", function () {
    if (!$(this).hasClass("no-action")) {
        var userID = $(this).attr("id");
        jQuery.ajax({
            url: "../controller/employee-controller.php",
            data: {
                to: "show",
                userID: userID
            },
            method: 'POST',
            success: function (answer) {
                $(".block").fadeOut(500, function () {
                    $('.block2').html(answer).fadeIn(500);
                    $(".btn-show-employee-back").on("click", function (e) {
                        e.preventDefault();
                        $('.block2').fadeOut(500, function () {
                            $(".block1").fadeIn(500)
                        });
                    });
                });
            }
        });
    }
});