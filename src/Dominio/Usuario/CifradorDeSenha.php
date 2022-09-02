<?php

namespace Api\Transferencia\Dominio\Usuario;

interface CifradorDeSenha
{
    public function cifrar(string $senha): string;
    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool;
}