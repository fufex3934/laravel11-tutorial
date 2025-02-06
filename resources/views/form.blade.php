<div>
    <h1>User Login</h1>
    
    <form action="login" method="post">
        @csrf
     <input type="text" name="user" placeholder="enter name">
     <br><br>
     <input type="password" name="password" placeholder="enter password">
     <br><br>
     <input type="submit" value="Login">
    </form>
 </div>
 