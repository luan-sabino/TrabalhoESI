<?php
require_once 'Model/Aluno.php';
require_once 'Model/Professor.php';
require_once 'data_base/insertBD.php';

class ControllerCadastro{

    public function cadastrarAluno($nUSP, $nome, $email, $senha, $link, $Cod_Curso, $cpf){
        $aluno = new Aluno($nUSP, $nome, $email, $senha, $link, $Cod_Curso, $cpf);
        $bd = new insertBD();
        $resultado = $bd->cadastrarAlunoDB($aluno);
        return $resultado;
    }

    public function cadastrarProfessor($cpf,$nome, $email, $senha){
        $prof = new Professor($cpf, $nome, $email, $senha);
        $bd = new insertBD();
        $resultado = $bd->cadastrarProfessorDB($prof);
        return $resultado;
    }

    public function cadastrarCCP($cpf){
        $bd = new insertBD();
        $resultado = $bd->cadastrarCCPDB($cpf);
        return $resultado;
    }
}
