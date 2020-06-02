<?php
  session_start();

  $categorias = [];
  $categorias[] = 'infantil';
  $categorias[] = 'adolescente';
  $categorias[] = 'adulto';
  $categorias[] = 'idoso';

  $nome  = $_POST['nome'];
  $idade = $_POST['idade'];
/*
  if(empty($nome))
  {
    $_SESSION['error-message'] = 'O nome não pode ser vazio';
    header('Location: index.php');
    return;
  }
*/
  if(strlen($nome) < 3)
  {
    $_SESSION['error-message'] = 'O nome deve ser maior que 3 caracteres';
    header('Location: index.php');
    return;
  }

  else if(strlen($nome) > 40)
  {
    $_SESSION['error-message'] = 'O nome é muito extenso';
    header('Location: index.php');
    return;
  }

  else if(!is_numeric($idade))
  {
    $_SESSION['error-message'] = 'A idade deve ser no formato numérico';
    header('Location: index.php');
    return;
  }


  if ($idade >= 6 && $idade <= 12)
  {
    for($i = 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'infantil')
      {
        $_SESSION['success-message'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
        header('Location: index.php');
        return;
      }
    }
  } else if($idade >= 13 && $idade <= 18) {
    for($i = 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'adolescente')
      {
        $_SESSION['success-message'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
        header('Location: index.php');
        return;
      }
    }
  } else {
    for($i = 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'adulto')
      {
        $_SESSION['success-message'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
        header('Location: index.php');
        return;
      }
    }
  }

?>