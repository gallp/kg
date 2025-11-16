
<div class="form-container">
        <h2>Formularz Wpisu Osoby</h2>
<div>
<label for="name">Imie i Nazwisko</label>
        <input type="text" class="form-control" id="name" name="name" value="<?=old("name", $persons["name"])?>"> 
</div>
<div>
        <label for="comment">Komentarz</label>
        <textarea class="form-control" id="comment" name="comment"><?= old("comment", $persons["comment"])?></textarea><br>
        <button class="btn" type="submit">Zapisz</button>
</div>
</div>