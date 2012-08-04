//Veginator JavaScript. Assumes JQuery integration

$.fn.vegSprintf = function(format, etc) {
    var arg = arguments;
    var i = 1;
    return format.replace(/%((%)|s)/g, function (m) { return m[2] || arg[i++] })
}


$.fn.vegHome = function(){
                $("#Home").click(function () {
                        window.location.href = "/mainpage.html";             
                });
};

// Redirects automatically to logon page should we not be authenticatefd.
$.fn.vegIsAuthenticated = function(){
    // Facebook API integration
    window.fbAsyncInit = function() {
        FB.init({
            appId      : 417803644926487, // App ID
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
        });


        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                // Authorized
            } else if (response.status === 'not_authorized') {
                // the user is logged in to Facebook, 
                // but has not authenticated your app
                window.location.href = "/default.html";
            } else {
                // the user isn't logged in to Facebook.
                window.location.href = "/default.html";
            }
        });
    };
};

$.fn.vegInitialize = function(){
    $().vegHome();

  // Load the SDK Asynchronously
    (function(d){
        var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js";
        d.getElementsByTagName('head')[0].appendChild(js);
    }(document));

};
