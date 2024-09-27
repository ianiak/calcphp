<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <main>
        <form action="script.php" method="post">
            <label for="numero">
                <input type="number" name="base" id="base">
                </label><br>
                <label for="expoente">
                    <input type="number" name="expoente" id="expoente">
                </label><br>
                <label for="conta">Somar
                <input type="radio" name="conta" id="conta" value="somar">
            </label><br>
            <label for="conta">Subtrair
                <input type="radio" name="conta" id="conta" value="subtr">
            </label><br>
            <label for="conta">Dividir
                <input type="radio" name="conta" id="conta" value="dividir">
            </label><br>
            <label for="conta">Multiplicar
                <input type="radio" name="conta" id="conta" value="multiplicar">
            </label><br>

            </label>
            <label for="submit">
                <input type="submit" value="submit">
            </label>


        </form>
    </main>

</body>
</html>