<?php


class AddVideos extends Seeder {

	public function run()
	{
		        DB::table('videos')->delete(); // deleting old records.
         
                Videos::create(
                    array(
                        'video'     => 'Frisson',
                        'link' => 'https://www.youtube.com/watch?v=9R0Hud17A2k',
                        'embed' => '<iframe width="420" height="315" src="https://www.youtube.com/embed/9R0Hud17A2k" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2000',
                        'dvds_id' => '1'
                    )
                );

                Videos::create(
                    array(
                        'video'     => 'A Vida do Viajante',
                        'link' => 'https://www.youtube.com/watch?v=FqHSB5PxIIM',
                        'embed' => '<iframe width="420" height="315" src="https://www.youtube.com/embed/FqHSB5PxIIM" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2000',
                        'dvds_id' => '1'
                    )
                );
                Videos::create(
                    array(
                        'video'     => 'Você se lembra',
                        'link' => 'https://www.youtube.com/watch?v=wRC32NSTnI0',
                        'embed' => '<iframe width="420" height="315" src="https://www.youtube.com/embed/wRC32NSTnI0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2000',
                        'dvds_id' => '1'
                    )
                );
                Videos::create(
                    array(
                        'video'     => 'A Terceira Lâmina ',
                        'link' => 'https://www.youtube.com/watch?v=3anUsM5L688',
                        'embed' => '<iframe width="420" height="315" src="https://www.youtube.com/embed/3anUsM5L688" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2000',
                        'dvds_id' => '1'
                    )
                );
                

                Videos::create(
                    array(
                        'video'     => 'Súplica Cearense:',
                        'link' => 'https://www.youtube.com/watch?v=pU-hlND8RXY',
                        'embed' => '<iframe width="420" height="315" src="https://www.youtube.com/embed/pU-hlND8RXY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2003',
                        'dvds_id' => '2'
                    )
                );

                Videos::create(
                    array(
                        'video'     => 'Festa',
                        'link' => 'https://www.youtube.com/watch?v=OpaJGiweRko',
                        'embed' => '<iframe width="420" height="315" src="https://www.youtube.com/embed/OpaJGiweRko?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2003',
                        'dvds_id' => '2'
                    )
                );

                Videos::create(
                    array(
                        'video'     => 'Vem Morena',
                        'link' => 'https://www.youtube.com/watch?v=WGJtb1Baf9E',
                        'embed' => '<iframe width="420" height="315" src="https://www.youtube.com/embed/WGJtb1Baf9E?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2003',
                        'dvds_id' => '2'
                    )
                );

                Videos::create(
                    array(
                        'video'     => 'Imbalança',
                        'link' => 'https://www.youtube.com/watch?v=prLlT4j4w9U',
                        'embed' => '<iframe width="420" height="315" src="https://www.youtube.com/embed/prLlT4j4w9U?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2003',
                        'dvds_id' => '2'
                    )
                );


                Videos::create(
                    array(
                        'video'     => 'Miragem do Porto',
                        'link' => 'https://www.youtube.com/watch?v=6vGwnYfBer4',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/6vGwnYfBer4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2008',
                        'dvds_id' => '3'
                    )
                );

                Videos::create(
                    array(
                        'video'     => 'Um Índio',
                        'link' => 'https://www.youtube.com/watch?v=Ij33R1oiCiA',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/Ij33R1oiCiA?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2008',
                        'dvds_id' => '3'
                    )
                );


                Videos::create(
                    array(
                        'video'     => 'Na Base da Chinela',
                        'link' => 'https://www.youtube.com/watch?v=ETE700gXLmg',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/ETE700gXLmg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2008',
                        'dvds_id' => '3'
                    )
                );


                Videos::create(
                    array(
                        'video'     => 'Tempos Quase Modernos (Qual o Assunto que Mais lhe Interessa)',
                        'link' => 'https://www.youtube.com/watch?v=qnun1P5OWI8',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/qnun1P5OWI8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2008',
                        'dvds_id' => '3'
                    )
                );



                Videos::create(
                    array(
                        'video'     => 'Sabiá',
                        'link' => 'https://www.youtube.com/watch?v=rTx4-R5EUEc',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/rTx4-R5EUEc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2012',
                        'dvds_id' => '5'
                    )
                );

                Videos::create(
                    array(
                        'video'     => 'Minha Princesa Cordel',
                        'link' => 'https://www.youtube.com/watch?v=jn4_bANTHVY',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/jn4_bANTHVY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2012',
                        'dvds_id' => '5'
                    )
                );

                Videos::create(
                    array(
                        'video'     => 'De Volta pro Aconchego',
                        'link' => 'https://www.youtube.com/watch?v=rd0IDRM2mYk',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/rd0IDRM2mYk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2012',
                        'dvds_id' => '5'
                    )
                );


                Videos::create(
                    array(
                        'video'     => 'Forró do Xenhenhém',
                        'link' => 'https://www.youtube.com/watch?v=kRw0KWfvKNI',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/kRw0KWfvKNI?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2012',
                        'dvds_id' => '5'
                    )
                );

                Videos::create(
                    array(
                        'video'     => '',
                        'link' => '',
                        'embed' => '',
                        'ano' => '2010',
                        'dvds_id' => '4'
                    )
                );
                Videos::create(
                    array(
                        'video'     => 'Súplica Cearense',
                        'link' => 'https://www.youtube.com/watch?v=rH6vRoKIO_k',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/rH6vRoKIO_k" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2015',
                        'dvds_id' => '6'
                    )
                );
                Videos::create(
                    array(
                        'video'     => 'Funeral de um Lavrador',
                        'link' => 'https://www.youtube.com/watch?v=1kCZfXCG87Y',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/1kCZfXCG87Y" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2015',
                        'dvds_id' => '6'
                    )
                );
                Videos::create(
                    array(
                        'video'     => 'Ave Maria Sertaneja',
                        'link' => 'https://www.youtube.com/watch?v=NaJXq9w8fac',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/NaJXq9w8fac" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2015',
                        'dvds_id' => '6'
                    )
                );
                Videos::create(
                    array(
                        'video'     => 'Domingo no Parque',
                        'link' => 'https://www.youtube.com/watch?v=uUpMRIyTh5U',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/uUpMRIyTh5U" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2015',
                        'dvds_id' => '6'
                    )
                );


                Videos::create(
                    array(
                        'video'     => 'Sangrando',
                        'link' => 'https://www.youtube.com/watch?v=E8PkomK1mb8',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/E8PkomK1mb8" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2016',
                        'dvds_id' => '7'
                    )
                );

                Videos::create(
                    array(
                        'video'     => 'Me dá um beijo',
                        'link' => 'https://www.youtube.com/watch?v=twAPKDAQ1p4',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/twAPKDAQ1p4" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2016',
                        'dvds_id' => '7'
                    )
                );

                Videos::create(
                    array(
                        'video'     => 'Sabiá',
                        'link' => 'https://www.youtube.com/watch?v=_i0Zw7XlAKg&t=12s',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/_i0Zw7XlAKg" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2016',
                        'dvds_id' => '7'
                    )
                );

                Videos::create(
                    array(
                        'video'     => 'Documentário',
                        'link' => 'https://www.youtube.com/watch?v=_i0Zw7XlAKg&t=12s',
                        'embed' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/AmJkcuCpfN4" frameborder="0" allowfullscreen></iframe>',
                        'ano' => '2016',
                        'dvds_id' => '7'
                    )
                );



            }
        }

