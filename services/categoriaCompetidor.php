<?php

  function defineCategoriaCompetidor(string $nome, string $idade) : ?string
  {
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

    if(validaNome($nome) && validaIdade($idade))
    {
      removeErrorMessage();
      if ($idade >= 6 && $idade <= 12)
      {
        for($i = 0; $i <= count($categorias); $i++)
        {
          if($categorias[$i] == 'infantil')
          {
            setSuccessMessage("O nadador ".$nome." compete na categoria ".$categorias[$i]);
            return null;
          }
        }
      } else if($idade >= 13 && $idade <= 18) {
        for($i = 0; $i <= count($categorias); $i++)
        {
          if($categorias[$i] == 'adolescente')
          {
            setSuccessMessage("O nadador ".$nome." compete na categoria ".$categorias[$i]);
            return null;
          }
        }
      } else {
        for($i = 0; $i <= count($categorias); $i++)
        {
          if($categorias[$i] == 'adulto')
          {
            setSuccessMessage("O nadador ".$nome." compete na categoria ".$categorias[$i]);
            return null;
          }
        }
      }
    } else {
      removeSuccessMessage();
      return getErrorMessage();
    }
  }