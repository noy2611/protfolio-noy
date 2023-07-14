<?php
include "config.php";
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
                <li><a href="#project">PROJECT</a></li>
                <li><a href="NoyRaichmanCV.pdf" target="_blank">CV</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>

        <div id="box-head">
            <div class="box-align">
                <img src="images/myimage1.png" alt="noy" class="img1">
                <h1 class="myname">Hello<br>I'm Noy<br>Raichman</h1>
                <h1 class="myname-responsive">Hello I'm Noy Raichman</h1>
                <div id="line-gray"></div>

                <div class="col-p-i">
                    <div class="p-first">
                        <p>My name is Noy, I'm 25 years old, and I'm in my second year of studying software engineering
                            at
                            Shenkar. I graduated from Open University with a degree in digital graphic design. I have
                            always been
                            interested in the world of technology and have had a passion for it since my early childhood
                            when I
                            first started exploring computer science.</p>
                    </div>
                </div>
            </div>
            <div class="class-pink">
                <div id="box-pinkish">
                    <h3><a href="NoyRaichmanCV.pdf" download>DOWNLOAD CV</a></h3>
                </div>
            </div>
        </div>
    </header>

    <main>
    <h1 class="_skill">Skill</h1>
        <div class="warpper-skill">
            
            <div class="skill-bars">

                <div class="bar">
                    <div class="info">
                        <span>HTML</span>
                    </div>
                    <div class="progress-line html">
                        <span></span>
                    </div>
                </div>

                <div class="bar">
                    <div class="info">
                        <span>CSS</span>
                    </div>
                    <div class="progress-line css">
                        <span></span>
                    </div>
                </div>

                <div class="bar">
                    <div class="info">
                        <span>JS</span>
                    </div>
                    <div class="progress-line js">
                        <span></span>
                    </div>
                </div>
                <div class="bar">
                    <div class="info">
                        <span>PHP</span>
                    </div>
                    <div class="progress-line php">
                        <span></span>
                    </div>
                </div>
                <div class="bar">
                    <div class="info">
                        <span>MySQL</span>
                    </div>
                    <div class="progress-line mysql">
                        <span></span>
                    </div>
                </div>
                <div class="bar">
                    <div class="info">
                        <span>C++</span>
                    </div>
                    <div class="progress-line cplusplus">
                        <span></span>
                    </div>
                </div>

                <div class="bar">
                    <div class="info">
                        <span>Photoshop</span>
                    </div>
                    <div class="progress-line Photoshop">
                        <span></span>
                    </div>
                </div>


                <div class="bar">
                    <div class="info">
                        <span> illustrator</span>
                    </div>
                    <div class="progress-line illustrator">
                        <span></span>
                    </div>
                </div>

                <div class="bar">
                    <div class="info">
                        <span> Figma</span>
                    </div>
                    <div class="progress-line Figma">
                        <span></span>
                    </div>
                </div>
            </div>

        </div>
        <!-- php -->
        <div class="warpper-project">
          <h1 id="project" class="_Projects">Projects </h1>  
            <div class="warpper-all-project">
                <div class="porject1">
                    <div class="img-porject1"></div>
                    <?php
                    $query = "SELECT * FROM portfolio_NoyRaichman WHERE id = 1";
                    $result = mysqli_query($connection, $query);
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $Projectid = $row['id'];
                        $Projectname = $row['name'];
                        $Projectdec = $row['description'];

                        echo " <div class=datasql><br> <b>Name: $Projectname </b></br> description: $Projectdec </div>";
                    } else {
                        echo "No rows found.";
                    }
                    ?>
                    <a href="project.php?Projectid=<?php echo $Projectid; ?>">view more </a>
                </div>
                <div class="porject2">
                    <div class="img-porject2"></div>
                    <?php
                    $query = "SELECT * FROM portfolio_NoyRaichman WHERE id = 2";
                    $result = mysqli_query($connection, $query);
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $Projectid = $row['id'];
                        $name = $row['name'];
                        $dec = $row['description'];

                        echo " <div class=datasql><br> <b>Name: $name </b></br> description: $dec </div>";
                    } else {
                        echo "No rows found.";
                    }
                    ?>
                    <a href="project.php?Projectid=<?php echo $Projectid; ?>">view more </a>
                </div>

                <div class="porject3">
                    <div class="img-porject3"></div>
                    <?php
                    $query = "SELECT * FROM portfolio_NoyRaichman WHERE id = 3";
                    $result = mysqli_query($connection, $query);
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $Projectid = $row['id'];
                        $name = $row['name'];
                        $dec = $row['description'];

                        echo " <div class=datasql><br> <b>Name: $name </b></br> description: $dec </div>";
                    } else {
                        echo "No rows found.";
                    }
                    ?>
                    <a href="project.php?Projectid=<?php echo $Projectid; ?>">view more </a>
                </div>
                <div class="porject4">
                    <div class="img-porject4"></div>
                    <?php
                    $query = "SELECT * FROM portfolio_NoyRaichman WHERE id = 4";
                    $result = mysqli_query($connection, $query);
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $Projectid = $row['id'];
                        $name = $row['name'];
                        $dec = $row['description'];

                        echo " <div class=datasql><br> <b>Name: $name </b></br> description: $dec </div>";
                    } else {
                        echo "No rows found.";
                    }
                    ?>
                    <a href="project.php?Projectid=<?php echo $Projectid; ?>">view more </a>

                </div>
                <div class="porject5">
                    <div class="img-porject5"></div>
                    <?php
                    $query = "SELECT * FROM portfolio_NoyRaichman WHERE id = 5";
                    $result = mysqli_query($connection, $query);
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $Projectid = $row['id'];
                        $name = $row['name'];
                        $dec = $row['description'];

                        echo " <div class=datasql><br> <b>Name: $name </b></br> description: $dec </div>";
                    } else {
                        echo "No rows found.";
                    }
                    ?>
                    <a href="project.php?Projectid=<?php echo $Projectid; ?>">view more </a>
                </div>
            </div>
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