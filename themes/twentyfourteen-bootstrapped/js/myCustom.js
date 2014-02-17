//Keeping things sepparate incase I ever update my bootstrap.js I don't want to lose my customizations.

(function () {
	var wpAdminBar = document.getElementById('wpadminbar');

	if (!!wpAdminBar) {
		console.log("ysy");
	    (function () {
	    var navBar = jQuery('.navbar-fixed-top')[0];
	    navBar.style.marginTop = '32px';
	    }());
	}
}());