
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <title>ANIME-SE/Lista</title>
</head>

<body>
  <header>
    <p><a href="./../profile/profile.html">Perfil</a></p>
    <p><a href="./../animeList/lista.html">Animes</a></p>
    <p><a href="./../forum/forum.html">Fórum</a></p>
    <p><a href="./../sobrenos/sobrenos.html">Sobre</a></p>
    <p>Lista</p>
    <p><a href="./../registro/registro.html">Registrar</a></p>
    <p><a href="./../sair/sair.php">Sair</a></p>
  </header>
  <br>
  <h1>Ranking da lista de animes</h1> <br>

  <main>
    <table class="Tabela-anime">
      <thead>
        <tr>
          <th>Imagem</th>
          <th>Nome</th>
          <th>Nota</th>
          <th>Progresso</th>
          <th>Situação</th>
        </tr>
      </thead>
      <tbody id="Tabela-anime-body">
      </tbody>
    </table>
  </main>
  <script src="script.js"></script>
</body>

</html>
