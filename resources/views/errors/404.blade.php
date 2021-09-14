@extends('include.header')

@section('header')
404 - Not Found
@endsection

<body>


    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!--============= Error In Section Starts Here =============-->
    <div class="error-section bg_img" data-background="./assets/images/404/404-bg.jpg">
        <div class="container">
            <div class="man1">
                <img src="./assets/images/404/man_01.png" alt="404" class="wow bounceInUp" data-wow-duration=".5s" data-wow-delay=".5s">
            </div>
            <div class="man2">
                <img src="./assets/images/404/man_02.png" alt="404" class="wow bounceInUp" data-wow-duration=".5s">
            </div>
            <div class="error-wrapper wow bounceInDown" data-wow-duration=".7s" data-wow-delay="1s">
                <h1 class="title">404</h1>
                <h3 class="subtitle">Page Not Found</h3>
                <a href="/" class="button-5">Go Back</a>
            </div>
        </div>
    </div>
    <!--============= Error In Section Ends Here =============-->

    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/modernizr-3.6.0.min.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/magnific-popup.min.js"></script>
    <script src="./assets/js/jquery-ui.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/waypoints.js"></script>
    <script src="./assets/js/nice-select.js"></script>
    <script src="./assets/js/owl.min.js"></script>
    <script src="./assets/js/counterup.min.js"></script>
    <script src="./assets/js/paroller.js"></script>
    <script src="./assets/js/countdown.js"></script>
    <script src="./assets/js/main.js"></script>


</body>
