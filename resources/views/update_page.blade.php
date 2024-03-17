<!DOCTYPE html>
<html>
    <head>
        <meta character = "utf-8">
        <title>Home</title>
        
    </head>
<body>
    
   <!-- {{$student->name}}
    {{$student->email}}
    <img src="/student/{{$student->image}}"> -->
    <form action="{{url('update',$student->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div >
            <label>Student name</label>
            <input type="text" name="name" value="{{$student->name}}">
        </div>
        <div >
            <label>Student email</label>
            <input type="email" name="email" value="{{$student->email}}">            
        </div>
        <div >
            <label>Old Image</label>
            <img height="100" width="120" src="/student/{{$student->image}}">            
        </div>
        <div >
            <label>Change the image </label>
            <input type="file" name="file">            
        </div>
        <div>
            <input type="submit" value="Save">            
        </div>
    </form>
</body>
</html>