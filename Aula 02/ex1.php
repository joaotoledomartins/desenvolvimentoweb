<?php
    include('../funcoes.php');
?>
<html>
<head>
    <title>Aula 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Aula do dia 12/11</h1>
    <h3>Atividade</h3>

    <?php
    $formulario = array(
        'id'=>'formCadastro',
        'tipo_submit'=>'POST', 
        'url_submit'=>'cadastro.php', 
        'itens'=> array(
            'nome'=>array('tipo'=> 'text', 'nome'=> 'nome', 'label'=> 'Nome', 'placeholder'=> 'Informe seu nome.'),
            'idade'=>array('tipo'=> 'number', 'nome'=> 'idade', 'label'=> 'Idade', 'placeholder'=> 'Informe sua idade.', 'funcao_validacao'=> 'validaIdade'),
            'sexo'=>array('tipo'=> 'radio', 'nome'=> 'sexo', 'label'=> 'Sexo', 'opcoes'=> array("M"=> "Masculino", "F"=>"Feminino", "O"=>"Outros")),
            'esporte_preferido'=>array('tipo'=> 'checkbox', 'nome'=> 'esporte_preferido', 'label'=> 'Esporte Pref.', 'opcoes'=> array("F"=> "Futebol", "V"=>"Vôlei", "N"=>"Natação", "O"=> "Outros"), 'obrigatorio'=>false, "valor_padrao"=> array("F", "N")),
            'cidade_nascimento'=>array('tipo'=> 'text', 'nome'=> 'cidade', 'label'=> 'Cidade de Nasc.', 'placeholder'=> 'Informe a cidade que você nasceu.'),
            'estado_nascimento'=>array('tipo'=> 'select', 'nome'=> 'estado_nascimento', 'label'=> 'Estado de Nasc.', 'opcoes'=> array("RJ"=> "Rio de Janeiro", "SP"=>"São Paulo", "ES"=>"Espírito Santo", "MG"=>"Minas Gerais", "O"=> "Outros"), "valor_padrao"=> "MG"),
            'cpf'=>array('tipo'=> 'number', 'nome'=> 'cpf', 'label'=> 'CPF', 'placeholder'=> 'Informe seu CPF.', 'funcao_validacao'=> 'validaCpf'),
            'descricao'=>array('tipo'=> 'textarea', 'nome'=> 'descricao', 'label'=> 'Descrição', 'placeholder'=> 'Faça uma descrição sobre você.', 'obrigatorio'=>false),
            
            'botao_enviar'=>array('tipo'=> 'submit', 'nome'=> 'enviar', 'label'=> 'Enviar'),
            'botao_limpar_form'=>array('tipo'=> 'reset', 'nome'=> 'reset', 'label'=> 'Limpar Formulário'),
        )
    );

        //Criar módulos

        //Função para criar o form
        function criarForm($formulario){
            echo "<fieldset><legend>Formulário</legend><form action='" . $formulario["url_submit"] . "' method='". $formulario["tipo_submit"] . "' id='" . $formulario["id"] . "'>";
            foreach($formulario["itens"] as $chave => $valor){
                    criarCampo($chave, $valor);
                    pularLinha();
            }
            echo "</form></fieldset>";
        }
        //Função para criar diversos campos
        function criarCampo($chave, $valor){
            if(!($valor["tipo"] == "reset" && $valor["tipo"] == "submit" && $valor["tipo"] == "button")){
                echo "<div class='itemWrapper'>";
                echo "<label for='". $chave . "'>" . $valor["label"] . ":</label>";
            }
            else{
                echo "<div class='itemWrapperBTNsSubmitReset'>";
            }
            switch($valor["tipo"]){
                case "text":
                case "number":
                    criarInputTextNumber($chave, $valor);
                    break;
                case "textarea":
                    criarInputTextArea($chave, $valor);
                    break;
                case "reset":
                case "submit":
                case "button":
                    criarButtonResetSubmitButton($chave, $valor);
                    break;
                case "select":
                    criarSelect($chave, $valor);
                    break;
                case "checkbox":
                case "radio":
                    criarCheckBoxRadio($chave, $valor);
            }
            echo "</div";
        }
        
        //Função para criar input's dos tipos text e number
        function criarInputTextNumber($chave, $valor){
            echo "<input type='" . $valor["tipo"]. "' id='" . $chave . "' name='" . $valor["nome"] . "' placeholder='" . $valor["placeholder"] . "' required />";
        }

        //Função para criar input's do tipo textarea
        function criarInputTextArea($chave, $valor){
            echo "<textarea type='" . $valor["tipo"]. "' id='" . $chave . "' name='" . $valor["nome"] . "' placeholder='" . $valor["placeholder"] . "' required></textarea>";
        }


        //Função para criar button's dos tipos reset, submit e button
        function criarButtonResetSubmitButton($chave, $valor){
            echo "<button type='" . $valor["tipo"]. "' id='" . $chave . "' name='" . $valor["nome"] . "'>" . $valor["label"] . "</button>";
        }

        //Função para criar select
        function criarSelect($chave, $valor){
            echo "<select id='" . $chave . "' name='" . $valor["nome"] . "' required>" . $valor["label"];
            $valorPadrao = $valor["valor_padrao"];
            criarOption("","-", $valorPadrao);
            foreach($valor["opcoes"] as $chaveOpcoes=>$valorOpcoes){
                criarOption($chaveOpcoes, $valorOpcoes, $valorPadrao);
                pularLinha();
            }
            echo "</select>";
        }
         
        //Função para criar option's
        function criarOption($chaveOpcoes, $valorOpcoes, $valorPadrao){
            if($chaveOpcoes == $valorPadrao){
                echo "<option value='" . $chaveOpcoes ."' selected>" . $valorOpcoes . "</option>";
            }
            else{
                echo "<option value='" . $chaveOpcoes ."'>" . $valorOpcoes . "</option>";
            }
        }

        //Função para criar input's do tipo checkbox e radio
        function criarCheckBoxRadio($chave, $valor){
            pularLinha();
            foreach($valor["opcoes"] as $chaveOpcoes=>$valorOpcoes){
                echo "<input type='" . $valor["tipo"]. "' id='" . $valor["nome"] . "_" . $chaveOpcoes . "' name='" . $valor["nome"] . "' value='" . $chaveOpcoes ."' />";
                echo "<label for='". $valor["nome"] . "_" . $chaveOpcoes . "'>" . $valorOpcoes . ":</label>";
                pularLinha();
            }
        };

        criarForm($formulario);
    ?>
    <?php
    ?>
</body>
</html>