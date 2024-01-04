<?php

SESSION_START();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css">
    <title>dashboard</title>
</head>
<body>
    <div class="all">
        <div class="testing">
            <div class="head">
                <div class="logo"><img src="image/logo-dark.png" alt="logo-dark"></div>
                <h1>we are here to take you higher</h1>
                <p>come to think of whatever can take you to your destination</p>
                <div class="profile">
   
                    <?php

                    if(isset($_SESSION ['username'])) {

                        echo $_SESSION ['photo'];
                        echo $_SESSION['username'] ;

                    }

                    ?>
                        <img src="<?php echo $_SESSION ['photo'] ; ?>" alt="">    
                        
                </div>
                
            </div>
            <div class="sectionA">
                <marquee behavior="" direction=""><h1>always remember that your decision and your action today either take you to your goal.... </h1></marquee>
                <p>it also affect the progress of others</p>
            </div>
             
        </div>
    </div> 
    <div class="side">
        <div class="toggle"><i class="fa fa-bars"></i><span>Menu</span></div>
        <div class="wrap"> 
                <ul>
                <li><a href="#">feeds</a></li>
                <li><a href="#">market place</a></li>
                <li><a href="#">notifications</a></li>
                <li><a href="#">pages</a></li>
                <li><a href="#">internships</a></li>
                <li><a href="#">trainings</a></li>
                <li><a href="#">support</a></li>
            </ul>
        </div>
    </div>

    <!-- what we offer -->

    <?php

    include "component/service.php";

    ?>
 

        <div class="sectionB">
            <h3>choose a category; <em>this is to enable us us serve you better</em></h3>
            <select name="what you do?" id="">
                <option value="">student</option>
                <option value="">business</option>
                <option value="">civil servant</option>
                <option value="">self-employed</option>
                <option value="">others</option>    
            </select>
            
            <button type="submit">submit</button>
        </div>
    <div class="log">
        <p><a href="logout.php">logout</a></p>
    </div>  

    <script src="js/jquery.js"></script>                
    <script>
        $(document).ready(function(){

            $('.toggle').click(function(){

                $('.wrap').toggleClass('appear');
            })
        })

    </script>  



</body>
</html>