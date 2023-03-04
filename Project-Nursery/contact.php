<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    
    <div class="container">

        <?php @include 'header.php'; ?>

        <section class="contact">
            <h1 class="heading">Contact Us~</h1>

            <form action="" method="post">

                <div class="contact-form">

                    <div class="input-box">
                        <span>Your Name</span>
                        <input type="text" placeholder="Enter Your Name" name="name" required>
                    </div>

                    <div class="input-box">
                        <span>Your Email</span>
                        <input type="email" placeholder="Enter Your Email" name="email" required>
                    </div>

                    <div class="input-box">
                        <span>Your Number</span>
                        <input type="number" placeholder="Enter Your Number" name="number" required>
                    </div>

                    <div class="input-box">
                        <span>Subject</span>
                        <input type="text" placeholder="Subject" name="subject" required>
                    </div>

                    <div class="input-box">
                        <span>Message</span>
                        <textarea name="message" placeholder="Enter Your Message" required cols="30" rows="10">
                        </textarea>
                    </div>

                </div>
                <input type="submit" value="Submit" name="submit" id="btn">

            </form>

        </section>

        <?php @include 'footer.php'; ?>

    </div>


</body>
</html>