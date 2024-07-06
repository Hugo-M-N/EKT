<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <?php
    require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form action="/login" method="post" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" name="email" id="email" placeholder="Tu email" class="formulario__input">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input type="password" name="password" id="password" placeholder="Tu password" class="formulario__input">
        </div>

        <input type="submit" value="Iniciar Sesión" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Crea una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
    </div>
</main>