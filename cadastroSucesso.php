    <!-- Head -->
    <?php
    require_once 'head.php';
    ?>

<body class= bg-light>
    <!-- Navbar -->
    <?php
    require_once 'navbar.php';
    ?>
    
    <!-- DIV - TUDO -->
    <div class="container-fluid pt-5 BG">

        <!-- 1ª DIV - LOGO e CADASTRO -->
        <div id="cadastroSucesso" class="container my-1 py-1">
            <div class="row text-center align-items-center">
                <!-- Coluna Imagem-->
                <div class="col-6 d-flex justify-content-center">
                    <img src="expo.svg" class="img-fluid" alt="Logo ExpoFATEC São Sebastião">
                </div>

                <!-- Coluna Espaçamento-->
                <div class="col-2 d-flex justify-content-center"></div>

                <!-- Coluna Cadastro-->
                <div class="col-4 d-flex justify-content-center flex-column">
                    <h2 class="mb-4">Cadastro realizado</h2>
                    <small class="text-muted">
                        Cadastro realizado com sucesso, faça login agora!
                    </small>
                    <div class="container mt-4">
                        <button 
                            type="button" 
                            class="btn btn-outline-danger" 
                            onclick="location.href='login.php'">
                            Faça Login
                        </button>
                    </div>    
               
                </div>
            </div>
        </div>

    </div>   <!-- FIM da DIV - TUDO--> 

    <!-- 5ª DIV - RODAPE -->
    <?php
    require_once 'footer.php';
    ?>


</body>

</html>