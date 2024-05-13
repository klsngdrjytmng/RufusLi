<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front-page.css">
    <title>Document</title>
</head>
<body>
    
    <div class="header-content">
        <div class="logo-img">
            <a href="https://salesiancollege.ac.in/">
                <img src="https://salesiancollege.ac.in/Admission201819/Logo/logo.png" alt="Salesian College (Autonomous) Siliguri & Sonada" class="logo"/>
            </a>
        </div>
        <nav>
            <div class="navbar-brand">
                    Salesian College
                    <br>
                    Welcome, ABC (1234)
            </div>
            <div class="top-font">
                QR Code Attendance System Login
            </div>
        </nav>
    </div>  
    <div class="container-fluid">
        <div class="row">
            <div class="left-col">
                <div class="navigate">
                    <div class="nav-item">
                        <a onclick="ShowHomePage()" class="home-nav btn-primary">
                            Home
                        </a>
                    </div>
                    <div class="nav-item">
                        <a onclick="TakeAttendance()" class="btn-primary">
                            Take Attendance
                        </a>
                    </div>
                </div>
                <div class="profile-details">
                    <div class="profile-box">
                        <div class="user-img">
                            <img src="" alt="profile-pic">
                        </div>
                    </div>
                    <div class="profile-details">
                        <div class="p-d-u">
                            Name: <span class="name"></span>
                            Id. No.: <span class="std_id"></span>
                            Department: <span class="department"></span>
                            Semester: <span class="semester"></span>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="mid-col">
                <div class="Home" id="Home">
                    <div class="attendance-details">
                        <div class="at-de-heading">
                            Attendance Details
                        </div>
                        <div class="at-de-content">
                            <div class="at-de-dropdown">
                                <select class="select-box">
                                    <option value="">Select Semester</option>
                                    <option value="one">Semester I</option>
                                    <option value="two">Semester II</option>
                                    <option value="three">Semester III</option>
                                    <option value="four">Semester IV</option>
                                    <option value="five">Semester V</option>
                                    <option value="six">Semester VI</option>
                                    <option value="seven">Semester VII</option>
                                    <option value="eight">Semester VIII</option>
                                </select>
                            </div>
                        </div>
                        <table class="table-heading">
                            <thead>
                                <tr>
                                    <th>Subject Name</th>
                                    <th>Subject Code</th>
                                    <th>Total Classes</th>
                                    <th>Attendend</th>
                                    <th>Percentage</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="Take-Attendance" id="Take-Attendance">   
                    <div class="qrcontainer">
                        <div class="container">
                            <div class="section">
                                <div id="my-qr-reader">
                                </div>
                            </div>
                        </div>
                        <script
                            src="https://unpkg.com/html5-qrcode">
                        </script>
                    </body>
                </div>
            </div>
            <div class="right-col">
            </div>
        </div>
    </div>
    <script src="front-page.js"></script>
</body>
</html>