
   
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reserva</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/reserva.css">
    </head>
    <style>
        body{
            background:##212529;
        }
    </style>
    <body>
        
        <section class = "banner">
            
            <div class = "card-container">
                <div class = "card-img">
                    <a href="index.php">
                    <img src="../images/icone.png" alt="">
                 </a>
                </div>

                <div class = "card-content">
                    <h3>Reserva</h3>
                    <form class="form" method="POST" action="index.php">
                        <div class = "form-row">
                            <select name = "dia">
                                <option value = "day-select">Selecione o dia</option>
                                <option value = "segunda">Segunda</option>
                                <option value = "terça">Terça</option>
                                <option value = "quarta">Quarta</option>
                                <option value = "quinta">Quinta</option>
                                <option value = "sexta">Sexta</option>
                                <option value = "sabado">Sábado</option>
                                <option value = "domingo">Domingo</option>
                            </select>

                            <select name = "hora">
                                <option value = "hour-select">Selecione a hora</option>
                                <option value = "10">10: 30</option>
                                <option value = "10">12: 30</option>
                                <option value = "10">14: 30</option>
                                <option value = "10">16: 30</option>
                                <option value = "10">19: 30</option>
                                <option value = "10">21: 30</option>
                                <option value = "10">22: 30</option>
                            </select>
                        </div>

                        

                        <div class = "form-row">
                            <input type = "number" placeholder="Quantas pessoas?" min = "1" max="5">
                            <input type = "submit" value = "Confirmar" style ="background-color:#E75C0F; border-color:#E75C0F" >
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
    </body>
</html>
