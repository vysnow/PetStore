<?php

namespace App\Models;
use CodeIgniter\Model;

class PetModel extends Model
{
    protected $table         = 'pet';
    protected $allowedFields = ['name', 'category', 'tag', 'status'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $dateFormat    = 'datetime';
    protected $useSoftDeletes = true;
}
