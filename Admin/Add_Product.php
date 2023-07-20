<?php

include "./connection.php";
include "./select.php";



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

    <form class=" my-5 g-3 container font-weight-bold " id="registrationForm" method="POST" enctype="multipart/form-data" style="margin: auto; width: 750px;">

        <h1 class="my-3" style="margin: auto; width: 750px; text-align: center; color:aqua">ADD PRODUCT</h1>

        <div class="row my-2">
            <div class="mb-3 mt-3">
                <label for="text" class="form-label">Device Name:</label>
                <input type="text" name="Device_Name" class="form-control" id="text" placeholder="Enter Your Device Name">
            </div>
        </div>


        <div class="row my-2">
            <div class="mb-3 mt-3">
                <label for="text" class="form-label">Device Brand Name:</label>
                <input type="text" name="Device_Brand_Name" class="form-control" id="text" placeholder="Enter Your Device Brand Name">
            </div>
        </div>



        <div class="row my-2">
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" name="Price" class="form-control" id="price" placeholder="Enter price">
            </div>
        </div>



        <div class="row my-2">
            <div class="mb-3">
                <label for="discount" class="form-label">Discount:</label>
                <input type="number" name="Discount" class="form-control" id="discount" placeholder="Enter discount">
            </div>
        </div>










        <div class="row my-2">

            <!-- # File Uploading [pic & pdf] -->
            <div class="col-12">
                <fieldset class=" container">
                    <legend class="col-form-label  pt-0">Upload File</legend>
                    <div class="row">

                        <div class="col-sm-10 form-control">
                            <label class="custom-file-label" for="fileInput">Choose File : [ Under 3mb ] JPG, PNG, & PDF Format Only</label>
                            <div class="custom-file">
                                <img id="previewImage" src="#" width="100px" height="100px" style="display: none;">
                                <embed id="previewPDF" src="#" width="100%" height="300px" style="display: none;">

                                <input type="file" name="File" class="custom-file-input" id="fileInput" accept="image/jpeg, image/png, application/pdf" onchange="previewFile(event)" required>
                                <button type="submit" name="Upload_file_btn" class="btn btn-info mt-2" id="uploadButton" required>Upload</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

            <!-- # file upload all condition ex [file under 3mb & only jpg&pdf file upload....] -->
            <!--  # file ke liye ye dono link requried hi hai... -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="./file_uploaded_javascript.js"></script>
            <!--************************************************************* -->


            <!-- # file image & pdf show ( display ) javascript -->
            <script src='./pic_pdf_display_code.js'></script>
            <!--**************************************************************-->








            <div class="col-12 d-flex justify-content-center my-5">
                <button type="submit" name="Submit" class="btn btn-primary mx-5">Submit</button>
                <button type="reset" class="btn btn-danger mx-5">Reset</button>
            </div>
        </div>

    </form>
















    <!-- bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>