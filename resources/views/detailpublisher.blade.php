@extends('template')
@section('title', 'Detail') 
@section('content')
<br><br>
<body>
    <h3>Publisher Detail</h3>
    <br>
    <div class="col">
        <div class="card" style="display: flex ;align-items: center; height: 100%">
            <img src="<?php echo $row->publisher_image?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><b><?php echo $row->publisher_name?></b></h5>
            <h6>by</h6>
            <h6 class="byauthor"><?php echo $row->address?></h6>
            <br>
            <h6 class="byauthor"><?php echo $row->phone?></h6>
            <h6 class="byauthor"><?php echo $row->email?></h6>
            </div>
        </div>
        <br>
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