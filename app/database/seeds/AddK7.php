<?php

class AddK7 extends Seeder
{

    public function run()
    {
        DB::table('k7')->delete(); // deleting old records.

        K7::create([
            'ano_id' => '3',
            'disco_id' => '1',
            'k7' => 'K7-1979-AvedePrata.jpg',
            'k7_sm' => 'K7-1979-AvedePrata-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '3',
            'disco_id' => '1',
            'k7' => 'K7-1979-AvedePrata-2.jpg',
            'k7_sm' => 'K7-1979-AvedePrata-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '3',
            'disco_id' => '1',
            'k7' => 'K7-1979-AvedePrata-A.jpg',
            'k7_sm' => 'K7-1979-AvedePrata-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '3',
            'disco_id' => '1',
            'k7' => 'K7-1979-AvedePrata-B.jpg',
            'k7_sm' => 'K7-1979-AvedePrata-B-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '4',
            'disco_id' => '2',
            'k7' => 'K7-1980-CapimdoVale.jpg',
            'k7_sm' => 'K7-1980-CapimdoVale-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '4',
            'disco_id' => '2',
            'k7' => 'K7-1980-CapimdoVale-2.jpg',
            'k7_sm' => 'K7-1980-CapimdoVale-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '4',
            'disco_id' => '2',
            'k7' => 'K7-1980-CapimdoVale-A.jpg',
            'k7_sm' => 'K7-1980-CapimdoVale-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '4',
            'disco_id' => '2',
            'k7' => 'K7-1980-CapimdoVale-B.jpg',
            'k7_sm' => 'K7-1980-CapimdoVale-B-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '5',
            'disco_id' => '3',
            'k7' => 'K7-1981-Elba.jpg',
            'k7_sm' => 'K7-1981-Elba-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '5',
            'disco_id' => '3',
            'k7' => 'K7-1981-Elba-Contracapa.jpg',
            'k7_sm' => 'K7-1981-Elba-Contracapa-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '5',
            'disco_id' => '3',
            'k7' => 'K7-1981-Elba-A.jpg',
            'k7_sm' => 'K7-1981-Elba-A-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '5',
            'disco_id' => '3',
            'k7' => 'K7-1981-Elba-B.jpg',
            'k7_sm' => 'K7-1981-Elba-B-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '6',
            'disco_id' => '4',
            'k7' => 'K7-1982-alegria.jpg',
            'k7_sm' => 'K7-1982-alegria-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '6',
            'disco_id' => '4',
            'k7' => 'K7-1982-alegria-2.jpg',
            'k7_sm' => 'K7-1982-alegria-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '6',
            'disco_id' => '4',
            'k7' => 'K7-1982-alegria-A.jpg',
            'k7_sm' => 'K7-1982-alegria-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '6',
            'disco_id' => '4',
            'k7' => 'K7-1982-alegria-B.jpg',
            'k7_sm' => 'K7-1982-alegria-B-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '7',
            'disco_id' => '5',
            'k7' => 'K7-1983-coração.jpg',
            'k7_sm' => 'K7-1983-coração-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '7',
            'disco_id' => '5',
            'k7' => 'K7-1983-coração-2.jpg',
            'k7_sm' => 'K7-1983-coração-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '7',
            'disco_id' => '5',
            'k7' => 'K7-1983-coração-A.jpg',
            'k7_sm' => 'K7-1983-coração-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '7',
            'disco_id' => '5',
            'k7' => 'K7-1983-coração-B.jpg',
            'k7_sm' => 'K7-1983-coração-B-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '8',
            'disco_id' => '6',
            'k7' => 'K7-1984-dojeito.jpg',
            'k7_sm' => 'K7-1984-dojeito-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '8',
            'disco_id' => '6',
            'k7' => 'K7-1984-dojeito-2.jpg',
            'k7_sm' => 'K7-1984-dojeito-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '8',
            'disco_id' => '6',
            'k7' => 'K7-1984-dojeito-A.jpg',
            'k7_sm' => 'K7-1984-dojeito-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '8',
            'disco_id' => '6',
            'k7' => 'K7-1984-dojeito-B.jpg',
            'k7_sm' => 'K7-1984-dojeito-B-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '9',
            'disco_id' => '8',
            'k7' => 'K7-1985-fogo.jpg',
            'k7_sm' => 'K7-1985-fogo-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '9',
            'disco_id' => '8',
            'k7' => 'K7-1985-fogo-2.jpg',
            'k7_sm' => 'K7-1985-fogo-2-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '9',
            'disco_id' => '8',
            'k7' => 'K7-1985-fogo-A.jpg',
            'k7_sm' => 'K7-1985-fogo-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '9',
            'disco_id' => '8',
            'k7' => 'K7-1985-fogo-B.jpg',
            'k7_sm' => 'K7-1985-fogo-B-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '10',
            'disco_id' => '9',
            'k7' => 'K7-1986-remexer.jpg',
            'k7_sm' => 'K7-1986-remexer-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '10',
            'disco_id' => '9',
            'k7' => 'K7-1986-remexer-2.jpg',
            'k7_sm' => 'K7-1986-remexer-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '10',
            'disco_id' => '9',
            'k7' => 'K7-1986-remexer-A.jpg',
            'k7_sm' => 'K7-1986-remexer-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '10',
            'disco_id' => '9',
            'k7' => 'K7-1986-remexer-B.jpg',
            'k7_sm' => 'K7-1986-remexer-B-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '11',
            'disco_id' => '10',
            'k7' => 'K7-1987-elba.jpg',
            'k7_sm' => 'K7-1987-elba-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '11',
            'disco_id' => '10',
            'k7' => 'K7-1987-elba-2.jpg',
            'k7_sm' => 'K7-1987-elba-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '11',
            'disco_id' => '10',
            'k7' => 'K7-1987-elba-A.jpg',
            'k7_sm' => 'K7-1987-elba-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '11',
            'disco_id' => '10',
            'k7' => 'K7-1987-elba-B.jpg',
            'k7_sm' => 'K7-1987-elba-B-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '12',
            'disco_id' => '11',
            'k7' => 'K7-1988-fruto.jpg',
            'k7_sm' => 'K7-1988-fruto-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '12',
            'disco_id' => '11',
            'k7' => 'K7-1988-fruto-2.jpg',
            'k7_sm' => 'K7-1988-fruto-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '12',
            'disco_id' => '11',
            'k7' => 'K7-1988-fruto-A.jpg',
            'k7_sm' => 'K7-1988-fruto-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '12',
            'disco_id' => '11',
            'k7' => 'K7-1988-fruto-B.jpg',
            'k7_sm' => 'K7-1988-fruto-B-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '13',
            'disco_id' => '12',
            'k7' => 'K7-1989-popular.jpg',
            'k7_sm' => 'K7-1989-popular-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '13',
            'disco_id' => '12',
            'k7' => 'K7-1989-popular-2.jpg',
            'k7_sm' => 'K7-1989-popular-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '13',
            'disco_id' => '12',
            'k7' => 'K7-1989-popular-A.jpg',
            'k7_sm' => 'K7-1989-popular-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '13',
            'disco_id' => '12',
            'k7' => 'K7-1989-popular-B.jpg',
            'k7_sm' => 'K7-1989-popular-B-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '14',
            'disco_id' => '13',
            'k7' => 'K7-1990-aovivo.jpg',
            'k7_sm' => 'K7-1990-aovivo-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '14',
            'disco_id' => '13',
            'k7' => 'K7-1990-aovivo-2.jpg',
            'k7_sm' => 'K7-1990-aovivo-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '14',
            'disco_id' => '13',
            'k7' => 'K7-1990-aovivo-A.jpg',
            'k7_sm' => 'K7-1990-aovivo-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '14',
            'disco_id' => '13',
            'k7' => 'K7-1990-aovivo-B.jpg',
            'k7_sm' => 'K7-1990-aovivo-B-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '15',
            'disco_id' => '14',
            'k7' => 'K7-1991-felicidade.jpg',
            'k7_sm' => 'K7-1991-felicidade-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '15',
            'disco_id' => '14',
            'k7' => 'K7-1991-felicidade-2.jpg',
            'k7_sm' => 'K7-1991-felicidade-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '15',
            'disco_id' => '14',
            'k7' => 'K7-1991-felicidade-A.jpg',
            'k7_sm' => 'K7-1991-felicidade-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '15',
            'disco_id' => '14',
            'k7' => 'K7-1991-felicidade-B.jpg',
            'k7_sm' => 'K7-1991-felicidade-B-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '16',
            'disco_id' => '15',
            'k7' => 'K7-1992-encanto.jpg',
            'k7_sm' => 'K7-1992-encanto-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '16',
            'disco_id' => '15',
            'k7' => 'K7-1992-encanto2.jpg',
            'k7_sm' => 'K7-1992-encanto2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '16',
            'disco_id' => '15',
            'k7' => 'K7-1992-encanto-A.jpg',
            'k7_sm' => 'K7-1992-encanto-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '16',
            'disco_id' => '15',
            'k7' => 'K7-1992-encanto-B.jpg',
            'k7_sm' => 'K7-1992-encanto-B-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '17',
            'disco_id' => '16',
            'k7' => 'K7-1993-devorame.jpg',
            'k7_sm' => 'K7-1993-devorame-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '17',
            'disco_id' => '16',
            'k7' => 'K7-1993-devorame-2.jpg',
            'k7_sm' => 'K7-1993-devorame-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '17',
            'disco_id' => '16',
            'k7' => 'K7-1993-devorame-3.jpg',
            'k7_sm' => 'K7-1993-devorame-3-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '17',
            'disco_id' => '16',
            'k7' => 'K7-1993-devorame-4.jpg',
            'k7_sm' => 'K7-1993-devorame-4-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '17',
            'disco_id' => '16',
            'k7' => 'K7-1993-devorame-A.jpg',
            'k7_sm' => 'K7-1993-devorame-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '17',
            'disco_id' => '16',
            'k7' => 'K7-1993-devorame-B.jpg',
            'k7_sm' => 'K7-1993-devorame-B-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '19',
            'disco_id' => '17',
            'k7' => 'K7-1995-paisagem.jpg',
            'k7_sm' => 'K7-1995-paisagem-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '19',
            'disco_id' => '17',
            'k7' => 'K7-1995-paisagem-2.jpg',
            'k7_sm' => 'K7-1995-paisagem-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '19',
            'disco_id' => '17',
            'k7' => 'K7-1995-paisagem-3.jpg',
            'k7_sm' => 'K7-1995-paisagem-3-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '19',
            'disco_id' => '17',
            'k7' => 'K7-1995-paisagem-4.jpg',
            'k7_sm' => 'K7-1995-paisagem-4-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '19',
            'disco_id' => '17',
            'k7' => 'K7-1995-paisagem-A.jpg',
            'k7_sm' => 'K7-1995-paisagem-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '19',
            'disco_id' => '17',
            'k7' => 'K7-1995-paisagem-B.jpg',
            'k7_sm' => 'K7-1995-paisagem-B-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '20',
            'disco_id' => '19',
            'k7' => 'K7-1996-grandencontro.jpg',
            'k7_sm' => 'K7-1996-grandencontro-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '20',
            'disco_id' => '19',
            'k7' => 'K7-1996-grandencontro-2.jpg',
            'k7_sm' => 'K7-1996-grandencontro-2-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '20',
            'disco_id' => '19',
            'k7' => 'K7-1996-grandencontro-A.jpg',
            'k7_sm' => 'K7-1996-grandencontro-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '20',
            'disco_id' => '19',
            'k7' => 'K7-1996-grandencontro-B.jpg',
            'k7_sm' => 'K7-1996-grandencontro-B-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '20',
            'disco_id' => '18',
            'k7' => 'K7-1996-leão.jpg',
            'k7_sm' => 'K7-1996-leão-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '20',
            'disco_id' => '18',
            'k7' => 'K7-1996-leão-2.jpg',
            'k7_sm' => 'K7-1996-leão-2-sm.jpg',
        ]);

        K7::create([
            'ano_id' => '20',
            'disco_id' => '18',
            'k7' => 'K7-1996-leão-3.jpg',
            'k7_sm' => 'K7-1996-leão-3-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '20',
            'disco_id' => '18',
            'k7' => 'K7-1996-leão-A.jpg',
            'k7_sm' => 'K7-1996-leão-A-sm.jpg',
        ]);
        K7::create([
            'ano_id' => '20',
            'disco_id' => '18',
            'k7' => 'K7-1996-leão-B.jpg',
            'k7_sm' => 'K7-1996-leão-B-sm.jpg',
        ]);

    }

}
