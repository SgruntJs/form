 $(document).ready(function($){
 
    // hide messages 
    $("#error").hide();
    $("#show_message").hide();


        
    $('#productList').change( function() {
        if( this.value == '2' ){
            $('.form-control--pd').show();
        } else {
            $('.form-control--pd').hide();
         }
        });
        
    // on submit...
    $('#ajax-form').submit(function(e){
 
        e.preventDefault();
 
 
        $("#error").hide();
 
        //name required
        var name = $("input#name").val();
        if(name == ""){
            $("#error").fadeIn().text("Name required.");
            $("input#name").focus();
            return false;
        }
 
        // email required
        var email = $("input#email").val();
        if(email == ""){
            $("#error").fadeIn().text("Email required");
            $("input#email").focus();
            return false;
        }
        
 
        // mobile number required
        var mobile = $("input#mobile").val();
        if(mobile == ""){
            $("#error").fadeIn().text("Mobile number required");
            $("input#mobile").focus();
            return false;
        }
 
        // ajax
        $.ajax({
            type:"POST",
            url: "server/ajax-form-store.php",
            data: $(this).serialize(), // get all form field value in serialize form
            success: function(){
              $("#show_message").fadeIn();
              //$("#ajax-form").fadeOut();
              $('#ajax-form')[0].reset();
            },
            error: function() {
            	alert('vaffanculo!');
            }
        });
    });  
 
    return false;
    });
