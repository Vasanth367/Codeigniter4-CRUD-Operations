<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;
class Home extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function student_form()
    {
        return view('student_form');
    }

    public function index()
    {
        $query = $this->db->query("SELECT * FROM student_details");
        $data['student_details'] = $query->getResult();
        return view('add', $data);
    }

    // public function view()
    // {

    //     return view('view');
    // }

    public function create()
    {
        if ($this->request->getPost()) {
            foreach ($_POST as $key => $value) {
                $$key = $value;
                $data_array[$key] = $value;
            }
            $builder = $this->db->table('student_details');
            $builder->insert($data_array);

            if ($this->db->affectedRows() > 0) {
                echo 'Record inserted successfully!';
            }
            return redirect()->to(base_url());
        }
        return view('student_form');
    }

    
    public function delete($id)
    {

        $this->db->table('student_details')->where('id', $id)->delete();
        return redirect()->to(base_url());
    }

        public function edit($id)
    {
        $query = $this->db->query("SELECT * FROM student_details WHERE id = ?", [$id]);
        $data['student'] = $query->getRow();
        
        if (!$data['student']) {
            return redirect()->to(base_url())->with('error', 'Record not found');
        }

        return view('edit', $data);  
    }

    public function update()
    {
    // Get all form data
    $data = $this->request->getPost();

    if (!isset($data['id']) || empty($data['id'])) {
        return redirect()->to(base_url())->with('error', 'ID is required for updating');
    }

    // Update student record
    $this->db->table('student_details')
        ->where('id', $data['id'])  // Use 'id' from POST data
        ->update($data);

    return redirect()->to(base_url())->with('success', 'Record updated successfully');
}



}