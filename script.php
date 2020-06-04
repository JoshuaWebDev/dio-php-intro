<?php

  include "services/categoriaCompetidor.php";
  include "services/sessionMessage.php";
  include "services/validate.php";

  $nome  = $_POST['nome'];
  $idade = $_POST['idade'];

  defineCategoriaCompetidor($nome, $idade);

  header('Location: index.php');