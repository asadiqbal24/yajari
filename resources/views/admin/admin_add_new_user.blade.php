@extends('template.partials.default')
@section('content')
<div class="main-content">
  <section class="section">
          <div class="section-header">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="section-header-breadcrumb-content">
                  <h1>Form Wizard</h1>
                  <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#"><i class="fas fa-home"></i></a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item"><a href="#">Form Wizard</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="section-header-breadcrumb-chart float-right">
                  <div class="breadcrumb-chart m-l-50">
                    <div class="float-right">
                      <div class="icon m-b-10">
                        <div class="chart header-bar">
                          <canvas width="49" height="40" ></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="float-right m-r-5 m-l-10 m-t-1">
                      <div class="chart-info">
                        <span>$10,415</span>
                        <p>Last Week</p>
                      </div>
                    </div>
                  </div>
                
                  <div class="breadcrumb-chart m-l-50">
                    <div class="float-right">
                      <div class="icon m-b-10">
                        <div class="chart header-bar2">
                          <canvas width="49" height="40" ></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="float-right m-r-5 m-l-10 m-t-1">
                      <div class="chart-info">
                        <span>$22,128</span>
                        <p>Last Month</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section-body">
            
            <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Vertical Layout</h4>
                  </div>
                  <div class="card-body">
                    <form id="wizard_with_validation" method="POST" role="application" class="wizard clearfix" novalidate="novalidate"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current error" aria-disabled="false" aria-selected="true" style="width: 25%;"><a id="wizard_with_validation-t-0" href="#wizard_with_validation-h-0" aria-controls="wizard_with_validation-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Account</a></li><li role="tab" class="disabled" aria-disabled="true" style="width: 25%;"><a id="wizard_with_validation-t-1" href="#wizard_with_validation-h-1" aria-controls="wizard_with_validation-p-1"><span class="number">2.</span> Profile</a></li><li role="tab" class="disabled" aria-disabled="true" style="width: 25%;"><a id="wizard_with_validation-t-2" href="#wizard_with_validation-h-2" aria-controls="wizard_with_validation-p-2"><span class="number">3.</span> Terms and Condition</a></li><li role="tab" class="disabled last" aria-disabled="true" style="width: 25%;"><a id="wizard_with_validation-t-3" href="#wizard_with_validation-h-3" aria-controls="wizard_with_validation-p-3"><span class="number">4.</span> Finish</a></li></ul></div><div class="content clearfix">
                      <h3 id="wizard_with_validation-h-0" tabindex="-1" class="title current">Account</h3>
                      <fieldset id="wizard_with_validation-p-0" role="tabpanel" aria-labelledby="wizard_with_validation-h-0" class="body current" aria-hidden="false">
                        <div class="form-group form-float">
                          <div class="form-line error">
                            <label class="form-label">Username*</label>
                            <input type="text" class="form-control" name="username" required="">
                          </div>
                        <label id="username-error" class="error" for="username">This field is required.</label></div>
                        <div class="form-group form-float">
                          <div class="form-line error">
                            <label class="form-label">Password*</label>
                            <input type="password" class="form-control" name="password" id="password" required="">
                          </div>
                        <label id="password-error" class="error" for="password">This field is required.</label></div>
                        <div class="form-group form-float">
                          <div class="form-line error">
                            <label class="form-label">Confirm Password*</label>
                            <input type="password" class="form-control" name="confirm" required="">
                          </div>
                        <label id="confirm-error" class="error" for="confirm">This field is required.</label></div>
                      </fieldset>
                      <h3 id="wizard_with_validation-h-1" tabindex="-1" class="title">Profile</h3>
                      <fieldset id="wizard_with_validation-p-1" role="tabpanel" aria-labelledby="wizard_with_validation-h-1" class="body" aria-hidden="true" style="display: none;">
                        <div class="form-group form-float">
                          <div class="form-line">
                            <label class="form-label">First Name*</label>
                            <input type="text" name="name" class="form-control" required="">
                          </div>
                        </div>
                        <div class="form-group form-float">
                          <div class="form-line">
                            <label class="form-label">Last Name*</label>
                            <input type="text" name="surname" class="form-control" required="">
                          </div>
                        </div>
                        <div class="form-group form-float">
                          <div class="form-line">
                            <label class="form-label">Email*</label>
                            <input type="email" name="email" class="form-control" required="">
                          </div>
                        </div>
                        <div class="form-group form-float">
                          <div class="form-line">
                            <label class="form-label">Address</label>
                            <textarea name="address" cols="30" rows="3" class="form-control no-resize"></textarea>
                          </div>
                        </div>
                      </fieldset>
                      <h3 id="wizard_with_validation-h-2" tabindex="-1" class="title">Terms and Condition</h3>
                      <fieldset id="wizard_with_validation-p-2" role="tabpanel" aria-labelledby="wizard_with_validation-h-2" class="body" aria-hidden="true" style="display: none;">
                        <label>If Your Details are correct then you can go next.Otherwise you should change incorrect detail to going back.</label>
                      </fieldset>
                      <h3 id="wizard_with_validation-h-3" tabindex="-1" class="title">Finish</h3>
                      <fieldset id="wizard_with_validation-p-3" role="tabpanel" aria-labelledby="wizard_with_validation-h-3" class="body" aria-hidden="true" style="display: none;">
                        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required="">
                        <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                      </fieldset>
                    </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem" class="waves-effect">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem" class="waves-effect">Finish</a></li></ul></div></form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>

@endsection()