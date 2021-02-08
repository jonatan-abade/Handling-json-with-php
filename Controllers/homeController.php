<?php

class homeController extends Controller
{

    public function index()
    {
        //1 chamar o model ()
        //2 chamar uma view ()
        //3 fazer a junção de backend com front end ()

        $this->p = new Pessoa;

        //$dados = $p->mostrar();

        $this->carregarTemplate('home');
    }

    public function adicionar(){
        //$dados = $n->getNoticiaPorID($id_noticia);

        $this->carregarTemplate('noticias');
    }

}
