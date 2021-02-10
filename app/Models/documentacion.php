<?php 
namespace App\Models;

use CodeIgniter\Model;

class documentacion extends Model{
     protected $table = 'documentacion';
     protected $primaryKey = 'id_doc';
     
     protected $allowedFields = [
         'foto','nomyape','firma', 
     ];
     
    
    

  
}

?>