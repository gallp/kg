<div class="form-container">
        <h2>Formularz Wpisu Gościa</h2>
        
            <div class="form-group">
                <label for="fname">Imię:</label>
                <input type="text" id="fname" name="fname" required>
            </div>

            <div class="form-group">
                <label for="sname">Nazwisko:</label>
                <input type="text" id="sname" name="sname" value="<?=old("name", $data["sname"])?>" required>
            </div>

            <div class="form-group">
                <label for="guest_company">Firma Gościa:</label>
                <input type="text" id="guest_company" name="guest_company" required>
            </div>

            <div class="form-group">
                <label for="guest_count">Liczba Gości:</label>
                <input type="number" id="guest_count" name="guest_count" min="1" required>
            </div>

            <div class="form-group">
                <label for="guardian">Opiekun:</label>
                <select id="guardian" name="guardian" required>
                    <option value="">Wybierz opiekuna</option>
                    <?php foreach($guardians as $guardian):?>
                        <option value="<?= esc($guardian['id']) ?>"><?= esc($guardian['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="purpose">Cel wizyty:</label>
                <input type="text" id="purpose" name="purpose" required>
            </div>

            <div class="form-group">
                <label for="zone">Strefa:</label>
                <select id="zone" name="zone" required>
                    <option value="">Wybierz strefę</option>
                    <?php foreach($zones as $zone): ?>
                        <option value="<?= esc($zone['id_zone']) ?>"><?= esc($zone['name']) ?></option>
                    <?php endforeach; ?>
                </select>
                </select>
            </div>

            <div class="form-group">
                <label for="exit_date">Data wyjścia:</label>
                <input type="date" id="exit_date" name="exit_date">
            </div>

            <div class="form-group">
                <label for="permanent">Stały dostęp:</label>
                <select id="permanent" name="permanent">
                    <option value="0">Nie</option>
                    <option value="1">Tak</option>
                </select>
            </div>

            <div class="form-group">
                <label for="consent">Zgoda:</label>
                <select id="consent" name="consent">
                    <option value="0">Nie</option>
                    <option value="1">Tak</option>
                </select>        
            </div>

            <div class="form-group">
                <label for="comment">Komentarz:</label>
                <textarea id="comment" name="comment" rows="4" maxlength="512"></textarea>
            </div>

            <button type="submit">Zapisz</button>
        </form>
    </div>