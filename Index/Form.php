<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>
<body>
    <Form action = "v1/Api.php?apicall=createhero" method = "post" >
    <div  class = "Formulario">
            <div class = "label">
                <label for="name">Nome:</label>
                <input class = "input" type="text" name = "name" id = "name" placeholder = "Insira o nome">
            </div>
        
            <div>
                <label for="realname">Nome Real:</label>
                <input type="text" name = "realname" id = "realname" placeholder = "Insira o nome real">
            
            </div>
            <p>Rating</p>
            <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" name="rating" id="rating" value="1">
                <label class="form-check-label" for="inlineRadio1">1</label>
                
            </div>
            <div class="form-check form-check-inline">
                
                <input class="form-check-input" type="radio" name="rating" id="rating" value="2">
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="rating" value="3">
                <label class="form-check-label" for="inlineRadio3">3 </label>
            </div>
             
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="rating" value="4">
                <label class="form-check-label" for="inlineRadio4">4 </label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="rating" value="5">
                <label class="form-check-label" for="inlineRadio5">5 </label>
            </div>

        <div>
            <label for="teamaffiliation">Team Affiliation</label>
            <input type="text" name = "teamaffiliation" id = "teamaffiliation" placeholder = "Insira a afiliação">
            
        </div>
            <button type = "submmit">Enviar</button>

        </Form>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>