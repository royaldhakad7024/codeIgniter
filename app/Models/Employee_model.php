<?php namespace App\Models;
    use CodeIgniter\Model;

class Employee_model extends Model{
    protected $table = 'employees';
    protected $primaryKey = "id";

    protected $allowedFields = ['name', 'email', 'phone', 'department', 'image'];
}