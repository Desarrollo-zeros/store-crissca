<?php

use Illuminate\Database\Seeder;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*usuario*/

        DB::collection("usuarios")->delete();
        DB::collection("categorias")->delete();


    }
}
