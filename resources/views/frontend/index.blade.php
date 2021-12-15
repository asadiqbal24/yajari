@include('frontend.layout.head')
@section('sHome','active')
<body style="zoom:90%">
    <!--Nav Bar-->
    
@include('frontend.layout.navbar')
    <!--Show Case-->
    <section>
        <div class="background-image text-light text-center">
            <p class="showcase-p1">
                Prestations de services et <br> location de materiel</p>
            <p class="showcase-p2">3.8 million residents and
                professional, members of <br>AlloVoisins, throughout France.</p>
        </div>
    </section>
    <!--Moments of life-->
    <section class=" text-center momentoflife momentoflifepadding">
        <div class="container text-center" id="Exchange-con">
            <p style="     font-size: 25px;
                        font-weight: bold;
                        padding-top: 59px;
                        position: relative;
                    top: -20px;">Moments of life</p>
            <div class="row">
                <div class="col" style="width: 10rem;">
                    <img src="{{asset('theme/pictures/ashwini-chaudhary--1.png')}}" class="card-img-top" style="width: 10rem;">
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 16px; font-weight: bold;">Building maintenance</p>
                    </div>
                </div>
                <div class="col" style="width: 10rem;">
                    <img src="{{asset('theme/pictures/mkjr_-2zUjvV0M9dQ-unsplash.png')}}" class="card-img-top" style="width: 10rem;">
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 16px; font-weight: bold;">Home maintenance</p>
                    </div>
                </div>
                <div class="col" style="width: 10rem;">
                    <img src="{{asset('theme/pictures/Group 1578.png')}}" class="card-img-top" style="width: 10rem;">
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 16px; font-weight: bold;">Moving my stuff</p>
                    </div>
                </div>
                <div class="col" style="width: 10rem;">
                    <img src="{{asset('theme/pictures/ashwini-chaudhary--1.png')}}" class="card-img-top" style="width: 10rem;">
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 16px; font-weight: bold;">Building maintenance</p>
                    </div>
                </div>
                <div class="col" style="width: 10rem;">
                    <img src="{{asset('theme/pictures/nikola-johnny-mirkovic-xbU7MKzCQoY-unsplash.png')}}" class="card-img-top" style="width: 10rem;">
                    <div class="card-body">
                        <p class="card-text" style=" font-size: 16px; font-weight: bold;">Vehicle Maintenance</p>
                    </div>
                </div>
            </div>
            <div class="seemore">
                <button type="button" class="m-see-more btn btn-lg text-light" style="position:relative;top:20px;" onclick="document.location='{{route('realizeYourProject')}}'">See
                    More</button>
            </div>
        </div>
    </section>
    <!--Recent Requests-->
    <section class="bg-light  recentrequestpadding">
        <div class="container" style="width: 75%;">
            <p class="p-5 text-center recentrequest">Recent Requests</p>
            <div class="row">
                <div class="col pb-5">
                    <div style="width: 14rem; background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;    height: 266px;">
                        <div class="d-flex" style="justify-content: space-between;">
                            <div class="">
                                <p class="text-start pt-2" style="color: #F82669;padding-left: 10px; font-size: 15px;">
                                    7-Dec-2021</p>
                            </div>
                            <div class="pt-2">
                                <button type="button" class="text-start" style="background-color: #fec8d9; color: #F82669; height: 25px;border: hidden;border-radius: 5px;margin-right: 1rem;">
                                    <p style="font-size: 15px;">$5</p>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/asset-1.png')}}" style="padding-left: 10px;"></a>
                            </div>
                            <div class="col-8">
                                <a href="ProfessionalProfile.html" style="text-decoration:none;">
                                    <div class="row">
                                        <p class="text-start" style="padding-left: 25px; font-size: 15px; font-weight: bolder;color:black;">Johny David
                                        </p>
                                    </div>
                                </a>
                                <div class="row">
                                    <div class="col d-flex">
                                        <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/Group 2411.png')}}" style="width: 90px;margin-top: -10px; height: 15px;padding-left: 15px;"></a>
                                        <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">

                                    </div>
                                </div>
                            </div>
                            <div style="padding-left: 20px;padding-top: 1rem;">
                                <p class="text-start" style="font-size: 12px;display: inline;"> <a href="viewdetails.html" style="text-decoration:none;color: black;"><b>Looking for a move</b>










                                    </a></p>
                                <p style="display: inline;font-size: 14px;color: #F9326D;margin-left: 10px;">Urgent</p>
                                <p class="text-start pt-1" style="font-size: 14.5px;">Seeking hedge and shrub
                                    trimming</p>
                                <div class="row" style="    position: relative;
                                            top: -6px;">
                                    <div class="col d-flex lebardoiconrowtop">
                                        <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/ic_place_-2.png')}}" style="width: 15px;height: 22px;"></a>
                                        <p class="text-start" style="font-size: 13px;padding-left: 10px;">Le Bardo</p>
                                    </div>
                                    <div class="col d-flex">

                                        <a class="nav-item2 nav-link Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">Contact</a>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col pb-5">
                    <div style="width: 14rem; background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;">
                        <div class="d-flex" style="justify-content: space-between;">
                            <div class="">
                                <p class="text-start pt-2" style="color: #F82669;padding-left: 10px; font-size: 15px;">
                                    7-Dec-2021</p>
                            </div>
                            <div class="pt-2">
                                <button type="button" class="text-start" style="background-color: #fec8d9; color: #F82669; height: 25px;border: hidden;border-radius: 5px;margin-right: 1rem;">
                                    <p style="font-size: 15px;">$5</p>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/asset-1.png')}}" style="padding-left: 10px;"></a>
                            </div>
                            <div class="col-8">
                                <a href="ProfessionalProfile.html" style="text-decoration:none;">
                                    <div class="row">
                                        <p class="text-start" style="padding-left: 25px; font-size: 15px; font-weight: bolder;color:black;">Johny David
                                        </p>
                                    </div>
                                </a>
                                <div class="row">
                                    <div class="col d-flex">
                                        <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/Group 2411.png')}}" style="width: 90px;margin-top: -10px; height: 15px;padding-left: 15px;"></a>
                                        <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">

                                    </div>
                                </div>
                            </div>
                            <div style="padding-left: 20px;padding-top: 1rem;">
                                <p class="text-start" style="font-size: 12px;"> <a href="viewdetails.html" style="text-decoration:none;color: black;"><b>Looking for a move</b> </a></p>
                                <p class="text-start pt-1" style="font-size: 14.5px;position: relative;top: -16px;">Seeking hedge and shrub
                                    trimming</p>
                                <div class="row" style="  position: relative;
                                            top: -6px;">
                                    <div class="col d-flex lebardoiconrowtop">
                                        <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/ic_place_-2.png')}}" style="width: 15px;height: 22px;"></a>
                                        <p class="text-start" style="font-size: 13px;padding-left: 10px;">Le Bardo</p>
                                    </div>
                                    <div class="col d-flex">


                                        <a class="nav-item2 nav-link Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">Contact</a>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col pb-5">
                    <div style="width: 14rem; background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;">
                        <div class="d-flex" style="justify-content: space-between;">
                            <div class="">
                                <p class="text-start pt-2" style="color: #F82669;padding-left: 10px; font-size: 15px;">
                                    7-Dec-2021</p>
                            </div>
                            <div class="pt-2">
                                <button type="button" class="text-start" style="background-color: #fec8d9; color: #F82669; height: 25px;border: hidden;border-radius: 5px;margin-right: 1rem;">
                                    <p style="font-size: 15px;">$5</p>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/asset-1.png')}}" style="padding-left: 10px;"></a>
                            </div>
                            <div class="col-8">
                                <a href="ProfessionalProfile.html" style="text-decoration:none;">
                                    <div class="row">
                                        <p class="text-start" style="padding-left: 25px; font-size: 15px; font-weight: bolder;color:black;">Johny David
                                        </p>
                                    </div>
                                </a>
                                <div class="row">
                                    <div class="col d-flex">
                                        <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/Group 2411.png')}}" style="width: 90px;margin-top: -10px; height: 15px;padding-left: 15px;"></a>
                                        <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">

                                    </div>
                                </div>
                            </div>
                            <div style="padding-left: 20px;padding-top: 1rem;">
                                <p class="text-start" style="font-size: 12px;"> <a href="viewdetails.html" style="text-decoration:none;color: black;"><b>Looking for a move</b> </a></p>
                                <p class="text-start pt-1" style="font-size: 14.5px;position: relative;top: -16px;">Seeking hedge and shrub
                                    trimming</p>
                                <div class="row" style="    position: relative;
                                            top: -6px;">
                                    <div class="col d-flex lebardoiconrowtop">
                                        <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/ic_place_-2.png')}}" style="width: 15px;height: 22px;"></a>
                                        <p class="text-start" style="font-size: 13px;padding-left: 10px;">Le Bardo</p>
                                    </div>
                                    <div class="col d-flex">


                                        <a class="nav-item2 nav-link Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">Contact</a>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col pb-5">
                    <div style="width: 14rem; background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;">
                        <div class="d-flex" style="justify-content: space-between;">
                            <div class="">
                                <p class="text-start pt-2" style="color: #F82669;padding-left: 10px; font-size: 15px;">
                                    7-Dec-2021</p>
                            </div>
                            <div class="pt-2">
                                <button type="button" class="text-start" style="background-color: #fec8d9; color: #F82669; height: 25px;border: hidden;border-radius: 5px;margin-right: 1rem;">
                                    <p style="font-size: 15px;">$5</p>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/asset-1.png')}}" style="padding-left: 10px;"></a>
                            </div>
                            <div class="col-8">
                                <a href="ProfessionalProfile.html" style="text-decoration:none;">
                                    <div class="row">
                                        <p class="text-start" style="padding-left: 25px; font-size: 15px; font-weight: bolder;color:black;">Johny David
                                        </p>
                                    </div>
                                </a>
                                <div class="row">
                                    <div class="col d-flex">
                                        <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/Group 2411.png')}}" style="width: 90px;margin-top: -10px; height: 15px;padding-left: 15px;"></a>
                                        <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">

                                    </div>
                                </div>
                            </div>
                            <div style="padding-left: 20px;padding-top: 1rem;">
                                <p class="text-start" style="font-size: 12px;"> <a href="viewdetails.html" style="text-decoration:none;color: black;"><b>Looking for a move</b> </a></p>
                                <p class="text-start pt-1" style="font-size: 14.5px;position: relative;top: -16px;">Seeking hedge and shrub
                                    trimming</p>
                                <div class="row" style="    position: relative;
                                            top: -6px;">
                                    <div class="col d-flex lebardoiconrowtop">
                                        <a href="ProfessionalProfile.html"><img src="{{asset('theme/icons/ic_place_-2.png')}}" style="width: 15px;height: 22px;"></a>
                                        <p class="text-start" style="font-size: 13px;padding-left: 10px;">Le Bardo</p>
                                    </div>
                                    <div class="col d-flex">

                                        <a class="nav-item2 nav-link Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">Contact</a>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-2 text-center" style="padding-bottom: 3rem;">
                    <button type="button" class="m-see-more-2 btn btn-lg text-light" onclick="document.location='{{route('requestsPage')}}'">See
                        More</button>
                </div>
    </section>
    <!--Neighbors in the spotlight-->
    <section class="py-5" style="align-items: center;">
        <p class="text-center pb-5" style="font-size:25px;"><b>Neighbors in the spotlight</b></p>
        <div class="container" style="width: 75%;">
            <div class="row" style="align-items: center;">
                <div class="col pb-5">
                    <div class="pt-3 px-3" style="width: 14rem; background-color: white; border-radius: 10px; box-shadow: 10px 10px 100px 1px #dff2f7; margin: auto;">
                        <div class="row">
                            <div class="col-4" style="position: relative;">
                                <img src="{{asset('theme/icons/asset-1.png')}}" class="card-img-left">
                                <img src="{{asset('theme/icons/Group 2412.png')}}" style="position: absolute; top: 3.4rem;left: 4.7rem;width: 1.3rem;">
                            </div>
                            <div class="col-8">
                                <a href="ProfessionalProfile.html" style="text-decoration:none;">
                                    <p class="text-start " style="color: black;padding-left: 15px;margin-bottom: 0;"><b>Adeel Khan</b></p>
                                </a>
                                <div class="col">
                                    <img src="{{asset('theme/icons/Group 2411.png')}}" style="padding-left: 15px;width:100px;height: 15px;">
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-start pt-2 particularcard"><b class="particularinner">Perticular</b></p>
                        <p class="text-start" style="font-size:14px">Bomjour, je suis peintre et carreleur depuis plus
                            que 11 ans
                            d'experience.
                            Je vous propose mes services pour <a style="color: #2bbcea;">more</a></p>
                        <div class="row pt-1">
                            <div class="col d-flex lebardoiconrowtop">
                                <img src="{{asset('theme/icons/ic_place_-1.png')}}" style="width: 15px;height: 22px;">
                                <p class="text-start" style="font-size: 13px;padding-left: 10px;">Le Bardo</p>
                            </div>

                            <div class="col d-flex">

                                <a class="nav-item2 nav-link Contactblue" data-bs-toggle="modal" role="button" data-bs-target="#mobilechatblue" data-bs-dismiss="modal">Contact</a>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col pb-5">
                    <div class="pt-3 px-3" style="width: 14rem; background-color: white; border-radius: 10px; box-shadow: 10px 10px 100px 1px #dff2f7; margin: auto;">
                        <div class="row">
                            <div class="col-4" style="position: relative;">
                                <img src="{{asset('theme/icons/asset-1.png')}}" class="card-img-left">
                                <img src="{{asset('theme/icons/Group 2412.png')}}" style="position: absolute; top: 3.4rem;left: 4.7rem;width: 1.3rem;">
                            </div>
                            <div class="col-8">
                                <a href="ProfessionalProfile.html" style="text-decoration:none;">
                                    <p class="text-start " style="color: black;padding-left: 15px;margin-bottom: 0;"><b>Adeel Khan</b></p>
                                </a>
                                <div class="col">
                                    <img src="{{asset('theme/icons/Group 2411.png')}}" style="padding-left: 15px;width:100px;height: 15px;">
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-start pt-2 particularcard"><b class="particularinner">Perticular</b></p>
                        <p class="text-start" style="font-size:14px">Bomjour, je suis peintre et carreleur depuis plus
                            que 11 ans
                            d'experience.
                            Je vous propose mes services pour <a style="color: #2bbcea;">more</a></p>
                        <div class="row pt-1">
                            <div class="col d-flex lebardoiconrowtop">
                                <img src="{{asset('theme/icons/ic_place_-1.png')}}" style="width: 15px;height: 22px;">
                                <p class="text-start" style="font-size: 13px;padding-left: 10px;">Le Bardo</p>
                            </div>

                            <div class="col d-flex">

                                <a class="nav-item2 nav-link Contactblue" data-bs-toggle="modal" role="button" data-bs-target="#mobilechatblue" data-bs-dismiss="modal">Contact</a>




                            </div>
                        </div>
                    </div>
                </div>
                <div class="col pb-5">
                    <div class="pt-3 px-3" style="width: 14rem; background-color: white; border-radius: 10px; box-shadow: 10px 10px 100px 1px #dff2f7; margin: auto;">
                        <div class="row">
                            <div class="col-4" style="position: relative;">
                                <img src="{{asset('theme/icons/asset-1.png')}}" class="card-img-left">
                                <img src="{{asset('theme/icons/Group 2412.png')}}" style="position: absolute; top: 3.4rem;left: 4.7rem;width: 1.3rem;">
                            </div>
                            <div class="col-8">
                                <a href="ProfessionalProfile.html" style="text-decoration:none;">
                                    <p class="text-start " style="color: black;padding-left: 15px;margin-bottom: 0;"><b>Adeel Khan</b></p>
                                </a>
                                <div class="col">
                                    <img src="{{asset('theme/icons/Group 2411.png')}}" style="padding-left: 15px;width:100px;height: 15px;">
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-start pt-2 particularcard"><b class="particularinner">Perticular</b></p>
                        <p class="text-start" style="font-size:14px">Bomjour, je suis peintre et carreleur depuis plus
                            que 11 ans
                            d'experience.
                            Je vous propose mes services pour <a style="color: #2bbcea;">more</a></p>
                        <div class="row pt-1">
                            <div class="col d-flex lebardoiconrowtop">
                                <img src="{{asset('theme/icons/ic_place_-1.png')}}" style="width: 15px;height: 22px;">
                                <p class="text-start" style="font-size: 13px;padding-left: 10px;">Le Bardo</p>
                            </div>

                            <div class="col d-flex">


                                <a class="nav-item2 nav-link Contactblue" data-bs-toggle="modal" role="button" data-bs-target="#mobilechatblue" data-bs-dismiss="modal">Contact</a>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="col pb-5">
                    <div class="pt-3 px-3" style="width: 14rem; background-color: white; border-radius: 10px; box-shadow: 10px 10px 100px 1px #dff2f7; margin: auto;">
                        <div class="row">
                            <div class="col-4" style="position: relative;">
                                <img src="{{asset('theme/icons/asset-1.png')}}" class="card-img-left">
                                <img src="{{asset('theme/icons/Group 2412.png')}}" style="position: absolute; top: 3.4rem;left: 4.7rem;width: 1.3rem;">
                            </div>
                            <div class="col-8">
                                <a href="ProfessionalProfile.html" style="text-decoration:none;">
                                    <p class="text-start " style="color: black;padding-left: 15px;margin-bottom: 0;"><b>Adeel Khan</b></p>
                                </a>
                                <div class="col">
                                    <img src="{{asset('theme/icons/Group 2411.png')}}" style="padding-left: 15px;width:100px;height: 15px;">
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-start pt-2 particularcard"><b class="particularinner">Perticular</b></p>
                        <p class="text-start" style="font-size:14px">Bomjour, je suis peintre et carreleur depuis plus
                            que 11 ans
                            d'experience.
                            Je vous propose mes services pour <a style="color: #2bbcea;">more</a></p>
                        <div class="row pt-1">
                            <div class="col d-flex lebardoiconrowtop">
                                <img src="{{asset('theme/icons/ic_place_-1.png')}}" style="width: 15px;height: 22px;">
                                <p class="text-start" style="font-size: 13px;padding-left: 10px;">Le Bardo</p>
                            </div>

                            <div class="col d-flex">

                                <a class="nav-item2 nav-link Contactblue" data-bs-toggle="modal" role="button" data-bs-target="#mobilechatblue" data-bs-dismiss="modal">Contact</a>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="m-see-more btn btn-lg text-light" onclick="document.location='{{route('serviceproviders')}}'">See
                More</button>
        </div>
    </section>
    <!--Easy steps-->
    <section class="bg-light py-5 text-center">
        <p class="text-center" style="font-size: 25px; font-weight:1000;">Easy steps to find someone
            <br> who can do your work.
        </p>
        <div class="container py-5" style="width: 71%;">
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{asset('theme/icons/Group 1862.png')}}" alt="">
                    <p class="pt-4" style="font-size: 16px; font-weight:1000;">Publish your service request</p>
                </div>
                <div class="col-12 col-md-4">
                    <img class="pt-4" src="{{asset('theme/icons/Group 1863.png')}}" alt="">
                    <p style="padding-top: 2.5rem; font-size: 16px; font-weight:1000;">Contact With people <br>responded
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <img src="{{asset('theme/icons/Group 1865.png')}}" alt="">
                    <p class="pt-4" style="font-size: 16px; font-weight:1000;">Hire Someone for work</p>
                </div>
            </div>
        </div>
    </section>
    <!--Exchange with confidence-->
    <section class="py-5 text-center">
        <div class="container text-center" id="Exchange-con">
            <p class="pb-5" style="font-size: 30px;font-weight: bolder;">Exchange with confidence</p>
            <div class="row">
                <div class="col pb-5">
                    <div class="p-3" style="width: 18rem;height: 16rem; background-color: white; border-radius: 10px; box-shadow: 10px 10px 100px 1px #eafaff;margin: auto;">
                        <img src="{{asset('theme/icons/Group 1606.png')}}" style="width: 4rem;">
                        <p class="pt-3"><b>All your exchanges are secure</b></p>
                        <p style="font-size: 14px;">Profiles and requests are verified, Neighbprs are evaluated and
                            exchanges are secure thanks
                            to an intefrated messaging system and an online payment system.</p>
                    </div>
                </div>
                <div class="col pb-5">
                    <div class="p-3" style="width: 18rem;height: 16rem; background-color: white; border-radius: 10px; box-shadow: 10px 10px 100px 1px #eafaff;margin: auto;">
                        <img src="{{asset('theme/icons/Group 1607.png')}}" style="width: 4rem;">
                        <p class="pt-3"><b>Your services are insured</b></p>
                        <p style="font-size: 14px;">You benefit from insurance that covers rental and services paid
                            online.</p>
                    </div>
                </div>
                <div class="col pb-5">
                    <div class="p-3" style="width: 18rem;height: 16rem; background-color: white; border-radius: 10px; box-shadow: 10px 10px 100px 1px #eafaff;margin: auto;">
                        <img src="{{asset('theme/icons/Group 1605.png')}}" style="width: 4rem;">
                        <p class="pt-3"><b>The community ecaluates us</b></p>
                        <p style="font-size: 14px;">All customer reviews are collected from menbers who have performed a
                            service with Yajari's.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Logo Carosal items-->
    <section class="pb-5">
        <div class="container bg-light py-5" style="width: 90%; border-radius: 20px;">
            <!--  slider    -->


            <div class="owl-carousel">
                <div class="item">
                    <img src="{{asset('theme/icons/digital-x-logo.png')}}" style="width: 6rem;">
                </div>
                <div class="item">
                    <img src="{{asset('theme/icons/excel-brand-logo.png')}}" style="width: 6rem;">
                </div>
                <div class="item">
                    <img src="{{asset('theme/icons/Logitech-logo-300x300.png')}}" style="width: 6rem;">
                </div>
                <div class="item">
                    <img src="{{asset('theme/icons/hikvison.png')}}" style="width: 6rem;">
                </div>
                <div class="item">
                    <img src="{{asset('theme/icons/tp-link.png')}}" style="width: 6rem;">
                </div>
                <div class="item">
                    <img src="{{asset('theme/icons/digital-x-logo.png')}}" style="width: 6rem;">
                </div>
                <div class="item">
                    <img src="{{asset('theme/icons/excel-brand-logo.png')}}" style="width: 6rem;">
                </div>
                <div class="item">
                    <img src="{{asset('theme/icons/hikvison.png')}}" style="width: 6rem;">
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="modal fade modal-backdrop.show" id="mobilechat" data-bs-keyboard="false" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/ic_contacts_-1.png')}}" style="width: 2.3rem;">
                        </div>
                        <p class="MBText1">Contact via messages or make a call</p>
                        <p class="MBText2">You can make a call or send a message
                            for the further proceedings.
                        </p>
                        <div class="row">
                            <div class="col text-center">
                                <a href="MobileChatMessages.html" class="SendMessageButton">Send Message</a>
                            </div>
                            <div class="col text-center">
                                <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#mobilecall" data-bs-dismiss="modal">Make Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="mobilecall" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/ic_contact_phone_24px.png')}}" style="width: 4rem;height:3rem;">
                        </div>
                        <p class="MBText3"><b>742 009 993 23</b></p>
                        <div class="col text-center">
                            <a href="" class="CallButton2">Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="mobilechatblue" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="    border-radius: 10px;
                                                    box-shadow: 1px 2px 30px 1px #71e6e6;">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 2.3rem;">
                        </div>
                        <p class="MBText1"> </p>
                        <p class="MBText2">You can make a call or send a message
                            for the further proceedings.
                        </p>
                        <div class="row buttontop">
                            <div class="col text-center">
                                <a href="MobileChatBlueMessage.html" class="SendMessageButtonblue">Send Message</a>
                            </div>
                            <div class="col text-center">
                                <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#callonmobileblue" data-bs-dismiss="modal">Make Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="callonmobileblue" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content cardcontent">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/bluecontact.png')}}" style="width: 3rem;height:3rem;">
                        </div>
                        <p class="MBText3"><b>742 009 993 23</b></p>
                        <div class="col text-center">
                            <a href="" class="CallButton2">Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Model1-->
    
    <!--Model2-->
    
    <!--Model3-->
    <section>
        
    </section>
    <!--Model4-->
    <section>
        
    </section>
    <!--Model5-->
    <section>
        
    </section>
    <!--Model6-->
    
    <!--Model7-->
    
    <!--Modal8-->
    
    <!--Footer-->
    @include('frontend.layout.footer')
    @include('frontend.layout.scripts')



   
</body></html>
