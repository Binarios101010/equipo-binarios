<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <?php
    include 'clases/conexion.php';
    ?>
</head>
<body>
<div>
    <?php
    /*
    Idsueldo
Ejercicio
Fecha_InicioPeriodo
Fecha_TerminoPeriodo
Tipo_Integrante
Clave_nivel
Denominacion_Puesto
Denomiacion_Cargo
Area_Adscripcion
Nombre
Primer_Apellido
Segundo_Apellido
Sexo
Monto_Remuneracion_Bruta
Tipo_Moneda
*/
    $c = new conectar();
    $conexion = $c->conexion();
    $sql = "SELECT * from sueldos";
    $result = mysqli_query($conexion, $sql);

    ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
                <caption><label>Declaración</label></caption>
                <tr>
                    <td>ID</td>
                    <td>Ejercicio</td>
                    <td>Fecha I</td>
                    <td>Fecha F</td>
                    <td>Tipo Integrante</td>
                    <td>Clave Nivel</td>
                    <td>Denominacón Puesto</td>
                    <td>Denominación cargo</td>
                </tr>

                <?php while($ver=mysqli_fetch_row($result)): ?>

                    <tr>
                        <td><?php echo $ver[0]; ?></td>
                        <td><?php echo $ver[1]; ?></td>
                        <td><?php echo $ver[2]; ?></td>
                        <td><?php echo $ver[3]; ?></td>
                        <td><?php echo $ver[4]; ?></td>

                        <td><?php echo $ver[5]; ?></td>
                        <td><?php echo $ver[6]; ?></td>
                        <td><?php echo $ver[7]; ?></td>

                    </tr>
                <?php endwhile; ?>
            </table>

        </div>
        <div class="col-sm-2"></div>
    </div>
</div>

<script>
    /* obtenerTabla();
     function obtenerTabla(){
         fetch('http://localhost:8080/sisttec/backend/api/')
             .then(datos=>datos.json())
             .then(datos=>{
                 var resultado = document.getElementById('registro');
                 resultado.innerHTML="";
                 for(let dato of datos){
                     resultado.innerHTML +=
                         `
          <th scope="row">1</th>
         <td>${dato.Ejercicio}</td>
           <td>${dato.Fecha_Inicio_Periodo_Informa}</td>





         `;
                 }


             })
     }*/
</script>
</body>
</html>
