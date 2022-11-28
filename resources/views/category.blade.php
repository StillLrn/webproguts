
@extends('template')
@section('title', 'Detail') 
@section('content')
<br><br>
<body>
    <h3>Book By Genre</h3>
    <br>
    <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 100px; padding-top: 0;">
        <?php
            foreach ($row as $key => $val) {
        ?>
        <div class="col">
            <div class="card">
                <img src="<?php echo $val->book_image;?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><b><?php echo $val->title;?></b></h5>
                <h6>by</h6>
                <h6 class="byauthor"><?php echo $val->author;?></h6>
                <br>
                <a href="/bookdetail/{{$val->book_id}}" class="linkDetail">Detail</a>
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