<!DOCTYPE html>
<html>

<head>
    <title>Multiply</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
    integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="css/style.cal.css">
    


</head>

<body>
    <header class="text-center">
        <h1>Projektni zadatak</h1>
        <article>
            <p class="font-italic">Info Media Group</p>
        </article>
    </header>

    <div class="pozadina">
        <div class="container" style="margin-top:0px">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-dark text-center"><br></h1>

   <div class="box">          
<?php


include_once 'includes/config.php';


$factor1 = (int)$_POST['factor1'];
$factor2 = (int)$_POST['factor2'];
$operation =$_POST['operation'];
$result =(int)$_POST['result'];

$sql = "INSERT INTO `multiplication`(`factor1`, `factor2`, `operation`, `result`) VALUES ($factor1, $factor2, '$operation', $result);";
$res = mysqli_query($conn, $sql); 

if($res){
   header('Refresh:4; url= http://localhost:8080/projectIM/index.php?succes');
   echo '<p class=center>You have successfully inserted your result '.$result.' into database!<br>You will be automatically back on first page!<p>';
   exit();
} else {
    header('Refresh:4; url= http://localhost:8080/projectIM/index.php?error');
    echo '<p class=center>ERROR!<br>Try again!You will be automatically back on page!<p>';
    exit();
}

mysqli_close($conn);

?>

</div>

</div>

</div>
</div>
</div>

<article>
    <footer class="text-center text-dark pt-2 font-italic">
        <b>Created by <a href="https://github.com/dijana2301" target="_blank"> &copyDijana Kovačević  </b><a id="time"></a>

<script>
        var d = new Date();
        document.getElementById("time").innerHTML = d.toLocaleTimeString();;
</script>

    </footer>
</article>

</body>
</html>

