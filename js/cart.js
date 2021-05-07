 $(document).ready(function(){
           $(".addItemBtn").click(function(e){
                e.preventDefault();
              
               var $form = $(this).closest(".form-submit");
               var pid = $form.find(".pid").val();
               var catid = $form.find(".catid").val();
               var pname = $form.find(".pname").val();
               var pprice = $form.find(".pprice").val();
               var pimage = $form.find(".pimage").val();
               var pcode = $form.find(".pcode").val();
              
               $.ajax({
                   url: 'action.php',
                   method: 'post',
                   data: {pid:pid,catid:catid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
                   success: function(response){
                       $('#message').html(response);
                       window.scrollTo({
                          top: 200,
                          left: 0,
                          behavior: 'smooth'
                        });
                           load_cart_item_number();
                       if(data != ""){
                        console.log(data);
                       }
                   }
               });
              }); 
//        loading cart item numbers
            load_cart_item_number();
            function load_cart_item_number(){
                $.ajax({
                   url: 'action.php',
                    method: 'get',
                    data: {cartItem:"cart_item"},
                    success: function(response){
                        $("#cart-item").html(response);
                    }
                });
            }
        });