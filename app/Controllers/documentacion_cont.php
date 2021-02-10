<?php

namespace App\Controllers;

use CodeIgniter\Controller;

/**Models*/

use App\Models\documentacion;
use DateTime;

class documentacion_cont extends Controller
{

    /**Solicitudes de Prestamos */

    
    public function enviar()
    {
      // Validation
    
    

        
               
               
        
        $validation = service('validation');
        $validation->setRules([
             'foto' => 'required',
             'nomyape' => 'required',
            
            
            
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            dd($validation->getErrors());//dd corta la ejecuciones que siguen. 
            
        }

        $data =  [
          
            
            'foto' => $this->request->getfile('foto'),
            'nomyape' => $this->request->getPost('nomyape'),
            'draw-canvas' => $this->request->getfile('firma'),
        ];
        
       
        // $user = new User($data);
        // $user->generateUsername();

        

       $enviodoc = new documentacion();
       
        
        $enviodoc->insert($data);
       
        return redirect()->back()->with('msg', 'Su solicitud ha sido enviada correctamente. En breve nos comunicaremos.');
    }
}
