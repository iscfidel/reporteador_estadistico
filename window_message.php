<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/window.message.css">
</head>

<body>
    <button onclick="document.getElementById('id01').style.display='block'">Open Modal</button>

    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal" >×</span>
        <form class="modal-content" action="/action_page.php">
            <div class="container">
                <h1>Generar Reporte</h1>
                <p>¿Desea descargar el Reporte?</p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Generar Reporte</button>
                </div>
            </div>
        </form>
    </div>
    <script src="./scripts/window_message.js"></script>
</body>

</html>