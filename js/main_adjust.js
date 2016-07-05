/**
 * Created by ali on 6/28/16.
 */

function adjust_buttons()
{
    $(document).ready(function () {
        $(".button").each(function () {
            var spanWidth = $(this).first().outerWidth();
            spanWidth += 40;
            $(this).css( 'width', spanWidth + 'px');
        });
    });
}