<?php

include "../connection.php";
include "./insert_corousel.php";

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hoverable Sidebar Mobile Menu</title>
    <link rel="stylesheet" href="../Sidebar_style.css" />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- Bootstrap     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body class="body1">
    

<nav class="sidebar locked">
        <div class="logo_items flex">
            <span class="nav_image">
                <img src="../sidebar_img_logo/Rustam.jpg" />
            </span>
            <span class="logo_name">RUSTAM</span>
            <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
            <i class="bx bx-x" id="sidebar-close"></i>
        </div>

        <div class="menu_container">
            <div class="menu_items">
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Dashboard</span>
                        <span class="line"></span>
                    </div>

                    <li class="item">
                        <a href="../Corousel/Sidebar_Corousel_Product.php" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Corousel</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../Mobile/mobile.php" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Mobile</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../Computer_Laptop/computer_laptop.php" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Computer & Laptop</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../Man_cloth/man_cloth.php" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Man`s Clothes</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../Womans_clothes/womans_cloth.php" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Woman`s Clothes</span>
                        </a>
                    </li>
                </ul>



                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Setting</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-flag"></i>
                            <span>Notice Board</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-award"></i>
                            <span>Award</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-cog"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar_profile flex">
                <span class="nav_image">
                    <img src="../sidebar_img_logo/Rustam.jpg" alt="logo_img" />
                </span>
                <div class="data_text">
                    <span class="name">Rustam Tembhurne</span>
                    <span class="email">rustamtembhurne12@gmail.com</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar -->
    <nav class="navbar flex" style="background-color: #eef5fe;">

        <div class="container">
            <div class="row">

                <div class="col-2">
                    <i class="bx bx-menu" id="sidebar-open"></i>
                </div>

                <div class="col-8">
                    <input type="text" placeholder="Search..." class="search_box" />
                </div>

                <div class="col-2">
                    <span class="nav_image">
                        <img src="../sidebar_img_logo/pngfind.com-rose-border-png-21233.png" alt="logo_img" />
                    </span>
                </div>

            </div>
        </div>
    </nav>








    <!-- ADD COROUSEL PRODUCT CODE START -->

    <div class="container-fluid">

        <form class="container" id="registrationForm" method="POST" enctype="multipart/form-data">

            <div class="row" style="margin-top:200px; margin-left: 200px">

                 <h1>Carousel</h1>


                <!-- # File Uploading 1 [pic & pdf] -->
                <div class="col-12">
                    <fieldset class=" container">
                        <legend class="col-form-label  pt-0">Girl Img</legend>
                        <div class="row">

                            <div class="col-sm-10 form-control">
                                <label class="custom-file-label" for="fileInput">Choose File : [ Under 3mb ] JPG & PNG Format Only</label>
                                <div class="custom-file">
                                    <img id="previewImage" src="#" width="100px" height="100px" style="display: none;">
                                    <embed id="previewPDF" src="#" width="100%" height="300px" style="display: none;">

                                    <input type="file" name="File_corousel_pic_grial" class="custom-file-input" id="fileInput" accept="image/jpeg, image/png, application/pdf" onchange="previewFile(event)" required>
                                    <button type="submit" name="Upload_file_btn" class="btn btn-info mt-2" id="uploadButton" required>Upload</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>



                <div class="col-12">
                    <fieldset class=" container">
                        <legend class="col-form-label  pt-0">computer Img</legend>
                        <div class="row">

                            <div class="col-sm-10 form-control">
                                <label class="custom-file-label" for="fileInput">Choose File : [ Under 3mb ] JPG & PNG Format Only</label>
                                <div class="custom-file">
                                    <img id="previewImage2" src="#" width="100px" height="100px" style="display: none;">
                                    <embed id="previewPDF2" src="#" width="100%" height="300px" style="display: none;">

                                    <input type="file" name="carousal_img_computer" class="custom-file-input" id="fileInput" accept="image/jpeg, image/png, application/pdf" onchange="previewFile(event)" required>
                                    <!-- <button type="submit" name="Upload_file_btn" class="btn btn-info mt-2" id="uploadButton2" required>Upload</button> -->
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>




                <!-- # file upload all condition ex [file under 3mb & only jpg&pdf file upload....] -->
                <!--  # file ke liye ye dono link requried hi hai... -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="./Sidebar_corousel_edit_fileupload_condition.js"></script>
                <!-- <script src="./Sidebar_corousel_edit_fileupload2_condition.js"></script> -->
                <!--************************************************************* -->


                <!-- # file image & pdf show ( display ) javascript -->
                <script src='./Sidebar_corousel_pic_display_code.js'></script>
                <script src='./Sidebar_corousel_pic2_display.js'></script>
                <!--**************************************************************-->


                <div class="col-12 d-flex justify-content-center my-5">
                    <button type="submit" name="Submit" class="btn btn-primary mx-5">Submit</button>
                    <button type="reset" class="btn btn-danger mx-5">Reset</button>
                </div>

            </div>
        </form>
    </div>




    <!-- ADD PRODUCT CODE END -->











    <!-- Bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="../Sidebar_script.js"></script>
    <!-- <script src="./Sidebar_script.js"></script> -->
</body>

</html>