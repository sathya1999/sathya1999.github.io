$(document).ready(function() {
  $("#registration").validate({
    rules: {
                    email: "required",
                    password: "required",
    
    },
    
    messages: {
        email: "Please enter Email Id",
        password: "Please enter Password",
   
    },
  });
});
// jQuery.validator.addMethod("accept", function(value, element, param) {
//  return value.match(new RegExp("." + param + "$"));
// });
// $(".submit-btn").click(function(e) {
// //alert('click');
//     //check the validation like this
//     if ($("#registration").valid()) {
//         //alert('reached here');
//         //Ajax to process the form
//         $.ajax({
//             type: "POST",
//             url: "process.php",
//             data: {
//                 empid: $("#empid").val(),
//                 manager: $("#manager").val(),
//                 fname: $("#fname").val(),
//                 lname: $("#lname").val(),
//                 category: $("#category").val(),
//                 justification: $("#justification").val(),
//                 image: $("#image").val(),

//             },

//             //you forget to passs the response
//             success: function () {
//           alert('Form was submitted.Thankyou');
//             }
//         });
//         return false;
//     }
// });
