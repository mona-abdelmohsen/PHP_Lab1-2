<form method=post action="done.php">
    <label>First Name : </label>
    <input type=text name=fname>
    <br>
    <br>

    <label>Last Name : </label>
    <input type=text name=lname>
    <br>
    <br>

    <label>Address : </label>
    <textarea name='address'></textarea>
    <br>
    <br>

    <label>Country : </label>
    <select name='country'>
        <option selected>Select Country</option>
        <option>Egypt</option>
        <option>China</option>
    </select>
    <br>
    <br>

    <label>Gender : </label>
    <label>Male</label>
    <input type="radio" value="Male" name="gender">
    <label>Female</label>
    <input type="radio" value="Female" name="gender">
    <br>
    <br>

    <label>Skills : </label>
    <label>PHP</label>
    <input type="checkbox" name="skills[]" value="PHP">
    <label>J2SE</label>
    <input type="checkbox" name="skills[]" value="J2SE">
    <label>MySQL</label>
    <input type="checkbox" name="skills[]" value="MySQL">
    <label>PostgreeSQL</label>
    <input type="checkbox" name="skills[]" value="PostgreeSQL">
    <br>
    <br>

    <label>Username : </label>
    <input type=text name=username>
    <br>
    <br>
    
    <label>Password : </label>
    <input type=password name=password >
    <br>
    <br>

    <label>Department : </label>
    <input type="text" name="department" placeholder="OpenSource" disabled>
    <input type="hidden" name="department" value="OpenSource">
    <br>
    <br>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>
