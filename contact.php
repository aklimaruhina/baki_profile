<?php $title = 'Contact Page'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'layouts/header.php'; ?>
<body>
    <?php include 'layouts/nav.php'; ?>

    <!-- Scripts -->
    <section class="contact">
        <h1 class="heading"><span>Contact</span>Now</h1>
        <div class="row">
            <div class="info-container">
                <h1>Get in touch</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellendus quod esse vero animi provident aut tenetur, fuga est et dolor aperiam aspernatur! Nostrum harum nemo nihil iusto vitae magni!</p>
                <div class="box-container">
                    <div class="box">
                        <i class="fas fa-map"></i>
                        <div class="info">
                            <h3>Address:</h3>
                            <p>Uttara dhaka -1234</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <h3>Email:</h3>
                            <p>Uttara dhaka -1234</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fas fa-phone"></i>
                        <div class="info">
                            <h3>Phone:</h3>
                            <p>Uttara dhaka -1234</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fas fa-map"></i>
                        <div class="info">
                            <h3>Address:</h3>
                            <p>Uttara dhaka -1234</p>
                        </div>
                    </div>
                </div>
                <div class="share">
                    <a href="https://www.facebook.com/mbs.biplob" class="fab fa-facebook-f"></a>
                    <a href="" class="fab fa-twitter"></a>
                    <a href="https://github.com/bakibillah920" class="fab fa-github"></a>
                    <a href="https://www.linkedin.com/mwlite/in/bakibillah-sorkar-a59b8089" class="fab fa-linkedin"></a>
                    <a href="" class="fab fa-google"></a>
                </div>
                
            </div>
            <form action="sendemail.php" method="post">
                <div class="inputBox">
                    <input type="text" placeholder="your name" name="name" required>
                    <input type="number" placeholder="your number" name="phone_number">
                </div>
                <div class="inputBox">
                    <input type="email" placeholder="your email" name="email" required>
                    <input type="text" placeholder="your subject" name="subject" required>
                </div>
                <textarea id="" cols="30" rows="10" placeholder="your message" name="message"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>
        </div>
    </section>
</body>
</html>
