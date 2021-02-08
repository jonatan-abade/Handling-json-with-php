<?php
class Pessoa
{
    public $nome;
    public $idade;
    public $sexo;

    
    public function criar(Pessoa $p)
    {
        $txtnome = $_POST['nome'];
        $txtidade = $_POST['idade'];
        $txtsexo = $_POST['sexo'];

        $p = new Pessoa($txtnome, $txtidade, $txtsexo);

        $arquivo = file_get_contents('arquivo.json');

        $pessoas = json_decode($arquivo, true);

        array_push($pessoas, $p);

        $jpessoas = json_encode($pessoas, true);

        $fp = fopen('arquivo.json', 'w');
        fwrite($fp, $jpessoas);
        fclose($fp);
    }

    public function mostrar()
    {
        $arquivo = file_get_contents('arquivo.json');
        $pessoas = json_decode($arquivo, true);

        foreach ($pessoas as $pessoa) { ?>
            <fieldset>
                <legend>Pessoa</legend>
                <p><b>Nome: </b><?= $pessoa['nome'] ?></p>
                <p><b>Idade: </b><?= $pessoa['idade'] ?></p>
                <p><b>Sexo: </b><?= $pessoa['sexo'] ?></p>
            </fieldset>
<?php }
    }
}
