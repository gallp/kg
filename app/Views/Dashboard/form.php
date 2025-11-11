<div class="form-container">
        <h2>Formularz Wpisu Gościa</h2>
        
            <div class="form-group">
                <label for="fname">Imię:</label>
                <input type="text" id="fname" name="fname" 
                    value="<?= old("fname", $data["fname"])?>" required>
            </div><br>

            <div class="form-group">
                <label for="sname">Nazwisko:</label>
                <input type="text" id="sname" name="sname"  
                   
                    value="<?= old("sname", $data["sname"])?>" required>
            </div><br>

            <div class="form-group">
                <label for="guest_company">Firma Gościa:</label>
                <input type="text" id="guest_company" name="guest_company" 
                    value="<?= old("guest_company", $data["guest_company"])?>" required>
            </div><br>

            <div class="form-group">
                <label for="guest_count">Liczba Gości:</label>
                <input type="number" id="guest_count" name="guest_count" min="1" 
                    value="<?= old("guest_count", $data["guest_count"])?>" required>
            </div><br>

            <div class="form-group">
                <label for="guardian">Opiekun:</label>
                <select id="guardian" name="guardian" required>
                    
                    <option value="<?= esc($guardian['id'])?>"><?= esc($guardian['name'])?></option>
                    
                    <?php foreach($guardians as $guardian):?>
                        <option value="<?= esc($guardian['id']) ?>"><?= esc($guardian['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div><br>

            <div class="form-group">
                <label for="purpose">Cel wizyty:</label>
                <input type="text" id="purpose" name="purpose" 
                    value="<?= old("purpose", $data["purpose"])?>"required>
            </div><br>

            <div class="form-group">
                <label for="zone">Strefa:</label>
                <select id="zone" name="zone" required>
                    
                    <option value="<?= $zone['id_zone']?>"><?= $zone['name']?></option>

                    <?php foreach($zones as $zone): ?>
                        <option value="<?= esc($zone['id_zone']) ?>"><?= esc($zone['name']) ?></option>
                    <?php endforeach; ?>
                </select>
                </select>
            </div><br>

            <div class="form-group">
                <label for="permanent">Stały dostęp:</label>
                <select id="permanent" name="permanent">
                    <option value="0">Nie</option>
                    <option value="1">Tak</option>
                </select>
            </div><br>

            <div class="form-group">
                <label for="consent">Zgoda:</label>
                <select id="consent" name="consent">
                    <option value="0">Nie</option>
                    <option value="1">Tak</option>
                </select>        
            </div><br>

            <div class="form-group">
                <label for="comment">Komentarz:</label>
                <textarea id="comment" name="comment" rows="4" maxlength="512" value="<?= old('comment',$data['comment'])?>"><?= old('comment',$data['comment'])?></textarea>
            </div><br>

            <button type="submit">Zapisz</button>
        </form>
    </div>