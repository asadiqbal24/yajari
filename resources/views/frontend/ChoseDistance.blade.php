<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="ChoseDistanceStyle.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>ya jari</title>
</head>

<body style="zoom:90%">

    <!--Nav Bar-->

    <nav class="navbar navbar-expand-xl navbar-light fixed-top"
        style="background-color: white;box-shadow: 0px 2px 5px #acacac;">
        <div class="container" style="display: block;">
            <div class="row">
                <div class="col">
                </div>
                <div class="col text-center">
                    <a class="navbar-brand" href="#">
                        <img class="yajari-removebg-preview-1" src="icons/yajari-removebg-preview-1.png">
                    </a>
                </div>
                <div class="col text-end">
                    <div class="CCdropdown dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="icons/1280px-Flag_of_France.svg.png" alt="">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">French</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--Show Case-->

    <section class="pt-4 text-center">
        <div class="CCcontainer container text-light">
            <div class="background-image text-center row">
                <div class="col col-sm-3">
                    <img class="CCimg1" src="icons/Group 1916.png">
                </div>
                <div class="col col-sm-6 text-center">
                    <p class="CCShowtext1">Choose Distance</p>
                </div>
                <div class="col col-sm-3">
                    <img class="CCimg2" src="icons/Group 1916.png">
                </div>
            </div>
        </div>
    </section>


    <!--Choose Distance-->

    <section class="py-3">
        <div class="CCDIVcontainer container">
            <div class="row py-3">
                <div class="col-2 col-sm-2 text-end">
                    <img class="CCDIVimg" src="icons/Subtraction 17.png">
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
                <div class="col-4 col-sm-5 col-lg-4 text-start">
                    

                    <div class="form-button2 row">
                        <a>
                            <p>
                                
                                Cancel
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-2 col-lg-4">

                </div>
                <div class="col-4 col-sm-5 col-lg-4 text-end">
                    <div class="CCButton row">
                        <a role="button" href="HomePage.html">
                            <p style="color: white;">Continue</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Footer-->

    <section class="py-5">
        <div class="container" style="width: 80%;">
            <div class="row" style="margin: auto;">
                <img src="icons/Group 2117.png" style="width: 12rem;height: 2rem;margin: auto;">
            </div>

        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
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