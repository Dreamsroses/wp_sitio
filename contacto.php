<?php get_header(); ?>


<div class="container py-3">
  <div class="row">
  <div class="col-md-12">
    <h1 class="titular__servicios my-5 p-1 mb-2">Contáctenos</h1>
   </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form action="mailer.php" id="form">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" placeholder="email@example.com"><br>
        <label for="subject">Asunto:</label>
        <input type="text" name="subject" id="subject" placeholder="subject"><br>
        <label for="message">Mensaje:</label>
        <textarea name="message" id="message" placeholder="message"></textarea><br>
        <button name="submit" id="submit">Enviar</button>
        <label id="info"></label>
      </form>
      
    </div>
    <div class="col-md-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56125914.35045236!2d-125.05561790988568!3d-30.840361148157957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5410425af2f%3A0x505e1131102b91d!2sChile!5e0!3m2!1ses-419!2scl!4v1535483802647" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>


<?php get_footer(); ?>