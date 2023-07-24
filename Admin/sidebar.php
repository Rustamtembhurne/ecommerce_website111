<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hoverable Sidebar Menu HTML CSS & JavaScript</title>
    <link rel="stylesheet" href="./Sidebar_style.css" />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- Bootstrap     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body class="body1">

    <nav class="sidebar locked">
        <div class="logo_items flex">
            <span class="nav_image">
                <img src="./img_logo/pexels-jessica-lewis-creative-1010519.jpg" alt="logo_img" />
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
                        <a href="#" class="link flex">
                            <i class="bx bx-home-alt"></i>
                            <span>Overview</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>All Projects</span>
                        </a>
                    </li>
                </ul>

                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Editor</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bxs-magic-wand"></i>
                            <span>Magic Build</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-folder"></i>
                            <span>New Projects</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-cloud-upload"></i>
                            <span>Upload New</span>
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
                    <img src="images/profile.jpg" alt="logo_img" />
                </span>
                <div class="data_text">
                    <span class="name">David Oliva</span>
                    <span class="email">david@gmail.com</span>
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
                        <img src="./img_logo/annie-spratt-wuc-KEIBrdE-unsplash.jpg" alt="logo_img" />
                    </span>
                </div>

            </div>
        </div>
    </nav>


    <div class="container margin-auto">
    sdhbchfbdj,mnn jkk j k 
</div>

   
    


























    <!-- Bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="./Sidebar_script.js"></script>
</body>

</html>