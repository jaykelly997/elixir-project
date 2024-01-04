<!-- top section -->
<?php

include "component/top.php";

?>

    
    <div class="register">
        <div class="contain">
            <div class="head">
                <div class="logo"><a href="index.php"><img src="image/logo-dark.png" alt="logo-dark"></a></div>
                <p>always there to help you</p>
            </div>
            <div class="mode">
                <h2><a href="login.php">log in</a></h2>
                <h2><a href="register.php">sign up</a></h2>
            </div>
            <form action="" method="post">
                <label for="">recovery email</label>
                <input type="email" name="email" id="" placeholder="enter email">
                <label for="tel">confirm sign up phone</label>
                <input type="tel" name="tel" id="" placeholder="phone no">
                <button type="submit">submit</button>
            </form>
        </div>
    </div>

<?php
include "component/footer.php";

?>