<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="utf-8">
    <title>Validador HASH</title>
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    <!-- Bootstrap -->


</head>
<body class="jumbotron">



    <div class="container">
        <div class="card">
            <div class="card-block text-center">
                <img src="images/logotipo.png" class="card-img-center img-logo">
            </div>
            <div class="card-block">
                <div class="col-12">
                    <form id="form" role="form" method="post" class="form-horizontal"> <!-- name="form1" role="form1"-->
                        <div class="row">
                            <div class="col-3">
                                <span class="form-control-feedback"> ID</span>
                                <input id="id" name="id" type="text" placeholder="Enter ID" class="form-control" autofocus >
                            </div>
                            <div class="col-6">
                                <span class="form-control-feedback"> HASH</span>
                                <input id="hash" name="hash" type="text" class="form-control"  placeholder="Enter HASH">
                            </div>
                            <div class="col-3 text-center" style="margin-top: 23px">
                                <button class="btn btn-info btn-outline-info" type="submit"id="enviar">Send</button>
                            </div>
                            <input type="hidden" id="metodo" value="formulario-ajax" />
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span class="form-control-feedback"> JSON RETURN</span>
                                <textarea name="texto" id="texto" cols="auto" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal"  ></div>


    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="jquery-1.3.2.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <!-- JQuery -->

    <script src="js/form-validacao.js"></script>

</body>
</html>










