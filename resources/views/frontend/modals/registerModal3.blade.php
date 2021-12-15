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
                    <div class="Modal4Body modal-body">
                        <p class="MBText1"><b>Welcome to Yajari</b></p>
                        <div class="input-group mb-1">
                            <select class="Modal4select1 form-select form-select-sm purpose inputField" id="userType" aria-label="Default select example" style="font-size: 12px;border-radius: 10px">
                                <option value="{{Null}}">Choose</option>
                                <option value="1">Professional</option>
                                <option value="2">Private</option>
                            </select>
                            <span class="col-md-12 inputError" for="userType">Type field is required</span>
                        </div>
                        <div class="input-group mb-1 private" style="display:none;">
                            <input type="text" class="Modal4input5 form-control inputField_c" placeholder="First Name" id="userFirstName" aria-label="First Name" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" for="userFirstName">First name field is required</span>
                        </div>
                        <div class="input-group mb-1 private" style="display:none;">
                            <input type="text" class="Modal4input2 form-control inputField_c" placeholder="Last Name" id="userLastName" aria-label="Last Name" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" for="userLastName">Last name field is required</span>
                        </div>
                        <div class="input-group mb-1 professional" style="display:none;">
                            <input type="text" class="Modal4input1 form-control inputField_c" placeholder="Company Name" id="userCompanyName" aria-label="Company Name" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" for="userCompanyName">Company Name field is required</span>
                        </div>

                        <div class="input-group mb-1">
                            <input type="text" class="Modal4input3 form-control inputField" placeholder="Address" id="userAddress" aria-label="Address" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" for="userAddress">Address field is required</span>
                        </div>

                        <div class="input-group mb-1 professional" style="display:none;">
                            <input type="text" class="Modal4input4 form-control inputField " placeholder="SIRET Number" id="userSiretNumber" aria-label="SIRET Number" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" for="userSiretNumber">SIRET Number field is required</span>
                        </div>
                        <div class="input-group mb-1">
                            <input type="number" class="Modal4input5 form-control inputField" placeholder="Phone Number" id="userPhoneNumber" aria-label="Phone Number" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" for="userPhoneNumber">Phone Number field is required</span>
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="Modal4input6 form-control inputField" placeholder="Password" id="userPassword" aria-label="password" aria-describedby="basic-addon1">
                            <span class="col-md-12 inputError" for="userPassword">Password field is required</span>
                        </div>
                        <div class="">
                            <div class="form-check">
                                <input class="form-check-input terms_and_conditions" type="checkbox" id="FieldsetCheck" style="height: 1.2rem;">
                                <label class="form-check-label" for="FieldsetCheck">
                                    <p class="Modal4Form-Categoryt1" style="padding-top: 0.2rem;">I accept <a style="color: #F82268;text-decoration: none;" href="">general terms and conditions.</a> </p>
                                </label>
                                <br>
                                <span class="col-md-12 inputError" id="terms_and_conditions_checkbox" for="FieldsetCheck">Check Terms and Conditions checkbox.</span>                                
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
                            <a role="button" id="registerModal3Continuebtn">
                                <p style="color: white;margin-top: 10px;">Continue</p>
                            </a>
                        </div>
                    </div>
                    <div class="Modal4footer modal-footer">
                        <div class="row" style="margin: auto;">
                            <img class="MFImg" src="{{asset('theme/icons/yajari-removebg-preview.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>