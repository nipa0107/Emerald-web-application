<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateNoodles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<h1><center>แบบฟอร์มแก้ไปชื่ออาหาร<center></h1>
<div class="container mt-4">
<p>เลือกข้อมูลที่ต้องการแก้ไขรายชื่อสินค้าอาหารและราคา</p>
    <form action="/noodles/update" method="POST">
        @csrf
        <div class="row">
            <div class="col"> 
                <input type="text" name="noodlesid" value="{{$E}}" class="id"readonly >
            </div> 
            <div class="col">
                <input type="text" class="form-control" name="noodlesname" value="{{$name}}" >
            </div>
            <div class="col">
            <input type="number" class="form-select" name="noodlesprice" value="{{$price}}">            
            </div> 
            <button type="submit" class="btn btn-primary" >แก้ไขข้อมูล</button>  
        </div>      
    </form>
</div>
    
</body>
</html>