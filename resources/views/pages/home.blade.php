@extends('layouts.mainLayout')

@section('content')

<script type="text/javascript">
    document.getElementById('header').className = "fixed-top header-transparent";
    document.getElementById('home').className = "active";
</script>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animated fadeInDown">Welcome to <span>DSI Products</span></h2>
                <p class="animated fadeInUp">"A Online Shopping Site"</p>
                <a href="" class="btn-get-started animated fadeInUp">Get Started</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animated fadeInDown">Welcome to <span>Resource Archive</span></h2>
                <p class="animated fadeInUp">"One platform to get idea, build idea, share idea."</p>
                <a href="" class="btn-get-started animated fadeInUp">Get Started</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animated fadeInDown">Welcome to <span>Resource Archive</span></h2>
                <p class="animated fadeInUp">"Create project, make research, get community support and so on!!!"</p>
                <a href="" class="btn-get-started animated fadeInUp">Get Started</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">


</main><!-- End #main -->

@endsection
