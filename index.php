<?php

    // for first 50 units u will spend  0.48  
    // first calc = 24 
    // function calculateUnits(){

    // }
    if($_POST){
        $num = $_POST['number_one'];
        if($num <= 50){
            $out = $num * 0.48 ;   // اول خمسين كيلوا بيتحسبوا 48 قرش ف اول شريحه 
            $result = $out;
            $msg = 'انت الان تحاسب على سعر الشريحة الاولى ' ;
            $msg2 = 'انت الان تحاسب على 48 قرش للكيلوا الواحد ' ;

        }elseif($num >= 51 && $num <= 100 ) {
            $new1 = $num - 50 ;         
            $f    = $new1 * 0.58 ;
            $result = $f + 24;              // هنا اول خمسين عاملين 24 جنيه والباقي بيحسبه عالسعر الجديد  58 

            /////////////////////////////////////////////
        }elseif($num >= 101 && $num <= 200 ){
            $out = $num * 0.77 ;   // 
            $result = $out;
        }elseif($num >= 201 && $num <= 350 ){
            // first 200K 154.P
            $new1 = $num - 200 ;
            $f = ($new1 * 106) / 100 ;
            $out = $f + 154 ;
        }elseif($num >= 351 && $num <= 650){
            // first 350k == 313.p 
            $new1 = $num - 350 ;
            $f = ($new1 * 128) / 100 ;
            $out = $f + 313 ;
        ////////////////////////////////////////
        }elseif($num >= 651 && $num <= 1000 ){
            $new1 = ($num * 128 ) / 100 ;
            $out  = $new1;
        }elseif($num > 1000){
            $new1 = ($num * 145 ) / 100 ;
            $out  = $new1;
        }
        
    }
?>



<!doctype html>
<html lang="en">

<head>
    <title>calculator Units</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .result {
        margin-top: 50px;
        margin-bottom: 50px;
        text-align: center;
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
        padding: 20px;
    }

    .title {
        background-color: #666;
        margin-top: 50px;
        margin-bottom: 50px;
        text-align: center;
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
        padding: 15px;
        color: seashell;
    }

    a {
        text-decoration: none;
        color: white;
        margin: 10px;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
        line-height: 2;
    }

    a:hover {
        background-color: ivory;
        text-decoration: none;
        border-radius: 5px;
    }
    </style>
</head>

<body>

    <div class='title'>
        <a href="/task1/calculater.php">calculator </a>
        <a href="/task1/unitsCalc.php">unitsCalc </a>
        <a href="/task1/specific_root.php">specific </a>
        <a href="/task1/oddoreven.php">OD or EV </a>
        <a href="/task1/negorpos.php">NIG or PO </a>
        <a href="/task1/gitgrade.php">git marks </a>
        <a href="/task1/calculateMax.php">git max number </a>
    </div>

    <div class="container">

        <div class='title'>
            <h1> calculator U spend for electricity </h1>
        </div>
        <div class="row mt-5">
            <div class="col-6 offset-3 ">
                <form method="post" action="">
                    <div class="form-group ">
                        <label for="Number_One">Units </label>
                        <input name='number_one' type="number" class="form-control" id="Number_One"
                            aria-describedby="emailHelp">

                    </div>

                    <button name="submit" type="submit" class="btn btn-primary rounded form-control">calculator</button>
                </form>
            </div>
        </div>

        <?php if(isset($out)){ echo "<div class='result alert alert-success'> Unit price is   $out  </div>"; } ?>
        <?php if(isset($msg)){ echo "<div class='result alert alert-success'> $msg </div>"; } ?>
        <?php if(isset($msg2)){ echo "<div class='result alert alert-success'> $msg2 </div>"; } ?>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>