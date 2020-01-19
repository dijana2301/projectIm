<?php
include 'class/calculator.class.php';

?>
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
    <link rel="stylesheet" href="css/style.css">
    


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
                    <h1 class="text-dark text-center"><br>Multiply</h1>

                   

<table> 
    <thead>
        <tr>
        <?php

        for ($i=1; $i<=10; $i++){ 
            echo "<th>".$i."</th>";} 
        ?>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php

        for($i=1; $i<=10; $i++){
            for($j=1; $j<=10; $j++){
                if($j==1){
                echo "<tr>";
            }
        $total = new Calculator($i,$j);
        $res=$total->multiply();

        echo "<td>
        <form action='calculator.php' method='POST'>
        <input type='hidden' name= factor1 value=".$i.">
        <input type='hidden' name= operation value='*'>
        <input type='hidden' name= factor2 value=".$j.">
        <input type='hidden' name= result value=".$res.">
        <button type='submit' onclick='popUp($res)' name='submit' class='myButton'>".$i."x".$j."</button>
        </form>
        </td>";
    }
    }

        ?>
        </tr>
    </tbody>
</table>
<br>           
                </div>

            </div>
        </div>
    </div>
    <article>
        <footer class="text-center text-dark pt-2 font-italic">
            <b>Created by <a href="https://github.com/dijana2301" target="_blank"> &copyDijana Kovačević  </b><a id="time"></a>
           
            <script>
                    var d = new Date();
                    document.getElementById("time").innerHTML =d.toLocaleTimeString();
        


                    function popUp(a) {
                    alert("Rezultat je: "+ a);
                    }
            </script>
        </footer>
    </article>
</body>

</html>