$(function () {
    $(".datepicker").datepicker({
        showOn: "button",
        changeMonth:true,
        changeYear:true,
        dateFormat:"mm/dd/yy",
        yearRange: "1980:1997",
        buttonImage: "https://cdn3.iconfinder.com/data/icons/computers-programming/512/datepicker-256.png"
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#app_photo').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#photo").change(function(){
        readURL(this);
    });
});

$(function() {
    $("#submit").click(function() {
        if($("#agree:checked").is(":checked")){
            sendMail();
        }
        else{
            alert("Please Agree Our Conditions");
        }

        function sendMail() {
            var data = {
            typeofcourse: $(".typeofcourse:checked").val(),
            name: $("#name").val(),
            email: $("#email").val(),    
            phone: $("#phone").val(),        
            dob: $("#dob").val(),
            gender: $(".gender:checked").val(),
            fathername:$("#fathername").val(),
            fatherno:$("#fatherno").val(),
            fatheremail:$("#fatheremail").val(),
            mothername:$("#mothername").val(),
            motherno:$("#motherno").val(),
            motheremail:$("#motheremail").val(),
        };

        $.ajax({
            type: "POST",
            url: "mail.php",
            data: data,
            success: function(){
                $('.success').fadeIn(1000);
            }
        });
        return false;        
    }        
});
});
    
