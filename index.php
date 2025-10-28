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

        <!-- 1ª DIV - LOGO -->
        <div id="home" class="container my-1 py-1 border-bottom border-danger">
            <div class="row text-center align-items-center">
                <div class="col-12 d-flex justify-content-center">
                    <img src="expo.svg" class="img-fluid" alt="Logo ExpoFATEC São Sebastião">
                </div>
            </div>
        </div>

        <!-- 2ª DIV - LOGIN -->
        <div id="login" class="container my-2 py-5 border-bottom border-danger">
            <div class="row text-center align-items-center">
                <div class="col-6 d-flex justify-content-center">
                    <h1>Está participando 
                    </br>da Expo FATEC?</h1>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-outline-danger" onclick="location.href='login.php'">Acessar</button>
                </div>
            </div>
        </div>

        <!-- 3ª DIV - SOBRE -->
        <div id="sobre" class="container my-2 py-5 border-bottom border-danger">
            <div class="row align-items-center">
                <div class="col-2 d-flex justify-content-center">
                    <h1>Sobre</h1>
                </div>
                <div class="col-10"> 
                    <h5>FATEC São Sebastião</h5>  
                    <p>A FATEC São Sebastião, criada em 2008, é uma instituição pública gratuita do Governo do Estado de São Paulo. Com mais de 800 alunos e mais de 740 profissionais já formados, a faculdade se destaca pela qualidade do ensino e alto índice de empregabilidade, contribuindo para o desenvolvimento da região.</p>
                    <h5>Expo FATEC</h5>  
                    <p>A Expo FATEC São Sebastião é a feira semestral de projetos da instituição. O evento valoriza a prática, a inovação e o empreendedorismo, além de aproximar estudantes, empresas e a comunidade por meio de soluções criativas e tecnológicas.</p>
                
                </div>
            </div>
        </div>

        <!-- 4ª DIV - PROJETOS -->
        <div id="projetos" class="container my-2 py-5">
            <div class="row align-items-center">
                <div class="col-2 d-flex justify-content-center">
                    <h1>Projetos</h1>
                </div>
                <div class="col-10"> 
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Nome Projetos</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Semestre</th>
                            <th scope="col">Orientador</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Organa</td>
                            <td>ADS</td>
                            <td>1º</td>
                            <td>Marcio</td>
                            </tr>
                            <tr>
                            <td>Vamos Juntas</td>
                            <td>ADS</td>
                            <td>2º</td>
                            <td>Douglas</td>
                            </tr>
                            <tr>
                            <td>PataMatch</td>
                            <td>ADS</td>
                            <td>3º</td>
                            <td>Adriano</td>
                            </tr>
                        </tbody>
                    </table>  
                </div>
            </div>
        </div>
    </div>

    <!-- 5ª DIV - RODAPE -->
    <?php
    require_once 'footer.php';
    ?>


</body>

</html>