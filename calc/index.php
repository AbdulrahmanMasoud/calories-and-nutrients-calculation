<!DICTYPE html>
<html>
<head>
    <title>Calc Calories & Nutrients</title>
    <link rel="icon" href="img/icon.png"/>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    


</head>
<body>
<section class="site">
<div class="container">
<div class="row">
    <section class="content col-md-12">
    <h3 class="ml-4">Calc Calories & Nutrients</h3>
    <form class="col-md-4  float-left ml-4" action="index.php" method="post">


    <div class="form-group">
            <label for="inputAddress">Age</label>
            <input type="number" name="y" class="form-control" placeholder="Enter Your Age .y">
    </div>

        <div class="form-group col-xs-9">
            <label for="inputAddress">Weight</label>
            <input type="number" name="kg" class="form-control" placeholder="Enter Your Wight .kg">
        </div>

        

        <div class="form-group">
            <label for="inputAddress2">Height</label>
            <input type="number" name="cm" class="form-control" placeholder="Enter Your heaghte .cm">
        </div>

        <div class="form-group">
            <label for="inputState">Choose gender</label>
            <select class="form-control" name="gendr">
                <option selected>Choose gender...</option>
                <option value="male">Male</option>
                <option value="femal">Femal</option>

            </select>
        </div>


        <div class="form-group">
            <label for="inputState">Activity Factor</label>
            <select class="form-control" name="sheda">
                
                <option value="1.2">No Activity</option>
                <option value="1.3">2:3 Days a week</option>
                <option value="1.5">4:5 Days a week</option>
                <option value="1.7">6:7 Days a week</option>
                <option value="1.9">Evrey Days a week</option>

            </select>
        </div>


        <input type="submit" name="submit" class="btn btn-primary" value="Calc">
    </form>
<!------------- Data ------------>
<section class="data float-right col-md-7 col-xs-10">


<ul class="list-group mx-4 mt-4">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Calories is : 
    <?php
if(isset($_POST['submit'])){
$kg = $_POST['kg'];
$y = $_POST['y'];
$cm = $_POST['cm'];
$sheda = $_POST['sheda'];

if($_POST['gendr']=='male'){
    $kgcal = 10 * $kg;
    $cmcal = 6.25 * $cm;
    $ycal = 5*$y;

    $kg_cm_cal= $kgcal + $cmcal;
    $y_5_cal = 5 + $ycal;
    $all = $kg_cm_cal - $y_5_cal;
    $allcal = $all * $sheda;
    echo '<span class="badge badge-primary badge-pill">'.$allcal.'</span>';
    
  }elseif($_POST['gendr']=='femal'){
    $kgcal = 10 * $kg;
    $cmcal = 6.25 * $cm;
    $ycal = 5*$y;

    $kg_cm_cal= $kgcal + $cmcal;
    $y_5_cal = 161 + $ycal;
    $all = $kg_cm_cal - $y_5_cal;
    $allcal = $all * $sheda;
    echo '<span class="badge badge-primary badge-pill">'.$allcal.'</span>';
  }
}


?>

  </li>
  <div class="row ml-0 mt-4">

  <?php
  
    if(isset($_POST['submit']) && $kg && $cm && $y && $sheda){
      /* Calc Protin */
        $protein = $allcal * 15;
        $protein_cal = $protein / 100;
        $protein_cal_all = $protein_cal / 4;
        echo '<div class="alert alert-primary col-md-10 " role="alert">Daily requirement of Protein : <span class="badge badge-primary float-right">'.ceil($protein_cal_all).'</span></div>';

      /* Calc Carp */
        $carp = $allcal * 55;
        $carp_cal = $carp / 100;
        $carp_cal_all = $carp_cal / 4;
        echo '<div class="alert alert-primary col-md-10" role="alert">Daily requirement of Carp : <span class="badge badge-primary float-right">'.ceil($carp_cal_all).'</span></div>';

      /* calc Fats */
      $fat = $allcal * 30;
      $fat_cal = $fat / 100;
      $fat_cal_all = $fat_cal / 9;
      echo '<div class="alert alert-primary col-md-10" role="alert">Daily requirement of Fat : <span class="badge badge-primary float-right">'.ceil($fat_cal_all).'</span></div>';
  }else {
    echo '<div class="alert alert-danger col-md-10" role="alert">Pleas Enter All Data... </div>';
  }

?>

</div>
    </section>
    </section>
</div> 
</div>

</section>

<footer class="text-center">&copy; Abdulrahman Masoud</footer>

















<!--------------------------------------------------------------------------------------- -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>