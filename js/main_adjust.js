/**
 * Created by ali on 6/28/16.
 */

function adjust_buttons()
{
    $(document).ready(function () {
        $(".button").each(function () {
            var spanWidth = $(this).children("span").outerWidth() + 20;
            $(this).css( 'width', spanWidth + 'px');
        });
    });
}

function adjust_profile_menu_container() {
    var position = $("#profile-button").offset();
    position.top += 45;
    position.left += 45;
    var right = $(document).width() - position.left;
    $("#profile-menu-container").css({
        top: position.top + "px",
        right: right + "px"
    });
}