<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('theme/css/ModifyCategoriesStyle.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <title>ya jari</title>
        <style type="text/css">
        .form-group {
        margin-bottom: 15px
        }
        .navpublish {
        width: auto;
        }
        @media all and (min-width: 1300px) {
        
        .socialicon {
        transform: translateX(75%);
        }
        .followus {
        position: relative;
        left: 285px;
        top: -50px;
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
        }
        @media all and (min-width: 1590px) {
        .socialicon {
        transform: translateX(88%);
        }
        .followus {
        position: relative;
        left: 328px;
        top: -50px;
        }
        .sideicon {
        padding-top: 0px;
        }
        .MPItext1 {
        font-size: 30px;
        font-weight: bolder;
        padding-top: 10px;
        }
        .ViewProfileButton {
        position: relative;
        left: -35px;
        }
        }
        @media all and (min-width: 1920px) {
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
                <div class="background-image row" style="background-image: url(theme/pictures/Group\ 3.png);">
                    <div class="col-4 col-xxl-5 col-lg-4 col-md-3 col-sm-4 text-end">
                        <img src="{{asset('theme/icons/Path -1.png')}}" class="sideicon">
                    </div>
                    <div class="col-8 col-xxl-7 col-lg-8 col-md-8 col-sm-8 text-start">
                        <p class="MPItext1">Modify Account Settings</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Modify Categories-->
        <section class="py-3">
            <div class="PIcontainer container">
                <div class="row">
                    <div class="hideShowDIV2 row pb-4" style="margin: auto;">
                        <div class="CompletePcol2 row" style="margin: auto; padding-top: 20px; padding-bottom: 20px;">
                            <div class="col-sm-2 col-2 text-end">
                                <img class="CP2img" src="{{asset('theme/icons/ic_contacts_24px.png')}}">
                            </div>
                            <div class="col-sm-10 col-10 text-start">
                                <p class="CP2text1">70% of your profile is completed</p>
                                <p class="CP2text2">Complete your profile now</p>
                            </div>
                            <div class="row text-center">
                                <a href="ProfessionalProfile.html" class="viewmyprofile" style="text-decoration: none;"><span class="ViewProfileButton">View My Profile</span></a>
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
                                <a href="ProfessionalProfile.html" style="text-decoration: none;"><span class="ViewProfileButton">View My Profile</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="CCDIVcontainer">
                        <div class="row py-4">
                            <div class="col-2 col-sm-2 text-end">
                                <img class="CCDIVimg" src="{{asset('theme/icons/Subtraction 17.png')}}">
                            </div>
                            <div class="col-10 col-sm-10 text-start">
                                <p class="ChoseCText1">Choose the list of the category that you are goin to offer as a
                                    private
                                person:</p>
                                <p class="ChoseCText2">Choose the list of the category that you are goin to offer as a
                                private:</p>
                            </div>
                        </div>
                        <div class="ChoseAddEditC row p-2">
                            <div class="col-10 col-sm-11">
                                <div class="row pt-4">
                                    <div class="col-12 col-xxl-4 col-lg-6 col-md-7 col-sm-8">
                                        <p>Vehicle Maintenence</p>
                                    </div>
                                    <div class="col-12 col-xxl-4 col-lg-6 col-md-7 col-sm-8">
                                        <p>Garden Maintenance</p>
                                    </div>
                                    <div class="col-12 col-xxl-4 col-lg-6 col-md-7 col-sm-8">
                                        <p>Office Maintenance</p>
                                    </div>
                                    <div class="col-12 col-xxl-3 col-lg-6 col-md-7 col-sm-8">
                                        <p>Home Maintenance</p>
                                    </div>
                                    <div class="col-12 col-xxl-3 col-lg-6 col-md-7 col-sm-8">
                                        <p>Washroom repair</p>
                                    </div>
                                    <div class="col-12 col-xxl-3 col-lg-6 col-md-7 col-sm-7">
                                        <p>Kitchen repair</p>
                                    </div>
                                    <div class="col-12 col-xxl-3 col-lg-6 col-md-7 col-sm-7">
                                        <p>Furniture work</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-sm-1 text-end">
                                <a href="{{route('modify-categories-edit')}}">
                                    <img src="{{asset('theme/icons/Group 1889.png')}}" style="width: 1.5rem;">
                                </a>
                            </div>
                        </div>
                        <div class="ChoseAddEditB row pt-5">
                            <div class="col-12 col-sm-2 col-lg-4">
                                <div class="cancel row">
                                    <a role="button">
                                        <p style="color: #ff124a;position:relative;top: 8px;">
                                            Cancel
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-2 col-lg-4">
                            </div>
                            <div class="col-12 col-sm-5 col-lg-4 text-start">
                                <div class="CCButton row">
                                    <a role="button" href="{{route('modify-distance')}}">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    </body>
</html>