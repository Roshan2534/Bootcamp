function signup(){
    username=$('#username').val();
    password=$('#password').val();
   
    $.ajax({
        type: "POST",
        url: "backend/signup_ajax.php",
        data: {
            //data goes here
           username,
           password
        },
        success: function (data) {
           //data is returned here
         if(data == 'success'){
             alert("successfully registered");
             window.location = 'login.php';
         }
         else{
             alert("not registered");
             window.location = '';
         }
        }
    });
}
function addtocart(productid,userid){
    $.ajax({
        type: "POST",
        url: "backend/addtocart_ajax.php",
        data: {
            //data goes here
           productid,
           userid
        },
        success: function (data) {
           //data is returned here
         if(data == 'success'){
             alert("successfully added to cart");
             window.location = 'cart.php';
         }
         else{
             alert("there was an error please try again later");
             window.location = '';
         }
        }
    });

}


function login(){
    username=$('#username').val();
    password=$('#password').val();
   
    $.ajax({
        type: "POST",
        url: "backend/login_ajax.php",
        data: {
            //data goes here
           username,
           password
        },
        success: function (data) {
           //data is returned here
         if(data == 'success'){
             alert("successfully login");
             window.location = 'index.php';
         }
         else{
             alert("wrong username,password combination");
             window.location = '';
         }
        }
    });
}
function placeorder(productid,userid){
    $.ajax({
        type: "POST",
        url: "backend/placeorder_ajax.php",
        data: {
            //data goes here
           productid,
           userid
        },
        success: function (data) {
           //data is returned here
         if(data == 'success'){
             alert("order placed");
             window.location = 'cart.php';
         }
         else{
             alert("there was an error please try again later");
             window.location = '';
         }
        }
    });

}