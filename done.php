<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if required fields are filled
        if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['username'])) {
            echo "Please fill in all required fields.";
        }
        if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/", $_POST["password"]))
        {
            echo "Password must be 8+ characters with a mix of upper and lowercase letters and numbers.";
        }
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['skills']) )
        {
            $users=fopen('users.txt','a');
            $skills = implode('-', $_POST['skills']);
            if(is_resource($users))
            {
                fwrite($users,
                $_POST['fname'] .','. $_POST['lname'] . ','. $_POST['address'] . ','. $_POST['country'] . ','.
                $_POST['gender'] . ','. $skills . ','. $_POST['username'].','.$_POST['password']. ','. $_POST['department']."\n"  );
                fclose($users);
            }
            else
            {echo 'invalid filename';}
        }
}

?>

<p>Thanks <?php if($_POST['gender']=="Male") echo "Mr. " . $_POST['fname'].' ' . $_POST['lname']; 
else echo "Miss. " . $_POST['fname'].' ' . $_POST['lname']; ?>
</p>
<p>Please Review Your Information : </p>
<p>Name : <?php echo $_POST['fname'].' ' . $_POST['lname']; ?></p>
<p>Address : <?php echo $_POST['address']; ?></p>
<p>Your Skills : <?php $skills=$_POST['skills']; 
foreach($skills as $skill){
    echo $skill . '<br>';
}
// print_r($skills);
// echo $_POST['skills'];
?></p>
<p>Department : <?php echo $_POST['department']; ?></p>

