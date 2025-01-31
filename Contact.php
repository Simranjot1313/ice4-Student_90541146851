<?php include 'header.php'; ?>
<main>
<h2>Contact Us</h2>
    <div class="section">
      <div class="contact-form">
        <h3>Send us a message</h3>
        <div class="form-input">
          <label for="fname">Full Name</label><br>
          <input type="text" id="fname" name="fname">
        </div>
        <div class="form-input">
          <label for="email">Email</label><br>
          <input type="email" id="email" name="email">
        </div>
        <div class="form-input">
          <label for="message">Message</label><br>
          <textarea id="message" name="message"></textarea>
        </div>
        <button class="send-button">Send</button>
      </div>
      </main>
<?php include 'footer.php'; ?>