
<div class="form-container">
        <h2>Formularz Wpisu Osoby</h2>
<div>
<label for="name">Imie i Nazwisko</label>
        <input type="text" id="name" name="name" value="<?=old("name", $persons["name"])?>"> 
</div>
<div>
        <label for="comment">Komentarz</label>
        <textarea id="comment" name="comment"><?= old("comment", $persons["comment"])?></textarea>
        <button>Zapisz</button>
</div>
</div>