<?php
include "config.php";
$Projectid = $_GET['Projectid'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Noy Raichman</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="favicon.ico">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fira+Code:wght@300;400;500;600;700&family=Open+Sans:wght@300&family=Poppins:ital,wght@0,100;0,300;1,300&display=swap"
        rel="stylesheet">
</head>
<body>
    <header>
    <nav class="menu">
            <ul class="menu-il">
                <li><a href="index.php">HOME</a></li>
                <li><a href="NoyRaichmanCV.pdf" target="_blank">CV</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <br>
        <div class="warpper-index-project">
            <?php
            $query = "SELECT * FROM portfolio_NoyRaichman WHERE  id = '$Projectid'";
            $result = mysqli_query($connection, $query);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $Projectname = $row['name'];
                    $Projectdec = $row['description'];
                    $Projectimg = $row['images'];
                    $Projectlang = $row['languages'];
                    $Projectlink = $row['link'];

                    echo '<div>';
                    echo '<br><h1 class="name-project"><b>' . $Projectname . '</b></h1>';
                    echo '<br>';
                    echo '<img src="' . $Projectimg . '" alt= imgproject" class="project-image"">';
                    echo '<br>';
                    echo '<h5>languages: ' . $Projectlang . '</h5>';
                    echo '<br>';
                    echo '<p>' . $Projectdec . '</p>';
                    echo '<br>';
                    echo '<h4><a href="' . $Projectlink . '" target=_Blank>Click on me to visit on Github</a></h4>';

                    echo '</div>';
                } else {
                    echo 'project not found';
                }
            } else {
                echo 'Error executing the query: ' . mysqli_error($connection);
            }
            ?>
        </div>
    </main>

    <footer id="contact">
        <div class="title-contact">
            <h1>CONTACT</h1>
        </div>
                <div class="contact-details">
                    <ul class="mycontact">
                        <li><a href="#">Noy Raichman</a></li>
                        <li><a href="https://github.com/noy2611" target="_blank">GitHub</a></li>
                        <li><a href="https://www.linkedin.com/in/noy-raichman-02755a223" target="_blank">Linkdin</a>
                        </li>
                        <li><a href="mailto:Noyraichman@gmail.com">Noyraichman@gmail.com</a></li>
                        <li>
                    </ul>
                </div> 
                <div class="text-end"><a
                        href="https://www.shenkar.ac.il/he/departments/engineering-software-department "
                        target="_blank">תואר ראשון
                        בהנדסת תוכנה בשנקר</a>
                    <h6> &copy; All rights reserved to - Noy Raichman</h6>
                </div>
    </footer>  
</body>

</html>