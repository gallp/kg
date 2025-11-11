<div class="form-container">
        
        <h2>Formularz Wpisu Opiekuna</h2>

                <div class="form-group">
                <label for="name">Imię i Nazwisko:</label>
                <input type="text" id="name" name="name" 
                        value="<?= old("name", $data["name"])?>" required>
                </div><br>

                <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" 
                        value="<?= old("email", $data["email"])?>" required>
                </div><br>

                <div class="form-group">
                <label for="id_department">Dział:</label>
                <select id="id_department" name="id_department" required>
                    
                    <option value="<?= esc($data['id_department'])?>"><?= esc($data['department_name'])?></option>
                    
                    <?php foreach($departments as $department):?>
                        <option value="<?= esc($department['id']) ?>"><?= esc($department['name']) ?></option>
                    <?php endforeach; ?>
                </select>
                </div><br>
                
                <div class="form-group">
                <label for="phone">Telefon:</label>
                <input type="text" id="phone" name="phone" 
                        value="<?= old("phone", $data["phone"])?>" required>
                </div><br>


                <button>Zapisz</button>

</div>