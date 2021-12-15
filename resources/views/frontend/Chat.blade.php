<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('theme/css/ChatStyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>ya jari</title>

    <style type="text/css">
        .dot {
            height: 15px;
            width: 15px;
            background-color: green;
            border-radius: 50%;
            display: inline-block;

        }

        @media all and (min-width: 1440px) {
            .chatM2 {
                position: relative;
                left: 8px;
            }

            .chatM3 {
                position: relative;
                left: -10px;
            }

        }

        @media all and (min-width: 1590px) {

            .chatM2 {
                position: relative;
                left: 10px;
            }

            .SendMessageButton {
                position: relative;
                top: -45%;
                left: 86%;
            }

            .ahre {
                padding-left: 2rem;
            }

            .chatM3 {
                position: relative;
                left: -20px;
            }
        }

        @media all and (min-width: 1920px) {
            .chatM3 {
                position: relative;
                left: -40px;
            }

            .ahre {
                padding-left: 2rem;
            }

            .navalign2 {
                padding-left: 390px;
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

            .SendMessageButton {
                position: relative;
                top: -45%;
                left: 88%;
            }

            .whitestar {
                position: relative;
                top: -2px;
                padding-inline: 7px;
            }

        }

    </style>
</head>

<body class="bg-light">
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="    background-color: white;
                box-shadow: 0px 2px 5px #acacac;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="{{asset('theme/icons/yajari-removebg-preview-1.png')}}" class="yajari-removebg-preview-1" alt="Yajiri">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-left:6%">
                <div class="navbar-nav">
                    <a style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;" href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <a style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;" href="{{route('requests')}}" class="nav-item  requestnav">Requests</a>
                    <a style=" padding-top: 10px;color: #3B3B3B;font-weight: bold" href="{{route('serviceproviders')}}" class="nav-item servicesnav">Service Providers</a>
                    <a style=" padding-top: 10px;color: white;font-weight: bold;" href="{{route('publishrequest')}}" class="nav-item nav-link navpublish publishnavbar">Publish a Request</a>
                </div>
                <div class="navbar-nav" id="nav-Profile">
                    <div class="flex-container d-flex">
                        <div class="chatDIV">
                            <a href="">
                                <img src="{{asset('theme/icons/ic_textsms_24px.png')}}" style="margin-top: 0.6rem;">
                            </a>
                        </div>
                        <div style="margin-left: 10px;">
                            <div class="btn-group">
                                <button class="btn dropdown" style="padding-top: 0;" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <img src="{{asset('theme/icons/Ellipse -7.png')}}" alt="">
                                </button>
                                <ul class="ProfileDropdown dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                    <li><a class="dropdown-item" href="ProfessionalProfile.html">
                                            <div class="row">
                                                <div class="col-2 col-sm-2">
                                                    <img src="{{asset('theme/icons/ic_person_24px.png')}}" alt="">
                                                </div>
                                                <div class="col-10 col-sm-10 mt-1">
                                                    <p>View my Profile</p>
                                                </div>
                                            </div>
                                        </a></li>

                                    <li>
                                        <a class="dropdown-item" href="MyRequests.html">
                                            <div class="row">
                                                <div class="col-2 col-sm-2">
                                                    <img src="{{asset('theme/icons/Icon ionic-md-help-circle.png')}}" alt="">
                                                </div>
                                                <div class="col-10 col-sm-10">
                                                    <p>My Requests</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="accordion accordion-flush" id="accordionFlushExample2">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne2">
                                                    <button class="accordion-button collapsed" style="padding: 0  2rem 0 1rem;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne2">
                                                        <div class="row">
                                                            <div class="col-2 col-sm-2">
                                                                <img src="{{asset('theme/icons/ic_favorite_224px.png')}}" style="margin: 1rem 0 0 0.1rem;">
                                                            </div>
                                                            <div class="col-10 col-sm-10">
                                                                <p style="padding-top: 17px;margin-left: 0.6rem;">My Favourites</p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne2" data-bs-parent="#accordionFlushExample2">
                                                    <div class="accordion-body" style="padding:0;">
                                                        <ul class="ProfileDropdown" style="text-decoration: none;">
                                                            <li><a class="dropdown-item" href="MyFavouritesNeighbors.html">
                                                                    <div class="row">
                                                                        <div class="col-3 col-sm-3 text-end">
                                                                            <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                                        </div>
                                                                        <div class="col-8 col-sm-8 text-start mt-1">
                                                                            <p>Favourite Neighbor</p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li><a class="dropdown-item" href="MyFavoritesRequests.html">
                                                                    <div class="row">
                                                                        <div class="col-3 col-sm-3 text-end">
                                                                            <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                                        </div>
                                                                        <div class="col-8 col-sm-8 text-start mt-1">
                                                                            <p>Favourite Requests</p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" style="padding: 0  2rem 1rem 1rem;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                        <div class="row">
                                                            <div class="col-2 col-sm-2">
                                                                <img src="{{asset('theme/icons/ic_brightness_high_24px.png')}}" style="margin-top: 15px;">
                                                            </div>
                                                            <div class="col-10 col-sm-10">
                                                                <p style="padding-top: 17px;">Modify my Account</p>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body" style="padding:0;">
                                            <ul class="ProfileDropdown" style="text-decoration: none;   ">
                                                <li><a class="dropdown-item" href="ModifyPersonalinfo.html">
                                                    <div class="row">
                                                        <div class="col-3 col-sm-3 text-end">
                                                            <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                        </div>
                                                        <div class="col-8 col-sm-8 text-start mt-1">
                                                            <p>Personal Information</p>
                                                        </div>
                                                    </div>
                                                </a></li>
                                                <li><a class="dropdown-item" href="ChangePassword.html">
                                                    <div class="row">
                                                        <div class="col-3 col-sm-3 text-end">
                                                            <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                        </div>
                                                        <div class="col-8 col-sm-8 text-start mt-1">
                                                            <p>Password</p>
                                                        </div>
                                                    </div>
                                                </a></li>
                                                <li><a class="dropdown-item" href="ModifyCategories.html">
                                                    <div class="row">
                                                        <div class="col-3 col-sm-3 text-end">
                                                            <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                        </div>
                                                        <div class="col-8 col-sm-8 text-start mt-1">
                                                            <p>List of Categories</p>
                                                        </div>
                                                    </div>
                                                </a></li>
                                                <li><a class="dropdown-item" href="ModifyDistance.html">
                                                    <div class="row">
                                                        <div class="col-3 col-sm-3 text-end">
                                                            <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                        </div>
                                                        <div class="col-8 col-sm-8 text-start mt-1">
                                                            <p>Radius</p>
                                                        </div>
                                                    </div>
                                                </a></li>
                                                <li><a class="dropdown-item" href="ChangeLanguage.html">
                                                    <div class="row">
                                                        <div class="col-3 col-sm-3 text-end">
                                                            <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                        </div>
                                                        <div class="col-8 col-sm-8 text-start mt-1">
                                                            <p>Language</p>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <hr style="width: 80%;margin: auto;margin-bottom: 1rem;">
                                        <a class="dropdown-item" href="#">
                                            <div class="row">
                                                <div class="col-2 col-sm-2 text-end">
                                                    <img src="{{asset('theme/icons/ic_power_settings_new_24px.png')}}" alt="">
                                                </div>
                                                <div class="col-10 col-sm-10">
                                                    <p>Logout</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div style="border-left: 2px solid gray;height: 2rem;margin-top: 0.3rem; margin-left: 20px;">
                        </div>
                        <div style="margin-left: 20px;">
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="icons/1280px-Flag_of_France.svg.png" alt="">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">French</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="chatDIV2">
                            <a href="MobileActiveChat.html">
                                <img src="{{asset('theme/icons/ic_textsms_24px.png')}}" style="margin-top: 0.6rem;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
   

    <!--Chat-->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <p style="font-size: 20px; font-weight: bolder;">Active Chats</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="row mb-3">
                        <input class="ChatSearchButton form-control mb-2" type="search" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="row mb-2">
                        <div class="card car_heightmobile" style="max-width: 540px;height: 85px;">
                            <div class="row g-0">
                                <div class="col-xxl-2 col-lg-3 col-md-2">
                                    <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg">
                                </div>
                                <div class="col-xxl-10 col-lg-9 col-md-10">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xxl-8 col-lg-7 col-md-8">
                                                <p class="chatcardtext1">Cristina Röhmer</p>
                                            </div>
                                            <div class="col-xxl-4 col-lg-5 col-md-4 text-end">
                                                <p class="chatcardtext2">01.02.21</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="chatcardtext3"><i>Typing...</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="card car_heightmobile" style="max-width: 540px;height: 85px;">
                            <div class="row g-0">
                                <div class="col-xxl-2 col-lg-3 col-md-2">
                                    <img src="{{asset('theme/icons/Ellipse -3.png')}}" class="CardImg">
                                </div>
                                <div class="col-xxl-10 col-lg-9 col-md-10">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xxl-8 col-lg-7 col-md-8">
                                                <p class="chatcardtext1">Cristina Röhmer</p>
                                            </div>
                                            <div class="col-xxl-4 col-lg-5 col-md-4 text-end">
                                                <p class="chatcardtext2">01.02.21</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="chatcardtext3">That was wonderful. Thanks…</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="card car_heightmobile" style="max-width: 540px;height: 85px;">
                            <div class="row g-0">
                                <div class="col-xxl-2 col-lg-3 col-md-2">
                                    <img src="{{asset('theme/icons/Ellipse -2.png')}}" class="CardImg">
                                </div>
                                <div class="col-xxl-10 col-lg-9 col-md-10">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xxl-8 col-lg-7 col-md-8">
                                                <p class="chatcardtext1">Cristina Röhmer</p>
                                            </div>
                                            <div class="col-xxl-4 col-lg-5 col-md-4 text-end">
                                                <p class="chatcardtext2">01.02.21</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="chatcardtext3">That was wonderful. Thanks…</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12 mr-l_00" style="">
                    <div class="LookingForMoveRow1 row" style="position: relative;">
                        <p class="chattext1">Looking for a move
                            <b style="position: relative;left: 20px;top: 0px;color: #fd7f9c;font-size: 13px;">Urgent </b>
                        </p>
                        <p class="chattext2">In publishing and graphic design, Lorem ipsum is a placeholder text
                            commonly used to </p>
                        <a class="ChatViewRequestButton" href="ViewRequest.html">
                            <img src="{{asset('theme/icons/Group 2116.png')}}" alt="">
                        </a>
                    </div>
                    <div class="LookingForMoveRow2 row">
                        <div class="ChatMessagesRow row pt-5">
                            <div class="row">
                                <div class="col-xxl-11 col-lg-9 col-md-10 text-end">
                                    <p><span class="chatM2">How are you doing today?</span></p>
                                </div>
                                <div class="col-xxl-1 col-lg-3 col-md-2 text-end">
                                    <a href="ProfessionalProfile.html"> <img src="{{asset('theme/icons/Ellipse -1.png')}}" style="width: 3rem;"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-2 col-lg-3 col-md-2 text-start">
                                    <a href="ProfessionalProfile.html"> <img src="{{asset('theme/icons/Ellipse -1.png')}}" style="width: 3rem;"></a>
                                </div>
                                <div class="col-xxl-10 col-lg-9 col-md-10 text-start">
                                    <p class="chatM3">Hi George! Nice to hear you again!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display: block; height: 8rem;">
                            <p class="Chattext3">Franky is typing…</p>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your message here">
                            <a href="" class="SendMessageButton">
                                <img src="{{asset('theme/icons/Group 2391.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="chatThirdCol col-md-3 col-sm-12 col-12">
                    <div class="row" style="position: relative">
                        <div class="onlineCard card" style="max-width: 540px;height: 115px;">
                            <div class="row g-0">
                                <div class="col-md-3 col-sm-4 col-4">
                                    <a href="ProfessionalProfile.html"> <img src="{{asset('theme/icons/Ellipse -1.png')}}" class="CardImg" style="width: 4rem;margin-top: 1rem;"></a>
                                    <span class="dot dotgreen"></span>
                                </div>
                                <div class="col-md-9 col-sm-8 col-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <p class="chatcardtext1">Cristina Röhmer</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <p style="color: #F91C67;font-weight: 500;margin-left: 0.7rem;margin-bottom: 0;margin-top: 0.5rem;">
                                                    Title Of Request</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ReviewRow row" style="position: relative;">
                        <div class="row mb-2">
                            <div class="col d-flex">
                                <img src="{{asset('theme/icons/ic_place_24px.png')}}" style="width: 1rem; height: 1.5rem;">
                                <p class="ReviewText1">Librada, france</p>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col d-flex">
                                <img src="{{asset('theme/icons/Group 2411.png')}}" style="width: 7rem; height: 1rem; margin-top: 0.15rem;">
                                <p class="ReviewText1"><b>4.5</b></p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col d-flex">
                                <img src="{{asset('theme/icons/ic_date_range_24px.png')}}" style="width: 1rem; height: 1.2rem;">
                                <p class="ReviewText1">Joined by May 2020</p>
                            </div>
                        </div>
                        <div class="row mb-4">
                        </div>
                        <div class="row">
                            <button href="LeaveReview.html" style="background: linear-gradient(to right,#ff8dad,#ff2160);background: linear-gradient(to right,#ff8dad,#ff2160);border: none;width: 200px;height: 40px;font-size: 14px;border-radius: 8px;color: white;padding: 8px 10px;"><img src="icons/whitestar.png" alt="" class="whitestar">Leave your review</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="width: 80%;">
            <div class="row" style="margin: auto;">
                <img src="{{asset('theme/icons/yajari-removebg-preview-1.png')}}" style="width: auto;height: auto;margin: auto;opacity: .30;">
            </div>
        </div>
    </section>
    <!--Modal 2 Report-->
    <section>
        <div class="modal fade" id="staticBackdropReport" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropReportLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="icons/Icon ionic-md-warning.png" style="width: 3rem;">
                        </div>
                        <p class="MBText2 text-center mt-4">Are you sure to want to report this request ?
                        </p>
                        <div class="row pt-3">
                            <div class="col text-center mt-4">
                                <a href="" class="NoButton">No</a>
                            </div>
                            <div class="col text-center mt-4">
                                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdropReport2" data-bs-dismiss="modal" class="YesButton">Yes</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="staticBackdropReport2" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropReport2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body ReportModalBody">
                        <div class="col text-center mb-3">
                            <img src="icons/Icon ionic-md-warning.png" style="width: 3rem;">
                        </div>
                        <p class="MBText2 text-center mt-4">Give a valid reason to report this user.
                        </p>
                        <textarea class="form-control" aria-label="With textarea" rows="5" placeholder="Give a valid reason to report this user."></textarea>
                        <div class="row pt-5">
                            <div class="text-center">
                                <a href="" class="YesButton">Report</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>}
