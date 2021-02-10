<?php 
namespace App\Models;

use CodeIgniter\Model;

class SolicitudModel extends Model{
     protected $table = 'prestamos';
     protected $primaryKey = 'id_solicitud';
     
     protected $allowedFields = [
         'nomyape', 'fechanac',
          'fuente_ingresos','banco','email', 'telefono',
          'monto','cuota','terminos',
     ];
     
    // protected $table      = 'Prestamos';
    // protected $primaryKey = 'id_solicitud';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['nomyape', 'fechanac',
    //      'fuente_ingresos','banco','email','newsletters'];

    

  
}

?>