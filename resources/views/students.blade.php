<div>
   <h1>Student list</h1>
   @foreach ($students as $student)
   <ul>
    <li>{{$student->name}}</li>
    <li>{{$student->email}}</li>
    <li>{{$student->batch}}</li>
   </ul>
       
   @endforeach
</div>
