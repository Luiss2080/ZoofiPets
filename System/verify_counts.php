<?php
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Proveedor;
use App\Models\Producto;
use App\Models\Mascota;

echo "Clientes: " . Cliente::count() . "\n";
echo "Empleados: " . Empleado::count() . "\n";
echo "Proveedores: " . Proveedor::count() . "\n";
echo "Productos: " . Producto::count() . "\n";
echo "Categorias: " . \App\Models\CategoriaProducto::count() . "\n";
echo "Mascotas: " . Mascota::count() . "\n";
