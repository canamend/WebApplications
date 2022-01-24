<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix operations</title>
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <h1><a href="../">Operaciones de matrices</a></h1>
    </header>
    <FORM ACTION="operations.php" METHOD="POST">
        <div>
        <label for="fname">Renglones:</label>
        <input type="text" name="Ren">
        <br><br>
        <label for="fname">Columnas:</label>
        <input type="text" name="Col">
        <br><br>
        <p><button type="submit" VALUE="Enviar">Enviar formulario</button></p>
        </div>
    </FORM>
    <main>
        <form action="operations.php" method="post" class="middle">
            <table>
                <h2>A =</h2>
                <tr>
                    <td><input type="number" name="A11" id="" min="-99" max="99"></td>
                    <td><input type="number" name="A12" id="" min="-99" max="99"></td>
                    <td><input type="number" name="A13" id="" min="-99" max="99"></td>
                </tr>
                <tr>
                    <td><input type="number" name="A21" id="" min="-99" max="99"></td>
                    <td><input type="number" name="A22" id="" min="-99" max="99"></td>
                    <td><input type="number" name="A23" id="" min="-99" max="99"></td>
                </tr>
                <tr>
                    <td><input type="number" name="A31" id="" min="-99" max="99"></td>
                    <td><input type="number" name="A32" id="" min="-99" max="99"></td>
                    <td><input type="number" name="A33" id="" min="-99" max="99"></td>
                </tr>
            </table>

            <select name="Opcion" id="">
                <option value="1"> + </option>
                <option value="2"> - </option>
                <option value="3"> * </option>
                <option value="4"> T </option>
            </select>
            
            <table>
                <h2>B =</h2>
                <tr>
                    <td><input type="number" name="B11" id="" min="-99" max="99"></td>
                    <td><input type="number" name="B12" id="" min="-99" max="99"></td>
                    <td><input type="number" name="B13" id="" min="-99" max="99"></td>
                </tr>
                <tr>
                    <td><input type="number" name="B21" id="" min="-99" max="99"></td>
                    <td><input type="number" name="B22" id="" min="-99" max="99"></td>
                    <td><input type="number" name="B23" id="" min="-99" max="99"></td>
                </tr>
                <tr>
                    <td><input type="number" name="B31" id="" min="-99" max="99"></td>
                    <td><input type="number" name="B32" id="" min="-99" max="99"></td>
                    <td><input type="number" name="B33" id="" min="-99" max="99"></td>
                </tr>
            </table>
        </form>

        <div class="middle">
            <table>
                <h2>R =</h2>
                <tr>
                    <td><input type="number" name="R11" id="" min="-99" max="99"></td>
                    <td><input type="number" name="R12" id="" min="-99" max="99"></td>
                    <td><input type="number" name="R13" id="" min="-99" max="99"></td>
                </tr>
                <tr>
                    <td><input type="number" name="R21" id="" min="-99" max="99"></td>
                    <td><input type="number" name="R22" id="" min="-99" max="99"></td>
                    <td><input type="number" name="R23" id="" min="-99" max="99"></td>
                </tr>
                <tr>
                    <td><input type="number" name="R31" id="" min="-99" max="99"></td>
                    <td><input type="number" name="R32" id="" min="-99" max="99"></td>
                    <td><input type="number" name="R33" id="" min="-99" max="99"></td>
                </tr>
            </table>
        </div>
        <div class="middle">
            <button>Calcular</button>
            <button>Limpiar</button>
        </div>
    </main>
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