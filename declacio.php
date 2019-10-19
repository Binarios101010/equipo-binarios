<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Speech Detection</title>
    <?php
     include 'clases/conexion.php';
    ?>
</head>
<body>

  <div class="words" contenteditable>
  </div>

<script>
  window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

  const recognition = new SpeechRecognition();
  recognition.interimResults = true;
  recognition.lang = 'es-MX';

  let p = document.createElement('p');
  const words = document.querySelector('.words');
  words.appendChild(p);

  recognition.addEventListener('result', e => {
    const transcript = Array.from(e.results)
      .map(result => result[0])
      .map(result => result.transcript)
      .join('');

      const poopScript = transcript.replace(/poop|poo|shit|dump/gi, '💩');
      p.textContent = poopScript;

      if (e.results[0].isFinal) {
        p = document.createElement('p');
        words.appendChild(p);
      }
  });

  recognition.addEventListener('end', recognition.start);

  recognition.start();

</script>


  <style>
    html {
      font-size: 10px;
    }

    body {
      background: #ffc600;
      font-family: 'helvetica neue';
      font-weight: 200;
      font-size: 20px;
    }

    .words {
      max-width: 500px;
      margin: 50px auto;
      background: white;
      border-radius: 5px;
      box-shadow: 10px 10px 0 rgba(0,0,0,0.1);
      padding: 1rem 2rem 1rem 5rem;
      background: -webkit-gradient(linear, 0 0, 0 100%, from(#d9eaf3), color-stop(4%, #fff)) 0 4px;
      background-size: 100% 3rem;
      position: relative;
      line-height: 3rem;
    }

    p {
      margin: 0 0 3rem;
    }

    .words:before {
      content: '';
      position: absolute;
      width: 4px;
      top: 0;
      left: 30px;
      bottom: 0;
      border: 1px solid;
      border-color: transparent #efe4e4;
    }
  </style>
<body>
<div>
    <?php
        $c = new conectar();
        $conexion = $c->conexion();
        $sql = "SELECT * from declaracion_patrimonial";
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
                 <td>Clave o Nivel Puesto</td>
                 <td>Denominacion Puesto</td>
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
