<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Product Detail</h1>
    </div>
</div>
<?php
    include("connect.php");
?>
<?php
    if(isset($_GET['pid'])){
        $pid = $_GET['pid'];
    }
    else{
        header("location:index.php");
    }
    $sql = "SELECT * FROM product WHERE id=$pid";
    $result = $conn->query($sql);
    if(!$result){
        echo "Error ".$conn->error;
    }
    else{
        if($result->num_rows>0){
            $prd = $result->fetch_object();
        }
        else{
            $prd = NULL;
        }
    }
?>
    <h3 class="text-center" style="margin-bottom:20px;margin-top:0px"><?php echo $prd->name;?></h3>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="thumbnail">
                <img src="image/<?php echo $prd->picture;?>" alt="">
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <p>Description: <?php echo $prd->description;?></p>
            <p>Price: <?php echo $prd->price;?> Bath</p>
            <p>Stock: <?php echo $prd->unitInStock;?></p>
            <p>
                <a href="" class="btn btn-primary">Buy now!</a>
                <a href="" class="btn btn-info">Add to basket</a>
            </p>
        </div>
    </div>
