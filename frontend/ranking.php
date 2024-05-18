<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ranking</title>
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/ranking.css">
  <link rel="manifest" href="/manifest.json">
</head>
<body>
  <footer>  
    <section class="nav-bar">
        <div class="navigation">
            <ul>
                <li class="list active">
                    <a href="/frontend/home.php">
                        <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Acasă</span>
                    </a>
                </li>
                <li class="list">
                    <a href="/frontend/profil.php">
                        <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="text">Profil</span>
                    </a>
                </li>
                
                <?php
            $profiletype_temp = $_SESSION['profiletype_temp'];
            $worker = $_SESSION['worker'];
            $buyer = $_SESSION['buyer'];
            if($worker == 1 && $buyer == 1) 
            {
                if(!$profiletype_temp){
                    // for worker
                echo '<li class="list">';
                echo   '<a href="/backend/post.php">';
                echo       '<span class="icon">';
                echo            '<ion-icon name="add-circle-outline"></ion-icon>';
                echo       '</span>';
                echo        '<span class="text">Postează</span>';
                echo   '</a>';
                echo'</li>';

                echo '<li class="list">';
                echo   '<a href="/backend/history.php">';
                echo       '<span class="icon">';
                echo          '<ion-icon name="albums-outline"></ion-icon>';
                echo'</span>';
                echo    '<span class="text">Istoric</span>';
                echo '</a>';
                echo '</li>';
            }
                else{
                    // for buyer
                    echo '<li class="list">';
                    echo   '<a href="/frontend/join.php">';
                    echo       '<span class="icon">';
                    echo            '<ion-icon name="help-circle-outline"></ion-icon>';
                    echo       '</span>';
                    echo        '<span class="text">Alătură-te</span>';
                    echo   '</a>';
                    echo'</li>';

                echo '<li class="list">';
                echo   '<a href="/frontend/contact.php">';
                echo       '<span class="icon">';
                echo          '<ion-icon name="mail-outline"></ion-icon>';
                echo'</span>';
                echo    '<span class="text">Contact</span>';
                echo '</a>';
                echo '</li>';
                }
            
            }
            
            else{
                if($worker == 1 && $buyer == 0) {
                     // for worker
                    echo '<li class="list">';
                    echo   '<a href="/backend/post.php">';
                    echo       '<span class="icon">';
                    echo            '<ion-icon name="add-circle-outline"></ion-icon>';
                    echo       '</span>';
                    echo        '<span class="text">Postează</span>';
                    echo   '</a>';
                    echo'</li>';
    
                    echo '<li class="list">';
                    echo   '<a href="/backend/history.php">';
                    echo       '<span class="icon">';
                    echo          '<ion-icon name="albums-outline"></ion-icon>';
                    echo'</span>';
                    echo    '<span class="text">Istoric</span>';
                    echo '</a>';
                    echo '</li>';
                }
                else{
                    // for buyer
                    echo '<li class="list">';
                    echo   '<a href="/frontend/join.php">';
                    echo       '<span class="icon">';
                    echo            '<ion-icon name="help-circle-outline"></ion-icon>';
                    echo       '</span>';
                    echo        '<span class="text">Alătură-te</span>';
                    echo   '</a>';
                    echo'</li>';

                echo '<li class="list">';
                echo   '<a href="/frontend/contact.php">';
                echo       '<span class="icon">';
                echo          '<ion-icon name="mail-outline"></ion-icon>';
                echo'</span>';
                echo    '<span class="text">Contact</span>';
                echo '</a>';
                echo '</li>';
                }
                }
            ?>
                <div class="indicator"></div>
            </ul>
        </div>
    </section>
    </footer>



  
  <script src="/js/index.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>