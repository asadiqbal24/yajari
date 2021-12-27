<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="{{asset('theme/css/PinkLeaveReviewStyle.css')}}">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
            <title>ya jari</title>
            <style type="text/css">
            @media all and (min-width: 1590px) {
            .navalign {
            padding-left: 173px;
            padding-top: 10px;
            color: #ff6e9a;
            font-weight: bold;
            display: inline-flex;
            padding-right: .5rem;
            }
            
            
            .navalign2{
            padding-left: 730px;
            padding-top: 10px;
            color: #ff6e9a;
            font-weight: bold;
            display: inline-flex;
            }
            .nav-publish{
            
            padding-left: 20px;
            background:linear-gradient(to right,#ffacbf,#fa4d75);
            
            color: white;
            border-radius: 20px;
            align-items: center;
            padding-top: 10px;
            }
            
            }
            @media all and (min-width: 1024px) {
            .flex-container {
            position: relative;
            left: 5rem;
            margin-top: 1rem;
            }
            }
            @media all and (min-width: 1300px) {
            .flex-container {
            position: relative;
            left: 27rem;
            margin-top: -2rem;
            }
            }
            @media all and (min-width: 1440px) {
            .flex-container {
            position: relative;
            left: 30rem;
            margin-top: -2rem;
            }
            }
            @media all and (min-width: 1590px) {
            .flex-container {
            position: relative;
            left: 40rem;
            margin-top: -2rem;
            }
            }
            
            @media  (min-width: 1920px) {
            .navalign {
            padding-left: 173px;
            padding-top: 10px;
            color: #ff6e9a;
            font-weight: bold;
            display: inline-flex;
            padding-right: .5rem;
            }
            .flex-container {
            position: relative;
            left: 63rem;
            margin-top: -2rem;
            }
            }
            </style>
        </head>
        <body style="zoom:90%">
            <!--Nav Bar-->
            @include('frontend.layout.navbar2')
            <!--Leave Review-->
            <section class="LeaveReviewSection">
                <div class="ReviewContainer">
                    <div class="row">
                        <img src="{{asset('theme/icons/Group 2415.png')}}" class="ReviewImg1">
                        <p class="ReviewText1">Leave a review here</p>
                    </div>
                    <div class="row mb-3" style="margin-top: 1rem;">
                        <div class="col d-flex" style="justify-content: center;">
                            <img src="{{asset('theme/icons/Group 2411.png')}}" class="ReviewImg2">
                            <p>4.5</p>
                        </div>
                    </div>
                    <div class="row">
                        <textarea class="form-control" aria-label="With textarea" placeholder="Describe your experience with the seller" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <a href="" class="PostReviewButton">Post Review</a>
                    </div>
                </div>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        </body>
    </html>