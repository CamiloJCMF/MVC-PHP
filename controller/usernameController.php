<?php

class usernameController{
    private $model;

    public function __construct()
    {
        require_once ("c://xampp/htdocs/proyecto/model/usernameModel.php");
        $this->model = new usernameModel();
    }

    public function guardar($nombre){
      $id =  $this->model->insertar($nombre);
      return ($id!=false) ? header("location:show.php?id=".$id) : header("location:create.php");
      
    }

    public function show($id){
      return ($this->model->show($id) != false) ? $this->model->show($id) : header ("location: index.php");
    }

    public function index(){
      return ($this->model->index()) ? $this->model->index() :false ;
      
    }

    public function update($id, $nombre){

      return($this->model->update($id, $nombre)!= false) ? header("location:show.php?id=".$id) :  header("location:index.php");

    }


    public function delete($id){

      return ($this->model->delete( $id)) ? header('location:index.php') : header('location:show.php?id='.$id) ;
    }
}