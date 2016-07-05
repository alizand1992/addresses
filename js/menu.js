/**
 * Created by ali on 7/4/16.
 */

function load_menu(hash) {
    if (hash == "")
        hash = 0;
    $(document).ready(function () {
        load_top_menu(hash);
    });
}

function load_top_menu(hash) {
    $.ajax({
        method: "POST",
        url: "/php/menu/top_menu.php",
        data: {
            hash: hash
        }
    })
        .done(function (res) {
            $("#top-menu").append(res);
            adjust_buttons();
        });
}

function load_page(link) {
    window.location.href = link;
}