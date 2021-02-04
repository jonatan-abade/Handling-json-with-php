<?php
class Pessoa{
    public $nome;
    public $idade;
    public $sexo;

    function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
}

?>
    
    <form method="POST" style="width:300px;background-color:#80808066;padding:20px">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="Idade">Idade</label>
        <input type="number" name="idade" id="idade"><br><br>
        
        <select name="sexo">
            <option selected disabled>Selecione uma opção</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

<?php
$txtnome = $_POST['nome'];
$txtidade = $_POST['idade'];
$txtsexo = $_POST['sexo'];

$pessoa = new Pessoa($txtnome, $txtidade, $txtsexo);

$arquivo = file_get_contents('arquivo.json');

$pessoas = json_decode($arquivo, true);

array_push($pessoas, $pessoa);

$jpessoas = json_encode($pessoas, true);

$fp = fopen('arquivo.json', 'w');
fwrite($fp, $jpessoas);
fclose($fp);


$pessoas = json_decode($arquivo, true);

foreach($pessoas as $pessoa){?>
    <fieldset>
    <legend>Pessoa</legend>
    <p><b>Nome: </b><?=$pessoa['nome']?></p>
    <p><b>Idade: </b><?=$pessoa['idade']?></p>
    <p><b>Sexo: </b><?=$pessoa['sexo']?></p>
    </fieldset>  
<?php };









