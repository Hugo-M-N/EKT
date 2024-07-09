<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form action="/olvide" method="post" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" name="email" id="email" class="formulario__input" placeholder="Tu Email">
        </div>

        <input type="submit" value="Reestablecer" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Crea una</a>
    </div>
</main>