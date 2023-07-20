<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar Menu for Admin Dashboard </title>
    <link rel="stylesheet" href="./style_sidebar.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!-- Bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <nav class="sidebar">

        <a href="#" class="logo">MyApp</a>

        <div class="menu-content">
            <ul class="menu-items">
                <div class="menu-title container">
                    <h2 style="color: blue;">Content</h2>
                </div>

                <li class="item">
                    <a href="#">Carousel</a>
                </li>

                <li class="item">
                    <div class="submenu-item">
                        <span>Electronics Items</span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>

                    <ul class="menu-items submenu">
                        <div class="menu-title">
                            <i class="fa-solid fa-chevron-left"></i>
                            Your submenu title
                        </div>
                        <li class="item">
                            <a href="./Add_Product.php">Mobile</a>
                        </li>
                        <li class="item">
                            <a href="#">Earephones</a>
                        </li>
                        <li class="item">
                            <a href="#">Watchs </a>
                        </li>
                    </ul>
                </li>
                <li class="item">
                    <div class="submenu-item">
                        <span>Second submenu</span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>

                    <ul class="menu-items submenu">
                        <div class="menu-title">
                            <i class="fa-solid fa-chevron-left"></i>
                            Your submenu title
                        </div>
                        
                        <li class="item">
                            <a href="#">1 Second sublink</a>
                        </li>
                        <li class="item">
                            <a href="#">2 Second sublink</a>
                        </li>
                        <li class="item">
                            <a href="#">3 Second sublink</a>
                        </li>
                       
                    </ul>
                </li>

                <li class="item">
                    <a href="#">COMPUTERS & LAPTOP</a>
                </li>

                <li class="item">
                    <a href="#">MAN’S CLOTHES</a>
                </li>

                <li class="item">
                    <a href="#">WOMAN’S CLOTHES</a>
                </li>

            </ul>
        </div>
    </nav>

    <nav class="navbar">
        <i class="fa-solid fa-bars" id="sidebar-close"></i>
        <h1 class="h1_style">Admin Dashboard Content</h1>

    </nav>

    <main class="main">
        write your information hear...
    </main>






















    <!-- Bootstrap link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


    <script src="./script_sidebar.js"></script>
</body>

</html>