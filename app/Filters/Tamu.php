<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Tamu implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(session()->get('id')){
            return redirect()->to('/keluarga');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}