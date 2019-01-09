<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Product</title>
    <title>Insert Brand</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
<?php
require_once "db_connection.php";
if(isset($_GET['insert_pro'])){
    require "db_connection.php";
    if(!isset($_GET['insert_pro'])){
        //getting text data from the fields
        $brand_title = $_GET['brand_title'];
        //getting image from the field
        $insert_brand = "insert into brand (brand_title) 
        $insert_brand = "insert into brands (B_title)
                  VALUES ('$brand_title');";
        $insert_pro = mysqli_query($con, $insert_brand);
    }
    ?>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-noned-sm-inline"> Add New </span> Brand </h1>
    <form action="insert_product.php"  enctype="multipart/form-data">
    <form action="insert_brands.php"  method="get" ">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 ">
                <label for="pro_brand" class="float-md-right"> <span class="d-sm-none d-md-inline"> brand </span> Title:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_brand" name="pro_brand" placeholder="Enter Brand Title" >
                    <input type="text" class="form-control" id="brand_title" name="brand_title" placeholder="Enter Brand Title" >
                </div>
            </div>
            <div class="row my-3">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <button type="submit" class="btn btn-primary btn-block" name="pro_insert"><i class="fas fa-plus"></i> Insert Now </button>
                </div>
            </div>
    </form>
</div>
</body>
</html>
