    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">


            <img src="{{ asset('img/Logo-text.png') }}">

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active" href="{{ url('/home1') }}">Esittelyssä</a></li>
                    <li><a href="{{ url('/home2') }}">Terassit kartalla</a></li>
                    <li><a href="{{ url('/home3') }}">Tapahtumat</a></li>
                    <li><a href="{{ url('/home4') }}">Terassiuutiset</a></li>
                    <li><a class="getstarted" href="about.html">Get Started</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Ravintola Veljekset</h1>
            <p>Ravintola Sipoon Söderkullassa</p>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->
