<?php
require_once('data_base/insertBD.php');

class ControllerFormulario{

    public function enviaForm($aluno,$q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20, $q21, $q22, $q23, $q24, $q25, $q26, $q27, $q28){
        require_once 'Model/Formulario.php';
        $data_envio = date('Y-m-d H:i:s');;
        $form = new Formulario($aluno, $data_envio,$q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20, $q21, $q22, $q23, $q24, $q25, $q26, $q27, $q28);
        $bd = new insertBD();
        $resultado = $bd->enviaFormulario($form);
        return $resultado;
    }
}