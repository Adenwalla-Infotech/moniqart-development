<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=PT+Sans&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <!-- Custom Styles -->
    <link rel="stylesheet" href="./assets/frontend/css/style.css">

    <title>Moniqart</title>
</head>
<body>
<?php include('templates/_header.php'); ?>
    <section class="container">



        <div class="card__container">

          <?php
          require("./includes/_clientfunctions.php");
            _allCoursesForAllCoursesPage();
          ?>

        </div>

    </section>


    <footer class=" footer" id="footer">

        <div class="footer__container container">

            <div class="footer__top row">

                <div class="footer__column_1">

                    <a href="index.html" class="footer__logo">
                        <img src="https://virtuoso.qodeinteractive.com/wp-content/uploads/2015/10/logo-footer.png"
                            alt="">
                    </a>

                    <p class="footer__logo__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.
                    </p>

                    <div class="footer__logo__info">
                        <div class="footer__logo__item">
                            <i class="bx bx-envelope-open"></i>
                            <span>info@gmail.com</span>
                        </div>
                        <div class="footer__logo__item">
                            <i class="bx bx-phone-incoming"></i>
                            <span>1-444-123-4559</span>
                        </div>
                        <div class="footer__logo__item">
                            <i class="bx bx-home"></i>
                            <span>Rokin 90-94, 1012 Amsterdam</span>
                        </div>
                    </div>

                </div>

                <div class="footer__column_2">

                    <h1 class="footer__heading">Recent Posts</h1>

                    <p class="footer__post__item">
                        <a href="#">
                            Always In Motion November 6, 2015
                        </a>
                    </p>

                    <p class="footer__post__item">
                        <a href="#">
                            Cloud Descending November 6, 2015
                        </a>
                    </p>

                    <p class="footer__post__item">
                        <a href="#">
                            Front Page Story November 6, 2015
                        </a>
                    </p>

                    <p class="footer__post__item">
                        <a href="#">
                            Contagious Ideas November 6, 2015
                        </a>
                    </p>


                </div>

                <div class="footer__column_3">

                    <h1 class="footer__heading">Instagram</h1>


                </div>

                <div class="footer__column_4">

                    <h1 class="footer__heading">Contact Us</h1>

                    <form action="#" class="footer__contact__form">
                        <input type="text" placeholder="Your Name">
                        <input type="text" placeholder="Your Email">
                        <textarea name="" id="" cols="30" rows="3">Comment</textarea>
                        <button>
                            submit
                        </button>
                    </form>


                </div>

            </div>

            <div class="footer__bottom">

                <div class="footer__copyright">
                    <p>© 2015 Qode Interactive, All Rights Reserved</p>
                </div>

                <ul class="footer__social-menu">


                    <li class="social-menu-list">
                        <a href="#">
                            <i class="bx bxl-facebook"></i>
                        </a>
                    </li>

                    <li class="social-menu-list">
                        <a href="#">
                            <i class="bx bxl-instagram"></i>
                        </a>
                    </li>

                    <li class="social-menu-list">
                        <a href="#">
                            <i class="bx bxl-twitter"></i>
                        </a>
                    </li>

                    <li class="social-menu-list">
                        <a href="#">
                            <i class="bx bxl-linkedin"></i>
                        </a>
                    </li>

                </ul>


            </div>

        </div>

    </footer>


    <script src="./assets/frontend/js/main.js"></script>

</body>

</html>