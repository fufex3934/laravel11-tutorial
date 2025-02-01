<div>
    <h1>Add New user Here</h1>
    <form action="addUser" method="post">
        @csrf
        
        <div class="input-form">
            <input type="text" placeholder="Enter username" name="username">
        </div>
        <div class="input-form">
            <input type="text" placeholder="Enter city" name="city">
        </div>
        <div class="input-form">
            <input type="text" placeholder="Enter email" name="email">
        </div>
        <div class="input-form">
         <button type="submit" >Add New User</button>
        </div>
    </form>
</div>

<style>
    input{
        color: orange;
        border: 1px solid orange;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin :10px;
    }
    
        button{
        color: orange;
        border: 1px solid orange;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin :10px;
        background-color:#fff;
        cursor: pointer;
    }
    
</style>