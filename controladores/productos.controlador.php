<?php


class ProductosControlador{

    static public function ctrCargaMasivaProductos($fileProductos){
        
        $respuesta = ProductosModelo::mdlCargaMasivaProductos($fileProductos);
        
        return $respuesta;
    }

    static public function ctrListarProductos(){

        $productos = ProductosModelo::mdlListarProductos();

        return $productos;
    }
    
    static public function ctrRegistrarProducto($id_categoria_producto,$descripcion_producto,$precio_compra_producto,
                                                $precio_venta_producto,$utilidad,$stock_producto,$minimo_stock_producto,$ventas_producto){

        $registroProducto = ProductosModelo::mdlRegistrarProducto($id_categoria_producto,$descripcion_producto,$precio_compra_producto,
                                        $precio_venta_producto,$utilidad,$stock_producto,$minimo_stock_producto,$ventas_producto);

        return $registroProducto;
    }
}