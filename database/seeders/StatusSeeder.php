<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::query()
            ->insert([
                [
                    'uid_status' => Str::uuid(),
                    'name' => 'Primeiro Acesso',
                    'label' => 'primeiro_acesso',
                    'description' => 'Status para indicar que foi apenas cadastrado'
                ],
                [
                    'uid_status' => Str::uuid(),
                    'name' => 'Desativado',
                    'label' => 'desativado',
                    'description' => 'Status para indicar que está desativado'
                ],
                [
                    'uid_status' => Str::uuid(),
                    'name' => 'Aprovado',
                    'label' => 'aprovado',
                    'description' => 'Status para indicar que está aprovado'
                ],
                [
                    'uid_status' => Str::uuid(),
                    'name' => 'Bloqueado',
                    'label' => 'bloqueado',
                    'description' => 'Status para indicar que está bloqueado'
                ]
            ]);
    }
}
