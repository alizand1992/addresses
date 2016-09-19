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

window.onkeyup = function (e) {
    var key = e.keyCode ? e.keyCode : e.which;

    if (key == 13) {
        if ($("#login-button").is(":visible")) {
            login();
        }
    }
}

function login() {
    var username = $("#username").val();
    var password = $("#password").val();

    if (username.trim() == "" || password.trim() == "") {
        window.alert("Please enter both username and password.");
        return;
    }

    $.ajax ({
        url: "process/users/login.php",
        date: {
            username: username,
            password: password
        }
    })
    .done (function (response) {
        var res = response.responseText.trim();
        if (res == INCORRECT_USER_PASS) {
            window.alert("The username or password was incorrect.");
            $("#username").val("");
            $("#password").val("");
        } else {
            $("#hash_id").val(res);
            load_profile_menu();
        }
    });
}