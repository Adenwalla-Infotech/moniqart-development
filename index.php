<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== Font Awesome ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=PT+Sans&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/frontend/css/style.css">
    <!-- <link rel="stylesheet" href="styles/main.css"> -->

    <title>Moniqart</title>
</head>
<style>
    * {
        font-family: 'Baskervville', serif;

    }

    .banner-image {
        background-image: url('assets/images/banner/header.svg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        margin-top: -53px;
        height: 600px;
    }

    .banner-image h2 {
        font-size: 50px;
    }



    /* Creative Section */

    .creativeSection h3 {
        font-size: 35px;
        font-weight: 300;
        text-align: start;
        text-transform: uppercase;
    }

    .creativeSection p {
        font-size: 15px;
        text-align: start;
    }

    .creativeSection h5 {
        font-size: 25px;
        margin: 1rem 0;
        text-transform: uppercase;
    }

    .creativeSection span {
        font-size: 15px;
        text-align: center;
    }




    /* Responsive */

    @media screen and (max-width:1000px) {

        .creativeSection div.col-lg-3 {
            border: none !important;
        }

    }


    @media screen and (max-width:800px) {

        .creativeSection div.col-lg-3 {
            margin-top: 0.8rem;
        }

    }
</style>

<body>
    <?php include('templates/_header.php'); ?>
    <!-- <section class="container">


        <div class="card__container">

            <div class="card">

                <div class="card__image">
                    <img src="https://virtuoso.qodeinteractive.com/wp-content/uploads/2015/10/p-print-web-800x600.jpg"
                        alt="">
                </div>

                <div class="card__content">

                    <div class="card__top">
                        <div class="card__title">
                            <span>Spiderman</span>
                        </div>

                        <div class="cards__marks">
                            <button class="card__button">
                                <i class="bx bx-heart"></i>
                            </button>
                            <button class="card__button">
                                <i class="bx bx-cart-add"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card__description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias placeat temporibus
                            distinctio
                            ratione! Error, voluptatum.
                        </p>
                    </div>

                </div>



            </div>

            <div class="card">

                <div class="card__image">
                    <img src="https://virtuoso.qodeinteractive.com/wp-content/uploads/2015/10/p-print-web-800x600.jpg"
                        alt="">
                </div>

                <div class="card__content">

                    <div class="card__top">
                        <div class="card__title">
                            <span>Spiderman</span>
                        </div>

                        <div class="cards__marks">
                            <button class="card__button">
                                <i class="bx bx-heart"></i>
                            </button>
                            <button class="card__button">
                                <i class="bx bx-cart-add"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card__description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias placeat temporibus
                            distinctio
                            ratione! Error, voluptatum.
                        </p>
                    </div>

                </div>



            </div>

            <div class="card">

                <div class="card__image">
                    <img src="https://virtuoso.qodeinteractive.com/wp-content/uploads/2015/10/p-print-web-800x600.jpg"
                        alt="">
                </div>

                <div class="card__content">

                    <div class="card__top">
                        <div class="card__title">
                            <span>Spiderman</span>
                        </div>

                        <div class="cards__marks">
                            <button class="card__button">
                                <i class="bx bx-heart"></i>
                            </button>
                            <button class="card__button">
                                <i class="bx bx-cart-add"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card__description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias placeat temporibus
                            distinctio
                            ratione! Error, voluptatum.
                        </p>
                    </div>

                </div>



            </div>

            <div class="card">

                <div class="card__image">
                    <img src="https://virtuoso.qodeinteractive.com/wp-content/uploads/2015/10/p-print-web-800x600.jpg"
                        alt="">
                </div>

                <div class="card__content">

                    <div class="card__top">
                        <div class="card__title">
                            <span>Spiderman</span>
                        </div>

                        <div class="cards__marks">
                            <button class="card__button">
                                <i class="bx bx-heart"></i>
                            </button>
                            <button class="card__button">
                                <i class="bx bx-cart-add"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card__description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias placeat temporibus
                            distinctio
                            ratione! Error, voluptatum.
                        </p>
                    </div>

                </div>



            </div>

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

    </footer> -->

    <!-- Banner Image  -->
    <div class="banner-image w-100 d-flex justify-content-center align-items-center">
        <div class="content text-center">
            <h2 class="text-uppercase text-white fw-bold">
                Transform your imagination <br />
                into reality
            </h2>
        </div>
    </div>


    <!-- Creative Section -->
    <section class="container my-5 creativeSection">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12   d-flex flex-column align-items-start justify-content-evenly ">
                <h3>Get Inspired</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex in labore deserunt voluptatum earum
                    natus illum! Officia doloremque ducimus harum architecto natus repellendus totam temporibus?
                    Consectetur ab modi id aliquid.xxx
                </p>

            </div>
            <div
                class="col-lg-3 col-md-6 col-12   d-flex flex-column align-items-center justify-content-between border border-0 border-end  border-dark ">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                    style="enable-background:new 0 0 100 100;" xml:space="preserve" width="250" height="150">
                    <g>
                        <path d="M0.98,47.27c0.26-1.92,0.44-3.86,0.8-5.77C3.8,30.53,8.89,21.24,17.14,13.71c0.65-0.59,1.33-1.15,2.01-1.71
        c0.84-0.69,1.78-0.67,2.33,0.02c0.58,0.73,0.43,1.54-0.47,2.27C13.76,20.21,8.63,27.62,6.02,36.61
        c-4.65,16.04-1.65,30.65,9.11,43.43c7.2,8.54,16.55,13.6,27.61,15.28c12.04,1.83,23.09-0.86,33.11-7.76
        c0.33-0.23,0.69-0.76,0.66-1.12c-0.33-5.26-0.72-10.51-1.1-15.84c-0.54-0.14-1.06-0.25-1.58-0.4c-3.42-1.02-5.78-4.04-5.9-7.54
        c-0.13-3.76,1.91-6.94,5.39-8.19c0.77-0.28,0.97-0.64,0.9-1.4c-0.25-3.01-0.44-6.03-0.65-9.03c-1.8,0.27-3.55,0.63-5.32,0.77
        c-5.83,0.47-11.45-0.17-16.42-3.58c-5.37-3.69-6.91-9.79-4.03-15.64c2.09-4.23,5.49-7.19,9.46-9.57c0.91-0.55,1.89-1.1,2.58-1.88
        c1.38-1.56,1.61-3.45,0.83-5.38c-0.81-2-2.36-3.18-4.49-3.45c-4.17-0.53-8.36-0.65-12.56-0.26c-6.35,0.59-12.22,2.61-17.69,5.84
        c-0.31,0.18-0.61,0.38-0.92,0.56c-0.92,0.52-1.78,0.38-2.22-0.37c-0.45-0.75-0.2-1.59,0.67-2.15c2.99-1.92,6.19-3.43,9.54-4.59
        c6.81-2.36,13.82-2.91,20.96-2.22c1.13,0.11,2.27,0.2,3.38,0.42c3.55,0.73,6.06,3.5,6.65,7.27c0.49,3.14-1.19,6.49-4.19,8.17
        c-3.63,2.03-6.86,4.49-8.96,8.18c-2.15,3.76-1.95,7.77,0.51,10.65c2.19,2.56,5.1,3.86,8.3,4.58c4.33,0.98,8.65,0.74,12.94-0.3
        c0.26-0.06,0.49-0.24,0.73-0.37c-0.2-0.23-0.36-0.51-0.61-0.68c-4.5-3.03-6.14-7.42-5.83-12.63c0.28-4.65,2.38-8.47,5.62-11.78
        c2.32-2.36,4.52-4.86,6.6-7.43c1.53-1.88,2.48-4.08,2.59-6.61c0.02-0.55,0.59-1.07,0.9-1.61c0.39,0,0.78,0,1.17,0
        c2.24,2.67,4.61,5.25,6.7,8.05c3.37,4.51,6.17,9.36,7.65,14.85c0.39,1.46,0.6,2.96,0.89,4.45c0,0.78,0,1.56,0,2.34
        c-0.06,0.22-0.15,0.43-0.17,0.65c-0.26,2.83-1.29,5.36-3.12,7.52c-0.72,0.85-1.65,1.53-2.5,2.3c3.29,2.77,5.04,6.06,5.07,10.08
        c0.02,2.39-0.17,4.81-0.53,7.18c-1.01,6.69-3.37,12.9-6.95,18.64c-0.21,0.34-0.36,0.76-0.39,1.16c-0.48,5.96-0.93,11.92-1.4,17.87
        c-0.2,2.5-1.27,3.8-3.67,4.56c-0.33,0.1-0.65,0.23-0.98,0.35c-0.85,0-1.69,0-2.54,0c-0.21-0.07-0.41-0.16-0.62-0.21
        c-2.29-0.6-4.2-2.14-4.1-4.94c0.05-1.38-0.19-2.77-0.31-4.26c-0.43,0.26-0.73,0.44-1.03,0.63c-7.28,4.63-15.25,7.16-23.85,7.58
        c-8.86,0.43-17.27-1.41-25.05-5.66C13.07,85.6,4.7,74.05,1.75,58.6c-0.34-1.81-0.52-3.65-0.78-5.48
        C0.98,51.17,0.98,49.22,0.98,47.27z M84.36,5.04c-0.95,1.67-1.7,3.48-2.88,4.94c-2.25,2.81-4.67,5.49-7.16,8.1
        c-2.7,2.82-4.35,6.06-4.48,9.97c-0.12,3.69,0.93,6.94,4.08,9.2c0.52,0.37,1.23,0.66,1.86,0.67c4.94,0.09,9.88,0.11,14.83,0.11
        c0.43,0,0.95-0.2,1.29-0.48c3.62-3.04,4.57-7.02,3.9-11.51c-0.52-3.51-1.91-6.72-3.6-9.81C89.99,12.17,87.29,8.45,84.36,5.04z
         M77.6,59.04c0.18,2.51,0.35,4.91,0.51,7.3c0.29,4.18,0.56,8.36,0.85,12.55c0.37,5.32,0.77,10.63,1.09,15.95
        c0.06,0.99,0.44,1.56,1.35,1.89c1.19,0.43,2.35,0.41,3.51-0.07c0.64-0.26,1.06-0.67,1.1-1.44c0.09-1.69,0.25-3.37,0.39-5.05
        c0.37-4.63,0.73-9.26,1.1-13.89c0.3-3.82,0.61-7.64,0.9-11.46c0.15-1.9,0.28-3.8,0.43-5.77C85.07,59.04,81.38,59.04,77.6,59.04z
         M76.35,41.02c0.35,5.03,0.7,9.97,1.05,14.96c3.94,0,7.79,0,11.68,0c0.39-5.01,0.78-9.95,1.17-14.96
        C85.58,41.02,81.04,41.02,76.35,41.02z M92.99,44.05c-0.67,8.51-1.31,16.76-1.97,25.17c0.18-0.21,0.26-0.28,0.3-0.36
        c2.73-6.16,4.24-12.59,3.98-19.36C95.22,47.54,94.39,45.81,92.99,44.05z M74.5,57.19c-2.57,1-3.91,3.25-3.59,5.79
        c0.28,2.2,2.18,4.18,4.3,4.38C74.97,64,74.74,60.65,74.5,57.19z" />
                        <path d="M19.99,62.89c-5.37,0-9.82-4.43-9.83-9.8c-0.01-5.42,4.46-9.9,9.86-9.89c5.37,0.01,9.82,4.46,9.84,9.82
        C29.89,58.42,25.43,62.88,19.99,62.89z M19.98,59.94c3.75,0.02,6.91-3.12,6.92-6.88c0.01-3.72-3.09-6.86-6.81-6.89
        c-3.77-0.03-6.93,3.06-6.97,6.83C13.07,56.73,16.22,59.91,19.98,59.94z" />
                        <path d="M26.94,39.31c-5.48-0.02-9.78-4.38-9.77-9.9c0.01-5.41,4.39-9.73,9.85-9.72c5.48,0.01,9.83,4.41,9.79,9.89
        C36.77,35.01,32.39,39.33,26.94,39.31z M33.82,29.5c0-3.8-3.02-6.86-6.77-6.85c-3.86,0-6.93,3-6.94,6.8
        c-0.01,3.82,3.03,6.9,6.84,6.9C30.81,36.34,33.82,33.34,33.82,29.5z" />
                        <path d="M33.94,63.62c5.47,0.03,9.83,4.44,9.8,9.91c-0.03,5.38-4.46,9.73-9.89,9.71c-5.45-0.02-9.85-4.46-9.81-9.91
        C24.08,67.95,28.53,63.59,33.94,63.62z M33.94,66.58c-3.86,0.01-6.92,3.03-6.93,6.83c-0.01,3.78,3.1,6.88,6.9,6.87
        c3.81-0.01,6.91-3.11,6.88-6.89C40.76,69.63,37.68,66.57,33.94,66.58z" />
                        <path d="M67.27,79.22c-0.11,0.8-0.18,1.61-0.35,2.4c-0.22,0.96-0.93,1.42-1.78,1.24c-0.87-0.18-1.3-0.83-1.09-1.85
        c0.55-2.63-0.05-4.9-1.99-6.77c-2.07-2-5.28-2.42-7.87-1.08c-2.61,1.36-4,4.14-3.6,7.18c0.36,2.69,2.63,5.03,5.4,5.61
        c2.04,0.43,3.85-0.05,5.52-1.24c0.31-0.22,0.65-0.46,1.01-0.55c0.7-0.17,1.31,0.06,1.62,0.75c0.31,0.69,0.17,1.34-0.43,1.84
        c-1.62,1.36-3.49,2.17-5.59,2.28c-5.76,0.31-10.25-3.73-10.6-9.48c-0.29-4.67,3.4-9.22,8.12-10.01
        C61.72,68.53,67.18,73.11,67.27,79.22z" />
                    </g>
                </svg>
                <h5>Classes</h5>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, assumenda. </span>
            </div>
            <div
                class="col-lg-3 col-md-6 col-12   d-flex flex-column align-items-center justify-content-between  border border-0 border-end  border-dark   ">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                    style="enable-background:new 0 0 100 100;" xml:space="preserve" width="250" height="150">
                    <g>
                        <path d="M16.01,87.88c-4.79,0-9.58,0-14.37,0c1.62-5.13,3.22-10.27,4.86-15.39c0.2-0.64,0.19-0.96-0.48-1.37
        c-3.61-2.22-3.51-7.33,0.17-9.44c0.57-0.33,0.72-0.68,0.71-1.29c-0.02-5.14-0.09-10.29,0.03-15.43c0.04-1.51-0.42-2.24-1.79-2.76
        c-2.11-0.8-4.02-1.94-4.87-4.23c0-0.52,0-1.04,0-1.55c0.63-1.97,2.13-3.04,3.91-3.89c9.59-4.56,19.11-9.25,28.75-13.68
        c5.33-2.45,10.28-5.87,16.28-6.71c0.78,0,1.55,0,2.33,0c2,0.32,3.98,0.69,5.84,1.6c12.76,6.26,25.53,12.51,38.32,18.73
        c1.87,0.91,3.43,2.03,4.01,4.14c0,0.45,0,0.91,0,1.36c-0.66,1.86-2.07,2.93-3.79,3.76c-4.04,1.95-8.04,3.97-12.08,5.91
        c-0.65,0.31-0.88,0.66-0.87,1.38c0.03,7.25,0,14.49,0.03,21.74c0.01,1.12-0.35,1.98-1.07,2.8c-2.73,3.15-5.86,5.84-9.41,8.01
        c-4.93,3.02-10.25,4.99-15.99,5.75c-1.79,0.24-3.59,0.38-5.38,0.57c-0.84,0-1.68,0-2.53,0c-0.31-0.05-0.63-0.12-0.94-0.16
        c-2.27-0.27-4.58-0.39-6.81-0.84c-9.14-1.84-16.81-6.26-22.99-13.26c-0.77-0.88-1.13-1.78-1.12-2.97
        c0.04-7.28,0.03-14.57,0.01-21.85c0-0.32-0.06-0.82-0.26-0.92c-1.85-0.97-3.73-1.87-5.67-2.83c-0.04,0.25-0.08,0.37-0.08,0.48
        c0,5.05-0.02,10.1,0.03,15.15c0,0.33,0.38,0.77,0.7,0.96c3.67,2.16,3.74,7.39,0.07,9.53c-0.59,0.34-0.63,0.62-0.45,1.21
        C12.77,77.54,14.38,82.71,16.01,87.88z M3.63,37.21c2.04,1.41,3.91,2.72,6.07,2.85c2.13,0.13,4.3-0.41,6.44-0.66
        c4.62-0.54,9.24-1.09,13.86-1.63c4.17-0.49,8.34-0.99,12.51-1.48c2.34-0.28,4.68-0.57,7.03-0.83c1.2-0.13,2.05,0.5,2.19,1.54
        c0.13,0.98-0.52,1.76-1.7,1.95c-0.96,0.15-1.92,0.25-2.88,0.37c-4.11,0.48-8.21,0.96-12.32,1.44c-4.17,0.49-8.34,0.98-12.51,1.47
        c-2.25,0.27-4.5,0.54-7.03,0.84c0.53,0.28,0.81,0.42,1.09,0.56c9.51,4.57,19.02,9.15,28.54,13.69c3.66,1.74,7.35,1.76,11.02-0.03
        c8.72-4.25,17.44-8.49,26.16-12.74c4.06-1.98,8.11-3.99,12.16-6c0.49-0.24,0.95-0.54,1.4-0.85c0.49-0.34,0.49-0.75-0.01-1.08
        c-0.46-0.3-0.94-0.56-1.43-0.8c-12.7-6.21-25.4-12.42-38.1-18.63c-3.76-1.84-7.52-1.83-11.28-0.02c-2.04,0.98-4.07,1.95-6.11,2.93
        C27.7,25.4,16.68,30.7,5.66,36.01C5.04,36.3,4.47,36.71,3.63,37.21z M20.67,49.61c-0.08,0.18-0.12,0.24-0.12,0.3
        c-0.01,6.89-0.02,13.79,0.01,20.68c0,0.34,0.21,0.76,0.46,1c1.7,1.63,3.3,3.41,5.19,4.8c11.2,8.24,23.53,9.9,36.66,5.78
        c6.25-1.96,11.56-5.56,15.93-10.47c0.31-0.34,0.52-0.9,0.53-1.36c0.03-6.57,0.02-13.14,0.02-19.71c0-0.27-0.04-0.54-0.07-0.89
        c-0.45,0.21-0.8,0.36-1.14,0.52c-6.99,3.42-13.96,6.85-20.96,10.26c-4.47,2.17-9,2.1-13.47,0.09c-3.71-1.67-7.34-3.49-11.01-5.25
        C28.69,53.45,24.71,51.54,20.67,49.61z" />
                    </g>
                </svg>
                <h5>Courses</h5>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, assumenda. </span>
            </div>
            <div class="col-lg-3 col-md-6 col-12   d-flex flex-column align-items-center justify-content-between ">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                    style="enable-background:new 0 0 100 100;" xml:space="preserve" width="250" height="150">
                    <g>
                        <path
                            d="M48.44,100c0-0.96,0-1.91,0-2.9c1.1,0,1.96,0,2.89,0c0.08,0.99,0.16,1.94,0.24,2.9C50.52,100,49.48,100,48.44,100z" />
                        <path
                            d="M2.93,0c0,0.93,0,1.86,0,2.93c-1.02,0-1.97,0-2.93,0C0,1.97,0,1.01,0,0C0.98,0,1.95,0,2.93,0z" />
                        <path
                            d="M100,2.93c-0.93,0-1.86,0-2.93,0c0-1.02,0-1.97,0-2.93c0.96,0,1.92,0,2.93,0C100,0.98,100,1.95,100,2.93z" />
                        <path
                            d="M0,17.58c0.93,0,1.86,0,2.86,0c0,0.97,0,1.89,0,2.93c-0.95,0-1.9,0-2.86,0C0,19.53,0,18.55,0,17.58z" />
                        <path
                            d="M100,20.51c-0.93,0-1.86,0-2.86,0c0-0.97,0-1.89,0-2.93c0.95,0,1.9,0,2.86,0C100,18.55,100,19.53,100,20.51z" />
                        <path d="M71.94,63.15c0-0.75,0-1.36,0-1.97c0-3.25,0.01-6.51-0.01-9.76c0-0.39-0.07-0.9-0.32-1.15c-1.86-1.95-3.78-3.85-5.72-5.81
        c-4.68,3.76-9.97,5.7-15.88,5.7c-5.88,0-11.15-1.91-16.13-5.89c-0.19,0.34-0.32,0.77-0.61,1.06c-1.52,1.57-3.1,3.07-4.59,4.66
        c-0.35,0.38-0.63,0.99-0.63,1.51c-0.05,3.48-0.03,6.96-0.03,10.45c0,0.35,0,0.7,0,1.16c-1.96,0-3.83,0-5.63,0
        c-0.11,0.16-0.17,0.22-0.17,0.27c-0.33,7.03,0,13.92,3.84,20.16c4.45,7.22,10.86,11.55,19.16,13.15c0.12,0.02,0.24,0.06,0.34,0.08
        c0.03,0.11,0.07,0.17,0.06,0.23c-0.12,0.83-0.25,1.66-0.41,2.69c-1.38-0.33-2.74-0.56-4.04-0.99
        c-11.6-3.83-18.82-11.72-21.31-23.66c-0.71-3.42-0.49-7.05-0.59-10.59c-0.03-1.01-0.25-1.45-1.26-1.85
        c-2.72-1.08-4.29-3.18-4.56-6.14c-0.26-2.73,0.09-5.31,2.31-7.22c0.82-0.7,1.84-1.19,2.83-1.65c0.48-0.22,0.72-0.4,0.73-0.94
        c0.2-6.18,2.12-11.77,5.74-16.8c0.19-0.27,0.23-0.72,0.19-1.07c-1.04-9.1,1.8-16.7,8.71-22.76c0.1-0.09,0.2-0.17,0.31-0.24
        c0.05-0.03,0.12-0.05,0.24-0.09c0.55,0.69,1.11,1.39,1.74,2.18c-5.87,4.99-8.76,11.31-8.23,19c0.4,5.75,2.86,10.6,7.07,14.55
        c8.09,7.59,20.64,7.78,29.37,0.42c8.3-6.99,10.05-19.47,4.01-28.73c-5.99-9.19-18.57-13.26-29.79-6.9
        c-0.48-0.78-0.95-1.57-1.57-2.58c1.64-0.71,3.16-1.51,4.77-2.04c14.6-4.85,29.54,3.78,32.66,18.86c0.57,2.73,0.59,5.49,0.23,8.25
        c-0.05,0.37,0.06,0.84,0.26,1.14c3.08,4.54,5.13,9.51,5.53,14.99c0.13,1.78,0.6,2.6,2.29,3.28c2.47,0.98,3.75,3.16,4.02,5.8
        c0.32,3.06-0.28,5.87-2.96,7.8c-0.72,0.52-1.59,0.88-2.43,1.18c-0.56,0.19-0.77,0.4-0.77,1c0.02,2.25,0.03,4.49-0.03,6.74
        c-0.36,13.49-10.56,25.76-23.75,28.61c-0.69,0.15-1.39,0.27-2.15,0.42c-0.16-0.99-0.3-1.9-0.46-2.88c3.18-0.54,6.18-1.47,8.95-3.02
        c8.19-4.61,13.05-11.56,14.25-20.9c0.4-3.14,0.27-6.35,0.39-9.68C75.83,63.15,73.94,63.15,71.94,63.15z M26.31,33.19
        c-2.38,3.92-3.83,7.97-4.01,12.35c-0.19,4.61-0.11,9.24-0.14,13.85c0,0.25,0.05,0.49,0.08,0.75c0.97,0,1.86,0,2.85,0
        c0-0.42,0-0.77,0-1.12c0-2.8,0.03-5.6-0.02-8.39c-0.02-0.89,0.23-1.51,0.88-2.13c2.04-1.96,4.01-3.98,6.06-6.02
        C29.44,39.82,27.6,36.79,26.31,33.19z M77.78,60.16c0-4.38,0.06-8.64-0.03-12.89c-0.04-1.84-0.27-3.69-0.62-5.5
        c-0.58-3-1.75-5.8-3.38-8.41c-0.83,1.64-1.53,3.28-2.46,4.79c-0.94,1.54-2.1,2.94-3.22,4.47c2.02,2.01,4.12,4.06,6.16,6.15
        c0.34,0.35,0.59,0.93,0.6,1.42c0.05,2.96,0.03,5.92,0.03,8.88c0,0.35,0,0.7,0,1.1C75.88,60.16,76.77,60.16,77.78,60.16z
         M80.77,59.99c2.4-0.71,3.46-2.7,3.2-5.75c-0.16-1.9-1.61-3.6-3.2-3.75C80.77,53.62,80.77,56.76,80.77,59.99z M19.18,50.58
        c-1.95,0.49-2.95,2.25-2.89,4.89c0.06,2.29,1.16,3.96,2.89,4.32C19.18,56.74,19.18,53.7,19.18,50.58z" />
                        <path d="M51.46,38.27c4.4,0.37,8.09-1.03,11.22-4.25c0.7,0.63,1.39,1.25,2.15,1.93c-1.88,2.09-4.08,3.6-6.69,4.41
        c-1.5,0.47-3.1,0.79-4.67,0.83c-3.05,0.08-6.14,0.16-9.15-0.21c-6.38-0.78-11.97-6.21-13.02-12.56c-0.4-2.44-0.34-4.97-0.49-7.55
        c1.96,0,3.68,0,5.27,0c0.95-2.5,1.85-4.88,2.81-7.43c2.47,1.1,4.79,2.14,7.21,3.23c1.21-1.18,2.54-2.47,3.82-3.71
        c1.3,1.27,2.62,2.56,3.84,3.74c2.45-1.09,4.78-2.13,7.29-3.25c0.84,2.29,1.67,4.43,2.38,6.6c0.22,0.66,0.47,0.86,1.13,0.84
        c1.42-0.05,2.85-0.01,4.25-0.01c0.7,4.19-0.2,9.66-2.02,12.2c-0.78-0.44-1.56-0.88-2.44-1.37c1.28-2.47,1.87-5.05,1.61-7.8
        C58.76,22.73,50.68,28.97,51.46,38.27z M33.97,23.84c-0.91,8.76,6.72,15.44,14.4,14.36C49.38,30.16,42.39,22.87,33.97,23.84z
         M49.95,30.11c1.11-2.22,2.47-4.02,4.22-5.51c0.16-0.14,0.31-0.46,0.26-0.65c-0.73-2.82-2.32-5.08-4.47-7.03
        c-2.05,1.86-3.6,3.95-4.35,6.55c-0.1,0.35-0.01,0.95,0.23,1.17C47.52,26.19,48.88,27.94,49.95,30.11z M55.65,19.1
        c0.54,1.23,1.02,2.32,1.5,3.42c1.19-0.45,2.38-0.9,3.66-1.39c-0.47-1.3-0.91-2.53-1.39-3.87C58.06,17.93,56.85,18.52,55.65,19.1z
         M42.76,22.53c0.49-1.13,0.96-2.22,1.49-3.45c-1.21-0.58-2.42-1.17-3.76-1.81c-0.48,1.38-0.92,2.64-1.35,3.89
        C40.44,21.65,41.56,22.07,42.76,22.53z" />
                        <path d="M59.95,80.85c-4.55,7.61-15.63,7.61-19.91,0.01c0.8-0.47,1.6-0.94,2.39-1.41c3.84,5.83,11.59,5.38,15.05-0.02
        C58.3,79.9,59.13,80.38,59.95,80.85z" />
                        <path d="M91.22,14.6c-1.05,0-1.93,0-2.91,0c0-0.95,0-1.87,0-2.87c-1.01,0-1.91,0-2.88,0c0-0.99,0-1.91,0-2.91c0.9,0,1.79,0,2.8,0
        c0-1,0-1.92,0-2.9c1.03,0,1.95,0,2.95,0c0,0.92,0,1.82,0,2.83c1,0,1.92,0,2.9,0c0,1.01,0,1.91,0,2.91c-0.9,0-1.83,0-2.86,0
        C91.22,12.69,91.22,13.61,91.22,14.6z" />
                        <path d="M11.81,14.6c-1.06,0-1.9,0-2.88,0c0-0.95,0-1.87,0-2.88c-1.03,0-1.92,0-2.89,0c0-0.99,0-1.88,0-2.88c0.88,0,1.77,0,2.8,0
        c0-1.01,0-1.93,0-2.92c1.03,0,1.92,0,2.96,0c0,0.91,0,1.83,0,2.84c1.03,0,1.93,0,2.89,0c0,1.02,0,1.94,0,2.96
        c-0.96,0-1.86,0-2.88,0C11.81,12.73,11.81,13.65,11.81,14.6z" />
                        <path
                            d="M41.1,31.01c-0.91,0-1.8,0-2.77,0c0-0.91,0-1.83,0-2.81c0.9,0,1.8,0,2.77,0C41.1,29.12,41.1,30.04,41.1,31.01z" />
                    </g>
                </svg>
                <h5>Art Therapy</h5>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, assumenda. </span>
            </div>
        </div>
    </section>


    <!-- make an appoinment section -->
<!-- 
    <section class="makeAnAppinmentSection" > 

    </section> -->


    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>

    <script src="./assets/frontend/js/main.js"></script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>