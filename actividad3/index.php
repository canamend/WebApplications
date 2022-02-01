<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix operations</title>
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex flex-column min-vh-100">
        <header class="mb-5">
            <h1><a href="../">Operaciones de matrices</a></h1>
        </header>
        <FORM ACTION="operations.php" METHOD="POST">
            <div class="row">
                <div class="input-group mb-3 col">
                    <label for="fname">Renglones: </label>
                    <input type="number" name="Ren" class="form-control" placeholder="Renglones">
                </div>
                <div class="input-group mb-3 col">
                    <label for="fname">Columnas: </label>
                    <input type="number" name="Col" class="form-control" placeholder="Columnas">
                </div>
                
            </div>
            <div class="row">
                <div class="input-group mb-3 col">
                    <label for="fname">Renglones 2: </label>
                    <input type="number" name="Ren2" class="form-control" placeholder="Renglones2"><br>
                </div>
                <div class="input-group mb-3 col">
                    <label for="fname">Columnas 2: </label>
                    <input type="number" name="Col2" class="form-control" placeholder="Columnas2">
                </div>
            </div>
            <div class="row">
                <div class="col-4 mb-3">
                    <select name="Opcion" id="" class="form-select">
                        <option selected>Seleccione la operación a realizar</option>
                        <option value="1"> Suma (+) </option>
                        <option value="2"> Resta (-) </option>
                        <option value="3"> Multiplicación (*) </option>
                        <option value="4"> Transformada (T) </option>
                    </select>
                </div>
                <p><button type="submit" VALUE="Enviar" class="btn btn-primary">Calcular</button></p>
            </div>
        </FORM>
    </div>
    <footer>
        <div>
            <ul>
                <li>BUAP</li>
                <li>F.C.C</li>
                <li>Aplicaciones WEB</li>
                <li>2022</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Canalizo Mendoza Isaac A.</li>
                <li>De La Cruz Huerta Jonathan</li>
                <li>Angel Hernandez Ramos</li>
                <li>Pérez Hernandez Jorge S.</li>
            </ul>
        </div>
    </footer>
</body>
</html>