<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/generador_reportes.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include "components/navbar.php"; ?>
    <div class="container-sm container-md container-lg container-xl container-xxl">
        <form action="" method="post">
            <section class="forms-transmetro">
                <label for="fecha_inicial">Fecha Inicial</label>
                <input class="inputs-group-transmetro" type="date">

                <label for="fecha_final">Fecha Final</label>
                <input class="inputs-group-transmetro" type="date">

                <label for="metodo_pago">Metodos de Pagos</label>
                    <select class="select-group-transmetro" name="metodo_pago" id="metodo_pago" class="select-group-transmetro">
                        <option value="metodo_qr">QR</option>
                        <option value="metodo_tarjeta">Tarjeta</option>
                    </select>
            </section>
            <section class="forms-transmetro">
                <label for="campos">Campos</label>
                    <select class="select-group-transmetro" name="campos" id="campos" class="select-group-transmetro">
                        <option value="...">campo 1</option>
                        <option value="...">campo 2</option>
                        <option value="...">campo 3</option>
                        <option value="...">campo 4</option>
                        <option value="...">campo 5</option>
                    </select>


                <label for="operador">Operador</label>
                    <select class="select-group-transmetro" name="operador" id="operador">
                        <option value="greather"> > </option>
                        <option value="less">
                            < </option>
                        <option value="greather_than"> >= </option>
                        <option value="less_than">
                            <= </option>
                        <option value="equals"> = </option>
                        <option value="different">
                            <>
                        </option>
                    </select>

                <label for="campos">Valores</label>
                <input class="inputs-group-transmetro" type="text">

                <label for="campos">Orden</label>
                <select class="select-group-transmetro" name="campos" id="campos">
                    <option value="ascendente">ASC</option>
                    <option value="descendente">DESC</option>
                </select>
            </section>
            <div class="buttons-send-information">
                <input id="save-button" type="submit" value="Generar Reporte">
            </div>
        </form>
        <div class="row">
            <div class="table-responsive pt-5 text-center">
                <table class="table mb-5"  id="table_id">
                    <thead class="tbl-head-custom">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Afluencia</th>
                            <th scope="col">Codigo de Equipo</th>
                            <th scope="col">Estacion</th>
                            <th scope="col">LINEA</th>
                            <th scope="col">DIA</th>
                            <th scope="col">MES</th>
                            <th scope="col">AÑO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>32 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>11</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>28 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>12</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>24 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>13</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <!--HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH-->
                        <tr>
                            <th scope="row">5</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>20 </td>
                            <td> TZ9100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td>20 </td>
                            <td> TW32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td>20 </td>
                            <td> TI32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">18</th>
                            <td>20 </td>
                            <td> TO32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">19</th>
                            <td>20 </td>
                            <td> TR32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">20</th>
                            <td>20 </td>
                            <td> TA32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">21</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">22</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">23</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">24</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">25</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">26</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">27</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">28</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">29</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <th scope="row">30</th>
                            <td>20 </td>
                            <td> TE32100032</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>11</td>
                            <td>2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-12 mb-5">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Descargar Reporte
            </button>

            <!-- Modal -->
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Generar Reporte</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Usted descargara el siguiente reporte </br>
                            ¿Desea realizar esta accion?
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Descargar</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="./scripts/tabla_transmetro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>


<!-- 
    <div class="container-sm container-md container-lg container-xl container-xxl">
        <div class="row ">
        </div>

    </div>
-->