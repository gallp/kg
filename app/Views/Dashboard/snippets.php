 <script>

        
            const guardians = <?= json_encode($guardians) ?>;

            const container = document.getElementById('guardians-container');
            let html = '<h3>Opiekunowie:</h3>';

            guardians.forEach(guardian => {
                html += `
                    <div class="guardian">
                        <strong>${guardian.name}</strong><br>
                        Email: ${guardian.email}<br>
                        Telefon: ${guardian.phone}
                        <hr>
                    </div>
                `;
            });

            container.innerHTML = html;


    </script>