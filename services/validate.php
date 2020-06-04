<?php

  function validaNome(string $nome) : bool
  {
    if(empty($nome))
    {
      setErrorMessage('O nome não pode ser vazio');
      return false;
    }

    if(strlen($nome) < 3)
    {
      setErrorMessage('O nome deve ser maior que 3 caracteres');
      return false;
    }

    else if(strlen($nome) > 40)
    {
      setErrorMessage('O nome é muito extenso');
      return false;
    }
    return true;
  }

  function validaIdade(string $idade) : bool
  {
    if(!is_numeric($idade))
    {
      setErrorMessage('A idade deve ser no formato numérico');
      return false;
    }
    return true;
  }
