<section class="full-box nav-lateral">
    <div class="full-box nav-lateral-bg" onclick="show_nav_lateral()" ></div>
    <div class="full-box nav-lateral-content scroll">
        <figure class="full-box nav-lateral-avatar">
            <i class="far fa-times-circle" onclick="show_nav_lateral()" ></i>
            <img src="<?php echo SERVERURL; ?>vistas/assets/avatar/<?php echo $_SESSION['foto_sto']; ?>" class="img-fluid" alt="Avatar">
            <figcaption class="roboto-medium text-center">
                <?php echo $_SESSION['nombre_sto']; ?> <br><small class="roboto-condensed-light"><?php echo $_SESSION['cargo_sto']; ?></small>
            </figcaption>
        </figure>
        <div class="full-box nav-lateral-bar"></div>
        <nav class="full-box nav-lateral-menu">
            <ul>
                
                <?php if($_SESSION['cargo_sto']=="Administrador"){ ?>
             
                <?php } ?>

                
                
                <li>
                    <a href="javascript:void(0);" class="nav-btn-submenu"><i class="fas fa-box-open fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <?php if($_SESSION['cargo_sto']=="Administrador"){ ?>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/product-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar producto</a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/product-list/"><i class="fas fa-boxes fa-fw"></i> &nbsp; Inventario de productos</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/product-minimum/"><i class="fas fa-stopwatch-20 fa-fw"></i> &nbsp; Productos en stock mínimo</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/product-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar producto</a>
                        </li>
                    </ul>
                </li>

                

                <?php if($_SESSION['cargo_sto']=="Administrador"){ ?>
                
                <?php } ?>

               

               

                <li>
                    <a href="javascript:void(0);" onclick="cerrar_sesion_administrador()" ><i class="fas fa-sign-out-alt fa-fw"></i> &nbsp; Cerrar sesión</a>
                </li>
            </ul>
        </nav>
    </div>
</section>