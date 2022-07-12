<?php

namespace App\Controllers;
use App\Models\usuarioModel;
use App\Models\InventarioModel;
use App\Models\Usuarios;
use App\Models\producto_bodega;
use App\Models\producto_guardado;
use App\Models\usuario_guardado;
use App\Models\producto_editar;
class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
        

    }

    public function inicio(){
        return view('inicio');
    }
    public function admin(){
        return view('admin');
    }
    public function crear_usuario(){
        return view('crear_usuario');
    }
    public function proyectos(){
        return view('proyectos');
    }
    public function agregar_proyecto(){
        return view('agregar_proyecto');
    }
    public function agregar_producto(){
        return view('agregar_producto');

    }
    public function editar_producto(){
        return view('editar_producto');
    }
    public function categorias(){
        return view('categorias');
    }
    
    public function store(){
        $pbodega = new producto_guardado();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'Código'  => $this->request->getPost('Código'),
            'descripcion' => $this->request->getPost('descripcion'),
            'cantidad'  => $this->request->getPost('cantidad')
         ];
 
        $pbodega->save($data);
 
        return redirect()->to(base_url('/bodega'))->with('msg','Producto Guardado.');
    }



    function guardar_usuario(){
        $usuario = new usuario_guardado();
        $data = [
            'usuario' => $this->request->getPost('usuario'),
            'password' => password_hash($this->request->getPost('password'),PASSWORD_BCRYPT),
             'type'  => $this->request->getPost('type')
         ];

        $usuario->save($data);
 
        return redirect()->to(base_url('visualizar_usuarios'))->with('msg','Producto Guardado.');
            
        }
    public function bodega(){
        $crud = new InventarioModel();
        $datos = $crud->listadoproducto();
        $data = [
            "datos" => $datos
        ];

        return view('/bodega', $data);
    }
    public function visualizar_usuarios(){
        $crud = new usuarioModel();
        $datosusuario = $crud->listadousuario();
        $data = [
            "datosusuario" => $datosusuario
        ];

        return view('/visualizar_usuarios', $data);
    }

    public function login(){
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

        if (count($datosUsuario) > 0 &&
        password_verify($password, $datosUsuario[0]['password'])) {
            $data = [
                         "usuario" => $datosUsuario[0]['usuario'],
                         "type"    => $datosUsuario[0]['type']
            ];
            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/inicio'))->with('mensaje','1');
        }else {
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }

    
    public function salir() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function eliminar($id){
        $producto = new producto_bodega();
        $producto->delete($id);

        return redirect()->to(base_url('bodega'));
    }
    public function eliminar_usuario($id){
        $usuario = new Usuarios();
        $usuario->delete($id);
        return redirect()->to(base_url('visualizar_usuarios'));

    }

    public function eliminar_usuarios($id){
        $model = new Usuarios();
        $model->delete($id);
        session()->setFlashdata('mensaje','Registro Eliminado');
        return redirect()->to('visualizar_usuarios');
    }





    
}

