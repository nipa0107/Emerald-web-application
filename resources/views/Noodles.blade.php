<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noodles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
        <div class="container mt-3">
            <table class="table table-striped">
                <thead class="table-success">
                    <tr>
                        <th>NoodlesID</th>
                        <th>NoodlesName</th>
                        <th>Price</th>
                        <th>Del</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($noodles1 as $noodles)
                        <nav class="navbar navbar-expand-sm bg-light">
                            <tr>
                                <td>
                                    {{$noodles->id}}  
                                </td>
                                <td>
                                    {{$noodles -> noodlesName}}  
                                </td>
                                <td>
                                    {{$noodles -> price}}   
                                </td>
                                <td>
                                    <a  class="nav-link active" href="<?php echo "/delete/$noodles->id";?>">ลบข้อมูล</a><br>
                                </td>
                                <td>
                                    <a class="nav-link active" href="<?php echo "/update/$noodles->id";?>">แก้ไขข้อมูล</a><br>
                                </td>
                            </tr>
                        </nav>
                    @endforeach 
                </tbody>           
            </table>
        </div>

    <form action="/noodles/add" method="POST" >
        <div class="container col-md-8">
            @csrf
            <div class="row">
                <div class="col"> 
                    <input type="text" class="form-control" name="input" placeholder="ชื่อสินค้า">
                </div> 
                <div class="col">        
                    <input type="number" class="form-select" name="price" placeholder="ราคาสินค้า">
                </div>
                <button type="submit" class="btn btn-primary">เพิ่มกะเต๋ว
                </button>
            </div>
        </div>
    </form>
    <br><br><br>

     <nav class="navbar navbar-expand-sm bg-light">
            <a  class="nav-link active" href="<?php echo "/dashbord";?>">Dashboard</a><br>
    </nav>

    <div class="container col-md-8">
        
        <table class="table">
            <thead class="table-success">
                <tr>
                    <th>NoodlesName</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
            @foreach($noodles1 as $noodles)
            
                <tr>
                    <td>
                    {{$noodles -> noodlesName}}  
                    </td>
                    <td>
                    {{$noodles -> price}}   
                    </td>         
                </tr>
           
            @endforeach 
            </tbody>            
        </table>
    </div>
    
</body>
</html>