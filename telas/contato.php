<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <style>
        
        body{font-family:Arial, Helvetica, sans-serif; background: #212529;}
        .content{display:flex; justify-content:center}
        .contanto{width:100%; max-width:500px;}
        .form{display:flex;flex-direction:column}
        .h3{}
        .field{padding:10px;margin-bottom:15px; border:1px solid #ddd;border-radius:5px;font-family:Arial, Helvetica, sans-serif; font-size:16px}
        textarea{height:150px;}
    </style>
</head>
<body>
    <section class="content">
        <div class="contato">
            <br><br>
            <a href="index.php">
        <img src="../images/icone" alt="">
        </a>
        <br><br>
        <font color ="#E75C0F">
            <h3 style="text-align:center">Formulário de contato</h3>
            </font>
            <form class="form" method="POST" action="index.php">
                <input class="field" type="text" name="name" placeholder="Nome">
                <input  class= "field" type="text" name="email" placeholder="Email">
                <textarea class ="field" name="message" placeholder="Digite sua mensagem ">

                </textarea>
                <input class = "field" type="submit" value="Enviar" style ="background-color:#E75C0F; border-color:#E75C0F">

            </form>            
        </div>
    </section>
    
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>