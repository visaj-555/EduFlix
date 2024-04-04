<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>EDUFLIX</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css">
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            width: 50%;
            background-color: #E4F5D4;
        }

        th,
        td {
            font-weight: bold;
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }

        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>

    <div class="hero_area">

        <!-- header section starts -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            <h1>
                                EduFlix
                            </h1>

                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link pl-lg-0" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="categories.html">Categories</a>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                        <form class="search_form">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <button class="" style="background-color: #063547;" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                            </formm>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <div class="container-div">
            <center>
                <h1>Please Provide Your Educational Information</h1>
            </center>
            <div class="section-div">
                <form action="" method='get'>
                    <div class="inner-select-div">
                        <select name='college_list'>
                            <option value="select">Please Select Your University</option>
                            <option value="Darshan University">Darshan University</option>
                            <option value="Gujarat Technological University">Gujarat Technological University</option>
                            <option value="M.S University">M.S. University</option>
                            <option value="Parul University">Parul University</option>
                        </select>
                    </div>
                    <div class="inner-select-div">
                        <select name='course_list'>
                            <option value="select">Please Select Your Course</option>
                            <option value="Automobile Engineering">Automobile Engineering</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Computer Engineering">Computer Engineering</option>
                            <option value="E.C Engineering">E.C Engineering</option>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                            <option value="I.C Engineering">I.C Engineering</option>
                            <option value="I.T Engineering">I.T Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                        </select>
                    </div>
                    <div class="inner-select-div">
                        <select name='sem_list'>
                            <option value="select">Please Select Your Semester</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <div class="inner-select-div">
                        <input type="submit" name='submit' class="button" />
                    </div>
                </form>
            </div>
        </div>
        <?php
        if (isset($_GET['submit'])) {
            if (!empty($_GET['college_list']) && !empty($_GET['course_list']) && !empty($_GET['sem_list'])) {
                $college = $_GET['college_list'];
                $course = $_GET['course_list'];
                $sem = $_GET['sem_list'];
            }
            include_once '../dbcon.php';

            $query = "select pdfs.pdf_id,pdfs.pdf_name from pdfs inner join subject on subject.subject_id = pdfs.subject_id inner join courses on courses.cource_id = subject.cource_id inner join colleges on colleges.college_id = courses.college_id where colleges.college_name = '{$college}' AND courses.cource_name = '{$course}' AND subject.sem = '{$sem}'";

            $result = mysqli_query($con, $query) or die("error" . mysqli_error($conn));
            if (mysqli_num_rows($result) > 0) {
                if ($college == "select" && $course == "select" && $sem == "select") {
                    echo '';
                } else {
                    echo '<section style="margin: 20px"> 
            <table border="1" cellspacing="3" cellpadding="3"> 
            <tr> 
                <th> <font face="Arial">Book Name</font> </th> 
                <th> <font face="Arial">View</font> </th> 
            </tr>';
                    while ($Row = mysqli_fetch_assoc($result)) {
        ?>
                        <tr>
                            <td> <?php echo $Row['pdf_name']; ?> </td>
                            <td><a href="../material/<?php echo $Row['pdf_name'] . '.pdf' ?>" target="_blank"> View </a> </td>
                        </tr>
        <?php
                    }
                    echo '</table> </section>';
                }
            }
        }
        ?>

        <!-- info section -->
        <section class="info_section layout_padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 info-col">
                        <div class="info_detail">
                            <h4>
                                About Us
                            </h4>
                            <p>
                                "EduFLIX" is a web-app where the user can view or access various study materials like
                                Reference Books, Letho, PDFs, Previous Question Papers, Paper Solutions of various
                                educational institutes ranging over whole state i.e. like selective institutes.
                            </p>
                            <div class="info_social">
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 info-col">
                        <div class="info_contact">
                            <h4>
                                Address
                            </h4>
                            <div class="contact_link_box">
                                <a href="">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>
                                        Location
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>
                                        Call +91 6969696969
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>
                                        eduflix2023@gmail.com
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 info-col">
                        <div class="info_contact">
                            <h4>
                                Newsletter
                            </h4>
                            <form action="#">
                                <input type="text" placeholder="Enter email" />
                                <button type="submit">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 info-col">
                        <div class="map_container">
                            <div class="map">
                                <div id="googleMap"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end info section -->

        <!-- footer section -->
        <footer class="footer_section">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By EduFLIX
                </p>
            </div>
        </footer>
        <!-- footer section -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>