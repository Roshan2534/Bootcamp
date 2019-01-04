function addproduct(){
    name = $('#name').val();
    price = $('#price').val();
    description = $('#description').val();
    img = $('#img').val();
    category = $('#category').val();
    $.ajax({
        type: "POST",
        url: "backend/addproduct_ajax.php",
        data: {
            //data goes here
           name,
           price,
           description,
           img,
           category
           
        },
        success: function (data) {
           //data is returned here
         if(data == 'success'){
             alert("product added");
             window.location = 'home.php';
         }
         else{
             alert("there was an error please try again later");
             window.location = '';
         }
        }
    });

}