<div>
    <h1>profile page</h1>
     @if(session('user'))
     <h2>Welcome {{session('user')}}</h2>
     @else
     <h2>Please login <a href="login">Login</a></h2>
     @endif
</div>
<a href="logout">Logout</a>
