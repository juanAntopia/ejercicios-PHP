<?php

use Illuminate\Database\Seeder;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //los seeders nos permiten ejecutar los comandos de mysql como insert, delete y demás
        //aquí crearemos un seeder para insertar en nuestra tabla frutas varios registros

        for($i = 0; $i <= 20; $i++){
            DB::table('frutas')->insert(array(
                'nombre' => 'Cereza'.$i,
                'descripcion' => 'Descripción de la cereza'.$i,
                'precio' => $i,
                'fecha' => date('y-m-d')    
            ));
        }

        $this->command->info('La tabla frutas ha sido rellenada');

    }
}
