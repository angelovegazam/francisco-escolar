<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'head.php' ?>
    <title>Registro de estudiantes</title>
</head>
<body class="body">

    <header class="header">
        <?php require 'header.php' ?>
    </header>

    <main class="main-registro">

            <h1 class="titulo-planilla">
                Registro de Estudiante
            </h1><br><br>

            <form class="formulario-planilla" id="formulario-planilla" action="save_task.php" method="POST">

                <div class="form-datos-grupos formulario-datos-estudiantes">
                    <p class="sub-titulos">Datos del estudiante</p><br><br>
                    <input type="text" style="text-transform: uppercase;" maxlength="30" name="nombres" id="nombres" required placeholder="Nombres">
                    <input type="text" style="text-transform: uppercase;" maxlength="30" name="apellidos" id="apellidos" required placeholder="Apellidos">
                    <!-- <select name="tipo_ci" id="tipo_ci" style="width:50px; height:35px; margin:10px 5px; padding:5px;">
                        <option value="V">V</option>
                        <option value="E">E</option>
                    </select> -->
                    <input type="text" style="text-transform: uppercase;" maxlength="12" name="cedula_identidad" id="cedula_identidad" required placeholder="Cedula ej: V-00.000.000">
                    <input type="text" style="text-transform: uppercase;" maxlength="15" name="cedula_escolar" id="cedula_escolar" placeholder="Cedula Escolar">
                    <input type="date" style="text-transform: uppercase;" name="fecha_nacimiento" id="fecha_nacimiento" required>
                    <select name="sexo" id="sexo" class="input">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                    <input type="text" style="text-transform: uppercase;" maxlength="250" name="lugar_nacimiento" id="lugar_nacimiento" required placeholder="Lugar de nacimiento">
                    <input type="text" style="text-transform: uppercase;" maxlength="250" name="direccion_actual" id="direccion_actual" required placeholder="Detalle dirección actual">
                    <input type="text" style="text-transform: uppercase;" maxlength="250" name="punto_referencia" id="punto_referencia" required placeholder="Punto de referencia">
                    <input type="email" style="text-transform: lowercase;" maxlength="50" name="correo_electronico" id="correo_electronico" required placeholder="correoeletronico@email.com">
                    <input type="int" style="text-transform: uppercase;" maxlength="11" name="numero_telefono" id="numero_telefono" required placeholder="Numero de telefono">
                </div><br><br>



                <div class="form-datos-grupos formulario-datos-representante">
                    <p class="sub-titulos">Datos del Representante</p><br><br>
                    <input type="text" style="text-transform: uppercase;" maxlength="30" name="nombres_repre" id="nombres_repre" required placeholder="Nombres">
                    <input type="text" style="text-transform: uppercase;" maxlength="30" name="apellidos_repre" id="apellidos_repre" required placeholder="Apellidos">
                    <!-- <select name="tipo_ci_repre" id="tipo_ci_repre" style="width:50px; height:35px; margin:10px 5px; padding:5px;">
                        <option value="V">V</option>
                        <option value="E">E</option>
                    </select> -->
                    <input type="text" style="text-transform: uppercase;" maxlength="12" name="cedula_id_repre" id="cedula_id_repre" required placeholder="Cedula ej: V-00.000.000">
                    <input type="text" style="text-transform: uppercase;" maxlength="250" name="lugar_nac_repre" id="lugar_nac_repre" required placeholder="Lugar de nacimiento">
                    <input type="text" style="text-transform: uppercase;" maxlength="20" name="parentesco_repre" id="parentesco_repre" required placeholder="Parentesco con el estudiante">
                    <select name="estado_civil_repre" id="estado_civil_repre" class="input">
                        <option value="Soltero(a)">Soltero(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                    </select>
                    <input type="email" style="text-transform: lowercase;" maxlength="50" name="correo_electronico_repre" id="correo_electronico_repre" required placeholder="correoeletronico@email.com">
                    <input type="int" style="text-transform: uppercase;" maxlength="11" name="numero_telefono_repre" id="numero_telefono_repre" required placeholder="Numero de telefono">
                    <input type="int" style="text-transform: uppercase;" maxlength="11" name="numero_telefono_repre_otro" id="numero_telefono_repre_otro" placeholder="Otro telefono (Opcional)">
                </div><br><br>


                <input class="form-boton-submit" type="submit" value="Registrar">
                
            </form>

        </main>

    <footer class="footer">
        <?php require 'footer.php' ?>
    </footer>

</body>
</html>