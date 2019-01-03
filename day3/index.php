<?php 
$number=0;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <?php for($i=0;$i<3;$i++){ ?>

        
        <div class="row number-row">
            <?php for($a=0;$a<3;$a++){  $number++; ?>

            
            <div  onclick ="clicked(<?php echo $number; ?>)" id="number<?php echo $number; ?>"  class="col-sm-4 number-<?php
                if($a==0){
                    echo "left";
                }
                if($a==1){
                    echo "center";
                }
                if($a==2){
                    echo "right";
                }
                
                
                
                
                ?> ">
                <h1  class="text-center"><?php echo $number; ?></h1>
            </div>
           <?php } ?>
        </div>
        <?php } ?>
                <h2 id='ct' class="text-center">you have clicked</h2>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script>
    function clicked(value){


        $('#ct').html("You clicked a number " + value);
        $('#number'+value).removeClass('number-left');
        $('#number'+value).removeClass('number-center');
        $('#number'+value).removeClass('number-right');
        $('#number'+value).addClass('number-clicked');

    }
    
    
    
    </script>
</body>
</html>