<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <?php if($token_valido) { ?>
        <form method="POST" class="formulario">
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Nuevo Password</label>
                <input type="password" name="password" id="password" class="formulario__input" placeholder="Tu Nuevo Password">
            </div>

            <input type="submit" value="Reestablecer" class="formulario__submit">
        </form>
    <?php } ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Crea una</a>
    </div>
</main>