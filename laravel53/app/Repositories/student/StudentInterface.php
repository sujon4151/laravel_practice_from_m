<?php
namespace App\Repositories\student;


interface StudentInterface {


    public function getAll();


    public function find($id);


    public function delete($id); 

}


?>