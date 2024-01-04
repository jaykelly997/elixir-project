<?php
SESSION_START();

include "data.php";

$message = "" ;

if (isset($_POST['login'])) {
    
    $username = mysqli_real_escape_string($me, $_POST ['username']);
    $password = mysqli_real_escape_string($me, $_POST ['password']);


$report = "SELECT* FROM elixir WHERE (username = '$username' AND password= '$password')" ;

$result= mysqli_query ($me, $report) ;

$new =mysqli_fetch_array($result) ;


if($new){

    $_SESSION ['photo'] = $photo ;
    $_SESSION ['username'] = $username ;
    
    header('location:dashboard.php') ;

}else{

    $message = "you do not have an account, kindly register" ;

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
                <p>taking you higher</p>
                <div class="errormessage"><h3> <?php   if(!empty ($message)) {echo "$message" ; }     ?>  </h3></div>
            </div>
            <marquee behavior="" direction=""><h1>come on board with us</h1></marquee>
            <div class="mode">
                <h2><a href="register.php">sign up</a></h2>
                <h2><a href="login.php">log in</a></h2>
            </div>
            <form action="" method="post">
                <div class="username">
                    <label for="username">username</label>
                    <input type="text" name="username" id="" placeholder="enter your username">
                </div>
                <div class="password">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" placeholder="enter your password">
                     <span onclick="jay()"><i class="fa fa-eye" id="show"></i><i class="fa fa-eye-slash" id="hide"></i></span>
                </div>
                <div class="me">
                    <input type="checkbox" class="men" name="checkbox" id="" value="remember password"> 
                </div>
                <div class="recover">
                    <p><a href="forgetpassword.php">recover password</a></p>
                </div>
                <button type="submit" name="login">log in</button>
            </form>
        </div>
    </div>

        
    <?php

    include "component/footer.php";

    ?>

    <script>
        function jay(){
            var a = document.getElementById("password");
            var b = document.getElementById("show");
            var c = document.getElementById("hide");
         
        if (a.type ==="password") {
            a.type ="text";
            b.style.display ="none";
            c.style.display ="block";
        }else {
            a.type= "password";
            b.style.display = "block";
            c.style.display = "none";
        }

        }        
    </script>


<!-- leadership -->
<div class="leaders">
    <div class="container">
        <h1>global leadership</h1>
        <div class="element"> 
            <div class="card"> 
                <div class="image">
                    <img src="image/portrait-3.jpg " alt="portrait-3">
                </div>
                <div class="txt">
                    <h3>Reenal Scott</h3>
                    <p>Advertising Consultant</p>
                    <span>Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</span>
                </div> 
            </div>
            <div class="card"> 
                <div class="image">
                    <img src="image/portrait-3.jpg " alt="portrait-3">
                </div>
                <div class="txt">
                    <h3>Reenal Scott</h3>
                    <p>Advertising Consultant</p>
                    <span>Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</span>
                </div> 
            </div>
            <div class="card"> 
                <div class="image">
                    <img src="image/portrait-3.jpg " alt="portrait-3">
                </div>
                <div class="txt">
                    <h3>Reenal Scott</h3>
                    <p>Advertising Consultant</p>
                    <span>Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</span>
                </div> 
            </div>
            <div class="card"> 
                <div class="image">
                    <img src="image/portrait-3.jpg " alt="portrait-3">
                </div>
                <div class="txt">
                    <h3>Reenal Scott</h3>
                    <p>Advertising Consultant</p>
                    <span>Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</span>
                </div> 
            </div>
            <div class="card"> 
                <div class="image">
                    <img src="image/portrait-3.jpg " alt="portrait-3">
                </div>
                <div class="txt">
                    <h3>Reenal Scott</h3>
                    <p>Advertising Consultant</p>
                    <span>Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</span>
                </div> 
            </div>
            <div class="card"> 
                <div class="image">
                    <img src="image/portrait-3.jpg " alt="portrait-3">
                </div>
                <div class="txt">
                    <h3>Reenal Scott</h3>
                    <p>Advertising Consultant</p>
                    <span>Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</span>
                </div> 
            </div>
           
        </div>
    </div>
</div>






<!-- leadership -->
<div class="leaders">
    <div class="container">
        <h1>global leadership</h1>
        <div class="element">
            <?php  

            $data= "SELECT * FROM elixir_offer ";
            $data1= mysqli_query($me, $data);
             
            ?>
            <div class="card">
                <?php  while ($data2 = mysqli_fetch_array($data1)) {    ?>
                <div class="image">
                    <img src="image/portrait-3.jpg " alt="portrait-3">
                </div>
                <div class="txt">
                    <h3><?php  echo $data2['name']  ?></h3>
                    <p><?php  echo $data2['info']  ?></p>
                    <span><?php  echo $data2['detail']  ?></span>
                </div>
                <?php  }  ?>
            </div>


        </div>
    </div>
</div>