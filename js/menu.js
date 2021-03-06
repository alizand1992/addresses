/**
 * Created by ali on 7/4/16.
 */
// GLOBALS
var menu_timer = null;


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

function display_profile_options() {
    $(document).ready(function () {
        $("#profile-menu-container").show();
        adjust_buttons();
        adjust_profile_menu_container();
    });
}

function hide_profile_options() {
    menu_timer = setTimeout(function () {
        if (!($("#profile-menu-container").is(":hover") ||
            $("#profile-button").is(":hover"))) {
            $("#profile-menu-container").fadeOut(100);
        }
    }, 10);
}


function clear_timer() {
    if (menu_timer) {
        clearTimeout(menu_timer);
        menu_timer = null;
    }
}