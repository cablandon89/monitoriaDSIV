<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prestamos</title>
</head>
<body>
  <table border="1" width="100%" id="prestamos">
    <tr><th>Numero prestamo</th><th>Estudiante id</th><th>Libro ISBN</th></tr>

  </table>
  <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
  <script>
    const tabla = $("#prestamos");
    let data= '';
    $( document ).ready(function() {
      $.ajax({
        method: 'POST',
        url: 'listado.php',
        dataType: 'json',
        //data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success:function(r){
          for (const key in r) {
            data = '<tr>';
            data += '<td>' + r[key].numero_prestamo + '</td><td>' + r[key].estudiante_id + '</td><td>' + r[key].libro_isbn + '</td>';
            data += '</tr>';
            tabla.append(data);
          }
          // console.log(r);
        }
      });
    });

  </script>
</body>
</html>