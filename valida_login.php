<?php

    
    session_start();
    // tipos = { 01 => Administrador , 02 => Usuário}
    $usuario_app = array(
        array('id'=>'01', 'email'=>'email@email.com', 'senha' => '123456', 'tipo'=>'01'),
        array('id'=>'02', 'email' => 'teste@email.com', 'senha' =>'teste123', 'tipo'=>'02'),
        array('id'=>'03', 'email' => 'teste@teste.com', 'senha' =>'teste123', 'tipo'=>'02')
    );
    //Variavel que verifica se o usuário foi identificado com sucesso
    $autenticacao = FALSE;
    $user_id = NULL;
    $user_type = NULL;
    //loop para autenticação
    foreach($usuario_app as $user){
        if (($user['email'] == $_POST['email']) && ($user['senha'] == $_POST['senha'])){
            $autenticacao = TRUE;
            $user_id = $user['id'];
            $user_type = $user['tipo'];
        }
    }
    //Printando o resultado da autenticação
    if ($autenticacao){
        $_SESSION['autenticado']= 'sim';
        $_SESSION['id'] = $user_id;
        $_SESSION['tipo'] = $user_type;
        header('Location: home.php');
    } else{
        $_SESSION['autenticado']= 'nao';
        header('Location: index.php?login=erro');
    }

?>