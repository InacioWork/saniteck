<?php
Error_reporting(0);


$host = "localhost";
$user = "root";
$senha = "";
$database = "saniteck";

$con = mysqli_connect($host, $user, $senha, $database);

if (isset($_POST['dados'])) {
    $nome = $_POST['nome'];
    $nota_1 = $_POST['nota_1'];
    $nota_2 = $_POST['nota_2'];
    $nota_3 = $_POST['nota_3'];
    $sugestao = $_POST['sugestao'];

    $query = mysqli_query($con, "INSERT INTO usuario(nome, nota_1, nota_2, nota_3, sugestao) VALUES ('$nome', '$nota_1', '$nota_2', '$nota_3', '$sugestao')");
}

if (isset($_POST['dados'])) {
    header('Location:page2.php');
}





?>




<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />

    <title>Saniteck Feedback</title>
</head>

<body class="cor">
    <form method="POST">
        <div class="container-1"><br>

            <strong>Nome ou Empresa</strong>
            <h1></h1>

            <input type="text" name="nome" style="width: 300px;" required>

            </input>

        </div>

        <div class="container-2">
            <h1></h1>
            <strong>Em uma escala de 1 a 5 qual nota você daria ao nosso atendimento Comercial ?</strong>
            <h1></h1>

            <div class="box">
                <img src="CARINHAS.jpg" alt="" type="small" />
                <div class="butao1">
                    <input type="radio" name="nota_1" value="1" />
                    <strong>1</strong>
                </div>

                <div class="butao2">
                    <input type="radio" name="nota_1" value="2" />
                    <strong>2</strong>
                </div>

                <div class="butao3">
                    <input type="radio" name="nota_1" value="3" />
                    <strong>3</strong>
                </div>

                <div class="butao4">
                    <input type="radio" name="nota_1" value="4" />
                    <strong>4</strong>
                </div>

                <div class="butao5">
                    <input type="radio" name="nota_1" value="5" required />
                    <strong>5 </strong>
                </div>

            </div>

            <div class="container-3">
                <h1></h1>
                <strong>Em uma escala de 1 a 5 qual nota você daria ao nosso serviço Operacional ?</strong>
                <h1></h1>

                <div class="box-2">
                    <img src="CARINHAS.jpg" alt="" type="small" />
                    <div class="butao1">
                        <input type="radio" name="nota_2" value="1" />
                        <strong>1</strong>
                    </div>

                    <div class="butao2">
                        <input type="radio" name="nota_2" value="2" />
                        <strong>2</strong>
                    </div>

                    <div class="butao3">
                        <input type="radio" name="nota_2" value="3" />
                        <strong>3</strong>
                    </div>

                    <div class="butao4">
                        <input type="radio" name="nota_2" value="4" />
                        <strong>4</strong>
                    </div>

                    <div class="butao5">
                        <input type="radio" name="nota_2" value="5" required />
                        <strong>5 </strong>
                    </div>

                </div>

                <div class="container-4">
                    <h1></h1>
                    <strong>Você contrataria o nosso serviço novamente ou indicaria para outras pessoas ?</strong>
                    <h1></h1>
                    <div class="ratings-container-1">
                        <div class="likes">
                            <img src="Legal.png" /><br>
                            <input type="radio" value="Sim" style="margin-left: -5px;" name="nota_3" required><strong>Sim</strong></input>
                        </div>

                        <div class="like">
                            <img src="não legal.png" /><br>
                            <input type="radio" value="Não" name="nota_3"><strong>Não</strong></input>
                        </div>
                    </div>


                </div>

                <div class="container-5"><br>
                    <div class="form">
                        <strong>Sugestões ou Elogios(OPCIONAL)</strong>
                        <h1></h1>
                        <textarea name="sugestao" class="comment" style="width: 300px " rows="5"></textarea><br><br>

                    </div>

                    <div class="enviar">

                        <button type="submit" name="dados" class="efeito efeito-1"> Enviar dados</button>

                    </div><br>
                </div>



    </form>

</body>

</html>