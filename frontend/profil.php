<?php

include "../backend/profilbk.php";?>
<?php
$profiletype_temp = isset($_SESSION['profiletype_temp']) ? $_SESSION['profiletype_temp'] : 0;




if (isset($_POST['toggle_profile_type'])) {
    $profiletype_temp = $profiletype_temp ? 0 : 1;
    $_SESSION['profiletype_temp'] = $profiletype_temp;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <link rel="icon" href="/logos/logo192.jpg">
    <link rel="stylesheet" href="/css/profil.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="manifest" href="/manifest.json">
</head>
<body>
    <main>
        <div class="center">
            <div class="profile-card">
            <div class="toggle-container">
                <label class="switch">
                <?php
                
                if($worker == 1 && $buyer == 1) 
                {
                                      
?> <form method='post'>
    <button type='submit' class="" name='toggle_profile_type'><p>Switch profile type to</p> <?php 
                    if(!$profiletype_temp)   echo "worker";
                    else echo "buyer";
                  }
                else
                  if($worker == 1 && $buyer == 0)
                 {
                    echo "worker";
                 }
                    else
                    {
                         echo "buyer"; 
                    }
                         
                    ?></button>
</form>
                
               


</label>
            </div>
            <div class="image">
            <?php if($image==NULL): ?>
            <img src='/img/user.png' class='profile-img'>
            <?php else: ?>
            <img src="data:image/jpeg;base64,<?=base64_encode($image)?>" alt="profile picture of <?=$name?>" class="profile-img">
            <?php endif; ?>
        </div>
            <div class="text-data">
            <!-- Aici vine php cu echo si script pentru email -->
                <span class="name"><?php echo $name?></span>
                <span class="jobs"><?php echo $skills?></span>
                <div class="accout-settings">
                    <div class="flex-button">
                        <a href="profiledit.php" class="edit">Edit Profile</a>
                        <ion-icon name="create-outline" class="icon"></ion-icon>
                    </div>
                    <div class="flex-button">
                        <a href="/backend/logoutbk.php" class="logout">Logout</a>
                        <ion-icon name="log-out-outline" class="icon"></ion-icon>
                    </div>
                </div>
                
                


                   

                
                <div class="credits credits-box">
                    <a href="#" class="credits">Credits: <?php echo $credit; ?> RON</a>
                    <ion-icon name="add-circle-outline"></ion-icon>
                </div>
            </div>
        </div>
        </div>

    
        <div class="btn-container">
        <a href="post.php" class="btn-post">
    <?php     

                    if($worker == 1 && $buyer == 1) 
                    {
                        if(!$profiletype_temp)   echo "post a job";
                        else echo "get a job";

                    }
else{
    if($worker == 1 && $buyer == 0) {
            echo "Get a job";
    }
    else{
        echo "Post a job";
     }
    }?>
     
    </a>
    </div>    
    </main>
    <!-- Navbar Down -->
    <footer>  
    <section class="nav-bar">
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Acasă</span>
                    </a>
                </li>
                <li class="list active">
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="text">Profil</span>
                    </a>
                </li>
                <li class="list">
                    <a href="/frontend/post.php">
                        <span class="icon">
                            <ion-icon name="add-circle-outline"></ion-icon>
                        </span>
                        <span class="text">Postează</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="albums-outline"></ion-icon>
                        </span>
                        <span class="text">Istoric</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="build-outline"></ion-icon>
                        </span>
                        <span class="text">My work</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
    </section>
    </footer>
    <script src="/js/toggleinput.js"></script>
    <script src="/js/nav.js"></script>
  <!-- Ion icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
