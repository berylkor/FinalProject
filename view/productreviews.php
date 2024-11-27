<?php
    include_once("../functions/display_profile.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Reviews</title>
    <link rel="stylesheet" href="../css/reviews.css">
    <link rel="stylesheet" href="../css/inner_footer.css">
    <link rel="stylesheet" href="../css/inner_header.css">
    <link rel="shortcut icon" href="../images/favicon_io/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>
    <!-- Page Header -->
    <header>
        <!-- Company name -->
        <h2 id="nichelogo">NicheNest</h2>
        <!-- Buttons to other pages -->
        <div class="btn_container">
            <a href="about_view.php"><button class="header_btn"> About Us</button></a>
            <a href="welcome_view.php"><button class="header_btn"> Home </button></a>
            <a href="productreviews.php">    <button class="header_btn"> Rankings </button></a>
            <a href="">    <button class="header_btn"> Shopping </button></a>
            <a href="logout.php">
                <button class="header_btn"> Logout </button>
            </a>
        </div>
        <!-- User details -->
        <div class="user_container">
            <span class="material-symbols-outlined">account_circle</span>
            <div class="profile_details">
                <p>Beryl Koram</p>
                <p>beryl.koram@gmail.com</p>
            </div>
            <a href="profile_view.php" style="text-decoration: none;">
                <span class="material-symbols-outlined">keyboard_arrow_down</span>
            </a>
        </div>
    </header>

    <!-- Sidebar section -->
    <aside class="menu_container">
        <div class="container">
            <img src="../images/glass.png" alt="" width="120px" height="120px">
            <p>Ad Space</p>
            <a href="#">Learn More</a> 
        </div>
        <hr>
        <div class="menu_content">
            <!-- Logout Button -->
            <ul>
                <li id="logout"> <a href="logout.php"> <span class="material-symbols-outlined">logout</span> Logout </a> </li>
            </ul>
        </div>
    </aside>

    <main>
        <section class="details">
            <div class="flexbox">
                <h2>Camera Kit</h2>
                <p class="score">Overall Score: 4.67 / 5.00</p>
                <div class="purchaselink"> To purchase this item: <p>Click here</p></div>
            </div>
            <img src="../images/camera.jpg" alt="">
        </section>

        <!-- Item Review Section -->
        <h3>Individual Review and Scores</h3>
        <section class="individualreviews">
            <!-- Expert Review -->
            <div class="comment_container">
                <div class="comment_header">
                    <div class="commentuser_container">
                        <div class="image_container">
                            <img src="../images/profile.jpeg" alt="user" width="30px">
                        </div>
                        <div class="user_details">
                            <h6>Thomas Brett</h6>
                            <p>20 days ago</p>
                        </div>
                    </div>
    
                    <div class="review_score_container">
                        <h6>Review Score: <p>4/5</p> </h6>
                    </div>
                </div>

                <div class="comment_content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ut repellendus doloremque amet aliquid, 
                         facere recusandae officiis maxime accusamus, a, sed numquam optio fugiat vero. Tempora maxime ducimus tempore, 
                        officiis exercitationem optio, architecto sit, iure harum consectetur nesciunt ad animi expedita esse ipsa et magnam 
                        asperiores illum praesentium consequatur incidunt? Nihil rem nam tenetur ab.
                    </p>
                </div>
            </div>


        </section>
    </main>

    <!-- Page Footer -->
    <footer>
        <p>&copy; 2024 NicheNest</p>
    </footer>
</body>

</html>