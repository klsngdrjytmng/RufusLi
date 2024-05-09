function ShowHomePage(){
    document.getElementById('Home').style.display = "block";
    document.getElementById('Take-Attendance').style.display = "none";
}

function TakeAttendance(){
    document.getElementById('Take-Attendance').style.display = "block";  
    document.getElementById('Home').style.display = "none";
}

function domReady(fn) {
	if (
		document.readyState === "complete" ||
		document.readyState === "interactive"
	) {
		setTimeout(fn, 1000);
	} else {
		document.addEventListener("DOMContentLoaded", fn);
	}
}

domReady(function () {

	// If found you qr code
	function onScanSuccess(decodeText, decodeResult) {
		alert("You Qr is : " + decodeText, decodeResult);
	}

	let htmlscanner = new Html5QrcodeScanner(
		"my-qr-reader",
		{ fps: 10, qrbos: 250 }
	);
	htmlscanner.render(onScanSuccess);
});