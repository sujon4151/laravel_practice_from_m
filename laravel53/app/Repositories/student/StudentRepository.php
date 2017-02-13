<?php
namespace App\Repositories\student;


use App\Repositories\student\StudentInterface as StudentInterface;

use App\Student;


class StudentRepository implements StudentInterface

{

    public $student;


    function __construct(Student $student) { 

	$this->student = $student;

    }


    public function getAll()
    {

        return $this->student->getAll();

    }


    public function find($id)

    {

        return $this->student->findUser($id);

    }


    public function delete($id)

    {

        return $this->student->deleteUser($id);

    }

}

?>