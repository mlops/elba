<?php

class AddAgenda extends Seeder
{
    public function run()
    {
        DB::table('agenda')->delete(); // deleting old records.

        Agenda::create([
            'startdate' => '2018-08-04 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'RS',
            'local' => 'PORTO ALEGRE (Auditório Araújo Vianna)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-08-10 22:00:00',
            'evento' => 'ELBA CANTA DOMINGUINHOS',
            'estado' => 'DF',
            'local' => 'BRASÍLIA (Teatro da Caixa)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-08-11 22:00:00',
            'evento' => 'ELBA CANTA DOMINGUINHOS',
            'estado' => 'DF',
            'local' => 'BRASÍLIA (Teatro da Caixa)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-08-12 22:00:00',
            'evento' => 'ELBA CANTA DOMINGUINHOS',
            'estado' => 'DF',
            'local' => 'BRASÍLIA (Teatro da Caixa, 17h e 19h) ',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-08-19 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'MG',
            'local' => 'GUAXUPÉ ',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-08-24 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'PA',
            'local' => 'BELÉM',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-08-26 22:00:00',
            'evento' => 'ELBA E BANDA',
            'estado' => 'RJ',
            'local' => 'RIO DE JANEIRO (Rio Gastronomia)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-09-02 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'AM',
            'local' => 'MANAUS',
            'fb' => '',
        ]);
        // Agenda::create([
        //     'startdate' => '2018-09-06 22:00:00',
        //     'evento' => 'ELBA E BANDA',
        //     'estado' => 'PB',
        //     'local' => 'CAMPINA GRANDE (Clube Campestre)',
        //     'fb' => '',
        // ]);
        Agenda::create([
            'startdate' => '2018-09-28 22:00:00',
            'evento' => 'ELBA CANTA DOMINGUINHOS',
            'estado' => 'RJ',
            'local' => 'RIO DE JANEIRO (Teatro da Caixa)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-09-29 22:00:00',
            'evento' => 'ELBA CANTA DOMINGUINHOS',
            'estado' => 'RJ',
            'local' => 'RIO DE JANEIRO (Teatro da Caixa)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-10-12 22:00:00',
            'evento' => 'ELBA E BANDA',
            'estado' => 'RJ',
            'local' => 'ARRAIAL DO CABO',
            'fb' => '',
        ]);


        Agenda::create([
            'startdate' => '2018-10-20 22:00:00',
            'evento' => 'ELBA E BANDA',
            'estado' => 'USA',
            'local' => 'MIAMI (7th Brazilian Festival, Pompano Beach)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-10-26 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'SP',
            'local' => 'JAGUARIÚNA',
            'fb' => '',
        ]);

        Agenda::create([
            'startdate' => '2018-10-27 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'MG',
            'local' => 'BELO HORIZONTE',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-11-01 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'ES',
            'local' => 'VITÓRIA',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-11-07 22:00:00',
            'evento' => 'ELBA E BANDA',
            'estado' => 'SP',
            'local' => 'SÃO PAULO (Jantar do bem - Essência Bela - 3ª ed. AFESU)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-11-09 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'PE',
            'local' => 'CARUARU',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-11-10 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'PE',
            'local' => 'CARNAÍBA',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-11-14 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'BA',
            'local' => 'LAURO DE FREITAS',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-11-16 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'CE',
            'local' => 'JUAZEIRO DO NORTE (SESC Cariri)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-11-17 22:00:00',
            'evento' => 'ELBA + GERALDO + XANGAI',
            'estado' => 'PE',
            'local' => 'PETROLINA (Arena Iate Clube)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-11-24 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'SP',
            'local' => 'RIBEIRÃO PRETO',
            'fb' => '',
        ]);

        Agenda::create([
            'startdate' => '2018-11-25 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'SP',
            'local' => 'SÃO PAULO (Allianz Parque)',
            'fb' => '',
        ]);

        Agenda::create([
            'startdate' => '2018-11-30 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'RJ',
            'local' => 'RIO DE JANEIRO (Marina da Glória)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-12-02 22:00:00',
            'evento' => 'CANTATA DE NATAL (participação especia)',
            'estado' => 'PE',
            'local' => 'RECIFE',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-12-09 22:00:00',
            'evento' => 'O GRANDE ENCONTRO',
            'estado' => 'RJ',
            'local' => 'TERESÓPOLIS (Sesc)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-12-11 22:00:00',
            'evento' => 'ELBA E BANDA',
            'estado' => 'SE',
            'local' => 'ARACAJU (Shopping Rio Mar)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-12-13 22:00:00',
            'evento' => 'ELBA E BANDA',
            'estado' => 'DF',
            'local' => 'BRASÍLIA (Fórum Nacional de Forró)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-12-14 22:00:00',
            'evento' => 'ELBA E BANDA',
            'estado' => 'RJ',
            'local' => 'FRIBURGO',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-12-16 22:00:00',
            'evento' => 'ELBA E BANDA',
            'estado' => 'RN',
            'local' => 'NATAL (Teatro Riachuelo)',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-12-23 22:00:00',
            'evento' => 'ELBA E BANDA',
            'estado' => 'RJ',
            'local' => 'ARRAIAL DO CABO',
            'fb' => '',
        ]);
        Agenda::create([
            'startdate' => '2018-12-31 22:00:00',
            'evento' => 'REVEILLÓN',
            'estado' => 'PE',
            'local' => 'ECIFE (Praia de Boa Viagem)',
            'fb' => '',
        ]);
    }
}