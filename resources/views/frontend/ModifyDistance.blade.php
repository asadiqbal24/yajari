<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('theme/css/ModifyDistanceStyle.css')}}">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <title>ya jari</title>
        <style type="text/css">
        @media (min-width: 1024px) {
        }
        @media all and (min-width: 1300px) {
        .MPItext1 {
        font-size: 25px;
        font-weight: bolder;
        padding-top: 10px;
        }
        }
        @media all and (min-width: 1440px) {
        .ViewProfileButton {
        color: white;
        font-size: 14px;
        padding: 0.3rem 1rem;
        background: linear-gradient(to right, #ff89a4, #ff0b44);
        border-radius: 5px;
        position: relative;
        left: -22px;
        }
        .MPItext1 {
        font-size: 25px;
        font-weight: bolder;
        padding-top: 10px;
        }
        }
        @media (min-width: 1590px) {
        .navalign {
        padding-left: 173px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        padding-right: .5rem;
        }
        .sideicon {
        padding-top: 0px;
        }
        .MPItext1 {
        font-size: 30px;
        font-weight: bolder;
        padding-top: 8px;
        }
        .cancel {
        margin: auto;
        text-align: center;
        height: 2.5rem;
        border-radius: 10px;
        margin-bottom: 2rem;
        border: 1px solid #ff406c;
        width: 9rem;
        position: relative;
        left: -50px;
        }
        .CCButton {
        margin: auto;
        text-align: center;
        height: 2.5rem;
        background: linear-gradient(to right, #ff89a4, #ff0b44);
        border-radius: 10px;
        margin-bottom: 2rem;
        width: 9rem;
        position: relative;
        left: 51px;
        }
        .navalign2 {
        padding-left: 570px;
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
        .ViewProfileButton {
        position: relative;
        left: -35px;
        }
        .socialicon {
        transform: translateX(88%);
        }
        .followus {
        position: relative;
        left: 328px;
        top: -50px;
        }
        }
        @media all and (min-width: 1920px) {
        .navalign {
        padding-left: 170px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        padding-right: .5rem;
        }
        .navalign2 {
        padding-left: 920px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        }
        .sideicon {
        padding-top: 15px;
        }
        .MPItext1 {
        font-size: 30px;
        font-weight: bolder;
        padding-top: 20px;
        }
        .ViewProfileButton {
        position: relative;
        left: -45px;
        }
        }
        </style>
    </head>
    <body style="zoom:90%">
        <!--Nav Bar-->
        @include('frontend.layout.navbar')
        <!--Show Case-->
        <section class="text-center pt-3">
            <div class="container-fluid text-light">
                <div class="background-image row" style="    background-image: url(theme/pictures/Group\ 3.png);">
                    <div class="col-5 col-xxl-5 col-lg-5 col-md-3 col-sm-4 text-end">
                        <img src="{{asset('theme/icons/Path -1.png')}}" class="sideicon">
                    </div>
                    <div class="col-7 col-xxl-7 col-lg-7 col-md-8 col-sm-8 text-start">
                        <p class="MPItext1">Modify Account Settings</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Modify Distance-->
        <section class="py-3">
            <div class="PIcontainer container">
                <div class="row">
                    <div class="hideShowDIV2 row pb-4" style="margin: auto;">
                        <div class="CompletePcol2 row" style="margin: auto; padding: 20px 0;">
                            <div class="col-sm-2 col-2 text-end">
                                <img class="CP2img" src="{{asset('theme/icons/ic_contacts_24px.png')}}">
                            </div>
                            <div class="col-sm-10 col-10 text-start">
                                <p class="CP2text1">70% of your profile is completed</p>
                                <p class="CP2text2">Complete your profile now</p>
                            </div>
                            <div class="row text-center">
                                <a href="{{route('professionalProfile')}}" class="viewmyprofile" style="text-decoration: none;"><span class="ViewProfileButton">View My Profile</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hideShowDIV1 row pb-5 pt-3">
                    <div class="col-xxl-7 col-lg-6 col-md-12">
                    </div>
                    <div class="col-sm-1">
                    </div>
                    <div class="col-xxl-4 col-lg-5 col-md-12">
                        <div class="CompletePcol2 row p-3">
                            <div class="col-sm-2 text-end">
                                <img class="CP2img" src="{{asset('theme/icons/ic_contacts_24px.png')}}">
                            </div>
                            <div class="col-sm-10 text-start">
                                <p class="CP2text1">70% of your profile is completed</p>
                                <p class="CP2text2">Complete your profile now</p>
                            </div>
                            <div class="row text-center">
                                <a href="{{route('professionalProfile')}}" style="text-decoration: none;"><span class="ViewProfileButton">View My Profile</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="CCDIVcontainer py-3">
                        <div class="row py-3">
                            <div class="col-2 col-sm-2 text-end">
                                <img class="CCDIVimg" src="{{asset('theme/icons/Subtraction 17.png')}}">
                            </div>
                            <div class="col-10 col-sm-10 text-start">
                                <p class="ChoseCText1">Choose the distance within which you are going to provide your services:</p>
                                <p class="ChoseCText2">Your choosen area must be minimum 5 kilometers. Maximum can be according to
                                your wish:</p>
                            </div>
                        </div>
                        <div class="CDtext row pb-3">
                            <div class="col-6 col-sm-6">
                                <p>Distance:</p>
                            </div>
                            <div class="col-6 col-sm-6 text-end">
                                <p>3.5 km</p>
                            </div>
                            <div class="col-12 col-sm-12">
                                <input type="range" class="form-range" id="customRange1">
                            </div>
                        </div>
                        <div class="ChoseAddEditC row p-2" id="map">
                        </div>
                        <div class="ChoseAddEditB row pt-4">
                            <div class="col-12 col-sm-5 col-lg-4 text-end">
                                <div class="cancel row">
                                    <a role="button">
                                        <p style="    color: #ff3867;
                                            position: relative;
                                            top: 7px;
                                            font-weight: inherit;">
                                            Cancel
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-2 col-lg-4">
                            </div>
                            <div class="col-12 col-sm-5 col-lg-4 text-start">
                                <div class="CCButton row">
                                    <a role="button" href="HomePage.html">
                                        <p style="color: white;">Confirm</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        @include('frontend.layout.footer')
        @include('frontend.layout.scripts')
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
        $('.purpose').on('change', function() {
        if (this.value == '1')
        //.....................^.......
        {
        $(".professional").show();
        $(".private").hide();
        } else if (this.value == '2') {
        $(".private").show();
        $(".professional").hide();
        } else {
        $(".professional").hide();
        $(".private").hide();
        }
        });
        });
        </script>
        <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYW1tYXIxMjMxMjMiLCJhIjoiY2tydzJsMm9jMGNpajJucnh4M2pmaTVsZCJ9.ZxNGpJR7Qw9t3ONgdZmbQA';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [74.515225, 32.467766],
        zoom: 15,
        });
        const marker1 = new mapboxgl.Marker()
        .setLngLat([74.515225, 32.467766])
        .addTo(map);
        </script>
    </body>
</html>