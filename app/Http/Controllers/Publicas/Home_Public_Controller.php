<?php
namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\EmpresaRepo;

use Illuminate\Http\Request;



class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
  

    public function __construct(ImgHomeRepo  $ImgHomeRepo,
                                EmpresaRepo  $EmpresaRepo)
    {
        $this->ImgHomeRepo  = $ImgHomeRepo;
        $this->EmpresaRepo  = $EmpresaRepo;
        
    }

    public function get_home(Request $Request)
    {
        
        $Empresa               = $this->EmpresaRepo->getEmpresaDatos();  
        $Route                 = 'post_contacto_form';      
        



        return view('paginas.home.home', compact('Empresa','Route'));
    }


}
