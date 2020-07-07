<?php

use Illuminate\Database\Seeder;

class SolicitacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Solicitacao::class)->create([
          'id'=>'10'
          'name_condutor'=>'Pedro Manzo',
          'sexo'=>'M',
          'data_nascimento'=>'03/10/1993',
          'marca'=>'Fiat',
          'veiculo'=>'Uno'

    }
}
