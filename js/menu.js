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

var hideProfileOptions = function hide_profile_options() {
    var profile_container = $("#profile-menu-container");
    var profile_button = $("#profile-button");

    $(document).on("mousemove", function (event) {
        if (not_hover(profile))
    }
        if (!($("#profile-menu-container").is(":hover") ||
            $("#profile-button").is(":hover"))) {
    });

    menu_timer = setTimeout(function () {
        if (!($("#profile-menu-container").is(":hover") ||
              $("#profile-button").is(":hover"))) {
            if (!($("#username").is(":focus") || $("#password").is(":focus"))) {
                if ($("#profile-menu-container")) {
                    $("#profile-menu-container").fadeOut(100);
                }
            }
        }
    }, 10);
}

function within_boundary(object, mode) {
    switch (mode) {
        case 1:

            break;
        default:
            break;
    }
}


function clear_timer() {
    if (menu_timer) {
        clearTimeout(menu_timer);
        menu_timer = null;
    }
}
