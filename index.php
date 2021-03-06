<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    .com{
        display: block;
    }

    .phone{
        display: none;
    }

    @media screen and (max-width : 375px){
        .com{
            display: none;
        }

        .phone{
            display: block;
        }
    }
    
    </style>
    <title>Hello, world!</title>
   
</head>

<body>

   
   
   
            
    <?php 
    include 'partials/dbconnect.php';
    include 'partials/headers.php';
    ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/500x600/?coding,computer" class=" w-100 phone" alt="...">
                <img src="img/onlineforumimg3.jpg" class=" w-100 com" alt="...">
                <div class="carousel-caption ">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/500x600/?coding,programming" class=" w-100 phone" alt="...">
                <img src="img/onlineforumimg2.jpg" class=" w-100 com" alt="...">
                <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/500x600/?coding,gaming" class=" w-100 phone" alt="...">
                <img src="img/onlineforumimg.jpg" class=" w-100 com" alt="...">
                <div class="carousel-caption ">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    <div class="container">
        <div class="row">
           
           <?php
            
      
            $sql = "SELECT * FROM `category`";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['category_id'];
                 $desc = $row['category_description'];
                echo ' <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x400/?coding,'.$row['category_name'].'" class="card-img-top" alt="...">
                    <div class="card-body">
                    <a href="threads.php?cateid='.$id.'"><h5 class="card-title">'.$row['category_name'].'</h5> </a>
                        <p class="card-text">'.substr($desc,0,50).'...</p>
                        <a href="threads.php?cateid='.$id.'" class="btn btn-success">Read more</a>
                    </div>
                </div>
            </div>';
            }
            ?>
           
         
           

        </div>
    </div>





    <?php include 'partials/footers.php';?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
