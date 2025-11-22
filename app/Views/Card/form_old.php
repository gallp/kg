<div class="form-container">
        
        <h2>Formularz Wpisu Karty RCP</h2>

                <div class="form-group">
                <label for="card_number">Numer</label>
                <input type="text" class="form-control" id="card_number" name="card_number" 
                        value="<?= old("card_number", $data->card_number)?>" required size="8">
                </div><br>

                <button class="btn" type="submit">Zapisz</button>

</div>