<section class="contact-section">
    <h2>Formulario de Contacto</h2>

    <?php if (!empty($errors)): ?>
        <div class="error-messages">
            <h4>Errores de validación:</h4>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div class="success-message">
            <p>Formulario enviado correctamente Todos los datos son validos.</p>
        </div>
    <?php endif; ?>

    <form method="POST" action="/contactar" class="contact-form">
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="text" id="email" name="email"
                   value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
                   placeholder="ejemplo@correo.com" required>
            <small>Formato: usuario@dominio.com</small>
        </div>

        <div class="form-group">
            <label for="telefono">Número de Teléfono:</label>
            <input type="text" id="telefono" name="telefono"
                   value="<?php echo isset($_POST['telefono']) ? htmlspecialchars($_POST['telefono']) : ''; ?>"
                   placeholder="####-#### o +503 ####-####" required>
            <small>Formato: ####-#### o +503 ####-####</small>
        </div>

        <div class="form-group">
            <label for="dui">Número de DUI:</label>
            <input type="text" id="dui" name="dui"
                   value="<?php echo isset($_POST['dui']) ? htmlspecialchars($_POST['dui']) : ''; ?>"
                   placeholder="########-#" required>
            <small>Formato: ########-# (8 dígitos, guión, 1 dígito)</small>
        </div>

        <button type="submit">Enviar</button>
    </form>

    <div class="validation-info">
        <h3>Información sobre las validaciones:</h3>
        <ul>
            <li><strong>Correo:</strong> Debe tener formato válido de email</li>
            <li><strong>Teléfono:</strong> Formato (####-#### o +503 ####-####)</li>
            <li><strong>DUI:</strong> Formato (########-#)</li>
        </ul>
        <p>Todas las validaciones se realizan usando expresiones regulares en PHP.</p>
    </div>
</section>