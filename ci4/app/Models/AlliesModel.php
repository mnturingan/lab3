<?php

namespace App\Models;

use CodeIgniter\Model;

class AlliesModel extends Model 
{
    protected $table = 'mnturingan_myallies';

    protected $allowedFields = ['firstname', 'name', 'email', 'website', 'comment', 'gender'];
    
    public function getAllies() 
    {
        return $this->findAll();
    }
}
