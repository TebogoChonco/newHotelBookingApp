<?php
require_once 'includes/header.php';
require_once 'landingPage.php';
require_once 'greeting.php';
?>
<br>

<h1>Contact Us</h1>



<div class="contact" id="contact">


    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663048.1257756026!2d23.20567680760229!3d-26.287763676850183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ea2cac23fd72df5%3A0x4c7f138d7cbe19d4!2sNorth%20west%20Tourism!5e0!3m2!1sen!2sza!4v1700113507185!5m2!1sen!2sza"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <div class="adress">

        <div class="left">
            <br>
            <br>
            <br>
            <p>
                <i class="bi bi-telephone-fill"></i>
                014 345 6677
            </p>
            <br>
            <p>
                <i class="bi bi-geo-alt-fill"></i>
                2, Kelgor House, 14 Tillard St, Golf View, Mahikeng, 2735
            </p>
            <br>
            <p>
                <i class="bi bi-envelope-fill"></i>
                info@tournw.co.za
            </p>
        </div>
        <div class="right">
            <form>
                <h3>Contact Us</h3>
                <p>
                    If you have any queries, please complete the following form
                    and click on the SUBMIT button to email it for our attention.
                </p>
                <div class="name">
                    <label for="yourName" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="field" required>
                </div>
                <div class="email">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="field" placeholder="example@gmail.com" required>
                </div>
                <div class="message">
                    <label for="message" class="form-label" id="message">Message</label>
                    <textarea class="form-control" id="message" required></textarea>
                </div>

                <button data-modal-target="#modal" class="btn">Send Mail</button>

                <div class="modal" id="modal">
                    <div class="modal-header">
                        <div class="title">Mail sent</div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>

                    <div class="modal-body">
                        <i class="bi bi-send-check-fill"></i>

                        <p>Your message has been sent and a member of our team will respond to you very soon.</p>
                    </div>
                </div>
                <div id="overlay"></div>
        </div>
    </div>

</div>

<script src="script/modal.js"></script>
</body>
<br>
<br>
<br>
<br>
<?php
require_once 'includes/footer.php';
?>