<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/history.css">
  <link rel="manifest" href="/manifest.json">
  <title>History</title>
</head>
<body>
  <div class="search-bar">
    <form action="#">
      <div class="flex-search">
      <input type="text" name="text" id="search-item" placeholder="Search..." onkeyup="search()">
      <button type="submit" name="submit"><ion-icon name="search-outline"></ion-icon></button>
      </div>
    </form>
  </div>

  <section>
    <div class="flex-2-column">
      <div class="cards">
        <div class="flex-container" id="service-list">
            <a href="/frontend/service.php?id=' . $row['id'] . ">
              <div class="card">
              <img src="/img/caine1.jpg">
              <div class="info-area">
                <div class="title-price">
                <h3 class="service-title">Plimb caini zona tomis</h3>
                <h2 class="service-price">2 500 lei</h2>
                </div>
                <div class="date">
                <span>12:48</span>
                <span>Constanta</span>
                </div>
              </div>
            </div>
          </a>
          <div class="delete-btn">
            <ion-icon name="close-outline"></ion-icon>
            <span>Delete Post</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Navbar Down --> 
<footer>  
  <section class="nav-bar">
      <div class="navigation">
          <ul>
              <li class="list ">
                  <a href="/frontend/home.php">
                      <span class="icon">
                      <ion-icon name="home-outline"></ion-icon>
                      </span>
                      <span class="text">Explorează</span>
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
              <li class="list">
                  <a href="/frontend/post.php">
                      <span class="icon">
                          <ion-icon name="add-circle-outline"></ion-icon>
                      </span>
                      <span class="text">Postează</span>
                  </a>
              </li>
              <li class="list active">
                  <a href="#">
                      <span class="icon">
                          <ion-icon name="albums-outline"></ion-icon>
                      </span>
                      <span class="text">Istoric</span>
                  </a>
              </li>
              <div class="indicator"></div>
          </ul>
      </div>
  </section>
  </footer>
  <script src="/js/search.js"></script>
  <script src="/js/nav.js"></script>
  <script src="/js/sliderimg.js"></script>
<!-- Ion icons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>