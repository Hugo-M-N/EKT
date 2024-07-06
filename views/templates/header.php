<header class="header">
    <i class="fa-sharp fa-solid fa-bars" id="menu-heading"></i>
    <h1 class="header__logo">
        <a href="/">EKT</a>
    </h1>

    <div class="header-menu" id="desplegable">
        <div class="header-menu__heading">
            <i class=" fa-sharp fa-solid fa-bars"></i>
            <h1 class="header__logo">
                <a href="/">EKT</a>
            </h1>
        </div>
        <div class="header-menu__categorias">
            <ul>
                <li><a href="" class="categoria">Premium</a></li>
                <li><a href="" class="categoria">Gourmet</a></li>
                <li><a href="" class="categoria">Basic</a></li>
                <li><a href="" class="categoria">Cera aromática</a></li>
                <li><a href="" class="categoria">Kits de regalo</a></li>
                <li><a href="" class="categoria">Complementos</a></li>
                <li><a href="" class="categoria">Outlet</a></li>
                <li><a href="" class="categoria">Eventos</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="header-session">
    <?php if (is_auth()) { ?>
        <a href="<?php echo is_admin() ? 'admin/dashboard' : '/perfil'; ?>"><?php echo is_admin() ? 'Administrar' : 'Perfil'; ?></a>
        <form method="POST" action="/logout" class="header__form">
            <input type="submit" value="Cerrar Sesión" class="header__submit">
        </form>
    <?php } else { ?>
        <a href="/login">Iniciar sesión</a>
        <a href="/registro">Registrarse</a>
    <?php } ?>

</div>