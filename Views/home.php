<?php 

$this->p->mostrar();
?>


<a href="home/adicionar">adicionar</a>

<?php
if (isset($_POST['adicionar'])){
    $this->adicionar();
}
