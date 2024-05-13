

/*-------------------BUTTON_NAV--------------*/
document.addEventListener('DOMContentLoaded', function() {
    // Find all anchor elements
    const navLinks = document.querySelectorAll('a');

    // Add click event listener to each anchor
    navLinks.forEach(function(navLink) {
      navLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior

        // Remove the "active" class from all anchor elements
        navLinks.forEach(function(link) {
          link.classList.remove('active');
        });

        // Add the "active" class to the clicked anchor element
        this.classList.add('active');
      });
    });

    // Set the "home-nav" class as active by default
    const homeNavLink = document.querySelector('.home-nav');
    homeNavLink.classList.add('active');
  });

function ShowHomePage(){
    document.getElementById('Home').style.display = "block";
    document.getElementById('Take-Attendance').style.display = "none";

}

function TakeAttendance(){
    document.getElementById('Take-Attendance').style.display = "block";  
    document.getElementById('Home').style.display = "none";
}

/*-------------------------QR-CODE---------------------------*/
function domReady(fn) {
    if (document.readyState === "complete" || document.readyState === "interactive") {
        setTimeout(fn, 1000); // Wait for 1 second if document is already loaded
    } else {
        document.addEventListener("DOMContentLoaded", fn); // Execute when DOM is ready
    }
}

domReady(function () {
    // Function to handle successful QR code scan
    function onScanSuccess(decodeText) {
        // Check if the decoded text is a valid URL
        if (isValidUrl(decodeText)) {
            // Redirect to the scanned URL
            window.location.href = decodeText;
        } else {
            alert("Scanned content is not a valid URL.");
        }
    }

    // Helper function to check if a string is a valid URL
    function isValidUrl(url) {
        try {
            new URL(url); // Attempt to create a URL object from the string
            return true; // If successful, it's a valid URL
        } catch (error) {
            return false; // If an error is thrown, it's not a valid URL
        }
    }

    // Initialize the QR code scanner
    let htmlscanner = new Html5QrcodeScanner("my-qr-reader", { fps: 10, qrbox: 250 });
    htmlscanner.render(onScanSuccess); // Render the scanner and pass the success callback
});


/*---------------FETCH ATTENDANCE------------------*/
$(document).ready(function() {
    $('#semester-dropdown').change(function() {
      var semester = $(this).val();
      
      // AJAX request to fetch data from the server
      $.ajax({
        url: 'fetch_attendance.php', // Replace with the URL of your server-side script
        method: 'POST',
        data: { semester: semester },
        dataType: 'json',
        success: function(data) {
          // Clear existing table rows
          $('#attendance-table-body').empty();
          
          // Populate table with fetched data
          data.forEach(function(row) {
            $('#attendance-table-body').append(
              '<tr>' +
              '<td>' + row.subjectName + '</td>' +
              '<td>' + row.subjectCode + '</td>' +
              '<td>' + row.totalClass + '</td>' +
              '<td>' + row.attendance + '</td>' +
              '<td>' + row.percentage + '</td>' +
              '</tr>'
            );
          });
        },
        error: function(xhr, status, error) {
          console.error('Error fetching attendance data:', error);
        }
      });
    });
});
  
