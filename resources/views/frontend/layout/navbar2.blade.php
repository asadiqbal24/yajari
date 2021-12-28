<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="    background-color: white;
                box-shadow: 0px 2px 5px #acacac;">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">
                        <img src="{{asset('theme/icons/yajari-removebg-preview-1.png')}}" class="yajari-removebg-preview-1"  alt="Yajiri">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-left:6%">
                        <div class="navbar-nav">
                            <a  style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;    text-decoration: none;" href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                            <a  style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;    text-decoration: none;" href="{{route('requests')}}" class="nav-item  requestnav">Requests</a>
                            <a  style=" padding-top: 10px;color: #3B3B3B;font-weight: bold;    text-decoration: none;" href="{{route('serviceproviders')}}" class="nav-item servicesnav">Service Providers</a>
                            <a  style=" padding-top: 10px;color: white;font-weight: bold;    text-decoration: none;" href="{{route('publishrequest')}}" class="nav-item nav-link navpublish publishnavbar">Publish a Request</a>
                        </div>
                        <div class="navbar-nav navbar2side" id="nav-Profile">
                            <div class="flex-container d-flex">
                                <div class="chatDIV">
                                    <a href="Chat.html">
                                        <img src="{{asset('theme/icons/ic_textsms_24px.png')}}" style="margin-top: 0.6rem;">
                                    </a>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div class="btn-group">
                                        <button class="btn dropdown" style="padding-top: 0;" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <img src="{{asset('theme/icons/Ellipse -7.png')}}" alt="" style="position:relative;left:10px;">
                                        </button>
                                        <ul class="ProfileDropdown dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                            <li><a class="dropdown-item" href="{{route('professionalProfile')}}">
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
                                                <a class="dropdown-item" href="{{route('my-request')}}">
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
                                                                    <li><a class="dropdown-item" href="{{route('myfavourites-neighbor')}}">
                                                                        <div class="row">
                                                                            <div class="col-3 col-sm-3 text-end">
                                                                                <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                                            </div>
                                                                            <div class="col-8 col-sm-8 text-start mt-1">
                                                                                <p>Favourite Neighbor</p>
                                                                            </div>
                                                                        </div>
                                                                    </a></li>

                                                                    
                                                                    <li><a class="dropdown-item" href="{{route('my-favourite-request')}}">
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
                                                                <ul class="ProfileDropdown" style="text-decoration: none;">
                                                                    <li><a class="dropdown-item" href="{{route('modify-personal-info')}}">
                                                                        <div class="row">
                                                                            <div class="col-3 col-sm-3 text-end">
                                                                                <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                                            </div>
                                                                            <div class="col-8 col-sm-8 text-start mt-1">
                                                                                <p>Personal Information</p>
                                                                            </div>
                                                                        </div>
                                                                    </a></li>
                                                                    <li><a class="dropdown-item" href="{{route('change-password')}}">
                                                                        <div class="row">
                                                                            <div class="col-3 col-sm-3 text-end">
                                                                                <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                                            </div>
                                                                            <div class="col-8 col-sm-8 text-start mt-1">
                                                                                <p>Password</p>
                                                                            </div>
                                                                        </div>
                                                                    </a></li>
                                                                    
                                                                    <li><a class="dropdown-item" href="{{route('modify-categories')}}">
                                                                        <div class="row">
                                                                            <div class="col-3 col-sm-3 text-end">
                                                                                <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                                            </div>
                                                                            <div class="col-8 col-sm-8 text-start mt-1">
                                                                                <p>List of Categories</p>
                                                                            </div>
                                                                        </div>
                                                                    </a></li>
                                                                    <li><a class="dropdown-item" href="{{route('modify-distance')}}">
                                                                        <div class="row">
                                                                            <div class="col-3 col-sm-3 text-end">
                                                                                <img src="{{asset('theme/icons/Ellipse 167.png')}}" alt="">
                                                                            </div>
                                                                            <div class="col-8 col-sm-8 text-start mt-1">
                                                                                <p>Radius</p>
                                                                            </div>
                                                                        </div>
                                                                    </a></li>
                                                                    <li><a class="dropdown-item" href="{{route('change-language')}}">
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
                                                </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div style="border-left: 2px solid gray;height: 2rem;margin-top: 0.3rem; margin-left: 20px;">
                                    </div>
                                    <div style="margin-left: 20px;">
                                        <div class="dropdown languagesside">
                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="{{asset('theme/icons/1280px-Flag_of_France.svg.png')}}" alt="">
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">English</a></li>
                                                <li><a class="dropdown-item" href="#">French</a></li>
                                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chatDIV2 messageside">
                                        <a href="MobileActiveChat.html">
                                            <img src="{{asset('theme/icons/ic_textsms_24px.png')}}" style="margin-top: 0.6rem;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>