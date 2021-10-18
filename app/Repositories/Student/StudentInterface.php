<?php

namespace App\Repositories\Student;

use App\Models\Student;

interface StudentInterface{

    public function getAllData();

    public function storeOrUpdate($id = null,$data);

    public function view($id);

    public function delete($id);
    
}