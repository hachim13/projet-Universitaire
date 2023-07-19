<?php
require('templates/header.php');
?>

<section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-7b18">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <h2 class="u-text u-text-default u-text-1">Contactez-nous</h2>
    <div class="u-form u-form-1">
      <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form">
        <div class="u-form-group u-form-name u-label-none">
          <label for="name-3b9a" class="u-label">Name</label>
          <input type="text" placeholder="Enter your Name" id="name-3b9a" name="name" class="u-input u-input-rectangle" required="">
        </div>
        <div class="u-form-email u-form-group u-label-none">
          <label for="email-3b9a" class="u-label">Email</label>
          <input type="email" placeholder="Enter a valid email address" id="email-3b9a" name="email" class="u-input u-input-rectangle" required="">
        </div>
        <div class="u-form-group u-form-message u-label-none">
          <label for="message-3b9a" class="u-label">Message</label>
          <textarea placeholder="Enter your message" rows="4" cols="50" id="message-3b9a" name="message" class="u-input u-input-rectangle" required=""></textarea>
        </div>
        <div class="u-align-left u-form-group u-form-submit">
          <a href="#" class="u-btn u-btn-submit u-button-style">Submit</a>
          <input type="submit" value="submit" class="u-form-control-hidden">
        </div>
        <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
        <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
        <input type="hidden" value="" name="recaptchaResponse">
        <input type="hidden" name="formServices" value="39e3345aae4db037ddbac8cc601f6ce1">
      </form>
    </div>
  </div>
</section>


<?php
require('templates/footer.php');
?>