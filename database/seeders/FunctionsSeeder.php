<?php

namespace Database\Seeders;

use App\Models\Functions;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FunctionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Functions::query()
            ->insert([
                [
                    'uid_function' => Str::uuid(),
                    'label' => 'deus_supremo',
                    'name' => 'Deus Supremo'
                ],
                [
                    'uid_function' => Str::uuid(),
                    'label' => 'supervisor',
                    'name' => 'Supervisor'
                ],
                [
                    'uid_function' => Str::uuid(),
                    'label' => 'funcionario',
                    'name' => 'Funcionario'
                ],
            ]);
    }
}
