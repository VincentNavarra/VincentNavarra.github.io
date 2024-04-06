<?php
$sql = "SELECT indirizzo1, indirizzo2, email, numero FROM info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<div class="footer-top">
    <div class="container">
      <div class="row align-items-center">
        <div class=" col-sm-12 col-md-12 col-lg-4">
          <div class="contact-box">
            <h6 class="contact__box-title">Indirizzo</h6>
            <ul class="contact__box-list list-unstyled">
              <li>' . $row["indirizzo1"] . '<br>' . $row["indirizzo2"] . '</li>
              </ul>
              <a href="contatti.php" class="btn btn__primary btn__hover2 btn__link">Visualizza Mappa</a>
            </div><!-- /.contact-box -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <img src="assets/images/logo/footer-logo.png" alt="logo" class="footer__logo mb-20">
            <p class="mx-2 mb-20">El Royale was the first restaurant to open in Egypt, the resturant was designed with
              the history in mind we have created a soft industrial dining room.</p>
            <form class="footer__newsletter-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subscribe Our Newsletter">
                <button type="submit" class="form__submit"><i class="fa fa-long-arrow-right"></i></button>
              </div>
            </form>
            <ul class="social__icons social__icons-white justify-content-center">
              <li><a href="https://www.instagram.com/cabossa_lab/" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.facebook.com/cabossacioccolateriaegelateria" target="_blank"><i class="fa fa-facebook"></i></a></li>
            </ul><!-- /.social__icons -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="contact-box">
              <h6 class="contact__box-title">Prenota Ora</h6>
              <ul class="contact__box-list list-unstyled">
                <li><span>Main Email:</span> <a href="mailto:' . $row["email"] . '">' .  $row["email"] . '</a></li>
                <li><span>Phone:</span> <a href="tel:' . $row["numero"] . '">' .  $row["numero"] . '</a></li>
                </ul>
                <a href="reservation.html" class="btn btn__primary btn__hover2 btn__link">Contattaci</a>
              </div><!-- /.contact-box -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-top -->';
  }
} else {
  echo "ERROR";
}
?>