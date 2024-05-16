<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front-pagecss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<body>
    <div class="bg-bg">
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>
    </div>

    <div class="header-content">
        <div class="logo-img">
            <a href="https://salesiancollege.ac.in/">
                <img src="https://salesiancollege.ac.in/wp-content/uploads/2023/06/Blue-Logo.svg" alt="Salesian College (Autonomous) Siliguri & Sonada" class="logo"/>
            </a>
        </div>
        <nav class="headernav">
            <div class="navbar-brand">
            </div>
            <div class="top-font">
                QR Code Attendance System 
            </div>
        </nav>
    </div>  
    <div class="container-fluid">
        <div class="row">
            <div class="left-col">
                <div class="navigate">
                    <div class="nav-item">
                        <button onclick="ShowHomePage()" class="home-nav btn-primary">
                            <span class="material-symbols-outlined">home</span>
                        </button>
                    </div>
                    <div class="nav-item" >
                        <a href="qr.php" class="btn-primary">
                            <span class="material-symbols-outlined">
                                qr_code_scanner
                            </span>
                        </a>
                    </div>
                </div>

            </div>
            <!--<div class="ds-skill">
                    <div class="skill html">
                    <h6><i class="fab fa-html5"></i> HTML5 </h6>
                    <div class="bar bar-html">
                        <p>95%</p>
                    </div>
                    </div>
                    <div class="skill css">
                    <h6><i class="fab fa-css3-alt"></i> CSS3 </h6>
                    <div class="bar bar-css">
                        <p>90%</p>
                    </div>
                    </div>
                    <div class="skill javascript">
                    <h6><i class="fab fa-js"></i> JavaScript </h6>
                    <div class="bar bar-js">
                        <p>75%</p>
                    </div>-->
            <div class="right-col">
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
            <div class="card">
                <div class="ds-top"></div>
                <div class="avatar-holder">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="profile-pic">
                </div>
                <div class="name">
                    <a href="#" target="_blank">Albert Feynman</a>
                </div>
            </div>
        </div>
    </div>
    <script src="front-page.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
