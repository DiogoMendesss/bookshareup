<?php include_once('database/init.php'); ?>
<form class="register-form" action="action_register.php" method="post" enctype="multipart/form-data">
    <input type="text" name="up_number" id="up_number" placeholder="UP Number" required autofocus> <!-- Change name and placeholder to 'up_number' -->
    <input type="password" name="password" id="password" placeholder="Password" required> <!-- Change name and placeholder to 'password' -->
    <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>

    <br>

    <select name="campus" id="campus" required>
        <option value="" disabled selected>Select your main campus</option>
        <?php
        $campuses = getCampusesInfo();
        foreach ($campuses as $campus) {
            echo '<option value="' . $campus['name'] . '">' . $campus['name'] . '</option>';
        }
        ?>
    </select>

    <br>

    <p>Upload your profile image:</p>
    <input type="file" name="profile_pic" id="profile_pic">
    <input type="submit" value = Register>
</form>
<p> Already have an account? </p>
<form id="login-request" action="home_page.php" method="get">
        <input type="hidden" name="action" value="login">
        <input type="submit" value="Login">
</form>
<p id=register_error> 
    <?php if (isset($_SESSION['msg'])){
        echo ($_SESSION['msg']);
        //echo ("That user already exists. Try again.");
        $_SESSION['msg']=null;}
    ?>
</p>

