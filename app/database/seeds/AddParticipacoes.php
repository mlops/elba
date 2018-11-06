<?php

class AddParticipacoes extends Seeder {

    public function run() {
        DB::table('participacoes')->delete(); // deleting old records.

        Participacoes::create( [
        'anos_id' =>'1',
        'tipo_id' =>'1',
        'nome_disco' => 'Morte e Vida Severina',
        'capa_participacao' => '77-1.jpg',
        'capa_sm' => '77-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'2',
        'tipo_id' =>'1',
        'nome_disco' => 'Chico Buarque',
        'capa_participacao' => '78-1.jpg',
        'capa_sm' => '78-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'3',
        'tipo_id' =>'1',
        'nome_disco' => 'Geraldo Azevedo - Bicho de 7 Cabeças',
        'capa_participacao' => '79-1.jpg',
        'capa_sm' => '79-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'3',
        'tipo_id' =>'1',
        'nome_disco' => 'Ópera do Malandro',
        'capa_participacao' => '79-2.jpg',
        'capa_sm' => '79-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'3',
        'tipo_id' =>'1',
        'nome_disco' => 'Robertinho DE Recife - E Agora pra Vocês... Suingues Tropicais',
        'capa_participacao' => '79-3.jpg',
        'capa_sm' => '79-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'3',
        'tipo_id' =>'1',
        'nome_disco' => 'Asas da América - Frevo',
        'capa_participacao' => '79-4.jpg',
        'capa_sm' => '79-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'4',
        'tipo_id' =>'1',
        'nome_disco' => 'Asas da América 2 - Frevo',
        'capa_participacao' => '80-1.jpg',
        'capa_sm' => '80-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'5',
        'tipo_id' =>'1',
        'nome_disco' => 'Zé Ramalho - A Terceira Lâmina',
        'capa_participacao' => '81-1.jpg',
        'capa_sm' => '81-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'5',
        'tipo_id' =>'1',
        'nome_disco' => 'Glorinha Gadelha - Bendito Fruto',
        'capa_participacao' => '81-2.jpg',
        'capa_sm' => '81-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'5',
        'tipo_id' =>'1',
        'nome_disco' => 'Toquinho - Doce Vida',
        'capa_participacao' => '81-3.jpg',
        'capa_sm' => '81-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'5',
        'tipo_id' =>'1',
        'nome_disco' => 'Brasil Night - Ao Vivo em Montreux',
        'capa_participacao' => '81-4.jpg',
        'capa_sm' => '81-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'5',
        'tipo_id' =>'1',
        'nome_disco' => 'Vinicius de Moraes - Arca de Noe 2',
        'capa_participacao' => '81-5.jpg',
        'capa_sm' => '81-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'5',
        'tipo_id' =>'1',
        'nome_disco' => 'Os Saltimbancos Trapalhões',
        'capa_participacao' => '81-6.jpg',
        'capa_sm' => '81-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'5',
        'tipo_id' =>'1',
        'nome_disco' => 'Asas da América – Tempo Folião 82',
        'capa_participacao' => '81-7.jpg',
        'capa_sm' => '81-7-sm.jpg'
        ] );

        Participacoes::create( [
        'anos_id' =>'6',
        'tipo_id' =>'1',
        'nome_disco' => 'Luiz Gonzaga - Eterno Cantador',
        'capa_participacao' => '82-1.jpg',
        'capa_sm' => '82-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'7',
        'tipo_id' =>'1',
        'nome_disco' => 'Sérgio Boré - Tambores Urbanos... Mãos Amigas',
        'capa_participacao' => '83-1.jpg',
        'capa_sm' => '83-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'7',
        'tipo_id' =>'1',
        'nome_disco' => 'Walter Queiroz - Seguindo o Mantra',
        'capa_participacao' => '83-2.jpg',
        'capa_sm' => '83-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'7',
        'tipo_id' =>'1',
        'nome_disco' => 'Para Viver um Grande Amor',
        'capa_participacao' => '83-3.jpg',
        'capa_sm' => '83-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'7',
        'tipo_id' =>'1',
        'nome_disco' => 'Brincadeiras de Roda, Estórias e Canções de Ninar',
        'capa_participacao' => '83-4.jpg',
        'capa_sm' => '83-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'8',
        'tipo_id' =>'1',
        'nome_disco' => 'Luiz Gonzaga - Danado de Bom',
        'capa_participacao' => '84-1.jpg',
        'capa_sm' => '84-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'8',
        'tipo_id' =>'1',
        'nome_disco' => 'Francis Hime - Essas Parcerias',
        'capa_participacao' => '84-2.jpg',
        'capa_sm' => '84-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'8',
        'tipo_id' =>'1',
        'nome_disco' => 'Ivan Lins, Vitor Martins e Gilson Peranzzetta - Juntos',
        'capa_participacao' => '84-3.jpg',
        'capa_sm' => '84-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'8',
        'tipo_id' =>'1',
        'nome_disco' => 'Pablo Milanés - Ao Vivo no Brasil',
        'capa_participacao' => '84-4.jpg',
        'capa_sm' => '84-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'9',
        'tipo_id' =>'1',
        'nome_disco' => 'Gonzagão - Sanfoneiro Macho',
        'capa_participacao' => '85-1.jpg',
        'capa_sm' => '85-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'9',
        'tipo_id' =>'1',
        'nome_disco' => 'Geraldo Azevedo - A Luz do Solo',
        'capa_participacao' => '85-2.jpg',
        'capa_sm' => '85-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'9',
        'tipo_id' =>'1',
        'nome_disco' => 'Chico Buarque - Malandro',
        'capa_participacao' => '85-3.jpg',
        'capa_sm' => '85-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'9',
        'tipo_id' =>'1',
        'nome_disco' => 'Nordeste Já',
        'capa_participacao' => '85-4.jpg',
        'capa_sm' => '85-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'9',
        'tipo_id' =>'1',
        'nome_disco' => 'Uma Só Voz - Compacto Promocional Rádio Cidade FM',
        'capa_participacao' => '85-5.jpg',
        'capa_sm' => '85-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'9',
        'tipo_id' =>'1',
        'nome_disco' => 'Trio Elétrico Armandinho, Dodô e Osmar - Chame Gente',
        'capa_participacao' => '85-6.jpg',
        'capa_sm' => '85-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'10',
        'tipo_id' =>'1',
        'nome_disco' => 'Fernando Pessoa - Mensagem',
        'capa_participacao' => '86-1.jpg',
        'capa_sm' => '86-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'10',
        'tipo_id' =>'1',
        'nome_disco' => 'Elba Ramalho - Boca do Balão (Remix)',
        'capa_participacao' => '86-2.jpg',
        'capa_sm' => '86-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'11',
        'tipo_id' =>'1',
        'nome_disco' => 'Ópera do Malandro - Trilha Sonora do Filme',
        'capa_participacao' => '87-1.jpg',
        'capa_sm' => '87-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'11',
        'tipo_id' =>'1',
        'nome_disco' => 'Há Sempre um Nome de Mulher',
        'capa_participacao' => '87-2.jpg',
        'capa_sm' => '87-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'12',
        'tipo_id' =>'1',
        'nome_disco' => 'Nando Cordel - Puro Prazer',
        'capa_participacao' => '88-1.jpg',
        'capa_sm' => '88-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'13',
        'tipo_id' =>'1',
        'nome_disco' => 'Ary Barroso - Grandes Autores',
        'capa_participacao' => '89-1.jpg',
        'capa_sm' => '89-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'13',
        'tipo_id' =>'1',
        'nome_disco' => 'CID Guerreiro - Minha Pátria',
        'capa_participacao' => '89-2.jpg',
        'capa_sm' => '89-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'13',
        'tipo_id' =>'1',
        'nome_disco' => 'Tieta - Trilha sonora da novela vol. 2',
        'capa_participacao' => '89-3.jpg',
        'capa_sm' => '89-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'14',
        'tipo_id' =>'1',
        'nome_disco' => 'Gonzaguinha - Luizinho de Gonzaga',
        'capa_participacao' => '90-1.jpg',
        'capa_sm' => '90-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'14',
        'tipo_id' =>'1',
        'nome_disco' => 'Itália 90',
        'capa_participacao' => '90-2.jpg',
        'capa_sm' => '90-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'15',
        'tipo_id' =>'1',
        'nome_disco' => 'Margareth Menezes - Kindala',
        'capa_participacao' => '91-1.jpg',
        'capa_sm' => '91-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'15',
        'tipo_id' =>'1',
        'nome_disco' => 'Rio Show Festival - Ao Vivo',
        'capa_participacao' => '91-2.jpg',
        'capa_sm' => '91-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'15',
        'tipo_id' =>'1',
        'nome_disco' => 'Zé Mauricio',
        'capa_participacao' => '91-3.jpg',
        'capa_sm' => '91-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'15',
        'tipo_id' =>'1',
        'nome_disco' => 'O Galo da Madrugada',
        'capa_participacao' => '91-4.jpg',
        'capa_sm' => '91-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'15',
        'tipo_id' =>'1',
        'nome_disco' => 'Se Essa Rua Fosse Minha',
        'capa_participacao' => '91-5.jpg',
        'capa_sm' => '91-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'16',
        'tipo_id' =>'1',
        'nome_disco' => 'Pedra Sobre Pedra',
        'capa_participacao' => '92-1.jpg',
        'capa_sm' => '92-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'16',
        'tipo_id' =>'1',
        'nome_disco' => 'Dominguinhos - Garanhuns',
        'capa_participacao' => '92-2.jpg',
        'capa_sm' => '92-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'16',
        'tipo_id' =>'1',
        'nome_disco' => 'Gilberto Gil - SongBook 1',
        'capa_participacao' => '92-3.jpg',
        'capa_sm' => '92-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'16',
        'tipo_id' =>'1',
        'nome_disco' => 'AXÉ Music - O Som da Bahia',
        'capa_participacao' => '92-4.jpg',
        'capa_sm' => '92-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'17',
        'tipo_id' =>'1',
        'nome_disco' => 'É Natal',
        'capa_participacao' => '93-1.jpg',
        'capa_sm' => '93-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'17',
        'tipo_id' =>'1',
        'nome_disco' => 'Meninos do Pelô - Adota Eu',
        'capa_participacao' => '93-2.jpg',
        'capa_sm' => '93-2-sm.jpg'
        ] );

        Participacoes::create( [
        'anos_id' =>'17',
        'tipo_id' =>'1',
        'nome_disco' => 'Vinicius de Moraes - SongBook 2',
        'capa_participacao' => '93-3.jpg',
        'capa_sm' => '93-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'17',
        'tipo_id' =>'1',
        'nome_disco' => 'Zinho - Forró com Gosto de Gás',
        'capa_participacao' => '93-4.jpg',
        'capa_sm' => '93-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'17',
        'tipo_id' =>'1',
        'nome_disco' => 'O Grande Forró de Elba Ramalho',
        'capa_participacao' => '93-5.jpg',
        'capa_sm' => '93-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'17',
        'tipo_id' =>'1',
        'nome_disco' => 'Elba Ramalho - Devora-me outra vez (Single)',
        'capa_participacao' => '93-6.jpg',
        'capa_sm' => '93-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'18',
        'tipo_id' =>'1',
        'nome_disco' => 'Dorival Caymmi',
        'capa_participacao' => '94-1.jpg',
        'capa_sm' => '94-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'18',
        'tipo_id' =>'1',
        'nome_disco' => 'Nelson Gonçalves - Cante Comigo',
        'capa_participacao' => '94-2.jpg',
        'capa_sm' => '94-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'18',
        'tipo_id' =>'1',
        'nome_disco' => 'Oscar D&#39;leon - El Rey de Los Soneros',
        'capa_participacao' => '94-3.jpg',
        'capa_sm' => '94-3-sm.jpg'
        ] );

        Participacoes::create( [
        'anos_id' =>'18',
        'tipo_id' =>'1',
        'nome_disco' => 'Elba Ramalho - Devora-me (Edição Latina)',
        'capa_participacao' => '94-4.jpg',
        'capa_sm' => '94-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'19',
        'tipo_id' =>'1',
        'nome_disco' => 'Explode coração - Trilha sonora da novela',
        'capa_participacao' => '95-1.jpg',
        'capa_sm' => '95-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'19',
        'tipo_id' =>'1',
        'nome_disco' => 'Saul Barbosa - Bahia, Cidade Aberta',
        'capa_participacao' => '95-2.jpg',
        'capa_sm' => '95-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'19',
        'tipo_id' =>'1',
        'nome_disco' => 'Clara Nunes - Com Vida',
        'capa_participacao' => '95-3.jpg',
        'capa_sm' => '95-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'19',
        'tipo_id' =>'1',
        'nome_disco' => 'Ary Barroso - SongBook 2',
        'capa_participacao' => '95-4.jpg',
        'capa_sm' => '95-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'19',
        'tipo_id' =>'1',
        'nome_disco' => 'Elba Ramalho - Eu Quero é Botar Meu Bloco na Rua (Single)',
        'capa_participacao' => '95-5.jpg',
        'capa_sm' => '95-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'19',
        'tipo_id' =>'1',
        'nome_disco' => 'Hermínio Bello de Carvalho - Cantoria',
        'capa_participacao' => '95-6.jpg',
        'capa_sm' => '95-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'20',
        'tipo_id' =>'1',
        'nome_disco' => 'Jair Rodrigues - Casa de Samba (Ao Vivo)',
        'capa_participacao' => '96-1.jpg',
        'capa_sm' => '96-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'20',
        'tipo_id' =>'1',
        'nome_disco' => 'Antonio Carlos Jobim - SongBook 4',
        'capa_participacao' => '96-2.jpg',
        'capa_sm' => '96-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'20',
        'tipo_id' =>'1',
        'nome_disco' => 'Flavio José - Filho do Dono',
        'capa_participacao' => '96-3.jpg',
        'capa_sm' => '96-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'20',
        'tipo_id' =>'1',
        'nome_disco' => 'Osmar Macedo - Filhos da Alegria',
        'capa_participacao' => '96-4.jpg',
        'capa_sm' => '96-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'20',
        'tipo_id' =>'1',
        'nome_disco' => 'Rio 2004 - Cidade Candidata (Single)',
        'capa_participacao' => '96-5.jpg',
        'capa_sm' => '96-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'20',
        'tipo_id' =>'1',
        'nome_disco' => 'Quinteto Violado - 25 Anos Não São 25 Dias',
        'capa_participacao' => '96-6.jpg',
        'capa_sm' => '96-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'21',
        'tipo_id' =>'1',
        'nome_disco' => 'Arraiá da Xuxa',
        'capa_participacao' => '97-1.jpg',
        'capa_sm' => '97-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'21',
        'tipo_id' =>'1',
        'nome_disco' => 'Djavan - SongBook 1',
        'capa_participacao' => '97-2.jpg',
        'capa_sm' => '97-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'21',
        'tipo_id' =>'1',
        'nome_disco' => 'Recirandar',
        'capa_participacao' => '97-3.jpg',
        'capa_sm' => '97-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'21',
        'tipo_id' =>'1',
        'nome_disco' => 'Tributo a Dalva de Oliveira',
        'capa_participacao' => '97-4.jpg',
        'capa_sm' => '97-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'21',
        'tipo_id' =>'1',
        'nome_disco' => 'Dominguinhos e Convidados 2',
        'capa_participacao' => '97-5.jpg',
        'capa_sm' => '97-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'21',
        'tipo_id' =>'1',
        'nome_disco' => 'O cangaceiro - Trilha sonora do filme',
        'capa_participacao' => '97-6.jpg',
        'capa_sm' => '97-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'21',
        'tipo_id' =>'1',
        'nome_disco' => 'Casa da Bossa',
        'capa_participacao' => '97-7.jpg',
        'capa_sm' => '97-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'21',
        'tipo_id' =>'1',
        'nome_disco' => 'Fagner Terral',
        'capa_participacao' => '97-8.jpg',
        'capa_sm' => '97-8-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'21',
        'tipo_id' =>'1',
        'nome_disco' => 'Toquinho - Canção Dos Direitos da Criança',
        'capa_participacao' => '97-9.jpg',
        'capa_sm' => '97-9-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'21',
        'tipo_id' =>'1',
        'nome_disco' => 'Acorda Bamba',
        'capa_participacao' => '97-10.jpg',
        'capa_sm' => '97-10-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'21',
        'tipo_id' =>'1',
        'nome_disco' => 'Allan Kardec - Um olhar para a eternidade - Trilha sonora da peça',
        'capa_participacao' => '97-11.jpg',
        'capa_sm' => '97-11-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'22',
        'tipo_id' =>'1',
        'nome_disco' => 'Rumo ao Penta',
        'capa_participacao' => '98-1.jpg',
        'capa_sm' => '98-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'22',
        'tipo_id' =>'1',
        'nome_disco' => 'Marcos Valle - SongBook 1',
        'capa_participacao' => '98-2.jpg',
        'capa_sm' => '98-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'22',
        'tipo_id' =>'1',
        'nome_disco' => 'Toni Costa - A Sorte Muda',
        'capa_participacao' => '98-3.jpg',
        'capa_sm' => '98-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'22',
        'tipo_id' =>'1',
        'nome_disco' => 'Brasil São Outros 500',
        'capa_participacao' => '98-4.jpg',
        'capa_sm' => '98-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'22',
        'tipo_id' =>'1',
        'nome_disco' => 'Jackson do Pandeiro - Revisto e Sampleado',
        'capa_participacao' => '98-5.jpg',
        'capa_sm' => '98-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'22',
        'tipo_id' =>'1',
        'nome_disco' => 'Canções do Divino Mestre',
        'capa_participacao' => '98-6.jpg',
        'capa_sm' => '98-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'22',
        'tipo_id' =>'1',
        'nome_disco' => 'António Chainho - A Guitarra e Outras Mulheres',
        'capa_participacao' => '98-7.jpg',
        'capa_sm' => '98-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'22',
        'tipo_id' =>'1',
        'nome_disco' => 'Roberto Leal - Forrandovira',
        'capa_participacao' => '98-8.jpg',
        'capa_sm' => '98-8-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'22',
        'tipo_id' =>'1',
        'nome_disco' => 'Mauricio Mattar - A Gente Nunca Esquece',
        'capa_participacao' => '98-9.jpg',
        'capa_sm' => '98-9-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'22',
        'tipo_id' =>'1',
        'nome_disco' => 'Casa do Forró',
        'capa_participacao' => '98-10.jpg',
        'capa_sm' => '98-10-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'23',
        'tipo_id' =>'1',
        'nome_disco' => 'Asinhas da América - O Pinto da Madrugada',
        'capa_participacao' => '99-1.jpg',
        'capa_sm' => '99-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'23',
        'tipo_id' =>'1',
        'nome_disco' => 'Marinês e Sua Gente - 50 anos de forró',
        'capa_participacao' => '99-2.jpg',
        'capa_sm' => '99-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'23',
        'tipo_id' =>'1',
        'nome_disco' => 'Simone Guimarães - Aguapé',
        'capa_participacao' => '99-3.jpg',
        'capa_sm' => '99-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'23',
        'tipo_id' =>'1',
        'nome_disco' => 'João Donato - SongBook 2',
        'capa_participacao' => '99-4.jpg',
        'capa_sm' => '99-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'23',
        'tipo_id' =>'1',
        'nome_disco' => 'Tons da Natureza',
        'capa_participacao' => '99-5.jpg',
        'capa_sm' => '99-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'23',
        'tipo_id' =>'1',
        'nome_disco' => 'Chico Buarque - SongBook 1',
        'capa_participacao' => '99-6.jpg',
        'capa_sm' => '99-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'23',
        'tipo_id' =>'1',
        'nome_disco' => 'Chico Buarque - Songbook 4',
        'capa_participacao' => '99-7.jpg',
        'capa_sm' => '99-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'23',
        'tipo_id' =>'1',
        'nome_disco' => 'Elba Ramalho - Grandes Sucessos',
        'capa_participacao' => '99-8.jpg',
        'capa_sm' => '99-8-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'23',
        'tipo_id' =>'1',
        'nome_disco' => 'Francisco Magaldi e José Lourenço - Viagem das Cores',
        'capa_participacao' => '99-9.jpg',
        'capa_sm' => '99-9-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'23',
        'tipo_id' =>'1',
        'nome_disco' => 'Alcymar Monteiro - Festa Brasileira',
        'capa_participacao' => '99-10.jpg',
        'capa_sm' => '99-10-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Brasil 500 Anos',
        'capa_participacao' => '2000-1.jpg',
        'capa_sm' => '2000-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'O Melhor do Forró no Maior São João do Mundo',
        'capa_participacao' => '2000-2.jpg',
        'capa_sm' => '2000-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Zé Ramalho - Nação Nordestina',
        'capa_participacao' => '2000-3.jpg',
        'capa_sm' => '2000-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Trio Forrozão - Na Batida da Zabumba',
        'capa_participacao' => '2000-4.jpg',
        'capa_sm' => '2000-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Di Blasio - Brasileirinho',
        'capa_participacao' => '2000-5.jpg',
        'capa_sm' => '2000-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Banda Beijo - Apaixonada',
        'capa_participacao' => '2000-6.jpg',
        'capa_sm' => '2000-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Eliano Julião - O Canto do Seridó',
        'capa_participacao' => '2000-7.jpg',
        'capa_sm' => '2000-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Brasil All Stars - Sons da Terra',
        'capa_participacao' => '2000-8.jpg',
        'capa_sm' => '2000-8-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Folia de Rua 2000',
        'capa_participacao' => '2000-9.jpg',
        'capa_sm' => '2000-9-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Deus Abençoe as Crianças',
        'capa_participacao' => '2000-10.jpg',
        'capa_sm' => '2000-10-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Sérgio Ricardo - Estória de João-Joana',
        'capa_participacao' => '2000-11.jpg',
        'capa_sm' => '2000-11-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Assis Ângelo - Interpreta Poetas Brasileiros',
        'capa_participacao' => '2000-12.jpg',
        'capa_sm' => '2000-12-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'1',
        'nome_disco' => 'Caminho das Águas - Rio São Francisco',
        'capa_participacao' => '2000-13.jpg',
        'capa_sm' => '2000-13-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'24',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD - O Grande Encontro 3 - Ao Vivo',
        'capa_participacao' => '2000-14.jpg',
        'capa_sm' => '2000-14-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'25',
        'tipo_id' =>'1',
        'nome_disco' => 'Coração de Mãe',
        'capa_participacao' => '2001-1.jpg',
        'capa_sm' => '2001-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'25',
        'tipo_id' =>'1',
        'nome_disco' => 'Padre Antonio Maria - Apenas um Menino',
        'capa_participacao' => '2001-2.jpg',
        'capa_sm' => '2001-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'25',
        'tipo_id' =>'1',
        'nome_disco' => 'Roupa Nova - Ouro de Minas',
        'capa_participacao' => '2001-3.jpg',
        'capa_sm' => '2001-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'25',
        'tipo_id' =>'1',
        'nome_disco' => 'Moraes Moreira - Bahião com H',
        'capa_participacao' => '2001-4.jpg',
        'capa_sm' => '2001-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'25',
        'tipo_id' =>'1',
        'nome_disco' => 'Zezo Ribeiro - Flamencando',
        'capa_participacao' => '2001-5.jpg',
        'capa_sm' => '2001-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'26',
        'tipo_id' =>'1',
        'nome_disco' => 'Humberto Teixeira - O Doutor do Baião',
        'capa_participacao' => '2002-1.jpg',
        'capa_sm' => '2002-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'26',
        'tipo_id' =>'1',
        'nome_disco' => 'Braguinha - SongBook 1',
        'capa_participacao' => '2002-2.jpg',
        'capa_sm' => '2002-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'26',
        'tipo_id' =>'1',
        'nome_disco' => 'Conjunto Época de Ouro - Café Brasil 2',
        'capa_participacao' => '2002-3.jpg',
        'capa_sm' => '2002-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'26',
        'tipo_id' =>'1',
        'nome_disco' => 'Palco MPB 2 - Ao Vivo',
        'capa_participacao' => '2002-4.jpg',
        'capa_sm' => '2002-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'26',
        'tipo_id' =>'1',
        'nome_disco' => 'Bloco Flor da Lira de Olinda - Vem Dudu',
        'capa_participacao' => '2002-5.jpg',
        'capa_sm' => '2002-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'26',
        'tipo_id' =>'1',
        'nome_disco' => 'Zeca Baleiro - Pet Shop Mundo Cão
',
        'capa_participacao' => '2002-6.jpg',
        'capa_sm' => '2002-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'26',
        'tipo_id' =>'1',
        'nome_disco' => 'Quinteto Violado - Retirantes de Sanfona e Violadas',
        'capa_participacao' => '2002-7.jpg',
        'capa_sm' => '2002-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'27',
        'tipo_id' =>'1',
        'nome_disco' => 'João Bosco - SongBook 2',
        'capa_participacao' => '2003-1.jpg',
        'capa_sm' => '2003-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'27',
        'tipo_id' =>'1',
        'nome_disco' => 'Trio Nordestino - Baú do Trio Nordestino',
        'capa_participacao' => '2003-2.jpg',
        'capa_sm' => '2003-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'27',
        'tipo_id' =>'1',
        'nome_disco' => 'Grupo Musical Mãe do Perpétuo Socorro - Só por Você, Maria',
        'capa_participacao' => '2003-3.jpg',
        'capa_sm' => '2003-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'27',
        'tipo_id' =>'1',
        'nome_disco' => 'Jaguaribe Carne - Vem no Vento',
        'capa_participacao' => '2003-4.jpg',
        'capa_sm' => '2003-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'27',
        'tipo_id' =>'1',
        'nome_disco' => 'Pedro Jóia - Jacarandá',
        'capa_participacao' => '2003-5.jpg',
        'capa_sm' => '2003-5-sm.jpg'
        ] );

        Participacoes::create( [
        'anos_id' =>'27',
        'tipo_id' =>'1',
        'nome_disco' => 'Luiz Gonzaga - Show de Despedida - Danado de bom',
        'capa_participacao' => '2003-6.jpg',
        'capa_sm' => '2003-6-sm.jpg'
        ] );

        Participacoes::create( [
        'anos_id' =>'28',
        'tipo_id' =>'1',
        'nome_disco' => 'Um barzinho, um Violão - Volumes 3 e 4',
        'capa_participacao' => '2004-1.jpg',
        'capa_sm' => '2004-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'28',
        'tipo_id' =>'1',
        'nome_disco' => 'Márcia Short - Iluminada',
        'capa_participacao' => '2004-2.jpg',
        'capa_sm' => '2004-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'28',
        'tipo_id' =>'1',
        'nome_disco' => 'Altay Veloso - Alabê de Jerusalém',
        'capa_participacao' => '2004-3.jpg',
        'capa_sm' => '2004-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'28',
        'tipo_id' =>'1',
        'nome_disco' => 'Ricardo Chaves - Cantador de Alegria',
        'capa_participacao' => '2004-4.jpg',
        'capa_sm' => '2004-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'28',
        'tipo_id' =>'1',
        'nome_disco' => 'Toninho Horta - Com o Pé no Forró',
        'capa_participacao' => '2004-5.jpg',
        'capa_sm' => '2004-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'28',
        'tipo_id' =>'1',
        'nome_disco' => '<strong>Canto</strong> Livre Meninada',
        'capa_participacao' => '2004-6.jpg',
        'capa_sm' => '2004-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'29',
        'tipo_id' =>'1',
        'nome_disco' => 'Prova de Amor',
        'capa_participacao' => '2005-1.jpg',
        'capa_sm' => '2005-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'29',
        'tipo_id' =>'1',
        'nome_disco' => 'Trio Virgulino - Forró do Futuro',
        'capa_participacao' => '2005-2.jpg',
        'capa_sm' => '2005-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'29',
        'tipo_id' =>'1',
        'nome_disco' => 'Forróçacana - O Melhor Forró do Mundo (Ao vivo)',
        'capa_participacao' => '2005-3.jpg',
        'capa_sm' => '2005-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'29',
        'tipo_id' =>'1',
        'nome_disco' => 'Chico César - De uns Tempos pra Cá',
        'capa_participacao' => '2005-4.jpg',
        'capa_sm' => '2005-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'29',
        'tipo_id' =>'1',
        'nome_disco' => 'Salgado Maranhão - Amorágio',
        'capa_participacao' => '2005-5.jpg',
        'capa_sm' => '2005-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'29',
        'tipo_id' =>'1',
        'nome_disco' => 'A Pessoa é Para o Que Nasce',
        'capa_participacao' => '2005-6.jpg',
        'capa_sm' => '2005-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'29',
        'tipo_id' =>'1',
        'nome_disco' => 'Pra Você',
        'capa_participacao' => '2005-7.jpg',
        'capa_sm' => '2005-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'29',
        'tipo_id' =>'1',
        'nome_disco' => 'Amigos do Bem',
        'capa_participacao' => '2005-8.jpg',
        'capa_sm' => '2005-8-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'29',
        'tipo_id' =>'1',
        'nome_disco' => 'Fernando Pessoa - Mensagem 2',
        'capa_participacao' => '2005-9.jpg',
        'capa_sm' => '2005-9-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'29',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD Forróçacana - O melhor forró do mundo (Ao vivo)',
        'capa_participacao' => '2005-10.jpg',
        'capa_sm' => '2005-10-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'30',
        'tipo_id' =>'1',
        'nome_disco' => 'Chico César - Cantos e Encontros de uns Tempos pra Cá',
        'capa_participacao' => '2006-1.jpg',
        'capa_sm' => '2006-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'30',
        'tipo_id' =>'1',
        'nome_disco' => 'Páginas da vida - Trilha sonora da novela',
        'capa_participacao' => '2006-2.jpg',
        'capa_sm' => '2006-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'30',
        'tipo_id' =>'1',
        'nome_disco' => 'Antônio Nóbrega - Nove de Fevereiro Vol. 2',
        'capa_participacao' => '2006-3.jpg',
        'capa_sm' => '2006-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'30',
        'tipo_id' =>'1',
        'nome_disco' => 'Forró Pras Crianças',
        'capa_participacao' => '2006-4.jpg',
        'capa_sm' => '2006-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'30',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD Chico César - Cantos e Encontros de uns Tempos pra Cá',
        'capa_participacao' => '2006-5.jpg',
        'capa_sm' => '2006-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'30',
        'tipo_id' =>'1',
        'nome_disco' => 'Cicinho de Assis - Meu Passarinho Voou (Single)',
        'capa_participacao' => '2006-6.jpg',
        'capa_sm' => '2006-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'30',
        'tipo_id' =>'1',
        'nome_disco' => 'O Fio da Meada - Trilha da Peça',
        'capa_participacao' => '2006-7.jpg',
        'capa_sm' => '2006-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'31',
        'tipo_id' =>'1',
        'nome_disco' => 'Bendito o Que Vem em Nome do Senhor',
        'capa_participacao' => '2007-1.jpg',
        'capa_sm' => '2007-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'31',
        'tipo_id' =>'1',
        'nome_disco' => 'PE. Reginaldo Manzotti - A Tempestade Vai Passar',
        'capa_participacao' => '2007-2.jpg',
        'capa_sm' => '2007-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'31',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD Homenagem ao Papa Bento XVI',
        'capa_participacao' => '2007-3.jpg',
        'capa_sm' => '2007-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'31',
        'tipo_id' =>'1',
        'nome_disco' => 'Amaro Penna e César Asfor - Parceiros',
        'capa_participacao' => '2007-4.jpg',
        'capa_sm' => '2007-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'31',
        'tipo_id' =>'1',
        'nome_disco' => 'Geraldo Azevedo - O Brasil Existe em Mim',
        'capa_participacao' => '2007-5.jpg',
        'capa_sm' => '2007-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'31',
        'tipo_id' =>'1',
        'nome_disco' => 'Asas do Frevo',
        'capa_participacao' => '2007-6.jpg',
        'capa_sm' => '2007-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'31',
        'tipo_id' =>'1',
        'nome_disco' => '100 Anos de Frevo - É de Perder o Sapato...',
        'capa_participacao' => '2007-7.jpg',
        'capa_sm' => '2007-7-sm.jpg'
        ] );



        Participacoes::create( [
        'anos_id' =>'31',
        'tipo_id' =>'1',
        'nome_disco' => 'ELBA RAMALHO - JOÃO NUNES 90 ANOS',
        'capa_participacao' => '2007-8.jpg',
        'capa_sm' => '2007-8-sm.jpg'
        ] );



        Participacoes::create( [
        'anos_id' =>'32',
        'tipo_id' =>'1',
        'nome_disco' => 'Estrelas do Natal',
        'capa_participacao' => '2008-1.jpg',
        'capa_sm' => '2008-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'32',
        'tipo_id' =>'1',
        'nome_disco' => 'Zezo Ribeiro - Coração de Melodia',
        'capa_participacao' => '2008-2.jpg',
        'capa_sm' => '2008-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'32',
        'tipo_id' =>'1',
        'nome_disco' => 'Trio Virgulino - 26 Anos de Estrada',
        'capa_participacao' => '2008-3.jpg',
        'capa_sm' => '2008-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'32',
        'tipo_id' =>'1',
        'nome_disco' => 'Um Barzinho um Violão - Novela 70',
        'capa_participacao' => '2008-4.jpg',
        'capa_sm' => '2008-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'32',
        'tipo_id' =>'1',
        'nome_disco' => 'Fabio Jr. & Elas',
        'capa_participacao' => '2008-5.jpg',
        'capa_sm' => '2008-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'32',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD - Por Uma Vida Sem Violência - Ao Vivo',
        'capa_participacao' => '2008-6.jpg',
        'capa_sm' => '2008-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'32',
        'tipo_id' =>'1',
        'nome_disco' => 'Elymar Santos - Guerreiro Sonhador',
        'capa_participacao' => '2008-7.jpg',
        'capa_sm' => '2008-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'32',
        'tipo_id' =>'1',
        'nome_disco' => 'Jeff Izaki - Festa do Nascimento',
        'capa_participacao' => '2008-8.jpg',
        'capa_sm' => '2008-8-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'32',
        'tipo_id' =>'1',
        'nome_disco' => 'Natal Bem Brasileiro',
        'capa_participacao' => '2008-9.jpg',
        'capa_sm' => '2008-9-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'32',
        'tipo_id' =>'1',
        'nome_disco' => 'Olinda 100 Anos de Frevo',
        'capa_participacao' => '2008-10.jpg',
        'capa_sm' => '2008-10-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'32',
        'tipo_id' =>'1',
        'nome_disco' => 'Banda Sinfônica de Natal/RN',
        'capa_participacao' => '2008-11.jpg',
        'capa_sm' => '2008-11-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'André Rio e Trio Sotaque - Rapsódia Nordestina',
        'capa_participacao' => '2009-1.jpg',
        'capa_sm' => '2009-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Padre Fábio de Melo - Iluminar',
        'capa_participacao' => '2009-2.jpg',
        'capa_sm' => '2009-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => '100 Anos Ataulfo Alves',
        'capa_participacao' => '2009-3.jpg',
        'capa_sm' => '2009-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Galo da Madrugada - O Canto do Galo - Um Tributo a Enéas',
        'capa_participacao' => '2009-4.jpg',
        'capa_sm' => '2009-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Trio Juriti - Cara a Cara',
        'capa_participacao' => '2009-5.jpg',
        'capa_sm' => '2009-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Tito Lívio - Feito pra Tocar no Rádio',
        'capa_participacao' => '2009-6.jpg',
        'capa_sm' => '2009-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Tânia Mara - Falando de Amor (Ao vivo)',
        'capa_participacao' => '2009-7.jpg',
        'capa_sm' => '2009-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Targino Godim - Simplesmente Assim',
        'capa_participacao' => '2009-8.jpg',
        'capa_sm' => '2009-8-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD - Dominguinhos - Ao Vivo',
        'capa_participacao' => '2009-9.jpg',
        'capa_sm' => '2009-9-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Santanna, o Cantador - Forró, a Dança do Dia a Dia',
        'capa_participacao' => '2009-10.jpg',
        'capa_sm' => '2009-10-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Nego',
        'capa_participacao' => '2009-11.jpg',
        'capa_sm' => '2009-11-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD - Raiz do Sana - Ao Vivo',
        'capa_participacao' => '2009-12.jpg',
        'capa_sm' => '2009-12-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Padre Antônio Maria - Prisioneiro do Amor',
        'capa_participacao' => '2009-13.jpg',
        'capa_sm' => '2009-13-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Fúba de Taperoá - Forró do Bom',
        'capa_participacao' => '2009-14.jpg',
        'capa_sm' => '2009-14-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Paulo Debétio - Pelas Ruas do Brasil',
        'capa_participacao' => '2009-15.jpg',
        'capa_sm' => '2009-15-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Ubiratan Aguiar - Sina do Cabra da Peste',
        'capa_participacao' => '2009-16.jpg',
        'capa_sm' => '2009-16-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'1',
        'nome_disco' => 'Silvério Pessoa - Ciclos',
        'capa_participacao' => '2009-17.jpg',
        'capa_sm' => '2009-17-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'33',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD Tânia Mara - Falando de Amor (Ao vivo)',
        'capa_participacao' => '2009-18.jpg',
        'capa_sm' => '2009-18-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'34',
        'tipo_id' =>'1',
        'nome_disco' => 'Jacinto Silva - No Coração da Gente',
        'capa_participacao' => '2010-1.jpg',
        'capa_sm' => '2010-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'34',
        'tipo_id' =>'1',
        'nome_disco' => 'Tributo a Genival Macedo',
        'capa_participacao' => '2010-2.jpg',
        'capa_sm' => '2010-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'34',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD Cristina Amaral - A Vida é um Circo',
        'capa_participacao' => '2010-3.jpg',
        'capa_sm' => '2010-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'34',
        'tipo_id' =>'1',
        'nome_disco' => 'Cristina Amaral - A Vida é um Circo',
        'capa_participacao' => '2010-4.jpg',
        'capa_sm' => '2010-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'34',
        'tipo_id' =>'1',
        'nome_disco' => 'Xico Bizerra - Candeeiros e Neons - Forroboxote 9',
        'capa_participacao' => '2010-5.jpg',
        'capa_sm' => '2010-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'34',
        'tipo_id' =>'1',
        'nome_disco' => 'Roberto Carlos - Emoções Sertanejas',
        'capa_participacao' => '2010-6.jpg',
        'capa_sm' => '2010-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'34',
        'tipo_id' =>'1',
        'nome_disco' => 'Terezinha do Acordoem - Seis Ponto Zero',
        'capa_participacao' => '2010-7.jpg',
        'capa_sm' => '2010-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'34',
        'tipo_id' =>'1',
        'nome_disco' => 'Socorro Lira - Lua Bonita',
        'capa_participacao' => '2010-8.jpg',
        'capa_sm' => '2010-8-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'34',
        'tipo_id' =>'1',
        'nome_disco' => 'Monobloco - 10',
        'capa_participacao' => '2010-9.jpg',
        'capa_sm' => '2010-9-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'34',
        'tipo_id' =>'1',
        'nome_disco' => 'Pimenta no Reino - Me Deixa Ser Seu Namorado',
        'capa_participacao' => '2010-10.jpg',
        'capa_sm' => '2010-10-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'35',
        'tipo_id' =>'1',
        'nome_disco' => 'Sandra de Sá - AfricaNaAtividade - Ao Vivo',
        'capa_participacao' => '2011-1.jpg',
        'capa_sm' => '2011-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'35',
        'tipo_id' =>'1',
        'nome_disco' => 'Dominguinhos - Iluminado',
        'capa_participacao' => '2011-2.jpg',
        'capa_sm' => '2011-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'35',
        'tipo_id' =>'1',
        'nome_disco' => 'A vida da gente - Trilha sonora da novela',
        'capa_participacao' => '2011-3.jpg',
        'capa_sm' => '2011-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'35',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD/CD - Gerlane Lops - Da Branca',
        'capa_participacao' => '2011-4.jpg',
        'capa_sm' => '2011-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'35',
        'tipo_id' =>'1',
        'nome_disco' => 'O Trovador - Uma Homenagem a Evaldo Gouveia',
        'capa_participacao' => '2011-5.jpg',
        'capa_sm' => '2011-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'35',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD Loalwa Braz - Ensolarado (Ao vivo)',
        'capa_participacao' => '2011-6.jpg',
        'capa_sm' => '2011-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Maciel Melo - Minha metade',
        'capa_participacao' => '2012-1.jpg',
        'capa_sm' => '2012-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Qinho - O Tempo Soa',
        'capa_participacao' => '2012-2.jpg',
        'capa_sm' => '2012-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Geraldinho Lins - Do Sertão à Beira-mar',
        'capa_participacao' => '2012-3.jpg',
        'capa_sm' => '2012-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD Almir Rouche - Evoé, Nabuco!',
        'capa_participacao' => '2012-4.jpg',
        'capa_sm' => '2012-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Del Feliz - Missa do Vaqueiro 2012',
        'capa_participacao' => '2012-5.jpg',
        'capa_sm' => '2012-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Fim de Feira - De Todo Jeito a Gente Apanha',
        'capa_participacao' => '2012-6.jpg',
        'capa_sm' => '2012-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Genival Lacerda - No Balanço do Forró',
        'capa_participacao' => '2012-7.jpg',
        'capa_sm' => '2012-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Gereba Barreto & Convidados - Luas do Gonzaga',
        'capa_participacao' => '2012-8.jpg',
        'capa_sm' => '2012-8-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Falamansa - As Sanfonas do Rei',
        'capa_participacao' => '2012-9.jpg',
        'capa_sm' => '2012-9-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Cristo Redentor 80 anos - Ao Vivo',
        'capa_participacao' => '2012-10.jpg',
        'capa_sm' => '2012-10-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Luiz Gonzaga - Baião de Dois',
        'capa_participacao' => '2012-11.jpg',
        'capa_sm' => '2012-11-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Bicho de Pé - A Vida Vai',
        'capa_participacao' => '2012-12.jpg',
        'capa_sm' => '2012-12-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => '100 Anos de Gonzagão',
        'capa_participacao' => '2012-13.jpg',
        'capa_sm' => '2012-13-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'AmazAn - Só alegria!',
        'capa_participacao' => '2012-14.jpg',
        'capa_sm' => '2012-14-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'ROGÉRIO RANGEL - RESPEITO A JANUÁRIO',
        'capa_participacao' => '2012-15.jpg',
        'capa_sm' => '2012-15-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'Um bilhete pro seu Lua (single) ',
        'capa_participacao' => '2012-16.jpg',
        'capa_sm' => '2012-16-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'36',
        'tipo_id' =>'1',
        'nome_disco' => 'O sertão de Luiz (single)',
        'capa_participacao' => '2012-17.jpg',
        'capa_sm' => '2012-17-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'37',
        'tipo_id' =>'1',
        'nome_disco' => 'Flor de Muçambê',
        'capa_participacao' => '2013-1.jpg',
        'capa_sm' => '2013-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'37',
        'tipo_id' =>'1',
        'nome_disco' => 'Dominguinhos e Xico Bizerra - Luar Agreste no Céu Cariri - Forroboxote 10',
        'capa_participacao' => '2013-2.jpg',
        'capa_sm' => '2013-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'37',
        'tipo_id' =>'1',
        'nome_disco' => 'Magary Lord - Inventando Moda!',
        'capa_participacao' => '2013-3.jpg',
        'capa_sm' => '2013-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'37',
        'tipo_id' =>'1',
        'nome_disco' => 'Rezas do Sol Para a Missa do Valqueiro',
        'capa_participacao' => '2013-4.jpg',
        'capa_sm' => '2013-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'37',
        'tipo_id' =>'1',
        'nome_disco' => 'Marina Elali - Duetos (Ao vivo)',
        'capa_participacao' => '2013-5.jpg',
        'capa_sm' => '2013-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'37',
        'tipo_id' =>'1',
        'nome_disco' => 'Frei Damião Silva - Vem Jesus',
        'capa_participacao' => '2013-6.jpg',
        'capa_sm' => '2013-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'37',
        'tipo_id' =>'2',
        'nome_disco' => 'DVD Marina Elali - Duetos (Ao vivo)',
        'capa_participacao' => '2013-7.jpg',
        'capa_sm' => '2013-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'37',
        'tipo_id' =>'1',
        'nome_disco' => 'Tauan Rodrigues - Meu Destino no Teu (single)',
        'capa_participacao' => '2013-8.jpg',
        'capa_sm' => '2013-8-sm.jpg'
        ] );
        
        Participacoes::create( [
        'anos_id' =>'38',
        'tipo_id' =>'1',
        'nome_disco' => 'Cláudia Beija - Amarte',
        'capa_participacao' => '2014-1.jpg',
        'capa_sm' => '2014-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'38',
        'tipo_id' =>'1',
        'nome_disco' => 'Ricardo Koctus - Samba Bossa rock&#39;n&#39;roll',
        'capa_participacao' => '2014-2.jpg',
        'capa_sm' => '2014-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'38',
        'tipo_id' =>'1',
        'nome_disco' => 'Cezzinha & Convidados - Ao Vivo',
        'capa_participacao' => '2014-3.jpg',
        'capa_sm' => '2014-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'38',
        'tipo_id' =>'1',
        'nome_disco' => 'Isabella Taviani - Eu Raio X (Ao vivo)',
        'capa_participacao' => '2014-4.jpg',
        'capa_sm' => '2014-4-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'38',
        'tipo_id' =>'1',
        'nome_disco' => 'Irah Caldeira - Esperando por Setembro ',
        'capa_participacao' => '2014-5.jpg',
        'capa_sm' => '2014-5-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'38',
        'tipo_id' =>'1',
        'nome_disco' => 'Leninho de Bodocó & Convidados - Do Exu a Liverpool',
        'capa_participacao' => '2014-6.jpg',
        'capa_sm' => '2014-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'38',
        'tipo_id' =>'1',
        'nome_disco' => 'Pe. Zezinho - Tributo a um Pioneiro',
        'capa_participacao' => '2014-7.jpg',
        'capa_sm' => '2014-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'38',
        'tipo_id' =>'1',
        'nome_disco' => 'Jake Trevisan - Esperança',
        'capa_participacao' => '2014-8.jpg',
        'capa_sm' => '2014-8-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'38',
        'tipo_id' =>'1',
        'nome_disco' => 'Joãozinho Ribeiro - Milhões de uns vol. 1',
        'capa_participacao' => '2014-10.jpg',
        'capa_sm' => '2014-10-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'38',
        'tipo_id' =>'1',
        'nome_disco' => 'Camarão & Salatiel - Ao Vivo',
        'capa_participacao' => '2014-11.jpg',
        'capa_sm' => '2014-11-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'38',
        'tipo_id' =>'1',
        'nome_disco' => 'Targino Gondim - Ser Tão da Gente',
        'capa_participacao' => '2014-12.jpg',
        'capa_sm' => '2014-12-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'39',
        'tipo_id' =>'1',
        'nome_disco' => 'Anastatácia - Ave de Arribação',
        'capa_participacao' => '2015-1.jpg',
        'capa_sm' => '2015-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'39',
        'tipo_id' =>'1',
        'nome_disco' => 'Padre Fábio de Melo - Deus no Esconderijo do Verso',
        'capa_participacao' => '2015-2.jpg',
        'capa_sm' => '2015-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'39',
        'tipo_id' =>'1',
        'nome_disco' => 'Rafael Barros Castro',
        'capa_participacao' => '2015-3.jpg',
        'capa_sm' => '2015-3-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'39',
        'tipo_id' =>'1',
        'nome_disco' => 'Mauricio Matar - 20 Anos de Música',
        'capa_participacao' => '2015-4.jpg',
        'capa_sm' => '2015-4-sm.jpg'
        ] );


        Participacoes::create( [
        'anos_id' =>'39',
        'tipo_id' =>'1',
        'nome_disco' => 'Dona Ivone Lara - SambaBook',
        'capa_participacao' => '2015-5.jpg',
        'capa_sm' => '2015-5-sm.jpg'
        ] );

        Participacoes::create( [
        'anos_id' =>'39',
        'tipo_id' =>'1',
        'nome_disco' => 'Duas Noites para Dolores Duran',
        'capa_participacao' => '2015-6.jpg',
        'capa_sm' => '2015-6-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'39',
        'tipo_id' =>'1',
        'nome_disco' => 'Sambas de Enredo Carnaval 2016 - Serie A Rio de Janeiro',
        'capa_participacao' => '2015-7.jpg',
        'capa_sm' => '2015-7-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'39',
        'tipo_id' =>'1',
        'nome_disco' => 'JUNTOS PELA VIDA (SINGLE DIGITAL)',
        'capa_participacao' => '2015-8.jpg',
        'capa_sm' => '2015-8-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'39',
        'tipo_id' =>'1',
        'nome_disco' => 'Marcelo Barra - Minha Aldeia',
        'capa_participacao' => '2015-9.jpg',
        'capa_sm' => '2015-9-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'40',
        'tipo_id' =>'1',
        'nome_disco' => 'Êta Mundo Bom! - Trilha Sonora da Novela',
        'capa_participacao' => '2015-10.jpg',
        'capa_sm' => '2015-10-sm.jpg'
        ] );

        Participacoes::create( [
        'anos_id' =>'39',
        'tipo_id' =>'1',
        'nome_disco' => 'LIAH SOARES - MÃE DO PERDÃO (SINGLE DIGITAL)',
        'capa_participacao' => '2015-11.jpg',
        'capa_sm' => '2015-11-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'40',
        'tipo_id' =>'1',
        'nome_disco' => 'Elba Ramalho - Frevo, Paixão e Zueira (Single Digital)',
        'capa_participacao' => '2016-1.jpg',
        'capa_sm' => '2016-1-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'40',
        'tipo_id' =>'1',
        'nome_disco' => 'Padre Fábio de Melo - Deus no Esconderijo do Verso - Ao vivo',
        'capa_participacao' => '2016-2.jpg',
        'capa_sm' => '2016-2-sm.jpg'
        ] );
        Participacoes::create( [
        'anos_id' =>'40',
        'tipo_id' =>'1',
        'nome_disco' => 'Xico Bizerra - Valsas, Canções e Tudo o mais que Há ',
        'capa_participacao' => '2016-3.jpg',
        'capa_sm' => '2016-3-sm.jpg'
        ] );

        Participacoes::create( [
        'anos_id' =>'40',
        'tipo_id' =>'1',
        'nome_disco' => 'Velho Chico - Trilha sonora da novela vol. 2',
        'capa_participacao' => '2016-4.jpg',
        'capa_sm' => '2016-4-sm.jpg'
        ] );


         Participacoes::create( [
        'anos_id' =>'40',
        'tipo_id' =>'1',
        'nome_disco' => 'SPOK & ORQUESTRA FORROBODÓ - CONVIDAM',
        'capa_participacao' => '2016-5.jpg',
        'capa_sm' => '2016-5-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'40',
        'tipo_id' =>'1',
        'nome_disco' => 'Quarteto Radamés Gnatalli e Convidados - Brasil de Tuhu vol. 1',
        'capa_participacao' => '2016-6.jpg',
        'capa_sm' => '2016-6-sm.jpg'
        ] );

          Participacoes::create( [
        'anos_id' =>'40',
        'tipo_id' =>'1',
        'nome_disco' => 'DELÍRIO DE UM ROMANCE A CÉU ABERTO - ZÉ MANOEL',
        'capa_participacao' => '2016-7.jpg',
        'capa_sm' => '2016-7-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'40',
        'tipo_id' =>'1',
        'nome_disco' => 'NATAL NORDESTINO',
        'capa_participacao' => '2016-8.jpg',
        'capa_sm' => '2016-8-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'40',
        'tipo_id' =>'1',
        'nome_disco' => 'SAMBAS DE ENREDO CARNAVAL 2017 - SÃO PAULO',
        'capa_participacao' => '2016-9.jpg',
        'capa_sm' => '2016-9-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'41',
        'tipo_id' =>'1',
        'nome_disco' => 'ALMÉRIO - DESEMPENA',
        'capa_participacao' => '2017-1.jpg',
        'capa_sm' => '2017-1-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'41',
        'tipo_id' =>'1',
        'nome_disco' => 'Sérgio Sá - SÉRGIO S/A',
        'capa_participacao' => '2017-2.jpg',
        'capa_sm' => '2017-2-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'41',
        'tipo_id' =>'1',
        'nome_disco' => 'VERSOS DA ALMA',
        'capa_participacao' => '2017-3.jpg',
        'capa_sm' => '2017-3-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'41',
        'tipo_id' =>'1',
        'nome_disco' => 'ALCYMAR MONTEIRO - CÍRIO DE NAZARÉ',
        'capa_participacao' => '2017-4.jpg',
        'capa_sm' => '2017-4-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'41',
        'tipo_id' =>'1',
        'nome_disco' => 'TON OLIVEIRA E AMIGOS - ABC DO FORRÓ',
        'capa_participacao' => '2017-5.jpg',
        'capa_sm' => '2017-5-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'41',
        'tipo_id' =>'1',
        'nome_disco' => 'NENA QUEIROGA - PERNAMBUCO PARA O MUNDO (DVD)',
        'capa_participacao' => '2017-6.jpg',
        'capa_sm' => '2017-6-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'41',
        'tipo_id' =>'1',
        'nome_disco' => 'WALDONYS - MEU NINHO (DVD)',
        'capa_participacao' => '2017-7.jpg',
        'capa_sm' => '2017-7-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'FORRÓ, FESTA E SÃO JOÃO',
        'capa_participacao' => '2018-1.jpg',
        'capa_sm' => '2018-1-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'LUCY ALVES - XAXADO NO CHIADO (Single Digital)',
        'capa_participacao' => '2018-2.jpg',
        'capa_sm' => '2018-2-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'KAREN KELDANI - O GIRASSOL',
        'capa_participacao' => '2018-3.jpg',
        'capa_sm' => '2018-3-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'IVO MEIRELLES & FUNK&rsquo;N&rsquo;LATA - FREVO MULHER (Single Digital)',
        'capa_participacao' => '2018-4.jpg',
        'capa_sm' => '2018-4-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'BANDA EVA - FLOR BELA',
        'capa_participacao' => '2018-5.jpg',
        'capa_sm' => '2018-5-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'LUAN ESTILIZADO - ESQUENTA SÃO JOÃO',
        'capa_participacao' => '2018-6.jpg',
        'capa_sm' => '2018-6-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'FULÔ DE MANDACARU - IN CONCERT (Ao Vivo)',
        'capa_participacao' => '2018-7.jpg',
        'capa_sm' => '2018-7-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'ENOK VIRGULINO - FORRÓ BOM É AQUI ',
        'capa_participacao' => '2018-8.jpg',
        'capa_sm' => '2018-8-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'A NOSSA VOZ (Single Digital)',
        'capa_participacao' => '2018-9.jpg',
        'capa_sm' => '2018-9-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'RAPHAEL COSTA - DIAMANTE HORTELÃ',
        'capa_participacao' => '2018-10.jpg',
        'capa_sm' => '2018-10-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'RIO DESISTIR JAMAIS (SINGLE DIGITAL)',
        'capa_participacao' => '2018-11.jpg',
        'capa_sm' => '2018-11-sm.jpg'
        ] );
          Participacoes::create( [
        'anos_id' =>'42',
        'tipo_id' =>'1',
        'nome_disco' => 'EU SOU O SÃO JOÃO (SINGLE DIGITAL)',
        'capa_participacao' => '2018-12.jpg',
        'capa_sm' => '2018-12-sm.jpg'
        ] );
    }

}
