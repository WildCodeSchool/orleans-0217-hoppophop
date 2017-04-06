<?php
require('../php/header.php');
?>
<div class="container contact-content">
    <div class="col-md-offset-3 col-md-6">
        <div class="form-area text-center">
            <form role="form">
                <br/>
                <h2 class="orange font-circula">Nous contacter</h2>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Votre e-mail" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="subject" name="subject" placeholder="Votre texte" rows="7" required></textarea>
                </div>
                <button type="button" id="submit" name="submit" class="btn btn-default contact-btn">Envoyer votre message</button>
            </form>
        </div>
    </div>
</div>
<?php
require('../php/footer.php');
?>
