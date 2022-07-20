@extends('layout.app')

@section('content')
    <section class="contactHeader py-5">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-xl-8 text-start text-white py-1">
                    <span class="dot bg-white"></span><label class="px-2 pb-3 fs-5">Nous joindre</label>
                    <h1 class="fw-bold font_56">Location</h1>
                    <p class="font_18 ">Progressively maintain extensive infomediaries via extensible niches. Dramatically
                        disseminate standardized metrics after resource-leveling processes. Objectively pursue</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row py-5">
            <div class="col text-start">
                <span class="dot"></span><label class="px-2 pb-3 fs-5">Avantage Proposal</label>
                <h1 class="fw-bold font_60">Request <span style="color:#66AF27;">A Callback</span></h1>
                <p class="fs-5 contactSectionP">If you’d like to talk to our consulting team, contact us via the form and
                    we’ll get back to you shortly.</p>
                <div class="py-4 col-xl-10 col-md-10">

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
            <div class="col-lg-6 col-12">

                <img class="img-fluid" src="images/mobile_girl.png" alt="">


            </div>
        </div>
    </section>

    <div class="mapSection py-5">
        <div class="container py-5">

            <div class="row">
                <div class="col-xl-5 text-xl-start contactBox  ps-xxl-5 ps-xl-4 py-3 ">
                    <div class="ps-3">
                        <span class="dot"></span><label class="px-2 py-3 fs-5">Avantage Proposal</label>
                        <h1 class="fw-bold bigTitle">Agadir<span style="color:#66AF27;"> Office</span></h1>
                        <p class="fs-5 col-xl-10 pb-3 mx-xl-0 mx-sm-auto">If you’d like to talk to our consulting team,
                            contact us via the form and we’ll get back to you shortly.</p>

                    </div>

                    <div class=" py-3 px-5 text-xl-start">
                        <div class=" pe-3  float-xl-start">
                            <img class="pe-2" src="images/droppin.svg" alt="">
                        </div>

                        <div class="pb-2 ">
                            <p class="m-0 fw-bold fs-6">Agadir</p>
                            <p class="contactInfo">29, Rue Al Khanssae</p>
                        </div>

                        <div class=" pe-3 float-xl-start ">
                            <img class="pe-2" src="images/phone.svg" alt="">
                        </div>

                        <div class="pb-2 ">
                            <p class="m-0 fw-bold fs-6">+212 67 11 01 02</p>
                            <p class="contactInfo">Appelez-nous</p>
                        </div>

                        <div class=" pe-3  float-xl-start">
                            <img class="pe-2" src="images/envelop.svg" alt="">
                        </div>

                        <div class="pb-2 ">
                            <p class="m-0 fw-bold fs-6">contact@nowtel.com</p>
                            <p class="contactInfo">contactez-nous équipe de consultants</p>
                        </div>


                    </div>
                </div>
                <div class="col">
                    <div class="">
                        <img class="img-fluid" src="images/mapGuy01.png" alt="">
                        <img class="contactPin" src="images/nowtelPin.svg" alt="">

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
