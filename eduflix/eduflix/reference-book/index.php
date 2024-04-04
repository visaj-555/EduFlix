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

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/responsive.css" rel="stylesheet" />
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            width: 80%;
            background-color: #E4F5D4;
        }

        th,
        td {
            font-weight: bold;
            padding: 10px;
            text-align: center;
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
                                <a class="nav-link pl-lg-0" href="../index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../categories.html">Categories</a>

                            <li class="nav-item">
                                <a class="nav-link" href="../contact.html">Contact Us</a>
                            </li>
                        </ul>
                        <form class="search_form">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <button class="" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                            </formm>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <?php
        include_once '../dbcon.php';

        $sql = "select * from reference_book order by Author_name";
        $query = mysqli_query($con, $sql);

        echo '<section style="margin: 20px"> <table border="1" cellspacing="3" cellpadding="3"> 
      <tr> 
          <th> <font face="Arial">Author Name</font> </th> 
          <th> <font face="Arial">Book Name</font> </th> 
          <th> <font face="Arial">View</font> </th> 
      </tr>';

        while ($info = mysqli_fetch_array($query)) {
            $Author_name = $info['Author_name'];
            $Book_name = $info['Book_name'];
        ?>
            <tr>
                <td> <?php echo $Author_name; ?> </td>
                <td> <?php echo $Book_name; ?> </td>
                <td><a href="../solution/<?php echo $Book_name . '.pdf' ?>" target="_blank"> View </a> </td>
            </tr>
        <?php
        }
        echo '</table> </section>';
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
                                "EduFLIX" is a web-app where the user can view or access various study materials like Reference Books, Letho, PDFs, Previous Question Papers, Paper Solutions of various educational institutes ranging over whole state i.e. like selective institutes.
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

        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/custom.js"></script>
        </script>

</body>

</html>