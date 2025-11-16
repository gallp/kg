<div class="form-container">
        
        <h2>Formularz Wpisu Działu</h2>

                <div class="form-group">
                <label for="name">Nazwa:</label>
                <input type="text" class="form-control" id="name" name="name" 
                        value="<?= old("name", $data->name)?>" required>
                </div><br>

                <button class="btn" type="submit">Zapisz</button>

</div>