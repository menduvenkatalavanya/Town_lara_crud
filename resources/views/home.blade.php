<!DOCTYPE html>
<html>
    <head>
        <meta character = "utf-8">
        <title>Home</title>
       
    </head>
    <body>
        <style>
            #table1{
                border-style:solid;
                margin-top:-21px;
            }
            #btnd{
                 
            }
        </style>
<form action="{{url('insert')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div align="center">
        <form>
            <div style="padding: 10px;">
             <label>Name</label>
             <input type="text" name="name">
            </div>
            <div style="padding: 10px;">
             <label>Email</label>
             <input type="email" required name="email">
            </div>
            <div style="padding-left: 110px;"  >
             <label>Image</label>
             <input type="file" name="file">
            </div>
            <div style="padding: 10px;">
             <input type="submit">
            </div>

        </form>

    </div>
    
    <div>
    <h2 style=" color:#3fd968;"><marquee align="center" direction="right" bgcolor="yellow">Display Data from Database</marquee></h2>
    <table  class="table table-sm" border="1" align="center" id="table1">
    <thead>
        <tr>
        <th scope="col">Student Name</th>
        <th scope="col">Email</th>
        <th scope="col">Image</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>
                <a href="http://127.0.0.1:8000/media/{{$student->image}}"target="_blank">
                <img  src="http://127.0.0.1:8000/student/{{$student->image}}" alt = "Image" height="100" width="100">
            </td>
            <td>
            <button type="button" class="btn btn-danger" id="btnd">
                <a href="{{url('delete',$student->id)}}" style="textdecoration:none;" >Delete</a>
            </button>
            </td>
            <div style="padding: 10px;">
    
                <td>
                    <button type="button" class="btn btn-warning"">        
                        <a href ="{{url('update_view',$student->id)}}" style="textdecoration:none;">Update</a>
                    </button>
                </td>     
            </div>
        </tr>
        @endforeach
    </tbody>
    </div>
    
</body>
</html>