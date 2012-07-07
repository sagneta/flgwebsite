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


$.fn.vegInitialize = function(){
    $().vegHome();

};
