<div class="modal fade" id="LoginRegisterModal8" tabindex="-1" aria-labelledby="LoginRegisterModal8Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="LoginRegisterModal8Label">Sign In</p>
                </div>
                <div class="modal-body" style="padding-top: 1rem;">
                    <p class="MBText1"><b>Welcome to Ya jari</b></p>
                    <form method="post" action="{{route('userLogin')}}" id="loginForm">
                    @csrf    
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <input type="text" required class="form-control" id="exampleInputPassword1" name="email" placeholder="Telephone Number or Email Address" style="height: 3rem;border-radius: 10px 10px 10px 10px;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <input type="password" required class="form-control" name="password" id="exampleInputPassword3" placeholder="Password" style="height: 3rem;border-radius: 10px 10px 10px 10px;">
                                <div class="input-group-addon">
                                    <a href=""><img class="passwordEye" src="{{asset('theme/icons/ic_visibility_off_24px.png')}}" style="position:relative; top: -2.2rem;left: 85%;width: 1.2rem;"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="LRM1Button row">
                        <a type="submit" onclick="$('#loginForm').submit();">
                            <p style="color: white;margin-top: 10px;">Continue</p>
                        </a>
                    </div>
                </form>
                </div>
                <div class="modal-footer" style="margin: auto;border: none;">
                    <div class="row">
                        <img src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>