 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>

    

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

            $(".owl-carousel").owlCarousel({
                autoPlay: 2000,
                items: 4,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3],
                center: true,
                nav: true,
                loop: true,
                responsive: {
                    600: {
                        items: 4
                    }
                }
            });

        });
    </script>

    <script type="text/javascript">

       
        
        
        
        $('#registerModal1Continuebtn').click(function(){
            $('.inputError').hide();
            if($('#userEmail').val()=='' || $('#userEmail').val()==null){
                $('.inputError[for="userEmail"]').show();
            }else{
                $('#LoginRegisterModal2').modal('hide');                
                $('#registerEmail').val($('#userEmail').val());
                //call ajax

                $('#LoginRegisterModal4').modal('show');
            }

                
            
        });

        $('#registerModal3Continuebtn').click(function(){
            $('.inputError').hide();            
            var check = 0;

                if($('#userType').val()==1){
                        if($('#userCompanyName').val()=='' || $('#userCompanyName').val()==null){
                            $('.inputError[for="userCompanyName"]').show();
                            check=1;
                        }
                        
                    }else{
                        if($('#userFirstName').val()=='' || $('#userFirstName').val()==null){
                            $('.inputError[for="userFirstName"]').show();
                            check=1;
                        }

                         if($('#userLastName').val()=='' || $('#userLastName').val()==null){
                            $('.inputError[for="userLastName"]').show();
                            check=1;
                        }

                    }

            $('#LoginRegisterModal4 .inputField').each(function(){
                var forType = $(this).attr('id');
                if($(this).val()=='' || $(this).val()==null){
                    $('.inputError[for="'+forType+'"]').show();
                    check=1;
                }
            });

           if($('.terms_and_conditions').prop('checked')==false){
                $('#terms_and_conditions_checkbox').show();
                check=1;
           } 
           if(check==0){

                $('#LoginRegisterModal4').modal('hide');
                $('#registerFirstName').val($('#userFirstName').val());
                $('#registerLastName').val($('#userLastName').val());
                $('#registerCompanyName').val($('#userCompanyName').val());
                $('#registerAddress').val($('#userAddress').val());
                $('#registerSiretNumber').val($('#userSiretNumber').val());
                $('#registerPhoneNumber').val($('#userPhoneNumber').val());
                $('#registerPassword').val($('#userPassword').val());
                $('#LoginRegisterModal5').modal('show');                   
            }
            //


        });


        $('#registerModal5Continuebtn').click(function(){
            

            $('.inputError').hide();
            if($('#userPhoneNumber1').val()=='' || $('#userPhoneNumber1').val()==null){
                $('.inputError[for="userPhoneNumber1"]').show();
            }else{
                 $('#LoginRegisterModal6').modal('hide');
                $('#registerCountrySelect').val($('#userCountrySelect').val());
                $('#registerPhoneNumber1').val($('#userPhoneNumber1').val());
                $('#registerSendCodeViaSMS').val($('#userSendCodeViaSMS').val());
                $('#LoginRegisterModal7').modal('show');                   
            }

            

        });

            $('#registerModal6Continuebtn').click(function(){        

                $('#registrationForm').submit();
            
            });





        

    </script>
