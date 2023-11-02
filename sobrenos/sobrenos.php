<?php
session_start();
if (!isset($_SESSION["username"])){
    header("location: ./../login/login.html");
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ANIME-SE / Sobre nós</title>
        <link rel="stylesheet" href="sobrenos.css">
    </head>
    <body>
        <header>
            <a href="./../profile/profile.php">Perfil</a>
            <a href="./../animeList/lista.php">Animes</a>
            <a href="./../forum/forum.php">Fórum</a>
            <a href="./../sobrenos/sobrenos.php">Sobre</a>
            <a href="">Lista</a>

            <div class="div-navbar">

            <a href="./../login/login.html">Login</a>
            <a href="./../registro/registro.html">Registrar</a>
            <a href="./../sair/sair.php">Sair</a>

            </div>
        </header>
        <main>
            <div class="container">
                 <div id="sobre">
                     <h2>ANIME-SE // Sobre nós</h2>
                 </div>
                 <div id="fileira1" class="fileira">
                     <div class="pessoa">
                         <img class="image" src="/sobrenos/pictures/sesshomaru.jpg" alt="foto">
                         <p id="nome">Lucas</p>
                         <p id="desc">
                             Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                             Perferendis eveniet ducimus suscipit dolorem veniam rem,
                            eaque doloremque quidem ab tempora
                         </p>
                     </div>
                     <div class="pessoa">
                         <img class="image" src="/sobrenos/pictures/Nowa.png" alt="foto">
                         <p id="nome">Gabi</p>
                         <p id="desc">
                             A tímida extrovertida , acumuladora de bichos de rpg, a estranha .
                         </p>
                     </div>
                 </div>
                 <div id="fileira2" class="fileira">
                     <div class="pessoa">
                         <img class="image" src="/sobrenos/pictures/nandin.JPG" alt="foto">
                         <p id="nome">Fernando</p>
                         <p id="desc">
                            Apenas escrevendo uns codigos e aprendendo Front-end
                         </p>
                     </div>
                     <div class="pessoa">
                         <img class="image" src="/sobrenos/pictures/sesshomaru.jpg" alt="foto">
                         <p id="nome">Isaac</p>
                         <p id="desc">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Perferendis eveniet ducimus suscipit dolorem veniam rem, eaque doloremque quidem ab tempora
                        </p>
                    </div>
                </div>
                <div id="fileira3" class="fileiraespecial">
                    <div class="pessoa">
                        <img class="image" src="/sobrenos/pictures/sesshomaru.jpg" alt="foto">
                        <p id="nome">Renan</p>
                        <p id="desc">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Perferendis eveniet ducimus suscipit dolorem veniam rem, eaque doloremque quidem ab tempora
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>