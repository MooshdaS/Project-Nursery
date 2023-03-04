<section class="header">

    <a href="home.php" class="logo"><img src="images/logo.png" class="shine"></a>

    <nav class="navbar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#">Requirements</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="home.php">Facilities</a></li>
            <li><a href="team.php">Our team</a></li>
        </ul>
    </nav>

    <div class="menu-side-btn">
        <i class="fas fa-bars"></i>
    </div>

    <div class="dropdown">
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">Requirements</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="home.php">Facilities</a></li>
        <li><a href="team.php">Our team</a></li>
    </div>

    <script>
        const menuBtn = document.querySelector('.menu-side-btn')
        const menuBtnIcon = document.querySelector('.menu-side-btn i')
        const dropDown = document.querySelector('.dropdown')

        menuBtn.onclick = function (){

            dropDown.classList.toggle('open')
            const isOpen = dropDown.classList.contains('open')

        }

    </script>

</section>