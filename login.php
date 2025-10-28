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

        <!-- 1ª DIV - LOGO e LOGIN -->
        <div id="login" class="container my-1 py-1">
            <div class="row text-center align-items-center">
                <!-- Coluna Imagem-->
                <div class="col-6 d-flex justify-content-center">
                    <img src="expo.svg" class="img-fluid" alt="Logo ExpoFATEC São Sebastião">
                </div>
                <!-- Coluna Espaçamento-->
                <div class="col-2 d-flex justify-content-center">
                </div>
                <!-- Coluna Login-->
                <div class="col-4 d-flex justify-content-center flex-column">
                    <h1 class="mb-4">Acesse sua conta!</h1>
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        <small class="text-muted">
                        Esqueceu a senha? 
                        <a href="esqueciSenha.php" class="link-danger text-decoration-none">Recupere aqui!</a>
                        </small>
                    </div>

                    <div class="container mb-4">
                        <button 
                            type="button" 
                            class="btn btn-outline-danger" 
                            onclick="location.href='areaLogada.php'">
                            Entrar
                        </button>
                        <small class="text-muted d-block mt-3">
                        Ainda não tem uma conta? 
                        <a href="cadastro.php" class="link-danger text-decoration-none">Clique aqui!</a>
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