<!DOCTYPE html>
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
                <img src="https://salesiancollege.ac.in/Admission201819/Logo/logo.png" alt="Salesian College (Autonomous) Siliguri & Sonada" class="logo" />
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
                        <button onclick="redirectToIndex()" class="btn-primary">
                            Home
                        </button>
                    </div>
                    <div class="nav-item">
                        <button onclick="redirectToQRPage()" class="btn-primary">
                            Take Attendance
                        </button>
                    </div>
                </div>
                <div class="profile-details">
                    profile
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
                                    <th>Attendendence</th>
                                    <th>Percentage</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="Take-Attendance" id="Take-Attendance">
                    <div class="qrcontainer">
                        <h1>Scan QR Codes</h1>
                        <div class="section">
                            <div id="my-qr-reader">
                            </div>
                        </div>
                    </div>
                    <script src="https://unpkg.com/html5-qrcode">
                    </script>
                </div>
            </div>

            <div class="right-col">
            </div>
        </div>
    </div>
    <script src="frontjs.js"></script>
    <script>
        function redirectToIndex() {
            window.location.href = 'index.php';
        }

        function redirectToQRPage() {
            window.location.href = 'qr.php';
        }
    </script>
</body>

</html>
