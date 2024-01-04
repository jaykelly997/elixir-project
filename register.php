<?php

SESSION_START();

include "data.php";

$message = "";


$surname = "" ;
$firstname = "" ;
$othername = "" ;
$username = ""; 
$birth = "" ;
$telephone = "" ;
$address = "" ;
$certification = "" ;
$status = "" ; 
$hobby = "" ;  

?>

<?php
if (isset($_POST['submit'])) {

    $surname = mysqli_real_escape_string($me, $_POST ['surname']) ;
    $firstname = mysqli_real_escape_string($me, $_POST['firstname']) ;
    $othername = mysqli_real_escape_string($me, $_POST['othername']) ;
    $username = mysqli_real_escape_string($me, $_POST['username']) ;
    $password = mysqli_real_escape_string($me, $_POST['password']) ;
    $confirmpassword = mysqli_real_escape_string($me, $_POST['confirmpassword']) ;
    $gender = mysqli_real_escape_string($me, $_POST['gender']) ; 
    $birth = mysqli_real_escape_string($me, $_POST['birth']) ;
    $telephone = mysqli_real_escape_string($me, $_POST['telephone']) ;
    $address = mysqli_real_escape_string($me, $_POST['address']) ;
    $certification = mysqli_real_escape_string($me, $_POST['certification']) ;
    $status = mysqli_real_escape_string($me, $_POST['status']) ; 
    $hobby = mysqli_real_escape_string($me, $_POST['hobby']) ;
    $photo = mysqli_real_escape_string($me, $_POST['photo']) ; 


    if(empty ($surname) && empty($firstname) && empty($othername) && empty($username) && empty($password) && empty($confirmpassword) && empty($telephone) && empty($address) && empty($certification) && empty($status) && empty ($hobby)){
     
        $message = "all field required";
     
    }elseif (empty ($surname)) {

        $message= "surname required";
    
    }elseif (empty ($firstname)) {

        $message= "firstname required";
        
    }elseif (empty ($username)) {

        $message= "choose a username";
        
    }elseif (empty ($password)) {

        $message= "password required";
        
    }elseif (empty ($confirmpassword)) {

        $message= "confirm your password";
        
    }if ($password != $confirmpassword){

        $message="password does not match";
 
    }elseif (empty ($telephone)) {

        $message= "input your telephone no";
        
    }elseif (empty ($address)) {

        $message= "address required";
        
    }elseif (empty ($certification)) {

        $message= "state your academic qualification";
        
    }elseif (empty ($status)) {

        $message= "status required";
        
    }elseif (empty ($hobby)) {

        $message= "hobby- what do you love doing";
         
    }else {$input = "SELECT* FROM elixir WHERE username = '$username' ";
        $input1 = mysqli_query ($me, $input);
        $input2 = mysqli_real_escape_string ($input1);
        
        if ($input2) {

            $message = "username already exist";
        }

    else{ $report = "INSERT INTO elixir (surname, firstname, othername, username, password, confirmpassword, birth, telephone, address, certification, status, hobby) VALUES ('$surname', '$firstname', '$othername', '$username', '$password', '$confirmpassword', '$birth', '$telephone', '$address', '$certification', '$status', '$hobby' '$photo')";
    if($data= mysqli_query($me, $report)) {
      
        $_SESSION = $data['username'];
        header('location:login.php');

    }else {

    $message = "registration fail";

    }        

    }
    
} 

}
?>


<!-- top section -->
<?php

include "component/top.php";

?>
    

    <div class="register">
        <div class="contain">
            <div class="head">
            <div class="logo"><a href="index.php"><img src="image/logo-dark.png" alt="logo-dark"></a></div>
                <h1>welcome to elixir</h1>
                <p>we take your higher</p>
                <div class="errormessage"> <h3> <?php   if(!empty ($message)) {echo "$message" ; }     ?>  </h3></div>
            </div>
            <div class="mode">
                <h2><a href="register.php">sign up</a></h2>
                <h2><a href="login.php">log in</a></h2>
            </div>
            <form action="" method="post">
                <div class="surname">
                    <label for="name">surname</label>
                    <input type="text" name="surname" id="" value="<?php echo $surname ;     ?>" placeholder="enter your surname">
                </div>
                <div class="firstname">
                    <label for="name">firstname</label>
                    <input type="text" name="firstname" id="" value="<?php   echo $firstname ; ?>" placeholder="enter your first-name">
                </div>
                <div class="lastname">
                    <label for="name">othername</label>
                    <input type="text" name="othername" id="" value="<?php  echo $othername ; ?>" placeholder="enter your othername"> 
                </div>
                <div class="username">
                    <label for="name">username</label>
                    <input type="text" name="username" id="" value="<?php   echo $username ; ?>" placeholder="choose a username">
                </div>
                <div class="password">
                    <label for="name">password</label>
                    <input type="password" name="password" id="" value="" placeholder="not less than 8-characters">
                </div>
                <div class="confirmpassword">
                    <label for="name">confirmpassword</label>
                    <input type="password" name="confirmpassword" id="" value="" placeholder="re-input your password">
                </div>    
                <div class="gender">
                    <label for="name">gender</label>
                    <select name="gender" id="">
                        <option >select... </option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
                <div class="birth">
                    <label for="date of birth" name="birth">date of birth</label>
                    <input type="date" name="birth" id="">
                </div>
                <div class="tel">
                    <label for="name">telephone</label>
                    <input type="tel" name="telephone" id="" value="<?php   echo $telephone ; ?>" placeholder="enter your phone no">
                </div>
                <div class="address">
                    <label for="name">address</label>
                    <input type="text" name="address" id="" value="<?php   echo $address ; ?>" placeholder="enter your address">
                </div>
                <div class="certificate">
                    <label for="name">certification</label>
                    <input type="text" name="certification" id="" value="<?php   echo $certification ; ?>" placeholder="enter your qualifications">
                </div>
                <div class="status">
                    <label for="name">marital status</label>
                    <input type="text" name="status" id="" value="<?php   echo $status ; ?>" placeholder="enter your marital status">
                </div>    
                <div class="hobby">
                    <label for="name">hobby</label>
                    <input type="text" name="hobby" id="" value="<?php   echo $hobby ; ?>" placeholder="favourite activties">
                </div>
                <div class="photo">
                <label for="name">attach your photo</label>
                <input type="file" name="photo" id="">
                </div>
                <button type="submit" name="submit">submit</button>
                <button type="reset">reset</button>
            </form>
        </div>
    </div>





<?php
include "component/footer.php";

?>