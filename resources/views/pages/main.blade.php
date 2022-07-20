@extends('layout.app')

@section('content')
    <section class="frontSection" id="front-section">
        <div class="container">


            <div class="row">
                <div class="carousel-container col-xxl-6 col-xl-8">
                    <!-- data-bs-interval: the amount of time to delay between automatically cycling an item. If false, carousel will not automatically cycle -->
                    <!-- data-bs wrap: whether the carousel should cycle continuously (i.e go from first to last and vice-versa) -->
                    <div id="vertical-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500"
                        data-bs-wrap="false">
                        <!-- Carousel slide indicators -->
                        <ol class="carousel-indicators">
                            <li data-bs-target="#vertical-carousel" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#vertical-carousel" data-bs-slide-to="1"></li>
                            <li data-bs-target="#vertical-carousel" data-bs-slide-to="2"></li>
                            <li data-bs-target="#vertical-carousel" data-bs-slide-to="3"></li>
                        </ol>
                        <div class="frontCarousel carousel-inner text-start ps-5">
                            <!-- Carousel item represents each slide -->

                            <div class="carousel-item active" style="">
                                <h1>Parce que prendre de bonnes décisions informatiques <span style="color:#66AF27;"> c'est
                                        notre affaire !
                                    </span></h1>
                                <button class="ctaFilledBtn" type="button" name="button">Découvrir</button>
                            </div>
                            <div class="carousel-item">
                                <h1>Parce que prendre de bonnes décisions informatiques c'est notre affaire !</h1>
                                <button class="ctaFilledBtn" type="button" name="button">Découvrir</button>
                            </div>
                            <div class="carousel-item">
                                <h1>Parce que prendre de bonnes décisions informatiques c'est notre affaire !</h1>
                                <button class="ctaFilledBtn" type="button" name="button">Découvrir</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="frontList row px-5 pt-5 bg-white">
                <div class="col-lg-3 col-md-6">
                    <img class="imgBorderBtm" src="images/img_10.svg" alt="">
                    <h2>Lorem Ipsum is simply dummy text</h2>
                    <p>Maintenance intégrale de votre système informatique et assistance technique quotidienne.</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <img class="imgBorderBtm" src="images/img_10.svg" alt="">
                    <h2>Lorem Ipsum is simply dummy text</h2>
                    <p>Maintenance intégrale de votre système informatique et assistance technique quotidienne.</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <img class="imgBorderBtm" src="images/img_10.svg" alt="">
                    <h2>Lorem Ipsum is simply dummy text</h2>
                    <p>Maintenance intégrale de votre système informatique et assistance technique quotidienne.</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <img class="imgBorderBtm" src="images/img_10.svg" alt="">
                    <h2>Lorem Ipsum is simply dummy text</h2>
                    <p>Maintenance intégrale de votre système informatique et assistance technique quotidienne.</p>
                </div>
            </div>
        </div>
    </section>

    <section class=" container" id="2nd-section">
        <div class="py-5 ">
            <span class="dot"></span><label class="px-2 pb-3 fs-5">Qu'est-ce qu'on fait</label><span
                class="dot"></span>
            <h1 class="fw-bold bigTitle"><span style="color:#66AF27;">Services</span> informatiques</h1>
        </div>
        <div class="row pt-4 secSectionGrid">
            <div class="col">
                <img src="images/img_01.png" alt="">
                <h2>Lorem Ipsum</h2>
                <p>Fière d’offrir des services informatiques aux entreprises, Solutions GA est en mesure de vous proposer un
                    service conseil pour tout ce qui a trait aux technologies de l’information.</p>
                <a href="#">Plus de détails<i class="fal fa-angle-right"></i></a>
            </div>
            <div class="col">
                <img src="images/img_02.png" alt="">
                <h2>Lorem Ipsum</h2>
                <p>Fière d’offrir des services informatiques aux entreprises, Solutions GA est en mesure de vous proposer un
                    service conseil pour tout ce qui a trait aux technologies de l’information.</p>
                <a href="#">Plus de détails</a>
            </div>
            <div class="col">
                <img src="images/img_03.png" alt="">
                <h2>Lorem Ipsum</h2>
                <p>Fière d’offrir des services informatiques aux entreprises, Solutions GA est en mesure de vous proposer un
                    service conseil pour tout ce qui a trait aux technologies de l’information.</p>
                <a href="#">Plus de détails</a>
            </div>
            <div class="col">
                <img src="images/img_04.png" alt="">
                <h2>Lorem Ipsum</h2>
                <p>Fière d’offrir des services informatiques aux entreprises, Solutions GA est en mesure de vous proposer un
                    service conseil pour tout ce qui a trait aux technologies de l’information.</p>
                <a href="#">Plus de détails</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <img class="contentPos" src="images/img_05.png" alt="">
            </div>

            <div class="col text-start d-flex align-content-center flex-wrap">
                <span class="dot"></span><label class="px-2 pb-3 fs-5">Qu'est-ce qu'on fait</label>
                <h1 class="fw-bold bigTitle">Votre partenaire<span style="color:#66AF27;"> informatiques</span></h1>
                <p class="fs-5">Une entreprise de service informatique et de consultation informatique qui se démarque!
                </p>
                <button class="ctaFilledBtn py-3  px-5" type="button" name="button">Devis gratuit</button>
            </div>

        </div>

    </section>
    <section class="secSectionLast py-5">
        <div class="container py-5">
            <div class="">
                <span class="dot"></span><label class="px-2 pb-3 fs-5">Qu'est-ce qu'on fait</label><span
                    class="dot"></span>
                <h1 class="fw-bold bigTitle pb-5"><span style="color:#66AF27;">Des solutions</span><br /> clés en main pour
                    vos besoins</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 px-4">
                    <img class="imgBorderBtm" src="images/img_07.svg" alt="">
                    <h2>Lorem Ipsum is simply dummy text</h2>
                    <p>Un technicien Nowtel vous assiste par téléphone pour tout problème concernant votre activité : accès
                        à Internet, envoi et réception de mail, accès des clients VPN, maintenance informatique, dépannage
                        bureautique….</p>
                </div>
                <div class="col-lg-4 px-4">
                    <img class="imgBorderBtm" src="images/img_07.svg" alt="">
                    <h2>Lorem Ipsum is simply dummy text</h2>
                    <p>Un technicien Nowtel vous assiste par téléphone pour tout problème concernant votre activité : accès
                        à Internet, envoi et réception de mail, accès des clients VPN, maintenance informatique, dépannage
                        bureautique…</p>
                </div>
                <div class="col-lg-4 px-4">
                    <img class="imgBorderBtm" src="images/img_07.svg" alt="">
                    <h2>Lorem Ipsum is simply dummy text</h2>
                    <p>Un technicien Nowtel vous assiste par téléphone pour tout problème concernant votre activité : accès
                        à Internet, envoi et réception de mail, accès des clients VPN, maintenance informatique, dépannage
                        bureautique…</p>
                </div>
            </div>
        </div>
    </section>

    <section class="greenSection pt-5">
        <div class="container p-0">
            <div class="row">
                <div class="col">
                    <img src="images/img_08.png" alt="">
                </div>

                <div class="col text-start d-flex align-content-center flex-wrap text-white pb-5">
                    <span class="dot bg-white"></span><label class="px-2 pb-3 fs-5">Vous êtes en bonne compagnie</label>
                    <h1 class="fw-bold bigTitle">Une société experte <br /><span style="color:#084631;">dans son
                            domaine</span></h1>
                    <p class="greenSecParag">1600 collaborateurs à votre service au quotidien 65 000 clients accompagnés 24
                        ans d’expertise auprès des entreprises 100% de satisfaction clients</p>
                    <button class="ctaOutlinedBtn" type="button" name="button">View Testimonials</button>
                </div>

            </div>
        </div>

    </section>
    <section class="container lastSection pt-5">
        <div class="row pb-5">
            <div class="col text-start d-flex align-content-center flex-wrap">
                <h1 class="fw-bold">Vous allez adorer Nowtel<br /><span style="color:#254608;">Des solutions
                        d'affaires</span></h1>
                <p>Quickly aggregate B2B users and worldwide potentialities. Progressively plagiarize resource-leveling
                    e-commerce through resource-leveling core competencies.</p>
                <div class="row">
                    <div class="col p-0">
                        <ul>
                            <li>Great Prospect To Thrive</li>
                            <li>In Trend With The Times</li>
                            <li>Easy To Adapt Your Business To</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li>Modern Solutions & Advices</li>
                            <li>Inline With Your Requirements</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col">
                <img src="images/img_09.png" alt="">
            </div>

        </div>
        <div class="row lastSecGrid pt-5">
            <div class="col-lg-3 col-md-6">
                <div class="circleBg">
                    <img src="images/bulb.svg" alt="">
                </div>
                <h3>Nurture Ideas</h3>
                <p class="px-5">Quickly coordinate e-business applications through catalysts for change motions.</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="circleBg BgCreative">
                    <img src="images/creative.svg" alt="">
                </div>
                <h3>Nurture Ideas</h3>
                <p class="px-5">Quickly coordinate e-business applications through catalysts for change motions.</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="circleBg BgApp">
                    <img src="images/apps.svg" alt="">
                </div>
                <h3>Nurture Ideas</h3>
                <p class="px-5">Quickly coordinate e-business applications through catalysts for change motions.</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="circleBg BgThumb">
                    <img src="images/thumbup.svg" alt="">
                </div>
                <h3>Nurture Ideas</h3>
                <p class="px-5">Quickly coordinate e-business applications through catalysts for change motions.</p>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="row py-5">

            <div class="col text-start">
                <span class="dot"></span><label class="px-2 pb-3 fs-5">Avantage Proposal</label>
                <h1 class="fw-bold font_60">Contactez<span style="color:#66AF27;">-nous !</span></h1>
                <p class="fs-5 contactSectionP col-xxl-11">Si vous souhaitez parler à notre équipe de consultants,
                    contactez-nous via le formulaire et nous vous répondrons dans les plus brefs délais.</p>
                <div class="py-4 ">
                    <form>
                        <div class="">

                            <input type="text" class="contactForm" id="your-name" placeholder="Votre nom">

                        </div>

                        <div class="dropdown">
                            <button class="contactForm text-start bg-transparent dropdown-toggle" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                De quoi aimez-vous discuter ?
                            </button>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="">Action</a></li>
                                <li><a class="dropdown-item" href="">Another action</a></li>
                                <li><a class="dropdown-item" href="">Something else here</a></li>
                            </ul>
                        </div>


                        <div class="form-group">

                            <input type="phone" class="contactForm" id="your-phone" placeholder="Numéro de téléphone">
                        </div>
                        <div class="form-group">

                            <textarea class="contactForm" id="your-message" placeholder="Comment pouvons-nous vous aider?" rows="3"></textarea>
                        </div>

                        <button type="submit" class="ctaFilledBtn">Envoyer une demande</button>
                    </form>
                </div>
            </div>
            <div class="col">
                <img src="images/map.png" alt="">
            </div>
        </div>

        <div class="row py-5">
            <div class="col-xl-4 col-xs-12 d-flex justify-content-center py-2">
                <div class="row">
                    <div class="col-xl-2 col-md-2 col-xs-12 p-0">
                        <img class="pe-2" src="images/droppin.svg" alt="">
                    </div>
                    <div class="col-xl-10 col-md-10 col-xs-12">
                        <div class="text-start">
                            <p class="m-0 fw-bold fs-6">Agadir</p>
                            <p class="contactInfo">29, Rue Al Khanssae</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-xl-4 col-xs-12 d-flex justify-content-center py-2">
                <div class="row">
                    <div class="col-xl-2 col-md-2 col-xs-12 p-0">
                        <img class="pe-2" src="images/envelop.svg" alt="">
                    </div>
                    <div class="col-xl-10 col-md-10 col-xs-12">
                        <div class="text-start">
                            <p class="m-0 fw-bold fs-6">contact@nowtel.com</p>
                            <p class="contactInfo">contactez-nous équipe de consultants</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-xs-12 d-flex justify-content-center py-2">
                <div class="row">
                    <div class="col-xl-2 col-md-2 col-xs-12  p-0">
                        <img class="pe-2" src="images/phone.svg" alt="">
                    </div>
                    <div class="col-xl-10 col-md-10 col-xs-12">
                        <div class="text-start">
                            <p class="m-0 fw-bold fs-6">+212 67 11 01 02</p>
                            <p class="contactInfo">Appelez-nous</p>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </section>
@endsection
