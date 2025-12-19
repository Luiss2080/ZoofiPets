<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Usuarios y Roles (Orden importante)
            RolesSeeder::class,
            PermisosSeeder::class,
            UsersSeeder::class,
            
            // Tablas base (sin dependencias)
            MetodosPagoSeeder::class,
            CategoriaProductosSeeder::class,
            
            // Empleados y proveedores
            EmpleadosSeeder::class,
            ProveedoresSeeder::class,
            ServiciosMedicosSeeder::class,
            
            // Clientes y horarios
            ClientesSeeder::class,
            HorariosEmpleadosSeeder::class,
            EspecialistaServicioSeeder::class,
            
            // Productos y relaciones
            ProductosSeeder::class,
            ProductoProveedorSeeder::class,
            
            // Mascotas (depende de clientes)
            MascotasSeeder::class,
            
            // Promociones
            PromocionesSeeder::class,
            
            // Citas médicas (depende de mascotas, empleados, servicios)
            CitasMedicasSeeder::class,
            
            // Ventas y detalles (depende de clientes, empleados, productos)
            VentasSeeder::class,
            DetalleVentasSeeder::class,
            
            // Compras y detalles (depende de proveedores, empleados, productos)
            ComprasSeeder::class,
            DetalleComprasSeeder::class,
            
            // Movimientos de stock (depende de productos, ventas, compras)
            MovimientosStockSeeder::class,
            
            // Alertas de stock (depende de productos)
            AlertasStockSeeder::class,
            
            // Registros médicos (depende de mascotas, empleados)
            RegistroVacunasSeeder::class,
            HistorialesMedicosSeeder::class,
            
            // Pagos (depende de ventas y métodos de pago)
            PagosSeeder::class,
            
            // Uso de promociones (depende de promociones, clientes, ventas)
            UsoPromocionesSeeder::class,
        ]);
    }
}
