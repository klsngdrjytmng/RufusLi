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
    let htmlscanner = null; // Declare htmlscanner variable outside the scope

    // Function to handle successful QR code scan
    function onScanSuccess(decodeText, decodeResult) {
        alert("Your QR code is: " + decodeText);
    }

    // Function to start QR code scanning
    function startScan() {
        if (!htmlscanner) {
            htmlscanner = new Html5QrcodeScanner(
                "my-qr-reader",
                { fps: 10, qrbos: 250 },
                /* verbose= */ false
            );
            htmlscanner.render(onScanSuccess);
        }
    }

    // Add event listener to the "Start Scan" button
    document.getElementById("start-scan-btn").addEventListener("click", startScan);
});
