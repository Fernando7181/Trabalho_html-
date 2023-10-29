<?php
    session_start();
    $serverName = "mysqlhtml.mysql.database.azure.com";
    $databaseName = "usuarios";
    $username1 = "grupohtml";
    $password = "Nota@100";
    $port = 3306;

    $conn = new mysqli($serverName, $username1, $password, $databaseName);
    $sql = "SELECT biografia FROM usuarios WHERE username = ?;";
    $res = $conn->prepare($sql);
    $res->bind_param("s", $_SESSION["username"]);
    $res->execute();
    $res->store_result();
    $res->bind_result($biografia);
    $res = mysqli_stmt_fetch($res);
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ANIME-SE / Perfil</title>
        <link rel="stylesheet" href="profile.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <img id="logo" src="./pictures/LGOO_ANIMA__1_-removebg-preview.png">
            <a href="./../profile.html">Perfil</a>
            <a href="./../animeList/lista.html">Animes</a>
            <a href="./../forum/forum.html">Fórum</a>
            <a href="./../sobrenos/sobrenos.html">Sobre</a>
            <a href="">Lista</a>

            <div class="separador">

            <a href="./../login/login.html">Login</a>
            <a href="./../registro/registro.html">Registrar</a>
            <a href="./../sair/sair.php">Sair</a>

            </div>
        </header>
    <div class="all">
        <main>
            <div class="container">
                <div class="container-left">
                    <div class="identidade">
                        <div class="pfp">
                            <img src="./pictures/sesshomaru.jpg">
                        </div>
                        <strong id="username"><?php echo $_SESSION["username"]?></strong>
                    </div>
                    <div class="personagens">
                        <b>Personagens Favoritos</b>
                        <div class="imagens">
                            <img id ="favchar1" src="./pictures/buddy.jpg">
                            <img id="favchar2" src="./pictures/kaonashi.jpg">
                        </div>
                    </div>
                </div>
                <div class="container-right">
                    <div class="minibox">
                        <b>Biografia</b>
                        <p id="biografia"><?php echo $biografia?></p>
                        <div id="butao">
                            <button id="btnBio" onclick="abrirBio()">editar</button>
                        </div>
                    </div>
                    <div class = "modal">
                        <button id="fechar" onclick="fecharBio()">fechar</button>
                        <form action="biografia.php" method="post" onsubmit="setTimeout(function(){window.location.reload();},10);">
                          <p><label for="bioid">Escreva sobre voce:</label></p>
                          <textarea id="bioid" name="biografia" rows="10" cols="50">biografia</textarea>
                          <br>
                          <input type="submit" value="salvar">
                        </form>
                    </div>
                    <div class="minibox">
                        <b>Status</b>
                        <div class="status">
                            <div class="report1">
                                <p class="bolaStatusVerde">Assistindo</p>
                                <p>16</p>
                                <p class="bolaStatusVermelho">Dropado</p>
                                <p>25</p>
                            </div>
                            <div class="report2">
                                <p class="bolaStatusAzul">Completado</p>
                                <p>10</p>
                                <p class="bolaStatusAmarelo">Planejado</p>
                                <p>10</p>
                            </div>
                            <div class="info">
                                <div id="estatistica">
                                    <div id="Assistindo" style="background-color: #2db039; border-radius: 7px 0px 0px 7px"></div>
                                    <div id="Dropado" style="background-color: #a12f31;"></div>
                                    <div id="Completado" style="background-color: #26448f;"></div>
                                    <div id="Planejado" style="background-color: #e7b715; border-radius: 0px 7px 7px 0px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="minibox">
                        <div class="grafico-barra">
                            <div class="area-barras">
                                <div class="divisao">
                                    <div id="barra1" class="barra">
                                        <div class="quantidade">6</div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra2" class="barra">
                                        <div class="quantidade">4</div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra3" class="barra">
                                        <div class="quantidade">5</div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra4" class="barra">
                                        <div class="quantidade">3</div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra5" class="barra">
                                        <div class="quantidade">9</div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra6" class="barra">
                                        <div class="quantidade">3</div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra7" class="barra">
                                        <div class="quantidade">4</div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra8" class="barra">
                                        <div class="quantidade">1</div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra9" class="barra">
                                        <div class="quantidade">6</div>
                                    </div>
                                </div>
                                <div class="divisao">
                                    <div id="barra10" class="barra">
                                        <div class="quantidade">2</div>
                                    </div>
                                </div>
                            </div>
                            <div class="legenda">
                                <div class="notas">1</div>
                                <div class="notas">2</div>
                                <div class="notas">3</div>
                                <div class="notas">4</div>
                                <div class="notas">5</div>
                                <div class="notas">6</div>
                                <div class="notas">7</div>
                                <div class="notas">8</div>
                                <div class="notas">9</div>
                                <div class="notas">10</div>
                            </div>
                        </div>
                    </div>
                    <div class="minibox">
                        <b>Animes Favoritos</b>
                        <div class="animesfavoritos">
                            <img class="posters" src="./pictures/posterHXH.jpg">
                            <img class="posters" src="./pictures/posterInuyasha.jpg">
                            <img class="posters" src="./pictures/posterMononoke.jpg">
                            <img class="posters" src="./pictures/poster Evangelion.jpg">
                            <img class="posters" src="./pictures/posterChihiro.jpg">
                            <img class="posters" src="./pictures/posterbebop.jpg">
                            <img class="posters" src="./pictures/violet.jpg">
                            <img class="posters" src="./pictures/bocchi.jpg">
                        </div>
                    </div>
                </div>
            </div>   
        </main>
        <footer>
            <div class="footer_content">
                <div id="left" class="content">
                    <p>Acompanhe o pessoal da ANIME-SE!</p>
                        <a href="#" class="footer-link" id="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="footer-link" id="Twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="footer-link" id="Linkedin">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="#" class="footer-link" id="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                </div>    
                <div id="center" class="content">
                    <ul>
                        <li><a href="./../profile.html">Perfil</a></li>
                        <li><a href="./../animeList/lista.html">Animes</a></li>
                        <li><a href="./../forum/forum.html">Fórum</a></li>
                        <li><a href="./../sobrenos/sobrenos.html">Sobre</a></li>
                        <li><a href="#">Lista</a></li>
                        <li><a href="#">Sair</a></li>
                    </ul> 
                </div>
                <div id="right" class=" content=">
                    <h3>© 2023 all rights reserved ANIME-SE</h3>
                </div>
            </div>
        </div>
        </footer>
        <script src="profile-status-graph.js"></script>
        <script src="profile-score-graph.js"></script>

        <script src="edit-bio.js"></script>
    </body>
    <?php
        $conn->close();
    ?>
</html>

