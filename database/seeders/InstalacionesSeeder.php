<?php

namespace Database\Seeders;

use App\Models\Instalaciones;
use App\Models\User;
use Illuminate\Database\Seeder;

class InstalacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('email', 'admin@admin.com')->first();
        $owner = User::where('email', 'owner@owner.com')->first();
        $user = User::where('email', 'user@user.com')->first();

        if (! $admin && ! $owner && ! $user) {
            return;
        }

        $users = [
            $admin,
            $owner,
            $user,
        ];

        $data = [
            ['name' => 'Sala de reuniones principal', 'description' => 'Espacio amplio con proyector y sillas para hasta 20 personas.', 'is_available' => true],
            ['name' => 'Oficina privada', 'description' => 'Oficina cerrada con escritorio, armario y conexión a internet.', 'is_available' => true],
            ['name' => 'Coworking abierto', 'description' => 'Zona compartida con mesas, enchufes y buena iluminación natural.', 'is_available' => true],
            ['name' => 'Sala de conferencias pequeña', 'description' => 'Sala con capacidad para 8 personas y pantalla de presentación.', 'is_available' => true],
            ['name' => 'Taller de carpintería', 'description' => 'Área equipada con herramientas y banco de trabajo.', 'is_available' => false],
            ['name' => 'Estación de edición', 'description' => 'Puesto técnico con PC potente y software de edición instalado.', 'is_available' => false],
            ['name' => 'Sala de descanso', 'description' => 'Espacio con sofás y cafetería para pausas relajadas.', 'is_available' => false],
            ['name' => 'Aula de formación', 'description' => 'Aula con mesas y pizarra para cursos y talleres.', 'is_available' => false],
            ['name' => 'Laboratorio de pruebas', 'description' => 'Zona segura con equipos de test y medición.', 'is_available' => false],
            ['name' => 'Almacén de materiales', 'description' => 'Zona de almacenaje con acceso restringido y estanterías metálicas.', 'is_available' => false],
        ];

        foreach ($data as $index => $item) {
            Instalaciones::create([
                'user_id' => $users[$index % count($users)]->id,
                'name' => $item['name'],
                'description' => $item['description'],
                'is_available' => $item['is_available'],
            ]);
        }
    }
}
