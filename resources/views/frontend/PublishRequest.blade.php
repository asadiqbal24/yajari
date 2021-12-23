@include('frontend.layout.head')
@section('requests','active')
<style type="text/css">
.form-button2 {
background: white;
border-color: #ff3b72;
height: 40px;
font-size: 15px;
font-weight: bolder;
border-radius: 8px;
color: #ff4b7e;
width: 25%;
}
.form-button1 {
background: linear-gradient(to right, #ff8dad, #ff2160);
border-color: #ffc2d3;
width: 33%;
height: 40px;
font-size: 16px;
font-weight: bolder;
border-radius: 8px;
}
.mainpicture{
padding-left: 0px;
}
@media all and (min-width: 1590px) {
.navalign {
padding-left: 173px;
padding-top: 10px;
color: #ff6e9a;
font-weight: bold;
display: inline-flex;
padding-right: .5rem;
}
.form-button1 {
background: linear-gradient(to right, #ff8dad, #ff2160);
border-color: #ffc2d3;
width: 36%;
height: 40px;
font-size: 16px;
font-weight: bolder;
border-radius: 8px;
}
.form-button2 {
background: white;
border-color: #ff3b72;
height: 40px;
font-size: 15px;
font-weight: bolder;
border-radius: 8px;
color: #ff4b7e;
width: 30%;
}
.ReportCol {
margin-right: 18rem;
}
.navalign2 {
padding-left: 730px;
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
.buton {
position: relative;
left: -83px;
}
.from-description1 {
height: 100px;
}
.socialicon {
transform: translateX(78%);
}
.followus {
position: relative;
left: 327px;
top: -50px;
}
.background-image{
left: -40px;
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
.ReportCol {
margin-right: 18rem;
}
.navalign2 {
padding-left: 730px;
padding-top: 10px;
color: #ff6e9a;
font-weight: bold;
display: inline-flex;
}
.showcase-text1 {
font-size: 30px;
font-weight: 900;
padding-top: 4rem;
}
.background-image{
width: 100%;
height: 180px;
position: relative;
left: -25px;
}
.form-button1 {
background: linear-gradient(to right, #ff8dad, #ff2160);
border-color: #ffc2d3;
width: 33%;
height: 40px;
font-size: 16px;
font-weight: bolder;
border-radius: 8px;
}
.form-button2 {
background: white;
border-color: #ff3b72;
height: 40px;
font-size: 15px;
font-weight: bolder;
border-radius: 8px;
color: #ff4b7e;
width: 25%;
}
}
</style>
<link rel="stylesheet" href="{{asset('theme/css/PublishRequestStyle.css')}}">
<body style="zoom:90%">
    <!--Nav Bar-->
    @include('frontend.layout.navbar')
    <!--Show Case-->
    <section class="pt-3 text-center">
        <div class="row" style="margin:0px">
            <div class="col-lg-12 mainpicture">
                <div class="background-image text-center">
                    <p class="showcase-text1" style="color: white;">Publish your requests</p>
                </div>
            </div>
        </div>
    </section>
    <!--Form-->
    <section class="py-5 cardtopsection">
        <div class="Form-Container container">
            <form action="{{route('confirm-publish-save')}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <label for="Select" class="form-label">
                        <p class="Form-Categoryt1">Request Title</p>
                    </label>
                    <div class="col-sm-6 col-12 pb-3">
                        <input type="text" id="TextInput" name="request_title" class="form-control" placeholder="Request title">
                    </div>
                </div>
                <div class="row">
                    <label for="Select" class="form-label">
                        <p class="Form-Categoryt1">Choose Category and sub category:</p>
                    </label>
                    <div class="col-sm-6 col-12 pb-3">
                        <select id="Select" name="category" class="form-select">
                            <option value="{{Null}}">Choose</option>
                            <option value="Abc">Category</option>


                        </select>
                    </div>
                    <div class="col-sm-6 col-12">
                        <select id="Select" name="sub_category" class="form-select">
                            <option value="{{Null}}">Choose</option>
                            <option value="subcategory">SubCategory</option>
                        </select>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-sm-6 col-12">
                        <label for="Select" class="form-label">
                            <p class="Form-Categoryt1">Budget:</p>
                        </label>
                        <select id="Select" class="form-select">
                            <option value="{{Null}}">Choose</option>
                            <option value="Per Hour">Per Hour</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-12">
                        <label for="Select" class="form-label">
                            <p class="Form-Categoryt1">Price:</p>
                        </label>
                        <input type="text" id="TextInput" name="price" class="form-control" placeholder="price">
                    </div>
                </div>
                <div class="row" style="    padding-bottom: 1rem!important;">
                    <div class="col-sm-6 col-12">
                        <label for="Select" class="form-label">
                            <p class="Form-Categoryt1">Position:</p>
                        </label>
                        <input type="text" name="position" id="TextInput" class="Position-fromImg form-control" placeholder="Le Berdo">
                    </div>
                </div>
                <div class="pt-3">
                    <div class="form-check">
                        <input class="form-check-input" name="urgent" value="on" type="checkbox" id="FieldsetCheck">
                        <label class="form-check-label" for="FieldsetCheck">
                            <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Urgent?</p>
                        </label>
                    </div>
                </div>
                <div class="pt-3">
                    <div class="form-check">
                        <input class="form-check-input" name="professional" value="on" type="checkbox" id="FieldsetCheck">
                        <label class="form-check-label" for="FieldsetCheck">
                            <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Only Professional?</p>
                        </label>
                    </div>
                </div>
                <div class="pt-3">
                    <div class="form-check">
                        <input class="form-check-input" name="phone_number" value="on" type="checkbox" id="FieldsetCheck">
                        <label class="form-check-label" for="FieldsetCheck">
                            <p class="Form-Categoryt1" style="padding-top: 0.2rem;">Show Phone Number</p>
                        </label>
                    </div>
                </div>
                <div class="row pt-5 descriptiontop">
                    <div class="col-md-9 col-sm-12 col-12">
                        <label for="Select" class="form-label">
                            <p class="Form-Categoryt1">Detailed description:</p>
                        </label>
                        <textarea type="text" id="TextInput" name="description" class="from-description1 form-control" placeholder="Detailed description"></textarea>
                    </div>
                </div>
                <div class="row pt-3" style="padding-bottom: 20px;">
                    <div class="col-md-9 col-sm-12 col-12">
                        <div class="Form-DescriptionAlertShadow d-flex pt-3">
                            <img src="{{('theme/icons/Icon ionic-md-warning.png')}}" style="width: 2.5rem;height: 1.2rem;padding-left: 20px;" class="dangericon">
                            <p class="Form-DescriptionAlert1">Minimum of 100 letters. Don't enter your phone number</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 10px;">
                    <div class="col-md-9 col-sm-12 col-12">
                        <label for="Select" class="form-label pb-3">
                            <p class="Form-Categoryt1">Pictures of the work to be done:</p>
                        </label>
                        <div class="upload-Picture">
                            <img class="upload-PictureIMG" src="{{('theme/icons/ic_add_a_photo_24px.png')}}"><input type="file" name="file" style="opacity: 0;
    margin-left: 15px;
    margin-top: 22px;">
                        </div>
                    </div>
                </div>
                <div class="row pt-3" style="padding-bottom: 20px;">
                    <div class="col-md-9 col-sm-12 col-12">
                        <div class="Form-DescriptionAlertShadow d-flex pt-3">
                            <img src="{{('theme/icons/Icon ionic-md-warning.png')}}" style="width: 2.5rem;height: 1.2rem;padding-left: 20px;" class="dangericon">
                            <p class="Form-DescriptionAlert1">Minimum of 100 letters. Don't enter your phone number</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-6 col-6">
                        <button class="form-button2 btn btn-primary">Cancel</button>
                    </div>
                    <div class="col-md-6 col-xs-6 col-6 pl-11">
                        <button class="form-button1 btn btn-primary confirmcancel" type="submit">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--Footer-->
    
    
    @include('frontend.layout.footer')
    @include('frontend.layout.scripts')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>