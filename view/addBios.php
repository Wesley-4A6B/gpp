<?php include('partials/header.php'); ?>
<form method="post" action="../adminController/collectBios/" enctype="multipart/form-data">
        <h1> Bioscoop toevoegen </h1>
        <div class="form-group">
            <label for="naam">Bioscoopnaam&#42;</label>
            <input type="text" value="Testbioscoop" class="form-control" name="bios_naam" placeholder="Bioscoopnaam.." required>
        </div>
        <div class="form-group">
            <label for="image">Afbeelding&#42;</label><br>
            <input type="file" name="image" required>
        </div>
        <div class="form-group">
            <label for="adres">Adres&#42;</label>
            <input type="text" value="Dorpstraat 51" class="form-control" name="adres" placeholder="Adres.." required>
        </div>
        <div class="form-group">
            <label for="postcode">Postcode&#42;</label>
            <input type="text" value="3543 DP" class="form-control" name="postcode" placeholder="Postcode.." required>
        </div>
        <div class="form-group">
            <label for="stad">Stad&#42;</label>
            <input type="text" value="Nieuwegein" class="form-control" name="stad" placeholder="Stad.." required>
        </div>
        <div class="form-group">
            <label for="provincie">Provincie&#42;</label>
            <input type="text" value="Utrecht" class="form-control" name="provincie" placeholder="Provincie.." required>
        </div>
        <div class="form-group">
            <label for="begintijd">Begintijd&#42;</label>
            <input type="datetime-local" value="2018-10-12T17:00" class="form-control" name="begintijd" required>
        </div>
        <div class="form-group">
            <label for="eind">Eindtijd&#42;</label>
            <input type="datetime-local" value="2018-10-12T20:00" class="form-control" name="eindtijd" required>
        </div>
        <div class="form-group">
            <label for="auto">Bereikbaarheid auto&#42;</label>
            <textarea class="form-control no-resize" style="resize: none;" name="bereikbaar_auto" placeholder="Bereikbaarheid auto.." rows="5" required>Over de weg</textarea>
        </div>
        <div class="form-group">
            <label for="ov">Bereikbaarheid openbaar vervoer&#42;</label>
            <textarea class="form-control no-resize" style="resize: none;" name="bereikbaar_ov" placeholder="Bereikbaarheid openbaar vervoer.." rows="5" required>Over de busbaan</textarea>
        </div>
        <div class="form-group">
            <label for="fiets">Bereikbaarheid fiets&#42;</label>
            <textarea class="form-control no-resize" style="resize: none;" name="bereikbaar_fiets" placeholder="Bereikbaarheid fiets.." rows="5" required>Zonder zadel</textarea>
        </div>
        <div class="form-group">
            <label for="rolstoel">Rolstoeltoegankelijk?&#42;</label><br>
            <input type="radio" name="rolstoeltoegankelijkheid" value="ja" checked="checked"> Ja<br>
            <input type="radio" name="rolstoeltoegankelijkheid" value="nee"> Nee
        </div>
        <div class="form-group">
            <label for="voorwaarden">Voorwaarden&#42;</label>
            <textarea class="form-control no-resize" style="resize: none;" name="voorwaarden" placeholder="Voorwaarden.." rows="5" required>Niet eten in de bioscoop</textarea>
        </div>
        <div class="form-group">
            <label for="link">Informatielink&#42;</label>
             <small class="form-text text-muted">Hier wordt de link met informatie over de bioscoop ingevoerd. <br>Voorbeeld: https://kinepolis.nl/bioscopen/kinepolis-oss/info</small><br>
            <input type="text" value="http://www.google.nl/" class="form-control" name="link" placeholder="Informatielink.." required>
        </div>
       
        <small id="emailHelp" class="form-text text-muted">Velden met een &#42; zijn verplicht.</small><br>
        <button type="submit" class="btn btn-primary" name="create" style="background-color: #A3CB38; border: none;">Voeg bioscoop toe</button>
    </form>
<br><br>
<div class="row">
    <div class="col-md-12">
    <a href="../adminController/adminPanel" style="text-decoration: none;">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <span style="font-size: 20px;">Terug naar Dashboard</span>
      </div>
    </div>
    </a>
  </div>
</div>
<?php include('partials/footer.php'); ?>