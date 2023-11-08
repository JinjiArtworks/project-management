<?php

namespace App\Models;

use CodeIgniter\Model;

class LogActivity extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_log_activity';
    protected $primaryKey       = 'id_log_activity';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_ticket','id_user','id_division','id_company','user_name'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
