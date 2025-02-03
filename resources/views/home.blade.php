<div>
 <h1>Home</h1>
 <h3>{{URL::current()}}</h3>
 <h3>{{URL::full()}}</h3>
</div>
<a href="{{URL::to('about')}}">About Page</a>
<a href="{{URL::to('about',['fufa'])}}">About Page</a>
