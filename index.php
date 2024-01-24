<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
	
	<title>
		   Q'hubo - El periódico más leído de Colombia	</title>

 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
	<link rel="stylesheet" href="estilos/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <meta name="description" content="El periódico más leído de Colombia">
    <link rel="canonical" href="index.php">
    <link rel="next" href="index.php">
    <meta property="og:locale" content="es_ES">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Q'hubo - El periódico más leído de Colombia">
    <meta property="og:description" content="El periódico más leído de Colombia">
    <meta property="og:site_name" content="Q'hubo">



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener el elemento donde se mostrará la fecha y hora
            var fechaActualElement = document.getElementById("fecha-actual");

            // Función para actualizar la fecha y hora cada segundo
            function actualizarFechaHora() {
                var fechaHoraActual = new Date();
                var opciones = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: false };
                var fechaHoraTexto = fechaHoraActual.toLocaleString('es-ES', opciones);
                fechaActualElement.textContent = fechaHoraTexto;
            }

            // Actualizar la fecha y hora cada segundo
            setInterval(actualizarFechaHora, 1000);

            // Llamar a la función inicialmente para mostrar la fecha y hora al cargar la página
            actualizarFechaHora();
        });
    </script>


</head>

<body class="home blog wpb-js-composer js-comp-ver-4.8.1 vc_responsive">
	<div class="wrapper">
    			<div class="anuncio">
				
			
        </div>
        <div class="content-wrap">
		<header id="encabezado">	
            <div class="contenedor-header">
                <div class="logo">
                     <a href="index.php"><h1>Q'hubo</h1><img src="imagenes/logo.png" alt="Logo Q'hubo"></a>
                </div>
                
                <div id="fecha-actual"></div>
                <div class="menu-principal">
                     <nav id="principal">
                        
                        <div class="menu-menu-principal-container"><ul id="menu-menu-principal" class="menu" style="display: block;"><li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8"><a href="index.php">Inicio</a></li>
                                    <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="index.php">Nosotros</a></li>
                                    <li id="menu-item-58" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-58"><a href="#">Versión Impresa</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-121" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-121"><a target="_blank" href="index.php">Barranquilla</a></li>
                                        <li id="menu-item-122" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-122"><a target="_blank" href="index.php">Bogotá</a></li>
                                        <li id="menu-item-123" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-123"><a target="_blank" href="index.php">Bucaramanga</a></li>
                                        <li id="menu-item-124" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-124"><a target="_blank" href="index.php">Cali</a></li>
                                        <li id="menu-item-125" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-125"><a target="_blank" href="index.php">Cartagena</a></li>
                                        <li id="menu-item-126" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-126"><a target="_blank" href="index.php">Cúcuta</a></li>
                                        <li id="menu-item-127" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-127"><a target="_blank" href="index.php">Ibagué</a></li>
                                        <li id="menu-item-128" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-128"><a target="_blank" href="index.php">Manizales</a></li>
                                        <li id="menu-item-129" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-129"><a target="_blank" href="index.php">Medellín</a></li>
                                        <li id="menu-item-130" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-130"><a target="_blank" href="index.php">Pereira</a></li>
                                    </ul>
                                    </li>
                                    <li id="menu-item-85" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-85"><a href="#">Encuéntranos</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88"><a href="index.php">Bogotá</a></li>
                                    </ul>
                                    </li>
                                    <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><a href="index.php">Contáctenos</a></li>

                                    <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">
                                    <?php
                                    // Verificar si el usuario ha iniciado sesión
                                    if (isset($_SESSION["usuario_nombre"])) {
                                        $nombre_usuario = $_SESSION["usuario_nombre"];
                                        echo '<li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"><a href="perfil.php">Bienvenido, ' . $nombre_usuario . '</a></li>';
                                        echo '<li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a href="cerrar_sesion.php">Cerrar sesión</a></li>';
                                    } else {
                                        echo '<li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="login.php">Iniciar sesión</a></li>';
                                    }
                                    ?>
                                    </li>


</ul></div>                    </nav>
                </div>
          	</div>
    	</header>
        
        <div id="banner">

            <div class="tab">

				
                
                <div id="contentid-17674 " class="tab-content" style="display: none;">

                    <img width="911" height="380"  class="attachment-full size-full wp-post-image" alt=""  sizes="(max-width: 911px) 100vw, 911px">
                    <div class="caption">

                        <h2><a href="index.php">Lorem Ipsum</a></h2>

                        <div>

                            <p>A:
                            Lorem Ipsum

&nbsp;

                ... <a href="index.php"></a></p>

                        </div>

                    </div>

                </div>

                
                <div id="contentid-17639 " class="tab-content" style="display: none;">

                    <img width="2000" height="1250"  class="attachment-full size-full wp-post-image" alt=""  sizes="(max-width: 2000px) 100vw, 2000px">
                    <div class="caption">

                        <h2><a href="index.php">Lorem Ipsum</a></h2>

                    
                    </div>

                </div>

                
                <div id="contentid-17581 " class="tab-content" style="display: none;">

                    <img width="2517" height="1409"  class="attachment-full size-full wp-post-image" alt=""  sizes="(max-width: 2517px) 100vw, 2517px">
                    <div class="caption">

                        <h2><a href="index.php">Lorem Ipsum</a></h2>

                        <div>

                            <p>&nbsp;
                            Lorem Ipsum <a href="index.php">[Ver más]</a></p>

                        </div>

                    </div>

                </div>

                
                <div id="contentid-17575 " class="tab-content" style="display: block;">

                <img width="911" height="380" src="imagenes/logo.png" class="attachment-full size-full wp-post-image" alt=""  sizes="(max-width: 911px) 100vw, 911px">
                    <div class="caption">

                        <h2><a href="index.php">Lorem Ipsum</a></h2>

                        <div>

                            <p>&nbsp;
                            Lorem Ipsum<a href="index.php">[Ver más]</a></p>

                        </div>

                    </div>

                </div>

                
                <div id="contentid-17571 " class="tab-content" style="display: none;">

                    <img width="2530" height="1353"  class="attachment-full size-full wp-post-image" alt=""  sizes="(max-width: 2530px) 100vw, 2530px">
                    <div class="caption">

                        <h2><a href="index.php">Lorem Ipsum</a></h2>

                        <div>

                            <p>&nbsp;
                            Lorem Ipsum<a href="index.php">[Ver más]</a></p>

                        </div>

                    </div>

                </div>

                
                
            </div>

            <ul class="tabs-menu">

                
                
                <li id="slideid-17674" class=""><a href="#contentid-17674 "><h3>Lorem Ipsum</h3><p>Lorem Ipsum</p>
</a></li>

                
                <li id="slideid-17639" class=""><a href="#contentid-17639 "><h3>Lorem Ipsum</h3><p>Lorem Ipsum&nbsp;</p>
</a></li>

                
                <li id="slideid-17581" class=""><a href="#contentid-17581 "><h3>Lorem Ipsum</h3><p>&nbsp; Lorem Ipsum</p>
</a></li>

                
                <li id="slideid-17575" class="current"><a href="#contentid-17575 "><h3>Lorem Ipsum</h3><p>&nbsp; Lorem Ipsum</p>
</a></li>

                
                <li id="slideid-17571" class=""><a href="#contentid-17571 "><h3>Lorem Ipsum</h3><p>&nbsp; Lorem Ipsum</p>
</a></li>

                
                
            </ul>

        </div>

        <div id="container">

        	<div class="row margin feature">

				<div class="col margin tres"><h3>Lorem Ipsum</h3><div class="imagen"><p><a href="index.php"><img class="alignnone size-full wp-image-17700" src="imagenes/imagen.jpg" alt="" width="3127" height="2419"></a></p>
</div></div><div class="col margin tres"><h3>Lorem Ipsum</h3><div class="imagen"><p><a href="index.php"><img class="alignnone size-full wp-image-17698" src="imagenes/imagen.jpg" alt="" width="3126" height="2418"></a></p>
</div><div class="destacado"></div></div><div class="col margin tres"><h3>Lorem Ipsum</h3><div class="imagen"><p><a href="index.php"><img class="alignnone size-full wp-image-17701" src="imagenes/imagen.jpg" alt="" width="3127" height="2419"></a></p>
</div></div><div class="col margin tres"><h3>Lorem Ipsum</h3><div class="imagen"><p><a href="index.php"><img class="alignnone size-medium wp-image-16847" src="imagenes/imagen.jpg" alt="" width="600" height="464"></a></p>
</div></div><div class="col margin tres"><h3>Lorem Ipsum</h3><div class="imagen"><p><a href="index.php"><img class="alignnone size-full wp-image-17702" src="imagenes/imagen.jpg" alt="" width="3127" height="2419"></a></p><a href="https://www.qhubo.com/anunciantes/">

</div></div>
			</div>

			

        </div>

   	</div>

        

				
		

    </div>
    <div id="footer">
    	<div class="wrapper">
            			<div class="row margin">
            	<div class="col margin dosquintos">
                	<div id="wp_editor_widget-9" class="widget WP_Editor_Widget"><p><img class="aligncenter size-full wp-image-7" src="https://www.qhubo.com/wp-content/uploads/qhubo-foot.png" alt="Logo Q'hubo" width="137" height="56"></p>
<p>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
</div>                </div>
                <div class="col margin cinco">
                	<div id="wp_editor_widget-8" class="widget WP_Editor_Widget"><h4>Quienes somos</h4><ul>
<li><a href="index.php">Misión</a></li>
<li><a href="index.php">Visión</a></li>
<li><a href="index.php">Valores</a></li>
</ul>
</div>                </div>
                <div class="col margin cinco">
                	<div id="wp_editor_widget-10" class="widget WP_Editor_Widget"><h4>Enlaces</h4><ul>
<li><a href="index.php" target="_blank">Promociones</a></li>
<li><a href="index.php">Distribución</a></li>
<li><a href="index.php">Chicas Q’hubo</a></li>
<li><a href="index.php">Edición Impresa</a></li>
<li><a href="index.php">Contacto</a></li>
<li><a href="index.php">Aviso Legal</a></li>
</ul>
</div>                </div>
                <div class="col margin cinco">
                	<div id="wp_editor_widget-11" class="widget WP_Editor_Widget"><p><a href="index.php" target="_blank"><img class="aligncenter size-full wp-image-14" src="imagenes/imagen.jpg" alt="feature3" width="750" height="580"></a></p>
</div>                </div>
            </div>
            		</div>
  	</div>
   
</body></html>