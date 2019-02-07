$(document).ready(function() {
    var div_serial;
    var div_id;
    var div_sq_id;

    var tags = document.querySelectorAll(".accept-img");
    for(var i = 0; i < tags.length; i++) {
        tags[i].addEventListener("input", function() {
            div_serial = $(this).attr("data-serial");
            div_id = "#edit_" + div_serial;
            $(div_id).addClass("uploaded");
        });
    }

    var tags_sq = document.querySelectorAll(".accept-img-sq");
    for(var i = 0; i < tags_sq.length; i++) {
        tags_sq[i].addEventListener("input", function() {
            div_serial = $(this).attr("data-serial");
            div_id = "#edit_sq_" + div_serial;
            $(div_id).addClass("uploaded");
        });
    }
});
