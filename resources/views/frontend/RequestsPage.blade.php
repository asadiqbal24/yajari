@include('frontend.layout.head')
@section('sRequests','active')  
        <style type="text/css">
        @media all and (min-width: 1366px) {
        .Realize-text1 {
        margin-left: 3.5rem;
        }
        .Contact-b1{
   display: block;
       height: 30px;
           padding-top: 7px;
           margin-right: 11px;
        }
        .background-image {
    width: 100%;
    height: 180px;
    border-radius: 2%;
    background-image: url('theme/pictures/Group\ 12.png');
    background-position: center;
    background-size: cover;
    position: relative;
    overflow: hidden;
}
.tickredarrow {
    position: relative;
    top: 28px;
    left: -15px;
    width: 1.3rem;
}

        }
        @media all and (min-width: 1440px) {
        .searchbar {
        margin: auto;
        position: relative;
        width: 108%;
        left: 7px;
        }
        .Realize-text1 {
        margin-left: 2.5rem;
        }
        .socialicon {
        transform: translateX(80%);
        }
        .followus {
        position: relative;
        left: 330px;
        top: -50px;
        }
        }
        @media all and (min-width: 1590px) {
        .col1 {
        position: relative;
        left: 100px;
        }
        .Realize-text1 {
        margin-left: 2.5rem;
        }
        .col3 {
        position: relative;
        left: 0px;
        }
        .realizeproject {
        margin-left: 2.9rem;
        }
        .realizetext2 {
        margin-left: 2.8rem;
        }
        .navalign {
        padding-left: 173px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        padding-right: .5rem;
        }
        .navalign2 {
        padding-left: 570px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        }
        .distance {
        position: relative;
        top: .5px;
        }
        .thebardos {
        position: relative;
        left: 100px;
        }
        .allstatus {
        position: relative;
        left: 2px;
        }
        .allcategories {
        position: relative;
        left: 60px;
        }
        .responseside {
        position: relative;
        left: 10px;
        top: 3px;
        }
        .responsetop {
        position: relative;
        top: 2px;
        }
        .categoriestop {
        position: relative;
        top: -18px;
        left: 0px;
        }
        .categories {
        position: relative;
        top: .5px;
        }
        .distanceshow {
        display: none;
        }
        .LRM1Button {
        margin: auto;
        text-align: center;
        height: 3rem;
        background: linear-gradient(to right, #ff6388, #ff0b44);
        border-radius: 10px;
        margin-bottom: 2rem;
        }
        .services {
        padding-top: 30px;
        font-size: 18px;
        padding-left: 67px;
        font-weight: bold;
        }
        .ahre {
        padding-left: 2rem;
        }
        /*
        .Contact-b1 {
        height: 30px;
        background: linear-gradient(to right, #ff7a97, #ff3161);
        width: 100px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 7px;
        float: right;
        position: relative;
        }
        */
        .lastlogo {
        position: relative;
        left: -4px;
        width: 100%;
        }
        .contactus {
        position: relative;
        left: 67px;
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
        top: -20px;
        left: -104px;
        width: 138%;
        }
        .col-xxl-7 {
        flex: 0 0 auto;
        width: 100%;
        }
        .searchbar {
        margin: auto;
        position: relative;
        width: 108%;
        left: 5px;
        }
        .lastpic {
        position: relative;
        top: 7px;
        left: 35px;
        }
        .backgroundimage {
        border-radius: 25px;
        width: 95%;
        height: 180px;
        position: relative;
        left: 45px;
        }
        .categoryicon1920 {
        position: relative;
        top: 2px;
        }
        .leftsidebar {
        width: 100%;
        margin: auto;
        position: relative;
        bottom: 20px;
        left: 30px;
        }
        .socialicon {
        transform: translateX(80%);
        }
        .followus {
        position: relative;
        left: 328px;
        top: -50px;
        }
        }
        @media all and (min-width: 1600px) {
        .col1 {
        position: relative;
        left: 100px;
        }
        .col3 {
        position: relative;
        left: 0px;
        }
        .realizeproject {
        margin-left: 2.9rem;
        }
        .realizetext2 {
        margin-left: 2.8rem;
        }
        .navalign {
        padding-left: 173px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        padding-right: .5rem;
        }
        .navalign2 {
        padding-left: 570px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        }
        .distance {
        position: relative;
        top: .5px;
        }
        .thebardos {
        position: relative;
        left: 100px;
        }
        .allstatus {
        position: relative;
        left: 2px;
        }
        .allcategories {
        position: relative;
        left: 60px;
        }
        .responseside {
        position: relative;
        left: 10px;
        top: 3px;
        }
        .responsetop {
        position: relative;
        top: 2px;
        }
        .categoriestop {
        position: relative;
        top: -18px;
        left: 0px;
        }
        .categories {
        position: relative;
        top: .5px;
        }
        .distanceshow {
        display: none;
        }
        .LRM1Button {
        margin: auto;
        text-align: center;
        height: 3rem;
        background: linear-gradient(to right, #ff6388, #ff0b44);
        border-radius: 10px;
        margin-bottom: 2rem;
        }
        .services {
        padding-top: 30px;
        font-size: 18px;
        padding-left: 67px;
        font-weight: bold;
        }
        .ahre {
        padding-left: 2rem;
        }
        /*
        .Contact-b1 {
        height: 30px;
        background: linear-gradient(to right, #ff7a97, #ff3161);
        width: 100px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 7px;
        float: right;
        position: relative;
        left: -1px;
        }
        */
        .lastlogo {
        position: relative;
        left: -4px;
        width: 100%;
        }
        .contactus {
        position: relative;
        left: 67px;
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
        top: -20px;
        left: -104px;
        width: 138%;
        }
        .col-xxl-7 {
        flex: 0 0 auto;
        width: 100%;
        }
        .searchbar {
        margin: auto;
        position: relative;
        width: 108%;
        left: 5px;
        }
        .lastpic {
        position: relative;
        top: 7px;
        left: 35px;
        }
        .backgroundimage {
        border-radius: 25px;
        width: 95%;
        height: 180px;
        position: relative;
        left: 45px;
        }
        .categoryicon1920 {
        position: relative;
        top: 2px;
        }
        .leftsidebar {
        width: 100%;
        margin: auto;
        position: relative;
        bottom: 20px;
        left: 30px;
        }
        .socialicon {
        transform: translateX(80%);
        }
        .followus {
        position: relative;
        left: 328px;
        top: -50px;
        }
        }
        @media (min-width: 1920px) {
        .navalign {
        padding-left: 173px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        padding-right: .5rem;
        }
        .subcategoryallign {
        position: relative;
        left: 74px;
        top: -16px;
        }
        .navalign2 {
        padding-left: 912px;
        padding-top: 10px;
        color: #ff6e9a;
        font-weight: bold;
        display: inline-flex;
        }
        .socialicon {
        transform: translateX(78%);
        }
        .followus {
        position: relative;
        left: 324px;
        top: -50px;
        }
        .categoryicon1920 {
        position: relative;
        top: 2px;
        }
        .subcategoryul {
        position: relative;
        left: 8px;
        }
        .subcategory {
        padding-top: 15px;
        font-size: 15px;
        padding-left: 80px;
        font-weight: bold;
        }
        .distance {
        position: relative;
        top: .5px;
        }
        .thebardos {
        position: relative;
        left: 100px;
        }
        .allstatus {
        position: relative;
        left: 2px;
        }
        .allcategories {
        position: relative;
        left: 60px;
        }
        .responseside {
        position: relative;
        left: 10px;
        top: 3px;
        }
        .responsetop {
        position: relative;
        top: 2px;
        }
        .categoriestop {
        position: relative;
        top: -18px;
        left: 0px;
        }
        .categories {
        position: relative;
        top: .5px;
        }
        .distanceshow {
        display: none;
        }
        .LRM1Button {
        margin: auto;
        text-align: center;
        height: 3rem;
        background: linear-gradient(to right, #ff6388, #ff0b44);
        border-radius: 10px;
        margin-bottom: 2rem;
        }
        .services {
        padding-top: 30px;
        font-size: 18px;
        padding-left: 67px;
        font-weight: bold;
        }
        .ahre {
        padding-left: 2rem;
        }
        .Contact-b1 {
        height: 28px;
        background: linear-gradient(to right, #ff7a97, #ff3161);
        width: 100px;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        text-align: center;
        padding-top: 6px;
        float: right;
        margin-right: 30px;
        display: block;
        }
        .lastlogo {
        width: 100%;
        position: relative;
        left: -4px;
        }
        .contactus {
        position: relative;
        left: 67px;
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
        top: -20px;
        left: -27px;
        }
        .col-xxl-7 {
        flex: 0 0 auto;
        width: 100%;
        }
        .searchbar {
        margin: auto;
        position: relative;
        width: 105%;
        left: -10px;
        }
        .lastpic {
        position: relative;
        top: 7px;
        left: 35px;
        }
        .backgroundimage {
        border-radius: 25px;
        height: 230px;
        position: relative;
        left: 55px;
        }
        .mainpicbutton {
        background-color: white;
        color: #FA4673;
        height: 40px;
        border-color: #FA4673;
        border-width: 2px;
        border-radius: 10px;
        position: relative;

        }
        .showcase-text2{
        position: relative;
        top: -10px;
        }
        .leftsidebar {
        width: 100%;
        margin: auto;
        position: relative;
        bottom: 20px;
        left: 30px;
        }
        .bottomslider {
        width: 100%;
        margin: auto;
        box-shadow: 0 0 10px 0 rgb(207 207 207);
        border-radius: 10px;
        position: relative;
        left: 30px;
        }
        .bottomsidebar {
        width: 100%;
        margin: auto;
        position: relative;
        top: 30px;
        left: 30px;
        }
        .showcase-text1 {
        font-size: 30px;
        font-weight: 900;
        padding-top: 3rem;
        color: white;
        padding-bottom: 1rem;
        }
        .searchbardown {
        position: relative;
        width: 138%;
        left: -105px;
        }
        .cntctbtn-padding {
        padding-right: 0px !important
        }
        .mobile{
        display: none;
        }
        .Realize-text1 {
        margin-left: 4.5rem;
        }
        }
        @media (min-width: 2400px) {
        .backgroundimage {
        border-radius: 25px;
        height: 230px;
        position: relative;
        left: 80px;
        }
        .subcategory {
        padding-top: 15px;
        font-size: 15px;
        padding-left: 125px;
        font-weight: bold;
        }
        .subcategoryallign {
        position: relative;
        left: 121px;
        top: -16px;
        }
        .Realize-text1 {
        margin-left: 7.5rem;
        }
        }
        </style>

<body style="zoom:90%;height:295px;">
    <!--Nav Bar-->
    
@include('frontend.layout.navbar')
    <!--Show Case-->
    <section class="pt-3 text-center">
        <div class="row" style="margin:0px">
            <div class="col-lg-12">
                <div class="background-image text-center backgroundimage">
                    <p class="showcase-text1">Hundreds of requests every day in order
                        to solve them</p>
                    <p class="showcase-text2" style="color:white;">Publish the request and resolve your
                        issue</p>
                    <a href="{{route('publishrequest')}}" class="btn btn-small mainpicbutton" type="button">
                        <p style="font-size: 18px; font-weight: bolder;">Publish Request</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--My favourties-->
    <section class="pt-5" id="favourtiesIDWidth" style="margin: auto;">
        <div class="row" style="margin: auto;">
            <div class="col-lg-4">
            </div>
            <!--Search-->
            <div class="col-lg-8 col-md-8 search" style="padding-bottom:35px;">
                <div class="row searchbar">
                    <form class="form-f1 d-flex">
                        <input class="form-control" type="search" placeholder="What are you looking for?" aria-label="Search" style="background-color: rgb(247, 244, 244);border: 0px;box-shadow: none;outline: none;">
                        <button class="form-button1 btn" type="submit"><img class="form-img1" src="{{asset('theme/icons/Group 2032.png')}}" alt=""></button>
                    </form>
                </div>
                <div class="row pt-5 text-start searchbardown">
                    <div class="col col1">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle allstatus allstatusfont" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="color: #F91B66;">
                                All Status
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item active" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle allcategories allcategoriesfont " type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false" style="color: #F91B66;">
                                All Categories
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <li><a class="dropdown-item active" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col3">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle thebardos thebardosfont " type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false" style="color: #F91B66;">
                                The Bardos
                            </button>
                            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton4">
                                <li><a class="dropdown-item active" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Categories And Contacts-->
    <section>
        <div class="col" id="MyFavouritesID">
            <div class="row" style="align-content: center;">
                <!--Categories-->
                <div class="col-xxl-5 col-xl-12" id="CategoriesColHide" style="width: 28rem;margin-right: 3rem;">

                    <!--Invite Contacts-->

                </div>
                <!--Search and Recent Work-->
                <div class="row" style="margin:0px;">
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-3 categoriestop">
                        <div class="py-5" style="width: auto; box-shadow: 0px 10px 50px 1px #ffdae6;border-radius: 20px;margin: auto;">
                            <div class=" text-center">
                                <select class="selectbox categories" id="select-item" style="width: 15rem;height: 3rem; color: #F91B66;border-color: lightgray; border-radius: 0px 5px 5px 0px; border-width: 1px;border-left:5px solid #F91B66;text-align-last: left;background-color: white;">
                                    <option value="{{Null}}">Categories</option>
                                    <option value="1">Home Maintenance</option>
                                    <option value="2">Office Maintenance</option>
                                    <option value="3">Electricity</option>
                                    <option value="4">Computer repair</option>
                                    <option value="5">Mobile Repair</option>
                                </select>

                            </div>
                            <div style="padding-top: 1rem;" class="homemaintenance d-none">
                                <p class="homemaintenance d-none subcategory">Sub category</p>
                                <div class="col-lg-12 subcategoryul">

                                    <div style="padding-top: 1rem;">
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Urgent?</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Only Professional?</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Show Phone Number</p>
                                            </label>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div style="padding-top: 1rem;" class="officemaintenance d-none">
                                <p class="officemaintenance d-none subcategory">Sub category</p>
                                <div class="col-lg-12 subcategoryul">

                                    <div style="padding-top: 1rem;">
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Urgent?</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Only Professional?</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Show Phone Number</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="padding-top: 1rem;" class="electricity d-none">
                                <p class="electricity d-none subcategory">Sub category</p>
                                <div class="col-lg-12 subcategoryul">

                                    <div style="padding-top: 1rem;">
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Urgent?</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Only Professional?</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Show Phone Number</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="padding-top: 1rem;" class="computerrepair d-none">
                                <p class="computerrepair d-none subcategory">Sub category</p>
                                <div class="col-lg-12 subcategoryul">

                                    <div style="padding-top: 1rem;">
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Urgent?</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Only Professional?</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Show Phone Number</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="padding-top: 1rem;" class="mobilerepair d-none">
                                <p class="mobilerepair d-none subcategory">Sub category</p>
                                <div class="col-lg-12 subcategoryul">

                                    <div style="padding-top: 1rem;">
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Urgent?</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Only Professional?</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check subcategoryallign">
                                            <input class="form-check-input inputcheckbox" type="checkbox" id="FieldsetCheck">
                                            <label class="form-check-label inputlabel" for="FieldsetCheck">
                                                <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Show Phone Number</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 sidebartop">
                        <div class="col-xxl-7 col-xl-12" style="width:100%;" id="CategoriesColShow">

                            <div class="col pb-5 leftsidebar">
                                <div class="py-3 cardheight cardleft" style="background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;">
                                    <div class="row">
                                        <div class="col">
                                            <p class="responses-date1 text-start pt-2">7-Dec-2021</p>
                                        </div>
                                        <div class="col pt-2 text-end" style="padding-right: 30px;">
                                            <a href="" role="button"><img class="responses-heart1" src="{{asset('theme/icons/ic_favorite_border_24px.png')}}"></a>
                                            <button type="button" class="responses-buttonQ1">
                                                <p class="responses-tQ1">$5</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="" style="padding-right: 20px;">
                                            <div class="d-flex">
                                                <div class="" style="margin: auto;">
                                                    <a href="{{route('professionalProfile')}}"> <img class="requestFaceImg1" src="{{asset('theme/icons/asset-1.png')}}"></a>
                                                    <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">
                                                </div>
                                                <div class="text-start">
                                                    <div class="row">

                                                        <a href="{{route('professionalProfile')}}" style="text-decoration:none">
                                                            <p class="Responses-Name1 text-start" style="margin-bottom: 0.5rem; text-decoration:none; color:black;">
                                                                Johny David</p>
                                                        </a>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex">
                                                            <img class="responses-star1" src="{{asset('theme/icons/Group 2411.png')}}">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="padding-left: 10px;">
                                            <a href="viewdetails.html" style="text-decoration:none;color: black;">
                                                <p id="request-textID1" style="display: inline;"> <b>Looking for a move</b> </p>
                                                <p style="display: inline;font-size: 14px;color: #F9326D;margin-left: 10px;">Urgent</p>
                                            </a>
                                            <p id="request-textID2" class="text-start pt-1">
                                                Seeking hedge and shrub trimming</p>
                                        </div>
                                    </div>
                                    <div id="responsesID1" class="col-12 responsecard" style="padding-left: 10px;">
                                        <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" class="responseicon" style="width: 15px;height: 20px;padding-top: 5px;">
                                        <p class="responses-buttons1234 text-start responsetext">2 Responses</p>
                                    </div>
                                    <hr id="LineID1" class="hrclass" style="width: 92%;margin: auto;height: 2px;position: relative;left: -8px;">
                                    <div class="row pt-3 cardfotter" style="padding-left: 10px;">
                                        <div class="col-md-2 col-sm-4 col-6 d-flex paddingmobile">
                                            <img src="{{asset('theme/icons/ic_place_-2.png')}}" class="lebardoicon" style="width: 15px;height: 22px;">
                                            <p class="responses-buttons1234 text-start lebardotext">Le Bardo</p>
                                        </div>
                                        <div id="responsesID2" class="col-md-2 col-sm-4 col-12 pt-1">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" style="width: 22px;height: 17px;padding-top: 2px;" class="categoryicon1920">
                                            <p class="responses-buttons1234 text-start categories">Categories</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 d-flex " style="padding-top: 4px;
                                                    padding-left: 30px;">
                                            <img src="{{asset('theme/icons/Union 21.png')}}" class="arrow" style="width: 22px;
                                                    height: 16px;
                                                    padding-top: 4px;">
                                            <p class="responses-buttons1234 text-start distance">5.2Km</p>
                                        </div>


                                        <div id="responsesID2" class="col-md-3 col-sm-4 col-12 responseside">
                                            <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" style="width: 15px;height: 20px;padding-top: 5px;">
                                            <p class="responses-buttons1234 text-start responsetop">2 Responses</p>
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-12 pb-2">
                                            <div class="row">
                                                <div class="col pt-2 text-end cntctbtn-padding">
                                                    <a href="" style="text-decoration:none;" class="Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop" data-bs-dismiss="modal">Contact</a>

                                                </div>
                                            </div>
                                            <div class="col" style="padding-right: 32px;">
                                                <div class="row ">
                                                    <div class="">
                                                        <a class="nav-item2 nav-link mobile" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">Contact</a>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-sm-4 col-12 distanceshow">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" class="responsedownarrow">
                                            <p class="responses-buttons1234 text-start categoriesside">Categories</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col pb-5 leftsidebar">
                                <div class="py-3 cardheight cardleft" style="background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;">
                                    <div class="row">
                                        <div class="col">
                                            <p class="responses-date1 text-start pt-2">7-Dec-2021</p>
                                        </div>
                                        <div class="col pt-2 text-end" style="padding-right: 30px;">
                                            <a href="" role="button"><img class="responses-heart1" src="{{asset('theme/icons/ic_favorite_border_24px.png')}}"></a>
                                            <button type="button" class="responses-buttonQ1">
                                                <p class="responses-tQ1">$5</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="" style="padding-right: 20px;">
                                            <div class="d-flex">
                                                <div class="" style="margin: auto;">
                                                    <a href="{{route('professionalProfile')}}"> <img class="requestFaceImg1" src="{{asset('theme/icons/asset-1.png')}}"></a>
                                                    <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">
                                                </div>
                                                <div class="text-start">
                                                    <div class="row">

                                                        <a href="{{route('professionalProfile')}}" style="text-decoration:none">
                                                            <p class="Responses-Name1 text-start" style="margin-bottom: 0.5rem; text-decoration:none; color:black;">
                                                                Johny David</p>
                                                        </a>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex">
                                                            <img class="responses-star1" src="{{asset('theme/icons/Group 2411.png')}}">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="padding-left: 10px;">
                                            <a href="viewdetails.html" style="text-decoration:none;color: black;">
                                                <p id="request-textID1" style="display: inline;"> <b>Looking for a move</b> </p>
                                                
                                            </a>
                                            <p id="request-textID2" class="text-start pt-1">
                                                Seeking hedge and shrub trimming</p>
                                        </div>
                                    </div>
                                    <div id="responsesID1" class="col-12 responsecard" style="padding-left: 10px;">
                                        <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" class="responseicon" style="width: 15px;height: 20px;padding-top: 5px;">
                                        <p class="responses-buttons1234 text-start responsetext">2 Responses</p>
                                    </div>
                                    <hr id="LineID1" class="hrclass" style="width: 92%;margin: auto;height: 2px;position: relative;left: -8px;">
                                    <div class="row pt-3 cardfotter" style="padding-left: 10px;">
                                        <div class="col-md-2 col-sm-4 col-6 d-flex paddingmobile">
                                            <img src="{{asset('theme/icons/ic_place_-2.png')}}" class="lebardoicon" style="width: 15px;height: 22px;">
                                            <p class="responses-buttons1234 text-start lebardotext">Le Bardo</p>
                                        </div>
                                        <div id="responsesID2" class="col-md-2 col-sm-4 col-12 pt-1">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" style="width: 22px;height: 17px;padding-top: 2px;" class="categoryicon1920">
                                            <p class="responses-buttons1234 text-start categories">Categories</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 d-flex " style="padding-top: 4px;
                                                    padding-left: 30px;">
                                            <img src="{{asset('theme/icons/Union 21.png')}}" class="arrow" style="width: 22px;
                                                    height: 16px;
                                                    padding-top: 4px;">
                                            <p class="responses-buttons1234 text-start distance">5.2Km</p>
                                        </div>


                                        <div id="responsesID2" class="col-md-3 col-sm-4 col-12 responseside">
                                            <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" style="width: 15px;height: 20px;padding-top: 5px;">
                                            <p class="responses-buttons1234 text-start responsetop">2 Responses</p>
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-12 pb-2">
                                            <div class="row">
                                                <div class="col pt-2 text-end cntctbtn-padding">
                                                    <a href="" style="text-decoration:none;" class="Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop" data-bs-dismiss="modal">Contact</a>

                                                </div>
                                            </div>
                                            <div class="col" style="padding-right: 32px;">
                                                <div class="row ">
                                                    <div class="">
                                                        <a class="nav-item2 nav-link mobile" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">Contact</a>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-sm-4 col-12 distanceshow">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" class="responsedownarrow">
                                            <p class="responses-buttons1234 text-start categoriesside">Categories</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col pb-5 leftsidebar">
                                <div class="py-3 cardheight cardleft" style="background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;">
                                    <div class="row">
                                        <div class="col">
                                            <p class="responses-date1 text-start pt-2">7-Dec-2021</p>
                                        </div>
                                        <div class="col pt-2 text-end" style="padding-right: 30px;">
                                            <a href="" role="button"><img class="responses-heart1" src="{{asset('theme/icons/ic_favorite_border_24px.png')}}"></a>
                                            <button type="button" class="responses-buttonQ1">
                                                <p class="responses-tQ1">$5</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="" style="padding-right: 20px;">
                                            <div class="d-flex">
                                                <div class="" style="margin: auto;">
                                                    <a href="{{route('professionalProfile')}}"> <img class="requestFaceImg1" src="{{asset('theme/icons/asset-1.png')}}"></a>
                                                    <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">
                                                </div>
                                                <div class="text-start">
                                                    <div class="row">

                                                        <a href="{{route('professionalProfile')}}" style="text-decoration:none">
                                                            <p class="Responses-Name1 text-start" style="margin-bottom: 0.5rem; text-decoration:none; color:black;">
                                                                Johny David</p>
                                                        </a>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex">
                                                            <img class="responses-star1" src="{{asset('theme/icons/Group 2411.png')}}">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="padding-left: 10px;">
                                            <a href="viewdetails.html" style="text-decoration:none;color: black;">
                                                <p id="request-textID1" style="display: inline;"> <b>Looking for a move</b> </p>
                                                
                                            </a>
                                            <p id="request-textID2" class="text-start pt-1">
                                                Seeking hedge and shrub trimming</p>
                                        </div>
                                    </div>
                                    <div id="responsesID1" class="col-12 responsecard" style="padding-left: 10px;">
                                        <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" class="responseicon" style="width: 15px;height: 20px;padding-top: 5px;">
                                        <p class="responses-buttons1234 text-start responsetext">2 Responses</p>
                                    </div>
                                    <hr id="LineID1" class="hrclass" style="width: 92%;margin: auto;height: 2px;position: relative;left: -8px;">
                                    <div class="row pt-3 cardfotter" style="padding-left: 10px;">
                                        <div class="col-md-2 col-sm-4 col-6 d-flex paddingmobile">
                                            <img src="{{asset('theme/icons/ic_place_-2.png')}}" class="lebardoicon" style="width: 15px;height: 22px;">
                                            <p class="responses-buttons1234 text-start lebardotext">Le Bardo</p>
                                        </div>
                                        <div id="responsesID2" class="col-md-2 col-sm-4 col-12 pt-1">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" style="width: 22px;height: 17px;padding-top: 2px;" class="categoryicon1920">
                                            <p class="responses-buttons1234 text-start categories">Categories</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 d-flex " style="padding-top: 4px;
                                                    padding-left: 30px;">
                                            <img src="{{asset('theme/icons/Union 21.png')}}" class="arrow" style="width: 22px;
                                                    height: 16px;
                                                    padding-top: 4px;">
                                            <p class="responses-buttons1234 text-start distance">5.2Km</p>
                                        </div>


                                        <div id="responsesID2" class="col-md-3 col-sm-4 col-12 responseside">
                                            <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" style="width: 15px;height: 20px;padding-top: 5px;">
                                            <p class="responses-buttons1234 text-start responsetop">2 Responses</p>
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-12 pb-2">
                                            <div class="row">
                                                <div class="col pt-2 text-end cntctbtn-padding">
                                                    <a href="" style="text-decoration:none;" class="Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop" data-bs-dismiss="modal">Contact</a>

                                                </div>
                                            </div>
                                            <div class="col" style="padding-right: 32px;">
                                                <div class="row ">
                                                    <div class="">
                                                        <a class="nav-item2 nav-link mobile" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">Contact</a>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-sm-4 col-12 distanceshow">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" class="responsedownarrow">
                                            <p class="responses-buttons1234 text-start categoriesside">Categories</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Realize Your Project-->
                            <div class="row py-4 bottomslider slider320">
                                <p class="Realize-text1" style="font-weight: bold;margin-bottom: 1px;">Realize Your Projects!
                                </p>
                                <p class="Realize-text1">Find at a glance all the services dedicated to your current needs!</p>
                                <div id="RealizeCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
                                    <div class="carousel-inner" id="RealizeCarouselID" role="listbox">
                                        <div class="carousel-item active">
                                            <div class="col">
                                                <div class="card text-white" style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('theme/pictures/Group 6.png')}}" style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">Preparing for
                                                                vocation</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col">
                                                <div class="card text-white" style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('theme/pictures/Group 7.png')}}" style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">Maintain the vehicle
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col">
                                                <div class="card text-white" style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('theme/pictures/Group 8.png')}}" style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">Preparing for moving
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col">
                                                <div class="card text-white" style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('theme/pictures/Group 8.png')}}" style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">Preparing for moving
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" style="padding-right: 50px;" data-bs-target="#RealizeCarousel" data-bs-slide="prev">
                                        <img src="{{asset('theme/icons/Group 2137.png')}}">
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" style="padding-left: 50px;" data-bs-target="#RealizeCarousel" data-bs-slide="next">
                                        <img src="{{asset('theme/icons/Group 1546.png')}}">
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!--Carosal Mobile View-->
                                <div id="carouselMobile" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="col">
                                                <div class="card text-white" style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('theme/pictures/Group 7.png')}}" style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">Maintain the vehicle
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col">
                                                <div class="card text-white" style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('theme/pictures/Group 8.png')}}" style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">Preparing for moving
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col">
                                                <div class="card text-white" style="width: 10rem;border-radius: 10px;margin: auto;">
                                                    <img src="{{asset('theme/pictures/Group 8.png')}}" style="width: 10rem;height: 10rem;">
                                                    <div class="card-img-overlay" style="padding: 0;">
                                                        <div class="RealizeImg-text text-center">
                                                            <p style="padding-top: 0.5rem;font-size: 14px;">Preparing for moving
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMobile" data-bs-slide="prev">
                                        <img src="{{asset('theme/icons/Group 2137.png')}}">
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselMobile" data-bs-slide="next">
                                        <img src="{{asset('theme/icons/Group 1546.png')}}">
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <!--Recent Requests-->
                            <div class="col pb-5 pt-5 bottomsidebar">
                                <div class="py-3 cardheight cardleft" style="background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;">
                                    <div class="row">
                                        <div class="col">
                                            <p class="responses-date1 text-start pt-2">7-Dec-2021</p>
                                        </div>
                                        <div class="col pt-2 text-end" style="padding-right: 30px;">
                                            <a href="" role="button"><img class="responses-heart1" src="{{asset('theme/icons/ic_favorite_border_24px.png')}}"></a>
                                            <button type="button" class="responses-buttonQ1">
                                                <p class="responses-tQ1">$5</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="" style="padding-right: 20px;">
                                            <div class="d-flex">
                                                <div class="" style="margin: auto;">
                                                    <a href="{{route('professionalProfile')}}"> <img class="requestFaceImg1" src="{{asset('theme/icons/asset-1.png')}}"></a>
                                                    <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">
                                                </div>
                                                <div class="text-start">
                                                    <div class="row">

                                                        <a href="{{route('professionalProfile')}}" style="text-decoration:none">
                                                            <p class="Responses-Name1 text-start" style="margin-bottom: 0.5rem; text-decoration:none; color:black;">
                                                                Johny David</p>
                                                        </a>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex">
                                                            <img class="responses-star1" src="{{asset('theme/icons/Group 2411.png')}}">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="padding-left: 10px;">
                                            <a href="viewdetails.html" style="text-decoration:none;color: black;">
                                                <p id="request-textID1" style="display: inline;"> <b>Looking for a move</b> </p>
                                                
                                            </a>
                                            <p id="request-textID2" class="text-start pt-1">Seeking hedge
                                                and shrub trimming</p>
                                        </div>
                                    </div>
                                    <div id="responsesID1" class="col-12 responsecard" style="padding-left: 10px;">
                                        <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" class="responseicon" style="width: 15px;height: 20px;padding-top: 5px;">
                                        <p class="responses-buttons1234 text-start responsetext">2 Responses</p>
                                    </div>
                                    <hr id="LineID1" class="hrclass" style="width: 92%;
                                            margin: auto;
                                            height: 2px;
                                            position: relative;
                                            left: -8px;
                                            ">
                                    <div class="row pt-3 cardfotter" style="padding-left: 10px;">
                                        <div class="col-md-2 col-sm-4 col-6 d-flex paddingmobile">
                                            <img src="{{asset('theme/icons/ic_place_-2.png')}}" class="lebardoicon" style="width: 15px;height: 22px;">
                                            <p class="responses-buttons1234 text-start lebardotext">Le Bardo</p>
                                        </div>
                                        <div id="responsesID2" class="col-md-2 col-sm-4 col-12 pt-1">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" style="width: 22px;height: 17px;padding-top: 2px;" class="categoryicon1920">
                                            <p class="responses-buttons1234 text-start categories">Categories</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 d-flex " style="padding-top: 4px;
                                                    padding-left: 30px;">
                                            <img src="{{asset('theme/icons/Union 21.png')}}" class="arrow" style="width: 22px;
                                                    height: 16px;
                                                    padding-top: 4px;">
                                            <p class="responses-buttons1234 text-start distance">5.2Km</p>
                                        </div>


                                        <div id="responsesID2" class="col-md-3 col-sm-4 col-12 responseside">
                                            <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" style="width: 15px;height: 20px;padding-top: 5px;">
                                            <p class="responses-buttons1234 text-start responsetop">2 Responses</p>
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-12 pb-2">
                                            <div class="row">
                                                <div class="col pt-2 text-end cntctbtn-padding">
                                                    <a href="" style="text-decoration:none;" class="Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop" data-bs-dismiss="modal">Contact</a>

                                                </div>
                                            </div>
                                            <div class="col" style="padding-right: 32px;">
                                                <div class="row ">
                                                    <div class="">
                                                        <a class="nav-item2 nav-link mobile" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">Contact</a>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-sm-4 col-12 distanceshow">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" class="responsedownarrow">
                                            <p class="responses-buttons1234 text-start categoriesside">Categories</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col pb-5 bottomsidebar">
                                <div class="py-3 cardheight cardleft" style="background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;">
                                    <div class="row">
                                        <div class="col">
                                            <p class="responses-date1 text-start pt-2">7-Dec-2021</p>
                                        </div>
                                        <div class="col pt-2 text-end" style="padding-right: 30px;">
                                            <a href="" role="button"><img class="responses-heart1" src="{{asset('theme/icons/ic_favorite_border_24px.png')}}"></a>
                                            <button type="button" class="responses-buttonQ1">
                                                <p class="responses-tQ1">$5</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="" style="padding-right: 20px;">
                                            <div class="d-flex">
                                                <div class="" style="margin: auto;">
                                                    <a href="{{route('professionalProfile')}}"> <img class="requestFaceImg1" src="{{asset('theme/icons/asset-1.png')}}"></a>
                                                    <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">
                                                </div>
                                                <div class="text-start">
                                                    <div class="row">

                                                        <a href="{{route('professionalProfile')}}" style="text-decoration:none">
                                                            <p class="Responses-Name1 text-start" style="margin-bottom: 0.5rem; text-decoration:none; color:black;">
                                                                Johny David</p>
                                                        </a>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex">
                                                            <img class="responses-star1" src="{{asset('theme/icons/Group 2411.png')}}">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="padding-left: 10px;">
                                            <a href="viewdetails.html" style="text-decoration:none;color: black;">
                                                <p id="request-textID1" style="display: inline;"> <b>Looking for a move</b> </p>
                                                
                                            </a>
                                            <p id="request-textID2" class="text-start pt-1">Seeking hedge
                                                and shrub trimming</p>
                                        </div>
                                    </div>
                                    <div id="responsesID1" class="col-12 responsecard" style="padding-left: 10px;">
                                        <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" class="responseicon" style="width: 15px;height: 20px;padding-top: 5px;">
                                        <p class="responses-buttons1234 text-start responsetext">2 Responses</p>
                                    </div>
                                    <hr id="LineID1" class="hrclass" style="width: 92%;
                                            margin: auto;
                                            height: 2px;
                                            position: relative;
                                            left: -8px;
                                            ">
                                    <div class="row pt-3 cardfotter" style="padding-left: 10px;">
                                        <div class="col-md-2 col-sm-4 col-6 d-flex paddingmobile">
                                            <img src="{{asset('theme/icons/ic_place_-2.png')}}" class="lebardoicon" style="width: 15px;height: 22px;">
                                            <p class="responses-buttons1234 text-start lebardotext">Le Bardo</p>
                                        </div>
                                        <div id="responsesID2" class="col-md-2 col-sm-4 col-12 pt-1">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" style="width: 22px;height: 17px;padding-top: 2px;" class="categoryicon1920">
                                            <p class="responses-buttons1234 text-start categories">Categories</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 d-flex " style="padding-top: 4px;
                                                    padding-left: 30px;">
                                            <img src="{{asset('theme/icons/Union 21.png')}}" class="arrow" style="width: 22px;
                                                    height: 16px;
                                                    padding-top: 4px;">
                                            <p class="responses-buttons1234 text-start distance">5.2Km</p>
                                        </div>


                                        <div id="responsesID2" class="col-md-3 col-sm-4 col-12 responseside">
                                            <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" style="width: 15px;height: 20px;padding-top: 5px;">
                                            <p class="responses-buttons1234 text-start responsetop">2 Responses</p>
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-12 pb-2">
                                            <div class="row">
                                                <div class="col pt-2 text-end cntctbtn-padding">
                                                    <a href="" style="text-decoration:none;" class="Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop" data-bs-dismiss="modal">Contact</a>

                                                </div>
                                            </div>
                                            <div class="col" style="padding-right: 32px;">
                                                <div class="row ">
                                                    <div class="">
                                                        <a class="nav-item2 nav-link mobile" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">Contact</a>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-sm-4 col-12 distanceshow">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" class="responsedownarrow">
                                            <p class="responses-buttons1234 text-start categoriesside">Categories</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col pb-5 bottomsidebar">
                                <div class="py-3 cardheight cardleft" style="background-color: white; border-radius: 10px;box-shadow: 10px 10px 100px 1px #ffe8ef; padding-left: 10px; margin: auto;">
                                    <div class="row">
                                        <div class="col">
                                            <p class="responses-date1 text-start pt-2">7-Dec-2021</p>
                                        </div>
                                        <div class="col pt-2 text-end" style="padding-right: 30px;">
                                            <a href="" role="button"><img class="responses-heart1" src="{{asset('theme/icons/ic_favorite_border_24px.png')}}"></a>
                                            <button type="button" class="responses-buttonQ1">
                                                <p class="responses-tQ1">$5</p>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div class="" style="padding-right: 20px;">
                                            <div class="d-flex">
                                                <div class="" style="margin: auto;">
                                                    <a href="{{route('professionalProfile')}}"> <img class="requestFaceImg1" src="{{asset('theme/icons/asset-1.png')}}"></a>
                                                    <img src="{{asset('theme/icons/redtickarrow.png')}}" class="tickredarrow">
                                                </div>
                                                <div class="text-start">
                                                    <div class="row">

                                                        <a href="{{route('professionalProfile')}}" style="text-decoration:none">
                                                            <p class="Responses-Name1 text-start" style="margin-bottom: 0.5rem; text-decoration:none; color:black;">
                                                                Johny David</p>
                                                        </a>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex">
                                                            <img class="responses-star1" src="{{asset('theme/icons/Group 2411.png')}}">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="padding-left: 10px;">
                                            <a href="viewdetails.html" style="text-decoration:none;color: black;">
                                                <p id="request-textID1" style="display: inline;"> <b>Looking for a move</b> </p>
                                                
                                            </a>
                                            <p id="request-textID2" class="text-start pt-1">Seeking hedge
                                                and shrub trimming</p>
                                        </div>
                                    </div>
                                    <div id="responsesID1" class="col-12 responsecard" style="padding-left: 10px;">
                                        <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" class="responseicon" style="width: 15px;height: 20px;padding-top: 5px;">
                                        <p class="responses-buttons1234 text-start responsetext">2 Responses</p>
                                    </div>
                                    <hr id="LineID1" class="hrclass" style="width: 92%;
                                            margin: auto;
                                            height: 2px;
                                            position: relative;
                                            left: -8px;
                                            ">
                                    <div class="row pt-3 cardfotter" style="padding-left: 10px;">
                                        <div class="col-md-2 col-sm-4 col-6 d-flex paddingmobile">
                                            <img src="{{asset('theme/icons/ic_place_-2.png')}}" class="lebardoicon" style="width: 15px;height: 22px;">
                                            <p class="responses-buttons1234 text-start lebardotext">Le Bardo</p>
                                        </div>
                                        <div id="responsesID2" class="col-md-2 col-sm-4 col-12 pt-1">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" style="width: 22px;height: 17px;padding-top: 2px;" class="categoryicon1920">
                                            <p class="responses-buttons1234 text-start categories">Categories</p>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6 d-flex " style="padding-top: 4px;
                                                    padding-left: 30px;">
                                            <img src="{{asset('theme/icons/Union 21.png')}}" class="arrow" style="width: 22px;
                                                    height: 16px;
                                                    padding-top: 4px;">
                                            <p class="responses-buttons1234 text-start distance">5.2Km</p>
                                        </div>


                                        <div id="responsesID2" class="col-md-3 col-sm-4 col-12 responseside">
                                            <img src="{{asset('theme/icons/ic_textsms_-1.png')}}" style="width: 15px;height: 20px;padding-top: 5px;">
                                            <p class="responses-buttons1234 text-start responsetop">2 Responses</p>
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-12 pb-2">
                                            <div class="row">
                                                <div class="col pt-2 text-end cntctbtn-padding">
                                                    <a href="" style="text-decoration:none;" class="Contact-b1" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop" data-bs-dismiss="modal">Contact</a>

                                                </div>
                                            </div>
                                            <div class="col" style="padding-right: 32px;">
                                                <div class="row ">
                                                    <div class="">
                                                        <a class="nav-item2 nav-link mobile" data-bs-toggle="modal" role="button" data-bs-target="#mobilechat" data-bs-dismiss="modal">Contact</a>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-3 col-sm-4 col-12 distanceshow">
                                            <img src="{{asset('theme/icons/ic_label_24px.png')}}" class="responsedownarrow">
                                            <p class="responses-buttons1234 text-start categoriesside">Categories</p>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!--Publish Request-->
                            <section class="pb-5 text-center lastpic">
                                <div class="text-light ">
                                    <div class="background-image2 lastlogo" style="border-radius: 5px;">
                                        <div class="col-8 text-start" style="margin: auto;">
                                            <p class="Publish-text1">Now you can post
                                                your request</p>
                                            <button class="btn btn-small" type="button" style="background-color:white; color: #FA4673; height: 40px;border-color: #FA4673; border-width: 2px; border-radius: 10px;display: block; margin-left:auto;margin-right: auto;">
                                                <p onclick="window.location.href='{{route('publishrequest')}}'" style="font-size: 18; font-weight: bolder;">Publish Request</p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--Pagination-->
                            <div class="row" style="padding-bottom: 10%;">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination" style="justify-content: space-between;width: 22rem;margin: auto;">

                                        <li class="page-item"><a class="page-link" id="pagination-num" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" id="pagination-num" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" id="pagination-num" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" id="pagination-num" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" id="pagination-num" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next" style="border:none;">
                                                <span aria-hidden="true">
                                                    <img src="{{asset('theme/icons/ic_keyboard_arrow_right_-1.png')}}" style="width:0.5rem;">
                                                    <img src="{{asset('theme/icons/ic_keyboard_arrow_right_-1.png')}}" style="width:0.5rem;">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="modal fade modal-backdrop.show" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                <a href="{{route('user-chat')}}" class="SendMessageButton">Send Message</a>
                            </div>
                            <div class="col text-center">
                                <a href="" class="CallButton" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" data-bs-dismiss="modal">Make Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal fade" id="staticBackdrop2" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
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
                        <div class="row mobilecardbuttontop">
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
    <!--Modal 2 Report-->
    <section>
        <div class="modal fade" id="staticBackdropReport" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropReportLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col text-center mb-3">
                            <img src="{{asset('theme/icons/Icon ionic-md-warning.png')}}" style="width: 3rem;">
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
                            <img src="{{asset('theme/icons/Icon ionic-md-warning.png')}}" style="width: 3rem;">
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

    <!--Modal-->
    <div class="modal fade" id="LoginRegisterModal1" tabindex="-1" aria-labelledby="LoginRegisterModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center;">
                    <p class="modal-title" id="LoginRegisterModal1Label">Login or registration</p>
                </div>
                <div class="modal-body">
                    <p style="text-align: center;font-size: 13px;font-weight: bold;color: #ff155b;"><b>Welcome to Ya jari</b></p>
                    <div class="form-group">
                        <select id="Select" class="FCselect1 form-select">
                            <option>
                                France (+33)
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" class="FCinput1 form-control" placeholder="Telephone Number" aria-label="Telephone Number" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="LRM1Button row">
                        <a role="button" data-bs-target="#LoginRegisterModal3" data-bs-toggle="modal" data-bs-dismiss="modal">
                            <p style="color: white;position: relative;top:12px;">Continue</p>
                        </a>
                    </div>
                    <div class="row d-flex">
                        <div class="col">
                            <hr>
                        </div>
                        <div class="col-1 text-center">
                            <p class="OrText">Or</p>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="LRMmobileB row">
                        <div class="col-3">
                            <img src="{{asset('theme/icons/ic_mail_outline_24pxblack.png')}}" style="padding-top: 0.9rem;">
                        </div>
                        <div class="col-9">
                            <a role="button" data-bs-target="#LoginRegisterModal2" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p style="position: relative;top: 12px;">Continue with Email</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;border: none;">
                    <div class="row">
                        <img src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Model2-->
    <div class="modal fade" id="LoginRegisterModal2" tabindex="-1" aria-labelledby="LoginRegisterModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="justify-content:center;">
                    <p class="modal-title" id="LoginRegisterModal2Label">Login or registration</p>
                </div>
                <div class="modal-body">
                    <p class="MBText1"><b>Welcome to Ya jari</b></p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" style="height: 3rem;
                                border-radius: 10px;" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon1">
                    </div>
                    <div class="LRM1Button row">
                        <a role="button" data-bs-target="#LoginRegisterModal4" data-bs-toggle="modal" data-bs-dismiss="modal">
                            <p style="color: white;position: relative;top: 12px;">Continue</p>
                        </a>
                    </div>
                    <div class="row d-flex mb-3">
                        <div class="col">
                            <hr>
                        </div>
                        <div class="col-1 text-center">
                            <p class="OrText">Or</p>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="LRMmobileB LRMmobileB1 row">
                        <div class="col-3">
                            <img src="{{asset('theme/icons/ic_phonelink_lock_24pxBlack.png')}}" style="position:relative;top: 12px;">
                        </div>
                        <div class="col-9">
                            <a role="button" data-bs-target="#LoginRegisterModal1" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p style="position: relative;top: 12px;"> Continue with Mobile</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;border: none;">
                    <div class="row">
                        <img src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Model3-->
    <section>
        <div class="modal fade" id="LoginRegisterModal3" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LoginRegisterModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="MHmodel3 modal-header row">
                        <div class="col-3 col-sm-3">
                            <button type="button" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;border: none;">
                                <img class="model-img1" src="{{asset('theme/icons/ic_keyboard_arrow_right_24Blackpx.png')}}">
                            </button>
                        </div>
                        <div class="col-9 col-sm-9">
                            <p class="text-start" style="font-size: 14px;
                                            font-weight: bolder;    position: relative;
                                        top: 10px;" id="LoginRegisterModal3Label">Conform Telephone Number</p>
                        </div>
                    </div>
                    <div class="Modal3Body modal-body">
                        <p style="font-size: 14px;
                                    text-align: center;">Enter the code sent to your Telephone number through SMS </p>
                        <div class="Modal3IputDIV d-flex">
                            <input type="text" class="Model3input form-control" placeholder="  1" aria-label="1">
                            <input type="text" class="Model3input form-control" placeholder=" 2" aria-label="2">
                            <input type="text" class="Model3input form-control" placeholder=" 3" aria-label="3">
                            <input type="text" class="Model3input form-control" placeholder=" 4" aria-label="4">
                            <input type="text" class="Model3input form-control" placeholder=" 5" aria-label="5">
                            <input type="text" class="form-control" placeholder="6" aria-label="  6">
                        </div>
                    </div>
                    <div class="Modal3footer modal-footer">
                        <div class="row">
                            <div class="col-8 col-sm-7 text-end">
                                <p class="Modal3Ftext">Did not receive any code?</p>
                            </div>
                            <div class="col-4 col-sm-5">
                                <a role="button" data-bs-target="#LoginRegisterModal4" data-bs-toggle="modal" data-bs-dismiss="modal">
                                    <p class="Modal3Ftext"><b>Send again</b></p>
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
    <!--Model4-->
    <section>
        <div class="modal fade" id="LoginRegisterModal4" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LoginRegisterModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="MHmodel3 modal-header row">
                        <div class="col-3 col-sm-4">
                            <button type="button" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;border: none;">
                                <img class="model-img1" src="{{asset('theme/icons/ic_keyboard_arrow_right_24Blackpx.png')}}">
                            </button>
                        </div>
                        <div class="col-9 col-sm-8">
                            <p class="modal-title text-startt" id="LoginRegisterModal4Label">Login or registration</p>
                        </div>
                    </div>
                    <div class="Modal4Body modal-bodylogin">
                        <p class="MBText1"><b>Welcome to Yajari</b></p>
                        <div class="input-group mb-2">
                            <select class="Modal4select1 form-select form-select-sm purpose" aria-label="Default select example" style="font-size:12px;">
                                <option value="{{Null}}">Choose</option>
                                <option value="1">Professional</option>
                                <option value="2">Private</option>
                            </select>
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" style="display:none;height: 2.5rem;
                                        background-image: url(icons/ic_person_-1.png);
                                        background-repeat: no-repeat;
                                        background-size: 12px 12px;
                                        background-position: right 2rem center;
                                        font-size: 12px;
                                        border-radius: 10px 10px 0 0;" class="Modal4input1 form-control private" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" style="display:none;    height: 2.5rem;
                                        background-image: url(icons/ic_person_-1.png);
                                        background-repeat: no-repeat;
                                        background-size: 12px 12px;
                                        background-position: right 2rem center;
                                        font-size: 12px;border-radius: 0 0 10px 10px;" class="Modal4input2 form-control private" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" style="display:none;height: 2.5rem;
                                        background-image: url(icons/ic_person_-1.png);
                                        background-repeat: no-repeat;
                                        background-size: 12px 12px;
                                        border-radius: 10px 10px 0 0;
                                        background-position: right 2rem center;font-size: 12px;" class=" form-control professional" placeholder="Company Name" aria-label="Company Name" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-2">
                            <input type="text" class="Modal4input3 form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-2">
                            <input type="text" style="display:none;border-radius: 10px 10px 0 0;font-size: 12px;" class="Modal4input4 form-control professional" placeholder="SIRET Number" aria-label="SIRET Number" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" class="Modal4input5 form-control" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" class="Modal4input6 form-control" placeholder="Password" aria-label="password" aria-describedby="basic-addon1">
                        </div>
                        <div class="">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="FieldsetCheck" style="height: 1.2rem;">
                                <label class="form-check-label" for="FieldsetCheck">
                                    <p class="Modal4Form-Categoryt1" style="padding-top: 0.2rem;">I accept <a style="color: #F82268;text-decoration: none;" href="">general terms and conditions.</a> </p>
                                </label>
                            </div>
                        </div>
                        <div class="pt-1 mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="FieldsetCheck" style="height: 1.2rem;">
                                <label class="form-check-label" for="FieldsetCheck">
                                    <p class="Modal4Form-Categoryt1" style="padding-top: 0.2rem;">Receive information from our partners.</p>
                                </label>
                            </div>
                        </div>

                        <div class="LRM1Button row" style="margin-bottom: 0.2rem;">
                            <a role="button" data-bs-target="#LoginRegisterModal5" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p style="color: white;position: relative;
                                            top: 13px;">Continue</p>
                            </a>
                        </div>
                    </div>
                    <div class="Modal4footer modal-footer">
                        <div class="row" style="margin: auto;">
                            <img class="MFImg" src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
}}                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Model5-->
    <section>
        <div class="modal fade" id="LoginRegisterModal5" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LoginRegisterModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="MHmodel3 modal-header row">
                        <div class="col-3 col-sm-4">
                            <button type="button" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;border: none;">
                                <img class="model-img1" src="{{asset('theme/icons/ic_keyboard_arrow_right_24Blackpx.png')}}">
                            </button>
                        </div>
                        <div class="col-9 col-sm-8">
                            <p class="modal-title text-startt" id="LoginRegisterModal5Label">Create your profile</p>
                        </div>
                    </div>
                    <div class="Modal5Body modal-body">
                        <div class="row" style="margin: auto;">
                            <img class="Modal5Img" src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                        </div>
                        <p class="Modal5Text1 pt-1"><b>Welcome to Yajari</b></p>
                        <p class="Modal5Text2">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document </p>
                        <div class="LRM1Button row" style="margin-bottom: 0.2rem;">
                            <a role="button" data-bs-target="#LoginRegisterModal6" data-bs-toggle="modal" data-bs-dismiss="modal">
                                <p style="color: white;position: relative;top: 12px;">Continue</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Model6-->
    <div class="modal fade" id="LoginRegisterModal6" tabindex="-1" aria-labelledby="LoginRegisterModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius:20px;">
                <div class="modal-header" style="justify-content: center;">
                    <p class="modal-title" id="LoginRegisterModal6Label">Create your profile</p>
                </div>
                <div class="Modal6Body">
                    <p class="Modal6Text1"><b>Welcome to Ya jari</b></p>
                    <div>
                        <select id="Select" class="FCselect1 form-select">
                            <option>
                                France (+33)
                            </option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="FCinput1 form-control" placeholder="Telephone Number" aria-label="Telephone Number" aria-describedby="basic-addon1">
                    </div>
                    <p class="Modal6Text2">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document</p>
                    <div class="pt-1 mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="FieldsetCheck" style="height: 1.2rem;">
                            <label class="form-check-label" for="FieldsetCheck">
                                <p class="Modal6Text3" style="padding-top: 0.2rem;">Send Code Through SMS</p>
                            </label>
                        </div>
                    </div>
                    <div class="LRM1Button row">
                        <a role="button" data-bs-target="#LoginRegisterModal7" data-bs-toggle="modal" data-bs-dismiss="modal">
                            <p style="color: white;position: relative;top: 13px;">Continue</p>
                        </a>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;border: none;">
                    <div class="row">
                        <img src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Model7-->
    <div class="modal fade" id="LoginRegisterModal7" tabindex="-1" aria-labelledby="LoginRegisterModal7Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center;">
                    <p class="modal-title" id="LoginRegisterModal7Label">Create your profile</p>
                </div>
                <div class="Modal7Body">
                    <p class=" text-center" style="font-size: 14px;"><b>Check your email</b></p>
                    <div class="input-group mb-3">
                        <input type="text" style="border-radius: 10px;
                                    height: 3rem;" class="form-control" placeholder="Example@email.com" aria-label="Example@email.com" aria-describedby="basic-addon1">
                    </div>
                    <p class="Modal6Text2 mb-5">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document</p>
                    <div class="LRM1Button row" style="margin: auto;">
                        <a role="button" href="ChoseCategory.html" style="text-decoration:none;">
                            <p style="color: white;font-size: 13px;position: relative;
                                        top: 15px;">Continue</p>
                        </a>
                    </div>
                    <div class="row" style="margin: auto;">
                        <a role="button" data-bs-target="#LoginRegisterModal2" data-bs-toggle="modal" data-bs-dismiss="modal">
                            <p class="text-center pt-2" style="font-size: 12px;"><b>Update Email</b></p>
                        </a>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;border: none;">
                    <div class="row">
                        <img src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal8-->
    <div class="modal fade" id="LoginRegisterModal8" tabindex="-1" aria-labelledby="LoginRegisterModal8Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center;">
                    <p class="modal-title" id="LoginRegisterModal8Label">Sign In</p>
                </div>
                <div class="modal-bodysignin" style="padding-top: 1rem;">
                    <p class="MBText1"><b>Welcome to Ya jari</b></p>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telephone Number or Email Address" style="height: 3rem;border-radius: 10px 10px 10px 10px;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" style="height: 3rem;border-radius: 10px 10px 10px 10px;">
                                <div class="input-group-addon">
                                    <a href=""><img class="passwordEye" src="{{asset('theme/icons/ic_visibility_off_24px.png')}}" style="position:relative; top: -2.2rem;left: 85%;width: 1.2rem;"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="LRM1Button row">
                        <a role="button" data-bs-target="#LoginRegisterModal3" data-bs-toggle="modal" data-bs-dismiss="modal">
                            <p style="color: white;    position: relative;
                                        top: 10px;">Continue</p>
                        </a>
                    </div>
                </div>
                <div class="modal-footer" style="margin: auto;border: none;">
                    <div class="row">
                        <img src="{{asset('theme/icons/yajari-removebg-preview.png')}}" style="width: 8rem;margin: 0px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    @include('frontend.layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
    <script type="text/javascript">
        $(document).ready(function() {
            $('.categories').on('change', function() {
                if (this.value == '1') {
                    $(".homemaintenance").removeClass('d-none');
                    $(".homemaintenance").show();
                    $(".officemaintenance").hide();
                    $(".electricity").hide();
                    $(".computerrepair").hide();
                    $(".mobilerepair").hide();
                } else if (this.value == '2') {
                    $(".officemaintenance").removeClass('d-none');
                    $(".officemaintenance").show();
                    $(".homemaintenance").hide();
                    $(".electricity").hide();
                    $(".computerrepair").hide();
                } else if (this.value == '3') {
                    $(".electricity").removeClass('d-none');
                    $(".electricity").show();
                    $(".homemaintenance").hide();
                    $(".officemaintenance").hide();
                    $(".computerrepair").hide();
                } else if (this.value == '4') {
                    $(".computerrepair").removeClass('d-none');
                    $(".computerrepair").show();
                    $(".homemaintenance").hide();
                    $(".officemaintenance").hide();
                    $(".electricity").hide();
                } else if (this.value == '5') {
                    $(".mobilerepair").removeClass('d-none');
                    $(".mobilerepair").show();
                    $(".homemaintenance").hide();
                    $(".officemaintenance").hide();
                    $(".electricity").hide();
                    $(".computerrepair").hide();
                } else {
                    $(".homemaintenance").hide();
                    $(".officemaintenance").hide();
                    $(".electricity").hide();
                    $(".computerrepair").hide();
                    $(".mobilerepair").hide();
                }
            });
        });

    </script>
    <script>
        let items = document.querySelectorAll('#RealizeCarouselID .carousel-item')
        items.forEach((el) => {
            const minPerSlide = 3
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        });
        let items2 = document.querySelectorAll('#FavoritesCarouselID .carousel-item')
        items2.forEach((el) => {
            const minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        });

    </script>

</body>

</html>
