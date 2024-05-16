/*-------------------BUTTON_NAV--------------*/

document.addEventListener('DOMContentLoaded', function() {
  
    // Find all anchor elements
    const navLinks = document.querySelectorAll('button');
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


 //Add click event listener to the home button
/*function ShowHomePage(){
  document.getElementById('Home').style.display = "block";
  document.getElementById('Take-Attendance').style.display = "none";
}    

function TakeAttendance(){
    document.getElementById('Take-Attendance').style.display = "block";  
    document.getElementById('Home').style.display = "none";
}
*/
