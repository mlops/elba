<?php

class AddInstagram extends Seeder {

    public function run() {

        DB::table('instagram')->delete(); // deleting old records.

        Instagram::create([
            'insfoto' => 'https://instagram.fsdu5-1.fna.fbcdn.net/vp/271494cdd32c6d23779b8754237630f3/5B9710FF/t51.2885-15/e35/c280.0.720.720/s320x320/39992120_1972429976113681_3977900556667584512_n.jpg
        ', 'inslink' => 'https://www.instagram.com/p/BnXGicuH-fj/?taken-by=elbaramalho',
            'altimg' => 'Quando eu soltar a minha voz por favor entenda
            Que palavra por palavra eis aqui uma pessoa se entregando
            Coração na boca, peito aberto, vou sangrando..." Assista essa linda canção de Gonzaguinha lá no Youtube. Link na bio',
        ]);

        Instagram::create([
            'insfoto' => 'https://instagram.fsdu5-1.fna.fbcdn.net/vp/6aca69edd4fd57ff8df0088c283b91c6/5BB7D526/t51.2885-15/s640x640/sh0.08/e35/32180709_415796512225687_7136720106612064256_n.jpg
        ', 'inslink' => 'https://www.instagram.com/p/Bi71SQrnKAB/?taken-by=elbaramalho',
            'altimg' => 'elbaramalhoEspero por vocês amanhã em Maceió! ',
        ]);

        Instagram::create([
            'insfoto' => 'https://instagram.fsdu5-1.fna.fbcdn.net/vp/9b16ac77b7c53c7462fdc442db2e83ac/5BBC78C2/t51.2885-15/s240x240/e35/c0.10.740.740/32233033_220805201841915_6060841476252762112_n.jpg
        ', 'inslink' => 'https://www.instagram.com/p/BjNt0pLHU-T/?taken-by=elbaramalho',
            'altimg' => 'um cadinho de tempo.... 2001, turnê Cirandeira....yeyé
Apesar da confusão no nosso país, desejo uma noite de paz a todo',
        ]);
        
             
   

        Instagram::create([
            'insfoto' => 'https://instagram.fsdu5-1.fna.fbcdn.net/vp/0c0e4d7931de4620eef919f111a518bc/5C1A618D/t51.2885-15/e35/c180.0.720.720/s320x320/40585240_234155143941626_2806720836847796224_n.jpg 
        ', 'inslink' => 'https://www.instagram.com/p/BnbQ83KHY1i/?taken-by=elbaramalho',
            'altimg' => 'elbaramalho"Terra adorada Entre outras mil És tu, Brasil Ó pátria amada!"',
        ]);

        Instagram::create([
            'insfoto' => 'https://instagram.fsdu5-1.fna.fbcdn.net/vp/05135b44688d782d354e8aa073f3e58f/5BBCFE8D/t51.2885-15/s320x320/e35/c111.0.858.858/32873213_1668128123283660_5358271249959092224_n.jpg
        ', 'inslink' => 'https://www.instagram.com/p/BjV2SGQnpv1/?taken-by=elbaramalho',
            'altimg' => 'elbaramalhoPessoas que amo! @mariagadu e @robertasaoficial no meu novo disco',
        ]);

        Instagram::create([
            'insfoto' => 'https://instagram.fsdu5-1.fna.fbcdn.net/vp/6934a4e86fd23e634cac27d4da1f9de1/5C29066A/t51.2885-15/e35/c0.117.937.937/s320x320/39498697_2147334511966201_980357148946989056_n.jpg
        ', 'inslink' => 'https://www.instagram.com/p/BnKF6wVH4-F/?taken-by=elbaramalho',
            'altimg' => 'elbaramalhoEu quero água, água prá beber, eu quero água, água prá molhar, a tua boca com o meu beijo',
        ]);

        Instagram::create([
            'insfoto' => 'https://instagram.fsdu5-1.fna.fbcdn.net/vp/b2237baaecd1cf596dc12c75d37ee515/5BE91CE0/t51.2885-15/e35/c180.0.720.720/s320x320/37118130_1737243233063799_1960154474676748288_n.jpg
        ', 'inslink' => 'https://www.instagram.com/p/BlNVf5nnN7Z/?taken-by=elbaramalho',
            'altimg' => 'elbaramalhoQuem aqui já assistiu ao clipe Olhinhos de Fogueira',
        ]);





        Instagram::create([
            'insfoto' => 'https://instagram.fsdu5-1.fna.fbcdn.net/vp/be7d14e79dfb218348140646d65da27e/5BE25888/t51.2885-15/e35/s240x240/36148136_283082352265130_1197935175640547328_n.jpg
        ', 'inslink' => 'https://www.instagram.com/p/Bk78KzfnnJ8/?taken-by=elbaramalho',
            'altimg' => 'elbaramalho NOS ARES DE LISBOA!',
        ]);
            Instagram::create([
            'insfoto' => 'https://instagram.fsdu5-1.fna.fbcdn.net/vp/d31f816d49e8b4914a3154461585ba78/5BD8563B/t51.2885-15/e35/c0.90.720.720/s320x320/35575931_630783117304388_8733518522686111744_n.jpg
        ', 'inslink' => 'https://www.instagram.com/p/BlLSTRIn5U4/?taken-by=elbaramalho',
            'altimg' => 'elbaramalho Hoje é o #DiadoCantor e nada melhor do que comemorar essa profissão agradecendo o carinho que recebo todos os dias durante todos esses anos de carreira. Obrigada',
        ]);
            Instagram::create([
            'insfoto' => 'https://instagram.fsdu5-1.fna.fbcdn.net/vp/518bdcffdd6a5ee6beba2a00f06c19b2/5C38FD52/t51.2885-15/e35/s320x320/40037873_424802814713886_2812487740975742976_n.jpg
        ', 'inslink' => 'https://www.instagram.com/p/BnEkKVqn1bI/?taken-by=elbaramalho',
            'altimg' => 'elbaramalhoCom as migas lindas ontem em Sampa ',
        ]);
            

        

    }

}
