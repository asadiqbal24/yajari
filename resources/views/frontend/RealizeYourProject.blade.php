@include('frontend.layout.head')
@section('sHome','active')
    <link rel="stylesheet" href="{{asset('theme/css/RealizeYourProjectStyle.css')}}">
    <style type="text/css">
        @media all and (min-width: 1590px) {

            .socialicon {
                transform: translateX(75%);
            }

            .followus {
                position: relative;
                left: 329px;
                top: -50px;
            }

            .ahre {
                padding-left: 2rem;
            }

            .ReportCol {

                margin-right: 18rem;
            }

            .navalign2 {
                padding-left: 380px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
            }

            .nav-publish {

                padding-left: 20px;
                background: linear-gradient(to right, #ffacbf, #fa4d75);

                color: white;
                border-radius: 20px;
                align-items: center;
                padding-top: 10px;
            }

            .searchbardown {
                position: relative;
                top: -10px;
                left: -160px
            }

            .col-xxl-7 {
                flex: 0 0 auto;
                width: 100%;

            }

            .searchbar {
                position: relative;
                width: 160%;
                left: -160px;
            }

            .lastpic {
                position: relative;
                top: 7px;
                left: 35px;
            }

            .CRButton2 {
                text-align: center;
                width: 13rem;
                height: 3.5rem;
                background: linear-gradient(to right, #ff6d99, #fd0d55);
                border-radius: 6px;
                position: relative;
                left: -100px;
            }
        }

        @media (min-width: 1920px) {
            .background-image {
                width: 100%;
                height: 200px;
                border-radius: 2%;
                background-image: url('{{asset("/pictures/Group 2479.png")}}');
                background-position: center;
                background-size: cover;
                position: relative;
                overflow: hidden;
            }
        }
    </style>

<body style="zoom:90%">
    <!--Nav Bar-->
    @include('frontend.layout.navbar')
    <!--Show Case-->
    <section class="pt-top pb-5 text-center">
        <div class="container-fluid text-light" style="width: 100%;margin: auto;">
            <div class="background-image text-center" style="border-radius: 5px;">
                <p class="showcase-text1">Realize your projects!</p>
                <p class="showcase-text2" style="font-size: 22; font-weight:500;">
                    Find at a glance all the services and equipment rentals dedicated to your current needs!</p>
            </div>
        </div>
    </section>
    <!--Back TO School-->
    <section class="pb-5 text-center">
        <div class="container text-center" id="Exchange-con">
            <p style=" font-size: 25px; font-weight: bold;padding-bottom:1.8rem;">It's Back To School </p>
            <div class="row">
                <div class="col" style="width: 10rem;">
                    <img src="{{asset('theme/pictures/ashwini-chaudhary--1.png')}}" class="card-img-top" style="width: 10rem;">
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 12px; font-weight: bold;">Building maintenance</p>
                    </div>
                </div>
                <div class="col" style="width: 10rem;">
                    <img src="{{asset('theme/pictures/mkjr_-2zUjvV0M9dQ-unsplash.png')}}" class="card-img-top" style="width: 10rem;">
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 12px; font-weight: bold;">Home maintenance</p>
                    </div>
                </div>
                <div class="col" style="width: 10rem;">
                    <img src="{{asset('theme/pictures/Group 1578.png')}}" class="card-img-top" style="width: 10rem;">
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 12px; font-weight: bold;">Moving my stuff</p>
                    </div>
                </div>
                <div class="col" style="width: 10rem;">
                    <img src="{{asset('theme/pictures/ashwini-chaudhary--1.png')}}" class="card-img-top" style="width: 10rem;">
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 12px; font-weight: bold;">Building maintenance</p>
                    </div>
                </div>
                <div class="col" style="width: 10rem;">
                    <img src="{{asset('theme/pictures/nikola-johnny-mirkovic-xbU7MKzCQoY-unsplash.png')}}" class="card-img-top" style="width: 10rem;">
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 12px; font-weight: bold;">Vehicle Maintenance</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Your "Well at home" projects-->
    <!--Footer-->

    @include('frontend.layout.footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body></html>
