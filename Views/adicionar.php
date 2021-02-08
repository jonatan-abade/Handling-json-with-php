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

$this->p->criar();