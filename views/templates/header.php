<header class="header">
    <div class="header__contenedor">
        <nav class="header__navegacion">
            <!-- Implementar Inicio de sesión, registro de usuario y verefidicación de administrador -->
        </nav>

        <div class="header__contenido">
            <a href="/">
                <h1 class="header__logo">
                    EKT
                </h1>
            </a>

            <p class="header__texto">Velas Aromaticas Artesanales</p>
        </div>
    </div>
</header>
<div class="barra">
    <div class="barra__contenido">
        <nav class="navegacion">
            <a href="/" class="navegacion__enlace <?php echo pagina_actual('/') ? 'navegacion__enlace--actual' : '' ?>">blog</a>
            <a href="/tienda" class="navegacion__enlace <?php echo pagina_actual('/tienda') ? 'navegacion__enlace--actual' : '' ?>">tienda</a>
        </nav>
    </div>
</div>