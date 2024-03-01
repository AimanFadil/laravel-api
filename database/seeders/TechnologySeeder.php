<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tecno = [
            'HTML',
            'CSS',
            'JAVASCRIPT',
            'PHP',
        ];

        foreach ($tecno as $elem) {
            $Technology = new Technology();
            $Technology->nome = $elem;
            $Technology->slug = Str::slug($elem, '-');

            $Technology->save();
        }
    }
}
