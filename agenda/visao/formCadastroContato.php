<h1>Cadastrar Contato</h1>

<form action="contato.php?fun=cadastrar" method="POST" enctype="multipart/form-data">

    <label for="nome"> Nome: </label>
    <input type="text" id="nome" name="nome" /> <br />

    <label for="email"> Email: </label>
    <input type="text" id="email" name="email" /> <br />

    <label for="telefone"> Telefone: </label>
    <input type="text" id="telefone" name="telefone" /> <br />

    <input type="submit" name="enviar" value="enviar">

</form>