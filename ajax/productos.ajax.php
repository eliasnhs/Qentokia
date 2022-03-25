<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

require_once "../vendor/autoload.php";

class ajaxProductos{

    public $fileProductos;

    
    public $id_categoria_producto;
    public $descripcion_producto;
    public $precio_compra_producto;
    public $precio_venta_producto;
    public $utilidad;
    public $stock_producto;
    public $minimo_stock_producto;
    public $ventas_producto;

    public function ajaxCargaMasivaProductos(){

        $respuesta = ProductosControlador::ctrCargaMasivaProductos($this->fileProductos);

        echo json_encode($respuesta);
    }

    public function ajaxListarProductos(){
    
        $productos = ProductosControlador::ctrListarProductos();
    
        echo json_encode($productos);
    
    }

    public function ajaxRegistrarProducto(){
        
        $producto = ProductosControlador::ctrRegistrarProducto($this->id_categoria_producto,$this->descripcion_producto,$this->precio_compra_producto,        
                    $this->precio_venta_producto,$this->utilidad,$this->stock_producto,$this->minimo_stock_producto,$this->ventas_producto);

        echo json_encode($producto);
   }
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ // parametro para listar productos

    $productos = new ajaxProductos();
    $productos -> ajaxListarProductos();
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 2){ // parametro para registrar productos

    $registrarProducto = new AjaxProductos();

    $registrarProducto -> id_categoria_producto = $_POST["id_categoria_producto"];
    $registrarProducto -> descripcion_producto = $_POST["descripcion_producto"];
    $registrarProducto -> precio_compra_producto = $_POST["precio_compra_producto"];
    $registrarProducto -> precio_venta_producto = $_POST["precio_venta_producto"];
    $registrarProducto -> utilidad = $_POST["utilidad"];
    $registrarProducto -> stock_producto = $_POST["stock_producto"];
    $registrarProducto -> minimo_stock_producto = $_POST["minimo_stock_producto"];
    $registrarProducto -> ventas_producto = $_POST["ventas_producto"];
    $registrarProducto -> ajaxRegistrarProducto();
    
}else if(isset($_FILES)){
    $archivo_productos = new ajaxProductos();
    $archivo_productos-> fileProductos = $_FILES['fileProductos'];
    $archivo_productos -> ajaxCargaMasivaProductos();
}