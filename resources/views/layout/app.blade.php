<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NOWTEL</title>

    <!-- Fontawesome icons -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Other Fonts -->
    <link href="http://fonts.cdnfonts.com/css/altone-trial" rel="stylesheet">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



</head>

<body>
    <!-- CONTACT MODAL -->
    <div class="popup-overlay pt-5" id="contact-popup">


        <div class="container popup-wrap" id="subscribe-popup">

            <div class="popup">


                <div class="main-popup col-xxl-3 col-lg-5 col-sm-7">
                    <span class="close-btn" onclick="closePopup()">&times;</span>
                    <div class="popup-content">

                        <!-- Carousel  -->
                        <div id="carouselExampleIndicators" class="welcomePopup carousel slide"data-bs-interval="false"
                            data-bs-ride="carousel">

                            <div class="carousel-indicators">
                                <button type="button" id="indic1" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="0" class="active" aria-current="true"
                                    aria-label="Slide 1"></button>
                                <button type="button" id="indic2" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" id="indic3" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="" aria-label="Slide 3"></button>
                            </div>

                            <div class="carousel-inner">
                                <div class="carousel-item active" id="item01">

                                    <div class="row py-4"> </div>
                                    <img class="py-5" src="images/nowtel_popup_logo.svg" alt="">
                                    <h3>Bienvenue Nowtel</h3>
                                    <p class="pb-5 col-md-8 col-xl-8 col-10 mx-auto">Une seule étape pour choisir le bon
                                        service More than 5 million users across the globe</p>
                                    <button class="ctaFilledBtn py-3 mb-2 px-5" type="button" name="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2">Continuez</button>
                                </div>
                                <div class="carousel-item" id="item02">


                                    <img class="py-4 col-4" src="images/nowtel_popup_logo.svg" alt="">

                                    <form class=" col-lg-10 mx-auto" id="form" onsubmit="return thankyouPopup()">
                                        <div class="form-group ">
                                            <input type="text" class="contactForm " id="your-name"
                                                placeholder="Votre nom *" required>
                                            <!-- <span class="invalid-tooltip">Veuillez renseigner votre nom!</span> -->
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="contactForm " id="your-email"
                                                placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="phone" class="contactForm " id="phone"
                                                placeholder="Numéro de téléphone" id="telephone" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="contactForm " id="your-city"
                                                placeholder="Pays *" required>
                                        </div>
                                        <button type="submit" class="btn mb-2 ctaFilledBtn">Continuez</button>
                                    </form>

                                </div>
                                <div class="carousel-item" id="item03">

                                    <div class="pt-5">
                                        <div class="checkBg p-5  bg-white">
                                            <div class="checkmark">L</div>
                                        </div>
                                        <div class="pt-5"></div>
                                        <h3 class="pt-5">C'est ça!</h3>
                                        <p class="pb-3 col-md-8 col-xl-8 col-10 mx-auto">Faisons certaines choses.
                                            N'oubliez pas de nous suivre sur Instagram pour dire bonjour.</p>
                                        <button class="ctaFilledBtn py-3 mb-2 px-5" onclick="closePopup()"
                                            type="button" name="button">Continuez</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <section>
        <nav class="topBar navbar navbar-expand-lg bg-dark">
            <div class="container">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.794" height="11.817"
                        viewBox="0 0 10.794 11.817">
                        <path id="Tracé_10" data-name="Tracé 10"
                            d="M10.272,8.169A1.761,1.761,0,0,0,9.6,7l-1.075-.79a1.7,1.7,0,0,0-2.371.363l-.481.655A16.4,16.4,0,0,1,3.75,4.75L4.4,4.445A1.7,1.7,0,0,0,5.219,2.19L4.653.982A1.678,1.678,0,0,0,2.4.166c-.1.047-.231.1-.369.162a6.874,6.874,0,0,0-.876.42A1.78,1.78,0,0,0,0,2.627a9.651,9.651,0,0,0,2.363,5,10.415,10.415,0,0,0,4.411,3.55,2.839,2.839,0,0,0,.826.133,1.787,1.787,0,0,0,1.518-.792C9.3,10.26,9.5,10,9.7,9.74c.1-.13.2-.259.3-.388a1.565,1.565,0,0,0,.274-1.182Zm-.76.815c-.1.127-.195.255-.293.383-.2.261-.408.53-.6.8a1.351,1.351,0,0,1-1.668.427C4.406,9.822.673,5.122.61,2.612a1.189,1.189,0,0,1,.784-1.3.308.308,0,0,0,.066-.033A6.214,6.214,0,0,1,2.269.888c.143-.061.278-.118.388-.17A1.1,1.1,0,0,1,3.126.612a1.074,1.074,0,0,1,.975.629l.565,1.208a1.09,1.09,0,0,1-.523,1.444l-.911.426a.3.3,0,0,0-.172.323,10.747,10.747,0,0,0,2.563,3.31.3.3,0,0,0,.351-.105l.668-.91A1.09,1.09,0,0,1,8.162,6.7l1.075.79a1.165,1.165,0,0,1,.433.764.964.964,0,0,1-.157.727Z"
                            transform="translate(0.25 0.255)" fill="#f6f6f6" stroke="#f6f6f6" stroke-width="0.5" />
                    </svg>
                    <label>+212 5 28 22 22 92</label>
                    <svg id="Groupe_10" data-name="Groupe 10" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="14.202" height="9.152"
                        viewBox="0 0 14.202 9.152">
                        <defs>
                            <clipPath id="clip-path">
                                <rect id="Rectangle_9" data-name="Rectangle 9" width="14.202" height="9.152"
                                    fill="#f6f6f6" stroke="#f6f6f6" stroke-width="0.5" />
                            </clipPath>
                        </defs>
                        <g id="Groupe_9" data-name="Groupe 9" clip-path="url(#clip-path)">
                            <path id="Tracé_11" data-name="Tracé 11"
                                d="M.631,0A.64.64,0,0,0,0,.631v7.89a.641.641,0,0,0,.631.631h12.94a.64.64,0,0,0,.631-.631V.631A.64.64,0,0,0,13.571,0ZM1.879.947H12.323L7.1,4.926,1.879.947Zm-.932.478L6.815,5.9a.473.473,0,0,0,.572,0l5.868-4.473v6.78H.947V1.425Z"
                                fill="#f6f6f6" stroke="#f6f6f6" stroke-width="0.5" />
                        </g>
                    </svg>
                    <label>contact@nowtelcoms.com</label>
                </div>
                <div class="">
                    <a href="#" class="text-decoration-none">Linkedin</a>
                    <a href="#" class="text-decoration-none">Facebook</a>
                    <a href="#" class="text-decoration-none">Instagram</a>
                </div>


            </div>

        </nav>

    </section>

    <nav class="menuBar py-3 navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/nowtel_logo_01.svg" alt="Nowtel">
            </a>
            <button class="navbar-toggler border-secondary" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon rounded-3"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 menuList">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/main') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/services') }}">Services informatiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ url('/nouveautes') }}">Nouveautés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Nous joindre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ url('/carrieres') }}">Carrières</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
                    </li>

                </ul>
                <button class="ctaFilledBtn open-btn" onclick="openPopup()" type="button"
                    name="button">Consultation</button>


            </div>
        </div>
    </nav>


    @yield('content')

    <footer>
        <div class="container">
            <div class="row pt-5">
                <div class="col col-xl-4 py-3 text-start">
                    <div class="row">
                        <div class="col-9">
                            <img src="images/nowtel_logo_02.svg" alt="">
                            <p class="py-3 btmLogotext">Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s</p>
                            <form>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control btmEmailInput"
                                        placeholder="Adresse email*" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <button class="btn btmEmailBtn" type="submit">S'abonner</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="col-xl-5 py-3">
                    <div class="row text-start">
                        <div class="col-xl-6 col-md-6  col-xs-12 pb-2 text-start">
                            <h4 class="">Métiers</h4>
                            <ul class="btmMenuGroup">
                                <li class="btmMenuItem">Vidéosurveillance augmentée</li>
                                <li class="btmMenuItem">Courant faible et Wifi</li>
                                <li class="btmMenuItem">Cyber-sécurité</li>
                                <li class="btmMenuItem">Systèmes informatiques</li>
                                <li class="btmMenuItem">Maintenance et supervision</li>
                            </ul>


                        </div>
                        <div class="col-xl-6  col-md-6  col-xs-12 text-start">
                            <h4 class="">Solutions</h4>
                            <ul class="btmMenuGroup">
                                <li class="btmMenuItem">Tourisme / Hôtellerie de plein air</li>
                                <li class="btmMenuItem">Professionnels de santé</li>
                                <li class="btmMenuItem">Collectivités</li>
                                <li class="btmMenuItem">Entreprises</li>
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="col-xl-3 py-3">
                    <div class="pb-4">
                        <img src="images/footer_map.svg" alt="">
                    </div>
                    <div class="d-flex justify-content-center">
                        <img class="dropPin" src="images/droppin.svg" alt="">
                        <p class="m-0 py-1 ps-2"><strong>Agadir</strong> 29, Rue Al Khanssae</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="bottomBar py-3">
            <div class="container d-flex justify-content-between">
                <p class="my-auto text-white">© 2022 Copyrights by <span style="font-weight:500;">Digital
                        Élite.</span></p>
                <a class="nav-link p-0 text-white" href="#">Back to the top</a>
            </div>

        </div>

    </footer>


    <!-- JS Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.css') }}"></script>

</body>

</html>
