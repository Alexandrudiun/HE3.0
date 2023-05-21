<?php
session_start();
if(isset($_SESSION['email']) && isset ($_SESSION['password']))
{}
else
{
    header("Location: ../index.php");
}

?>






<?php echo"<h1>Pagină de contact</h1>";?>



<!-- Navbar Down -->
<footer>  
    <section class="nav-bar">
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="/frontend/home.php">
                        <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Acasă</span>
                    </a>
                </li>
                <li class="list active">
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
                echo          '<ion-icon name="albums-outline"></ion-icon>';
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
                    echo            '<ion-icon name="add-circle-outline"></ion-icon>';
                    echo       '</span>';
                    echo        '<span class="text">Alătură-te echipei</span>';
                    echo   '</a>';
                    echo'</li>';

                echo '<li class="list">';
                echo   '<a href="/frontend/contact.php">';
                echo       '<span class="icon">';
                echo          '<ion-icon name="albums-outline"></ion-icon>';
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