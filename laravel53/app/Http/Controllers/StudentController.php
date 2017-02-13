<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Repositories\Contracts\PostRepositoryInterface;
use App\Repositories\student\StudentInterface;
class StudentController extends Controller
{
        public function __construct(StudentInterface $student)

    {

        $this->student = $student;

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $students = $this->student->getAll();
        echo '<pre>';print_r($students);die();

        //return view('users.index',['users']);

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $student = $this->student->find($id);
        echo '<pre>';print_r($student);die();

        //return view('users.show',['user']);

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function delete($id)

    {

        $this->student->delete($id);

        //return redirect()->route('users');

    }
}
