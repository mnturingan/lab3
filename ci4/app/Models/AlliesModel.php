<?php

namespace App\Models;

use CodeIgniter\Model;

class AlliesModel extends Model 
{
    protected $table = 'mnturingan_myallies';
    
    public function getAllies() 
    {
        return $this->findAll();
    }
}
