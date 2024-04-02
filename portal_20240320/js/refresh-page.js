var body = document.body;
var str = body.innerText;

if ( str.indexOf('HTMLPurifier.autoload.php') > -1) {
	location.reload();
}