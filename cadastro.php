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
        <div id="cadastro" class="container my-1 py-1">
            <div class="row text-center align-items-center">
                <!-- Coluna Imagem-->
                <div class="col-6 d-flex justify-content-center">
                    <img src="expo.svg" class="img-fluid" alt="Logo ExpoFATEC São Sebastião">
                </div>

                <!-- Coluna Espaçamento-->
                <div class="col-2 d-flex justify-content-center"></div>

                <!-- Coluna Cadastro-->
                <div class="col-4 d-flex justify-content-center flex-column">
                    <h1 class="mb-4">Crie sua conta!</h1>

                    <!-- Campo CPF-->
                     <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="nome" placeholder="Nome">
                        <label for="cpf">Nome</label>
                    </div>
                    <!-- Campo CPF-->
                     <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" maxlength="14">
                        <label for="cpf">CPF</label>
                    </div>
                    <!-- Campo Email-->                    
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="floatingInput">Endereço de Email</label>
                    </div>
                    <!-- Campo Senha-->
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                        <label for="floatingPassword">Senha</label>
                    </div>

                    <div class="container mb-4">
                        <button 
                            type="button" 
                            class="btn btn-outline-danger" 
                            onclick="location.href='cadastroSucesso.php'">
                            Criar
                        </button>
                        <small class="text-muted d-block mt-3">
                        Já criou sua conta?
                        <a href="login.php" class="link-danger text-decoration-none">Clique aqui!</a>
                        </small>
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