/**
 * Created by ali on 7/23/16.
 */

function run_website_info() {
    $.ajax({
        method: "POST",
        url: "/xml/website_info/website_info.xml"
    })
        .done(function (xml) {
            $xml = $(xml);
            document.title = $xml.find("title").text();
    });
}