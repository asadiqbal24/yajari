@include('frontend.layout.head')
@section('ConformPublish','active')

<link rel="stylesheet" href="{{asset('theme/css/ConformPublishStyle.css')}}">

    <style type="text/css">




        @media all and (min-width: 1590px) {
            .navalign {
                padding-left: 350px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
                padding-right: .5rem;
            }

            .ahre {
                padding-left: 2rem;
            }

            .ReportCol {

                margin-right: 18rem;
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

            
            .CRButton1 {
                text-decoration: none;
                text-align: center;
                height: 2.5rem;
                width: 8rem;
                color: black;
                border: 1px solid #fb597f;
                border-radius: 10px;
                margin-left: 0.8rem;
            }

            .CRButton1 p {
                padding-top: 0.5rem;
            }


            .CRButton2 p {
                padding-top: 0.5rem;
                font-weight: bolder;
            }

            .CRButton3 {
                width: 6rem;
                height: 2rem;
                position: relative;
                top: 0px;
                left: -126px;
            }
        }

        @media all and (min-width: 1600px) {
            .CRButton3 {
                width: 6rem;
                height: 2rem;
                position: relative;
                top: 0px;
                left: -95px;
            }
        }

     
        @media all and (min-width: 1920px) {
            .navalign {
                padding-left: 173px;
                padding-top: 10px;
                color: #ff6e9a;
                font-weight: bold;
                display: inline-flex;
                padding-right: .5rem;
            }

            .ahre {
                padding-left: 2rem;
            }

            .ReportCol {

                margin-right: 18rem;
            }

            .navalign2 {
                padding-left: 939px;
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

            .CRButton2 {
                text-decoration: none;
                text-align: center;
                height: 2.5rem;
                width: 8rem;
                background: linear-gradient(to right, #ff6d99, #fd0d55);
                position: relative;
                left: -200px;
            }

            .CRButton3 {
                width: 9rem;
                height: 2rem;
            }

            .imgtopurgent {
                position: relative;
                left: -393px;
                top: 92px;
            }

        }
    </style>

<body style="zoom:90%;height:295px;">
    <!--Nav Bar-->
    
@include('frontend.layout.navbar')

    <section class="pt-3 text-center">
        <div class="container-fluid">
            <div class="row" style="margin:0px">
                <div class="col-lg-12 col-sm-12 col-12">
                    <div  class="background-image" style="background-image: url(theme/pictures/Group\ 12.png);width: 100%;border-radius: 20px;">
                        <p class="showcase-text1" style="color:white">Publish your requests</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Confrom Request-->
    <section class="py-5 cardtop">
        <div class="CRequestContainer container">
            <div class="CRBoxCont row">
                <div class="col-lg-8 col-md-12" style="margin: auto;">
                    <div class="" style=" margin: auto;">
                        <div class="row">
                            <p class="responses-date1 text-start">7-Dec-2021</p>
                        </div>
                        <div class="row">
                            <div class="col-3 col-sm-4 col-md-4 col-lg-4 col-xxl-3">
                                <img class="requestFaceImg1" src="{{asset('theme/icons/asset-1.png')}}">
                            </div>
                            <div class="col-9 col-sm-8 col-md-8 col-lg-8 col-xxl-9 text-start ConformRequestCol2">
                                <div class="d-flex" style="justify-content: space-between;">
                                    <div class="d-flex flex-wrap confirmpublish">
                                        <p class="Responses-Name1 text-start">
                                            Johny David</p>
                                        <p class="CRperticularT">Perticular</p>
                                    </div>

                                    <div class="d-flex flex-wrap">

                                        <span class="QuotationButton">$30</span>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col d-flex" style="justify-content: space-between;">
                                        <div class="d-flex lebardolocation">
                                            <img src="{{asset('theme/icons/ic_place_-2.png')}}" style="width: 12px;height: 17px;">
                                            <p class="Position-t1 text-start">Le Bardo Location</p>
                                        </div>
                                        <div class="CRButton3">

                                            <a href="">
                                                <p class="imgtopurgent" style="font-size: 17px;">Urgent</p>

                                            </a>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col d-flex star">
                                        <img class="responses-star1" src="{{asset('theme/icons/Group 2411.png')}}">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-2 lookingformove">
                            <p id="request-textID1">Looking for a move</p>
                            <p class="text-start pt-1 fontdummy">In publishing and graphic design,
                                Lorem ipsum is a placeholder text commonly used to demonstrate the visual
                                form of a document.</p>
                        </div>
                        <div class="row photogallerymove">
                            <p class="CRPhotosT">Photos:</p>
                            <div class="col">
                                <img class="CRPhotosImg" src="{{asset('theme/pictures/boris-debusscher-1.png')}}">
                                <img class="CRPhotosImg" src="{{asset('theme/pictures/cdc-T-1.png')}}">
                                <img class="CRPhotosImg" src="{{asset('theme/pictures/cdc-wz-1.png')}}">
                                <button class="uploadPicture"> <img class="upload-PictureIMG" src="{{asset('theme/icons/ic_add_a_photo_24px.png')}}">
                                    <input type="file" class="buttonfile" name="upload_fle"></button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- <div class="col-12 col-md-4 col-sm-12 maptop">
                            <div class="row mb-5" id="map"></div>
                        </div> -->
                <div class=" col-lg-4 col-md-12 maptop320">
                    <div class="col-12">
                        

                <div class="mapDIV">
                        <div id='map'></div>
                    </div>

                    </div>
                    
                </div>
                <div class="row pt-5 buttontop">
                    <div class="col-6 col pb-3">
                        <div class="CRButton1 modifytop">
                            <a href="PublishRequest.html">
                                <p>Modify</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col">
                        <div class="CRButton2 publishtop">
                            <a href="{{route('validating-request')}}">
                                <p>Publish</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Model-->
    <section>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header row">
                        <div class="col-4 col-sm-4">
                            <button type="button" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;border: none;">
                                <img class="model-img1" src="{{asset('theme/icons/ic_keyboard_arrow_right_24Blackpx.png')}}">
                            </button>
                        </div>
                        <div class="col-7 col-sm-7">
                            <p class="modal-title text-start" id="staticBackdropLabel">Posting First Request</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p class="MBText1">Validate your telephone number</p>
                        <p class="MBText2">Enter the code sent to your Telephone number through SMS </p>
                        <p class="MBText2">08:20</p>
                        <div class="MIputDIV d-flex">
                            <input type="text" class="Modelinput form-control" placeholder="1" aria-label="1">
                            <input type="text" class="Modelinput form-control" placeholder="2" aria-label="2">
                            <input type="text" class="Modelinput form-control" placeholder="3" aria-label="3">
                            <input type="text" class="Modelinput form-control" placeholder="4" aria-label="4">
                            <input type="text" class="Modelinput form-control" placeholder="5" aria-label="5">
                            <input type="text" class="form-control" placeholder="6" aria-label="6">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-8 col-sm-7 text-end">
                                <p class="MFtext">Did not receive any code?</p>

                            </div>
                            <div class="col-4 col-sm-5">
                                <a href="validatingRequest1.html">
                                    <p class="MFtext"><b>Send again</b></p>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <img class="MFImg" src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    
        @include('frontend.layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYW1tYXIxMjMxMjMiLCJhIjoiY2tydzJsMm9jMGNpajJucnh4M2pmaTVsZCJ9.ZxNGpJR7Qw9t3ONgdZmbQA';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [74.515225, 32.467766],
            zoom: 15,
            attributionControl: false
        });
        const marker1 = new mapboxgl.Marker()
            .setLngLat([74.515225, 32.467766])
            .addTo(map);
    </script>
</body></html>
