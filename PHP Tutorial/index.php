<?php 

include "config.php";
if(isset($_GET['logout'])) {
  session_destroy();
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSIC HUB</title>
    <link href="assets/css/external.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        #header {
            background-color: black;
            text-align: right;
        }
        #header>a {
            color: white;
            text-decoration: none;
            margin-right: 30px;
        }
        #dropdown {
            position:relative;
            display: inline-block;
        }
        #dropdown-content {
            position: absolute;
            right: 0;
            display: none;
            z-index: 1;
            background-color: #f1f1f1;
            min-width: 250px;
        }
        #dropdown-content a {
            display: block;
            padding: 10px 30px;
            color: black;
            text-decoration: none;
        }
        #header button {
            background-color: forestgreen;
            color: white;
            font-weight: bold;
            font-size: 20px;
            padding: 10px 20px;
            border: none;
        }
        #header button:hover  {
            background-color: darkgreen;
        }
        #dropdown:hover #dropdown-content {
            display: block;
        }
        #dropdown-content a:hover {
            background-color: #b1b1b1;
        }
        #logo-section {
            position: relative;
            width: 100%;
            background-color: #fcc916;
        }
        .right-align {
            position:absolute;
            top:60px;
            right: 30px;
        }

        #logo-section h1,p {
            position: absolute;
            left: 160px;
            top:5px;
        }
        #logo-section h1 {
            font-family: fantasy;
            font-size: 75px;
            font-weight: normal;
        }
        #logo-section p {
            margin-top: 85px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 19.2px;
        }
        #logo-section form {
            position: relative;
        }
        #logo-section form * {
            position: absolute;
            height: 40px;
            right: 30px;
            border: none;
            
        }
        #logo-section form input {
            width: 300px;
            padding: 10px;
            border-radius: 30px;
            font-size: 15px;
        }
        #logo-section form button {
            height: 38px;
            width: 38px;
            top: 1px;
            right: 31px;
            background-color: white;
            border-radius: 30px;
        }
        #logo-section form button:hover {
            background-color: aliceblue;
        }
        #logo-section form svg {
            position: relative;
            right: 0px;
        }
        #menubar {
            display: flex;
            background-color: #333;
            justify-content: space-around;
            flex-wrap: nowrap;
        }
        #menubar li {
            list-style-type: none;
        }
        #menubar li a {
            text-decoration: none;
            font-size: 20px;
            color: white;
            padding: 10px 30px;
            display: block;
        }
        #menubar li a:hover {
            background-color: #111;
            font-size: 25px;
            padding: 7.5px 10px;
        }
        #menubar .active {
            background-color: forestgreen;
        }
        #menubar .active:hover {
            background-color: darkgreen;
        }
        #page-body>div {
            padding: 30px;
        }
    </style>
</head>
<body>
    <div id="header">
        <a class="legallinks" href="legal/privacy.html">Privacy Policy</a>
        <a class="legallinks" href="legal/tnc.html">Terms and Conditions</a>
        
        <?php if(!isset($_SESSION['username'])) { ?>

        <div id="dropdown">
            <button id="drop-btn">LOGIN</button>
            <div id="dropdown-content">
                <a href="authentication/login.php">LOGIN</a>
                <a href="authentication/register.php">SIGN IN</a>
            </div>
        </div>

        <?php } else { ?>

        <div id="dropdown">
            <button id="drop-btn"><?php echo $_SESSION['username'] ?></button>
            <div id="dropdown-content">
                <a href="authentication/login.php">CHANGE PASSWORD</a>
                <a href="index.php?logout=true">LOGOUT</a>
            </div>
        </div>

        <?php } ?>

    </div>
    <div id="logo-section">
        <div class="left-align">
            <img src="assets/images/logo.gif" alt="MUSIC HUB" height="150px" />
            <h1>MUSIC HUB</h1>
            <p>----------------------------------------------------<br>One stop shop for all your musical needs</p>
        </div>
        <div class="right-align">
            <form method="get" action="search.php">
                <input type="search" name="keyword" placeholder="Search for songs, artists, playlists, etc" />
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                </button>
            </form>
        </div>
    </div>
    
    <ul id="menubar">
        <li><a href="index.html" class="active">Home</a></li>
        <li><a href="newhits.html">New Hits</a></li>
        <li><a href="recent.html">Recent Releases</a></li>
        <li><a href="favourites.html">Favourites</a></li>
        <li><a href="playlists.html">Playlists</a></li>
        <li><a href="about.html">About Us</a></li>
    </ul>
    <div id="page-body">
        <div id="products">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        
    <div id="footer"></div>
</body>
</html>






<!--
<div id="header" style="background-color: black;">
    <button>LOGIN</button>
    <a class="legallinks" href="legal/privacy.html">Privacy Policy</a>
    <a class="legallinks" href="legal/tnc.html">Terms and Conditions</a>
    
</div>
<div id="logo-section">
    <img src="assets/images/logo.gif" alt="MUSIC HUB" />
</div>
<div id="footer">
    <div id="companyinfo">
        <img src="assets/images/logo.gif" alt="MUSIC HUB" />
    </div>
    <div id="pagelinks">
        <a class="legallinks" href="legal/privacy.html">Privacy Policy</a>
        <a class="legallinks" href="legal/tnc.html">Terms and Conditions</a>
        <a class="legallinks" href="legal/ipr.html">Intellectual Property</a>
        <a class="legallinks" href="legal/tr.html">Trademark</a>
    </div>
    <div id="newsletter">
        <form>
            <input type="email">
            <button>Subscribe!</button>
        </form>
    </div>

</div>
\
-->