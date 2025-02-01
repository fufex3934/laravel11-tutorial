<div>
   <h1>Form One Here</h1>
   <form action="addUser" method="post">
    @csrf
    <div>
        <h4>User Skills</h4>
        <input type="checkbox" name="skill" id="php" value="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill" id="java" value="java">
        <label for="java">JAVA</label>
        <input type="checkbox" name="skill" id="python" value="python">
        <label for="python">PYTHON</label>
    </div>
    <div>
        <h4>User Gender</h4>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
        <input type="radio" name="gender" id="other" value="other">
        <label for="other">Other</label>
    </div>
    <div>
        <h4>User Age</h4>
        <input type="range" name="age" id="age" max="100" min="18">
    </div>
    <div>
        <h4>User City</h4>
        <select name="city" id="">
           <option value="Finfinnee">Finfinnee</option>
           <option value="Shambu">Shambu</option>
           <option value="Nekemte">Nekemte</option>
        </select>
    </div>
    <div>
        <button type="submit">Add New user</button>
    </div>
   </form>
</div>
