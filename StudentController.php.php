<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Config;

class StudentController extends Controller
{
    protected $db;
    protected $builder;

    public function __construct()
    {
        // Load the database
        $this->db = Config::connect();
        $this->builder = $this->db->table('students');
    }

    public function create()
    {
        return view('student_form');
    }

    public function store()
    {
        // Collect data from form input
        $data = [
            'first_name'  => $this->request->getPost('first_name'),
            'middle_name' => $this->request->getPost('middle_name'),
            'last_name'   => $this->request->getPost('last_name'),
            'email'       => $this->request->getPost('email'),
            'mobile'      => $this->request->getPost('mobile'),
            'address'     => $this->request->getPost('address'),
            'gender'      => $this->request->getPost('gender'),
            'age'         => $this->request->getPost('age'),
        ];

        // Insert data into the students table
        $this->builder->insert($data);

        return redirect()->to('/student-form')->with('success', 'Student registered successfully!');
    }
}
