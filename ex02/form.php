<!DOCTYPE html>
<html lang="pt=br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="action.php" method="post">
        <fieldset>
            <h2>Formulario teste</h2>
            <label>Nome:</label>
            <input type="text" placeholder="Nome" name="nome">
            <label>E-mail:</label>
            <input type="email" placeholder="E-MAIL" name="email">
            <label>Senha:</label>
            <input type="passoword" placeholder="SENHA" name="senha">

            <label>Sexo:</label>
            <input type="radio" id="idhtml" name="sexo" value="N/A">
            <label for="idhtml">N/A</label>
            <input type="radio" id="idcss" name="sexo" value="Feminino">
            <label for="idcss">Feminino</label>
            <input type="radio" id="idjava" name="sexo" value="Masculino">
            <label for="idjava">Masculino</label>

            <select name="estado">
                <option value="">Selecione</option>
                <option value="AC">Acre</option>
                <option value="MG">Minas Gerais</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
            </select><br>

            <input type="submit">
            <input type="reset" value="Limpar">
        </fieldset>
    </form>
    </select>
</body>

</html>