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
        <label for="fname">Renglones:</label>
        <input type="text" name="Ren">
        <br><br>
        <label for="fname">Columnas:</label>
        <input type="text" name="Col">
        <br>
        <p><button type="submit" VALUE="Enviar">Enviar formulario</button></p>
    </FORM>
    <main>
        <form action="operations.php" method="POST">
            <div class="middle">
                <table>
                    <h2>A =</h2>
                    <tr>
                        <td><input type="number" name="A00" id="" min="-99" max="99"></td>
                        <td><input type="number" name="A01" id="" min="-99" max="99"></td>
                        <td><input type="number" name="A02" id="" min="-99" max="99"></td>
                    </tr>
                    <tr>
                        <td><input type="number" name="A10" id="" min="-99" max="99"></td>
                        <td><input type="number" name="A11" id="" min="-99" max="99"></td>
                        <td><input type="number" name="A12" id="" min="-99" max="99"></td>
                    </tr>
                    <tr>
                        <td><input type="number" name="A20" id="" min="-99" max="99"></td>
                        <td><input type="number" name="A21" id="" min="-99" max="99"></td>
                        <td><input type="number" name="A22" id="" min="-99" max="99"></td>
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
                        <td><input type="number" name="B00" id="" min="-99" max="99"></td>
                        <td><input type="number" name="B01" id="" min="-99" max="99"></td>
                        <td><input type="number" name="B02" id="" min="-99" max="99"></td>
                    </tr>
                    <tr>
                        <td><input type="number" name="B10" id="" min="-99" max="99"></td>
                        <td><input type="number" name="B11" id="" min="-99" max="99"></td>
                        <td><input type="number" name="B12" id="" min="-99" max="99"></td>
                    </tr>
                    <tr>
                        <td><input type="number" name="B20" id="" min="-99" max="99"></td>
                        <td><input type="number" name="B21" id="" min="-99" max="99"></td>
                        <td><input type="number" name="B22" id="" min="-99" max="99"></td>
                    </tr>
                </table>
            </div>

            <div class="middle">
                <button type="submit" VALUE="Calcular">Calcular</button>
                <button type="submit" VALUE="Limpiar">Limpiar</button>
            </div>

            <div class="middle">
                <table>
                    <h2>R =</h2>
                    <tr>
                        <td><input type="number" name="R00" id="" min="-99" max="99"></td>
                        <td><input type="number" name="R01" id="" min="-99" max="99"></td>
                        <td><input type="number" name="R02" id="" min="-99" max="99"></td>
                    </tr>
                    <tr>
                        <td><input type="number" name="R10" id="" min="-99" max="99"></td>
                        <td><input type="number" name="R11" id="" min="-99" max="99"></td>
                        <td><input type="number" name="R12" id="" min="-99" max="99"></td>
                    </tr>
                    <tr>
                        <td><input type="number" name="R20" id="" min="-99" max="99"></td>
                        <td><input type="number" name="R21" id="" min="-99" max="99"></td>
                        <td><input type="number" name="R22" id="" min="-99" max="99"></td>
                    </tr>
                </table>
            </div>
        </form>

        
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