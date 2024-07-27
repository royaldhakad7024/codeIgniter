<?php namespace App\Controllers;

use App\Models\Employee_model;

class Employee extends BaseController
{
    public function index()
    {
        $employee = new Employee_model();
        $data['employees'] = $employee->findAll();
        return view('/employee/index', $data);
    }

    public function create()
    {
        return view('/employee/create');
    }

    public function store()
    {
        $employee = new Employee_model();
        $image = $this->request->getFile('image');
        $image->move('app/Images/');
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'department' => $this->request->getPost('department'),
            'image' => $image->getName()
        ];
        $employee->save($data);
        return redirect()->to(base_url('/index.php/employee'))->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        $employee = new Employee_model();
        $data['employee'] = $employee->find($id);
        return view('/employee/edit', $data);
    }

    public function update($id)
    {
        $employee = new Employee_model();
        if(empty($this->request->getPost('image'))){
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
                'department' => $this->request->getPost('department')
            ];
            $employee->update($id, $data);
            return redirect()->to(base_url('/index.php/employee'))->with('success', 'Employee updated successfully.');
        }
        else{
            $image = $this->request->getFile('image');
            $image->move('app/Images/');
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
                'department' => $this->request->getPost('department'),
                'image' => $image->getName()
            ];
            $employee->update($id, $data);
            return redirect()->to(base_url('/index.php/employee'))->with('success', 'Employee updated successfully.');
        }
    }

    public function delete($id)
    {

        $employee = new Employee_model();
        $employee->delete($id);
        return redirect()->to(base_url('/index.php/employee'))->with('success', 'Employee deleted successfully.');
    }

    public function view($id)
    {
        $employee = new Employee_model();
        $data['employee'] = $employee->find($id);
        return view('/employee/view', $data);
    }
}
