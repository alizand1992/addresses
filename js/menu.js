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
            if (!($("#username").is(":focus") || $("#password").is(":focus"))) {
                if ($("#profile-menu-container")) {
                    $("#profile-menu-container").fadeOut(100);
                }
            }
        }
    }, 10);
}


function clear_timer() {
    if (menu_timer) {
        clearTimeout(menu_timer);
        menu_timer = null;
    }
}

function load_profile_menu() {
    $(document).ready(function() {
        if ($("#hash_id").val().trim() == "")
            return;

        $.ajax({
            url: "html/profile_page.html"
        })
        .done(function (response) {
            var res = response.responseText.trim();
            if (res == "") {
                window.alert("There was an error loading the profile menu.\n" +
                    "Please try agail later.");
                return;
            }

            $.ajax({
                url: "process/menu/load_admin_user_menu.php"
            })
            .done (function (response) {
                var res = response.responseText.trim();
                if (res == NOT_SIGNED_IN) {
                    window.alert("There are no valid users logged in.");
                    window.location.href = "/";
                    return;
                }

                $("#profile-menu-container").innerHTML = res;
            });
        });
    });
}