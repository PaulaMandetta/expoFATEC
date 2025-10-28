<!-- Head -->
    <?php
    require_once 'head.php';
    ?>

<body class= bg-light>
    <!-- DIV - TUDO -->
    <div class="container-fluid">
        <!-- Área Logada -->
        <div id="areaLogada" class="container display-flex my-1 py-1">
            <div class="row text-center align-items-center">
                <!-- Aqui é onde começa a coluna da direita - Menu-->
                <div class="col-3 d-flex justify-content-center">
                    <div id="areaLogada" class="container">
                        <div class="row text-center align-items-center">
                            <!-- Linha Logo-->
                            <div class="row text-center align-items-center">
                                <img src="expo.svg" class="img-fluid pt-4" alt="Logo ExpoFATEC São Sebastião">
                            </div> <!-- Aqui termina a row da imagem --> 
                            <!-- Linha Menu-->
                            <div class="row text-center align-items-center">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active bg-danger text-white border-0" aria-current="true">
                                        Home
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        Usuário
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        Professores
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        Projetos
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        Alunos
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action ">
                                        Resultados
                                    </a>
                                </div> <!-- Aqui termina a lista de Links--> 
                            </div> <!-- Aqui termina a row do Menu --> 
                        </div><!-- Aqui termina a row da direita -->  
                    </div> <!-- Aqui termina a div da direita -->   
                </div> <!-- Aqui é onde termina a coluna da direita-->            

                <!-- Aqui é onde começa a coluna da esquerda - Tela Principal -->
                <div class="col-8">
                    <div class="p-4 bg-white rounded-4 shadow-sm ">
                        <h2 class="mb text-danger">Boas Vindas</h2>
                        <h6>
                            </br>Este é o gerenciador de Projetos da ExpoFATEC
                        </h6>
                        <p>
                            Este APP foi desenvolvido por alunas do curso de ADS da FATEC São Sebastião, este sistema tem com o objetivo facilitar a organização e o gerenciamento dos projetos apresentados na ExpoFATEC.
                            </br></br> Tudo pronto para começar! Selecione o perfil que deseja usar!</br>
                        </p>

                        <div id="bemVindo" class="container my-1 py-1">
                            <div class="row text-center align-items-center">

                                <!-- Coluna Espaçamento-->
                                <div class="col-2 d-flex justify-content-center"></div>

                                <!-- Coluna Botão Coordenador-->
                                <div class="col-4 d-flex justify-content-center">
                                    <div class="container mt-4">
                                        <button 
                                            type="button" 
                                            class="btn btn-outline-danger" 
                                            onclick="location.href='login.php'">
                                            Coordenador
                                        </button>
                                    </div>
                                </div>


                                <!-- Coluna Botão Professor-->
                                <div class="col-4 d-flex justify-content-center flex-column">
                                    <div class="container mt-4">
                                        <button 
                                            type="button" 
                                            class="btn btn-outline-danger" 
                                            onclick="location.href='login.php'">
                                            Professor
                                        </button>
                                    </div>    
                                </div>

                                <!-- Coluna Espaçamento-->
                                <div class="col-2 d-flex justify-content-center"></div>
                            </div>
                        </div>
                    </div>    
                </div> <!-- Aqui é onde termina a coluna da esquerda-->
            </div> <!-- Aqui é onde termina a row principal da tela-->
        </div> <!-- Aqui é onde terminam a div principal da tela-->
    </div> <!-- Fim da DIV - TUDO -->

</body>
</html>