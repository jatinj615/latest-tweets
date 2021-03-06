<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popolar Tweets</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-6">
        <h1 class="text-center">Latest Tweets</h1>
        
            <div class="col-lg-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." id="token" name="search_query">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit" name="submit" id="search">Search</button>
                    </span>
                </div>
            </div>
        <?php   
        // if(isset($_POST['stat'])){
            for($i=0;$i<10;$i++){
            ?>
            <br>
            <div id="card<?php echo $i?>">
            <img src="" alt="" id = "url<?php echo $i?>" class="card-img-top float-right">
            <div id="card-body<?php echo $i?>">
                <p id="tweet<?php echo $i?>" class="float-left"></p>
                <a class="btn float-right" id="button<?php echo $i?>" onclick="saveDatabase(<?php echo $i?>)"></a>
        </div>
        </div>
        <?php
            }
        // }
        ?>
        <br>
<nav aria-label="Page navigation example">
<ul id="pagination-demo" class="pagination-sm justify-content-center"></ul>
</nav>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 
<script src="ajax.js">
</script>
<script src="pagination.js">
</script>
<script src='database_save.js'>    
</script>
</body>
</html>