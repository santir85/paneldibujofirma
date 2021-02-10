<?php

namespace App\Controllers;

use CodeIgniter\Controller;

/**Models*/

use App\Models\SolicitudModel;
use DateTime;

class solicitar extends Controller
{

    /**Solicitudes de Prestamos */

    
    public function store()
    {
        $validation = service('validation');
        $validation->setRules([
            'nomyape' => 'required|string',
            'fechanac' => 'required',
            'fuente_ingresos' => 'required|string',
            'banco' => 'required|string',
            'email' => 'required|valid_email',
            'telefono' => 'required|numeric',
            'monto' => 'required|string|numeric',
            'cuota' => 'required|string',
            'terminos' => 'permit_empty',
            
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            dd($validation->getErrors());//dd corta la ejecuciones que siguen. 
            
        }
        $data =  [
            'nomyape' => $this->request->getPost('nomyape'),
            'fechanac' => $this->request->getPost('fechanac'),
            'fuente_ingresos' => $this->request->getPost('fuente_ingresos'),
            'banco'     => $this->request->getPost('banco'),
            'email'     => $this->request->getPost('email'),
            'telefono'     => $this->request->getPost('telefono'),
            'monto'     => $this->request->getPost('monto'),
            'cuota'     => $this->request->getPost('cuota'),
            'terminos'     => $this->request->getPost('terminos'),
            
        ];
        
       
        // $user = new User($data);
        // $user->generateUsername();

        

        $solicitudModel = new SolicitudModel();
       
        
        $solicitudModel->insert($data);
       
        return redirect()->back()->with('msg', 'Su solicitud ha sido enviada correctamente. En breve nos comunicaremos.');
    }
}
