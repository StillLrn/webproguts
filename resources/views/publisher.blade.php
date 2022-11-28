<?php
     $connect = mysqli_connect("localhost", "root", "", "uts_websem5");
     if(mysqli_connect_errno())
     {
         throw new exception("MySQL failed to connect").mysqli_connect_error();
     }
    $all_book = $connect->query("SELECT * FROM publishers");
?>
@extends('template')
@section('title', 'Home Page') 
@section('content')

<br><br>
    <body>
        <h3>Publisher List</h3>
        <br>
        <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 100px; padding-top: 0;">
            <?php
                while($row = mysqli_fetch_assoc($all_book)){
            ?>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $row['publisher_image']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><b><?php echo $row['publisher_name']?></b></h5>
                    <h6 class="byauthor"><?php echo $row['address']?></h6>
                    <br>
                    <a href="/detailpublisher/{{$row['publisher_id']}}" class="linkDetail">Detail</a>
                    </div>
                </div>
                <br>
            </div>
            <?php
                }
            ?>
        </div>      
    </body>
@endsection

<style>
    .card img{
        height: 450px;
        width: 300px;
    }
    h3{
        text-align: center;
        width: 100%;
        height: 42px;
        background-color: gray;
        color: white;
    }
    .row{
        align-content: center;
    }
    .card-body{
        height: 190px;
    }
    .linkDetail{
        text-decoration: none;
        color: white;
        background-color: rgb(61, 61, 255);
        border-radius: 20px;
        padding: 5px;
        padding-left: 10px;
        padding-right: 10px;
    }
    .byauthor{
        margin-top: 8px;
    }
</style>