<div>
    <!-- Display validation errors -->
    {{-- @if($errors->any())
        <div style="color: red; font-weight: bold;">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif --}}

    <h1 style="color: #333;">Add New User Here</h1>
    <form action="addUser" method="post">
        @csrf

        <div class="input-form">
            <input type="text" placeholder="Enter username" name="username" value="{{ old('username') }}">
            <span style="color:red;">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-form">
            <input type="text" placeholder="Enter city" name="city" value="{{ old('city') }}">
            <span style="color:red;">@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input-form">
            <input type="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
            <span style="color:red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div>
            <span style="color:red;">@error('skill'){{$message}}@enderror</span>
            <h4 style="color: #333;">User Skills</h4>
            <input type="checkbox" name="skill[]" id="php" value="php">
            
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="java">
            <label for="java">JAVA</label>
            <input type="checkbox" name="skill[]" id="python" value="python">
            <label for="python">PYTHON</label>
            
        </div>
        <div class="input-form">
            <button type="submit">Add New User</button>
        </div>
    </form>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }

    div {
        max-width: 500px;
        margin: auto;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    h1, h4 {
        text-align: center;
        color: #333;
    }

    .input-form {
        display: flex;
        flex-direction: column;
        margin: 10px 0;
    }

    input {
        color: #333;
        border: 1px solid #ccc;
        height: 35px;
        padding: 0 10px;
        width: 100%;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 14px;
        outline: none;
        transition: border-color 0.3s ease;
    }

    input:focus {
        border-color: orange;
    }

    button {
        color: white;
        background-color: orange;
        border: none;
        height: 40px;
        width: 100%;
        border-radius: 5px;
        margin-top: 10px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #ff7f0e;
    }

    label {
        font-size: 14px;
        margin-right: 10px;
        color: #333;
    }
</style>
