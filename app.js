var app = angular.module("namntx", ['ngRoute', 'ngSanitize']);

app.config(function ($locationProvider) {
    $locationProvider.html5Mode(true).hashPrefix('!');
});
app.config(['$routeProvider', function ($routeProvider) {

    $routeProvider
        .when('/', {
            templateUrl: 'google_serp.php'
        })
        .when('/googleserp', {
            templateUrl: 'google_serp.php'
        })
        .when("/countcharacter", {
            templateUrl: "countcharacter.php"
        })
}])



function getdata(){
            $.ajaxPrefilter(function (options) {
                if (options.crossDomain && jQuery.support.cors) {
                    var http = (window.location.protocol === 'http:' ? 'http:' : 'https:');
                    options.url = http + '//cors-anywhere.herokuapp.com/' + options.url;
                }
            });
        var urlToGet = document.getElementById("gURL").value;
	$.ajax({
            type: 'GET',
        url: urlToGet,
		success:function(response) {
            function getMetaContent(propName) {
                var metas = $(response).filter('meta');
                for (i = 0; i < metas.length; i++) {
                    if (metas[i].getAttribute("name") == propName) {
                        return metas[i].getAttribute("content");
                    }
                }
                return "";
            } 
			var desc = getMetaContent("description");
			var title = $(response).filter('title').text();
			$("#gTitle").val(title).trigger('input');
			$("#gDesc").val(desc).trigger('input');
		},
		error:function(jqXHR, statusText) {
            $("#gTitle").val('Failed to get data').trigger('input');
        $("#gDesc").val('The server returned an error: ' + jqXHR.status + ' "' + jqXHR.statusText + '"').trigger('input');
		}
	});
};

