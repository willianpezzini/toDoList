<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\todos;

class todosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        todos::create([
            'id' => '003',
            'nome' => 'Fabio', 
           
          
            
        
        ]);
    }
}
