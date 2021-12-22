<section class="bg-light py-5">
        <div class="container" style="width: 90%;">
            <div class="row f-img " style="padding-top:0rem;">
                <div class="col-lg-3">
                    <img src="{{asset('theme/icons/yajari-removebg-preview-1.png')}}" style="width: 16rem;position: relative;top: -15px;">
                </div>
                <div class="col-lg-9 d-flex pt-5">
                    <p style="font-size: 16px; font-weight: 900;padding-top: 15px;" class="followus">Follow Us:</p>
                    <div class="text-end socialicon">
                        <img src="{{asset('theme/icons/Group 1611.png')}}" class="follow-img">
                        <img src="{{asset('theme/icons/Group 1613.png')}}" class="follow-img">
                        <img src="{{asset('theme/icons/Group 1614.png')}}" class="follow-img">
                        <img src="{{asset('theme/icons/Group 1615.png')}}" class="follow-img">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>FREQUENTLY ASKED QUESTION / HELP</b></p>
                    <div class="row">
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">I can't log into my
                            account</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">I can't register to my
                            account</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">How to reset / change
                            password</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">I can't find my password
                            anymore</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>PRESENTATION</b></p>
                    <div class="row">
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">Who are we?</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">How it works?</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>LEGAL INGORMATION</b></p>
                    <div class="row">
                        <a href="ContactUs.html" class="btn text-start" style="font-size: 12px; font-weight: bold;">Contact Us</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">General Conditions of Sale
                            and Use</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">Confidentiality and
                            privacy policy</a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;">Legal Notice</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <p style="font-size: 16px; font-weight:900;"><b>OUR APPLICATIONS</b></p>
                    <div class="row">
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;"><img src="{{asset('theme/icons/Group 2387.png')}}" style="width: 10rem;"></a>
                        <a class="btn text-start" style="font-size: 12px; font-weight: bold;"><img src="{{asset('theme/icons/Group 2388.png')}}" style="width: 10rem;"></a>
                    </div>
                </div>
            </div>

    </section>
    @include('sweetalert::alert')
