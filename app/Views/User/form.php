<div class="form-container">
        
<h2>Formularz edycji Użytkownika</h2>

        <div class="form-group">
        <label for="username">Nazwa:</label>
        <input type="text" id="username" name="username" 
                value="<?= old("username", $data->username)?>" required>
        </div><br>

        <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" 
                value="<?= old("email", $data->email)?>" required>
        </div><br>

        <div class="form-group">
        <label for="password">Zmiana hasła:</label>
        <input type="password" id="password" name="password" 
                value="">
        </div><br>


        <div class="form-group">
                <label class="form-label fw-bold">Przypisz grupy:</label><br>
    
                <?php foreach ($groups as $group): ?>
                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="groups[]" 
                                        value="<?= $group ?>" 
                                        id="group_<?= $group ?>"
                                        <?= in_array($group, $userGroups) ? 'checked' : '' ?>>
                                <label class="form-check-label" for="group_<?= $group ?>"><?= $group ?></label>
                        </div>
                <?php endforeach; ?>
        </div>

        </div><br>
<button>Zapisz</button>

</div>