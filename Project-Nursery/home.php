<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    
    <div class="container">

        <?php @include 'header.php'; ?>

        <section class="home">

            <div id="slider">
                <figure>
                    <div class="writing">
                        <img src="images/1.jpg">
                        <div class="content">
                            <h3><i><b>Visit Us Today!</b></i></h3>
                            <p><b>Moonshine Nursery is a school that offers preschool and 
                            kindergarten education to children aged 2 to 6 years old.
                            The school is located in a peaceful and safe environment, 
                            making it an ideal place for children to learn and grow.</b></p>
                            <a href="about.php" class="btn">Know More</a>
                        </div>
                    </div>
                    <img src="images/2.jpg">
                    <img src="images/3.jpg">
                    <img src="images/4.jpg">
                    <img src="images/1.jpg">
                </figure>
            </div>

        </section>

        <section class="goals">

            <h1 class="heading">~Our Goal~</h1>

            <div class="goals-slider">

                <div class="goal">
                    <div class="slide">
                        <img src="images/goal1.jpg" alt="">
                        <p>Our mission is to provide a safe, nurturing, and 
                        welcoming environment where children can learn, play, and grow.</p>
                    </div>
                </div>

                <div class="slide">
                    <img src="images/goal2.jpg" alt="">
                    <p>We are committed to promoting social, emotional, and cognitive development 
                    through age-appropriate activities and a curriculum that fosters creativity, 
                    curiosity, and joy for learning.</p>
                </div>

                <div class="slide">
                    <img src="images/goal3.jpg" alt="">
                    <p>Our goal is to empower each child to become self-confident, independent, and 
                    compassionate individuals who are ready to succeed in school and in life.</p>
                </div>

            </div>

        </section>

        <?php @include 'footer.php'; ?>

    </div>


</body>
</html>