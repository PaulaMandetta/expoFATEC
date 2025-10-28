    <!-- Head -->
    <?php
    require_once 'head.php';
    ?>

<body>
    <!-- Navbar -->
    <?php
    require_once 'navbar.php';
    ?>
    
    <!-- DIV - TUDO -->
    <div class="container-fluid pt-5 BG">

        <!-- 1ª DIV - LOGO e ESQUECI A SENHA -->
        <div id="home" class="container my-1 py-1">
            <div class="row text-center align-items-center">
                <!-- Coluna Imagem-->
                <div class="col-6 d-flex justify-content-center">
                    <img src="expo.svg" class="img-fluid" alt="Logo ExpoFATEC São Sebastião">
                </div>

                <!-- Coluna Espaçamento-->
                <div class="col-2 d-flex justify-content-center"></div>

                <!-- Coluna Cadastro-->
                <div class="col-4 d-flex justify-content-center flex-column">
                    <h1 class="mb-4">Recupere sua Conta!</h1>
                    <small class="text-muted">
                        Informe seu CPF de cadastro e enviaremos por emais as instruções para recuperação de senha.
                    </small>
                    <!-- Campo CPF-->
                     <div class="form-floating mt-4 mb-4">
                        <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" maxlength="14">
                        <label for="cpf">CPF</label>
                    </div>

                    <div class="container mb-4">
                        <button 
                            type="button" 
                            class="btn btn-outline-danger" 
                            onclick="location.href='recuperacaoEnviada.php'">
                            Recuperar
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