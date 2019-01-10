<?php include('partials/header.php'); ?>

    <form method="post" action="http://localhost/Gameplayparty/contactController/sendmail">       
        <h1>Contact</h1><br>
        <hr class="my-4">
        <p>Heeft u nog vragen of op- of aanmerkingen? Laat het ons weten!</p>
        <div class="form-group">
            <label for="naam">Naam&#42;</label>
            <input type="text" class="form-control" name="naam" placeholder="Naam" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail adres&#42;</label>
            <input type="email" class="form-control" name="email" placeholder="E-mail adres" required>
        </div>
        <div class="form-group">
            <label for="bericht">Uw bericht&#42;</label>
            <textarea class="form-control no-resize" name="bericht" placeholder="Uw bericht.." rows="5" required></textarea>
        </div>
        <small id="emailHelp" class="form-text text-muted">Velden met een &#42; zijn verplicht.</small><br>
        <button type="submit" class="btn btn-primary" name="contact" style="background-color: #A3CB38; border: none;">Verzend</button>
    </form>

<?php include('partials/footer.php'); ?>