<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>

    

    </style>
</head>

<body>
 <?php 
    include 'partials/dbconnect.php';
    include 'partials/headers.php';
    ?>

<?php

$query = $_GET['search'];
$sql = "select * from threads where match(thread_title, thread_description) against ('$query')";
$result = mysqli_query($conn,$sql);
$noresult = true;

while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['thread_title'];
    $desc = $row['thread_description'];
    $thread_id = $row['thread_id'];
    $noresult = false;
    $url = "/onlineforumproject/questionclick.php?threadid=".$thread_id;

    echo '  <div class="container my-3" id="maincontainer">
    <h1>Search result for <em>"'.$_GET["search"].'"</em></h1>
    <div class="result py-3">
     <h3 class="text-dark"><a href = "'.$url.'" class="text-dark">'.$title.'</a></h3>    
     <p class="py-3">'.$desc.'</p>
    </div>
    </div>';
}

if ($noresult) {

        echo '
        <div class="container my-4">
        <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <p class="display-4">No Questions Found</p>
        <p class="lead"> Be the first person to comment</p>
    </div>
 </div>
 </div> ';
}
   
?>

 





    <?php include 'partials/footers.php';?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
