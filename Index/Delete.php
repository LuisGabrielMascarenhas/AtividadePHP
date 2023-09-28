<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero - Delete</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>

<body>
    <Form action="v1/Api.php?apicall=deletehero" method="post">
    <div class="Formulario">
    
        <h1>Deletar os Herois</h1>
        

            <div class="label">
                <label for="id">ID:</label>
                <input class="input" type="number" name="id" id="id" placeholder="Insira o id do heroi">
            </div>
           
            <button type="submmit">Enviar</button>

            

   
    </div>
 </Form>
    <a href="Index.php" target = "_self"> Voltar</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>