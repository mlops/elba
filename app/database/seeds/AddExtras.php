<?php
class AddExtras extends Seeder
{
    public function run()
    {
        DB::table('extras')->delete(); // deleting old records.
        Extras::create(['disco_id' => '1', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '1', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '1', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '1', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '1', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '1', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '2', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '2', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '2', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '2', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '2', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create(['disco_id' => '2', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create(['disco_id' => '2', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '2', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '3', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '3', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '3', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '3', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '3', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '3', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '4', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '4', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '4', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '4', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '4', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '4', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '5', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '5', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '5', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '5', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '5', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create(['disco_id' => '5', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '5', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '6', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '6', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '6', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '6', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '6', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '6', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);
        Extras::create(['disco_id' => '7', 'extras' => 'capa.jpg', 'extras_s' => 'capa-sm.jpg']);
        Extras::create(['disco_id' => '7', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa-sm.jpg']);
        Extras::create(['disco_id' => '7', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1-sm.jpg']);
        Extras::create(['disco_id' => '7', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2-sm.jpg']);

        Extras::create(['disco_id' => '8', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '8', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '8', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '8', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '8', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create(['disco_id' => '8', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '8', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '9', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '9', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '9', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '9', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '9', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '9', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '10', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '10', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '10', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '10', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '10', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '10', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '11', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '11', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '11', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '11', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '11', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '11', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '12', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '12', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '12', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '12', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '12', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create(['disco_id' => '12', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '12', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '12', 'extras' => 'selo3.jpg', 'extras_s' => 'selo3_s.jpg']);

        Extras::create(['disco_id' => '13', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '13', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '13', 'extras' => 'encarte0.jpg', 'extras_s' => 'encarte0_s.jpg']);

        Extras::create(['disco_id' => '13', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '13', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '13', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create(['disco_id' => '13', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create(['disco_id' => '13', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '13', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '13', 'extras' => 'selo3.jpg', 'extras_s' => 'selo3_s.jpg']);

        Extras::create(['disco_id' => '14', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '14', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '14', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '14', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '14', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create(['disco_id' => '14', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create(['disco_id' => '14', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create(['disco_id' => '14', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create(['disco_id' => '14', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create(['disco_id' => '14', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create(['disco_id' => '14', 'extras' => 'selo3.jpg', 'extras_s' => 'selo3_s.jpg']);

        Extras::create(['disco_id' => '15', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create(['disco_id' => '15', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create(['disco_id' => '15', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '15', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create(['disco_id' => '15', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create(['disco_id' => '15', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create([

        'disco_id' => '15', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create([

        'disco_id' => '15', 'extras' => 'selo3.jpg', 'extras_s' => 'selo3_s.jpg']);

        Extras::create([

        'disco_id' => '16', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '16', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '16', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '16', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '16', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '16', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '16', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create([

        'disco_id' => '16', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create([

        'disco_id' => '16', 'extras' => 'selo3.jpg', 'extras_s' => 'selo3_s.jpg']);

        Extras::create([

        'disco_id' => '17', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '17', 'extras' => 'contracapaCD.jpg', 'extras_s' => 'contracapaCD_s.jpg']);

        Extras::create([

        'disco_id' => '17', 'extras' => 'contracapain.jpg', 'extras_s' => 'contracapain_s.jpg']);

        Extras::create([

        'disco_id' => '17', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '17', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '17', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '17', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create([

        'disco_id' => '17', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create([

        'disco_id' => '17', 'extras' => 'selo3.jpg', 'extras_s' => 'selo3_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'encarte8.jpg', 'extras_s' => 'encarte8_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'encarte9.jpg', 'extras_s' => 'encarte9_s.jpg']);

        Extras::create([

        'disco_id' => '18', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '19', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '19', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '19', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '19', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '19', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '19', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '19', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '19', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'encarte5a.jpg', 'extras_s' => 'encarte5a_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'encarte5b.jpg', 'extras_s' => 'encarte5b_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'encarte8.jpg', 'extras_s' => 'encarte8_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'encarte9.jpg', 'extras_s' => 'encarte9_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'encarte10.jpg', 'extras_s' => 'encarte10_s.jpg']);

        Extras::create([

        'disco_id' => '20', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '21', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '21', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '21', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '21', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '21', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '21', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '21', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '21', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '21', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '21', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '22', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '22', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '22', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '22', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '22', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '22', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '22', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '22', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '22', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '22', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'encarte8.jpg', 'extras_s' => 'encarte8_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'encarte9.jpg', 'extras_s' => 'encarte9_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'encarte10.jpg', 'extras_s' => 'encarte10_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create([

        'disco_id' => '23', 'extras' => 'selo2.jpg', 'extras_s' => 'selo2_s.jpg']);

        Extras::create([

        'disco_id' => '24', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '24', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '24', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '24', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '24', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '24', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '24', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '24', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '24', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '24', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '25', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '25', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '25', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '25', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '25', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '25', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '25', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '25', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '25', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '25', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '26', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '26', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '26', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '26', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '26', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '26', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '26', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '26', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '26', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '26', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '27', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '27', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '27', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '27', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '27', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '27', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '27', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '27', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '27', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '27', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'encarte8.jpg', 'extras_s' => 'encarte8_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'encarte9.jpg', 'extras_s' => 'encarte9_s.jpg']);

        Extras::create([

        'disco_id' => '28', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'encarte8.jpg', 'extras_s' => 'encarte8_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'encarte9.jpg', 'extras_s' => 'encarte9_s.jpg']);

        Extras::create([

        'disco_id' => '29', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '30', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '30', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '30', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '30', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '30', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '30', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '30', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '30', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '30', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '30', 'extras' => 'selo1.jpg', 'extras_s' => 'selo1_s.jpg']);

        Extras::create([

        'disco_id' => '31', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '31', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '31', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '31', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '31', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '31', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '31', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '31', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '31', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create([

        'disco_id' => '31', 'extras' => 'encarte8.jpg', 'extras_s' => 'encarte8_s.jpg']);

        Extras::create([

        'disco_id' => '31', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create([

        'disco_id' => '32', 'extras' => 'capa-sjc.jpg', 'extras_s' => 'capa-sjc_s.jpg']);
        Extras::create([

        'disco_id' => '32', 'extras' => 'contracapa-sjc.jpg', 'extras_s' => 'contracapa-sjc_s.jpg']);
        Extras::create([

        'disco_id' => '32', 'extras' => 'encarte1-sjc.jpg', 'extras_s' => 'encarte1-sjc_s.jpg']);
        Extras::create([

        'disco_id' => '32', 'extras' => 'encarte2-sjc.jpg', 'extras_s' => 'encarte2-sjc_s.jpg']);
        Extras::create([

        'disco_id' => '32', 'extras' => 'encarte3-sjc.jpg', 'extras_s' => 'encarte3-sjc_s.jpg']);
        Extras::create([

        'disco_id' => '32', 'extras' => 'selo-sjc.jpg', 'extras_s' => 'selo-sjc_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'pag0.jpg', 'extras_s' => 'pag0_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'pag1.jpg', 'extras_s' => 'pag1_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'pag2.jpg', 'extras_s' => 'pag2_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'pag3.jpg', 'extras_s' => 'pag3_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'pag4.jpg', 'extras_s' => 'pag4_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'pag5.jpg', 'extras_s' => 'pag5_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'pag6.jpg', 'extras_s' => 'pag6_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'pag7.jpg', 'extras_s' => 'pag7_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'pag8.jpg', 'extras_s' => 'pag8_s.jpg']);

        Extras::create([

        'disco_id' => '33', 'extras' => 'rotulo.jpg', 'extras_s' => 'rotulo_s.jpg']);

        Extras::create([

        'disco_id' => '34', 'extras' => 'capa.jpg', 'extras_s' => 'capa_s.jpg']);

        Extras::create([

        'disco_id' => '34', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);

        Extras::create([

        'disco_id' => '34', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create([

        'disco_id' => '34', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);

        Extras::create([

        'disco_id' => '34', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);

        Extras::create([

        'disco_id' => '34', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create([

        'disco_id' => '34', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);

        Extras::create([

        'disco_id' => '34', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);

        Extras::create([

        'disco_id' => '34', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);

        Extras::create(['disco_id' => '34', 'extras' => 'encarte8.jpg', 'extras_s' => 'encarte8_s.jpg']);

        Extras::create(['disco_id' => '34', 'extras' => 'encarte9.jpg', 'extras_s' => 'encarte9_s.jpg']);

        Extras::create(['disco_id' => '34', 'extras' => 'encarte10.jpg', 'extras_s' => 'encarte10_s.jpg']);

        Extras::create(['disco_id' => '34', 'extras' => 'encarte11.jpg', 'extras_s' => 'encarte11_s.jpg']);

        Extras::create(['disco_id' => '34', 'extras' => 'selo.jpg', 'extras_s' => 'selo_s.jpg']);

        Extras::create(['disco_id' => '35', 'extras' => 'capa_cordas.jpg', 'extras_s' => 'capa_cordas_sm.jpg']);
        Extras::create(['disco_id' => '35', 'extras' => 'contracapa.jpg', 'extras_s' => 'contracapa_s.jpg']);
        Extras::create(['disco_id' => '35', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1_s.jpg']);

        Extras::create(['disco_id' => '35', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2_s.jpg']);
        Extras::create(['disco_id' => '35', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3_s.jpg']);
        Extras::create(['disco_id' => '35', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4_s.jpg']);

        Extras::create(['disco_id' => '35', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5_s.jpg']);
        Extras::create(['disco_id' => '35', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6_s.jpg']);
        Extras::create(['disco_id' => '35', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7_s.jpg']);
        Extras::create(['disco_id' => '35', 'extras' => 'encarte8.jpg', 'extras_s' => 'encarte8_s.jpg']);
        Extras::create(['disco_id' => '35', 'extras' => 'encarte9.jpg', 'extras_s' => 'encarte9_s.jpg']);
        Extras::create(['disco_id' => '35', 'extras' => 'rotulo.jpg', 'extras_s' => 'rotulo_s.jpg']);

        Extras::create(['disco_id' => '36', 'extras' => 'capa_ge.jpg', 'extras_s' => 'capa_ge-sm.jpg']);
        Extras::create(['disco_id' => '36', 'extras' => 'contracapa-ge.jpg', 'extras_s' => 'contracapa-ge-sm.jpg']);
        Extras::create(['disco_id' => '36', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1-sm.jpg']);

        Extras::create(['disco_id' => '36', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2-sm.jpg']);
        Extras::create(['disco_id' => '36', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3-sm.jpg']);
        Extras::create(['disco_id' => '36', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4-sm.jpg']);

        Extras::create(['disco_id' => '36', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5-sm.jpg']);
        Extras::create(['disco_id' => '36', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6-sm.jpg']);
        Extras::create(['disco_id' => '36', 'extras' => 'encarte7.jpg', 'extras_s' => 'encarte7-sm.jpg']);

        Extras::create(['disco_id' => '36', 'extras' => 'rotulo1.jpg', 'extras_s' => 'rotulo1-sm.jpg']);
        Extras::create(['disco_id' => '36', 'extras' => 'rotulo2.jpg', 'extras_s' => 'rotulo2-sm.jpg']);
        Extras::create(['disco_id' => '36', 'extras' => 'rotulo3.jpg', 'extras_s' => 'rotulo3-sm.jpg']);

        Extras::create(['disco_id' => '37', 'extras' => 'capa_euscaminho.jpg', 'extras_s' => 'capa_euscaminho-sm.jpg', ]);
        Extras::create(['disco_id' => '37', 'extras' => 'contracapa-euscaminho.jpg', 'extras_s' => 'contracapa-euscaminho-sm.jpg', ]);
        Extras::create(['disco_id' => '37', 'extras' => 'encarte1.jpg', 'extras_s' => 'encarte1-sm.jpg', ]);

        Extras::create(['disco_id' => '37', 'extras' => 'encarte2.jpg', 'extras_s' => 'encarte2-sm.jpg', ]);
        Extras::create(['disco_id' => '37', 'extras' => 'encarte3.jpg', 'extras_s' => 'encarte3-sm.jpg', ]);
        Extras::create(['disco_id' => '37', 'extras' => 'encarte4.jpg', 'extras_s' => 'encarte4-sm.jpg', ]);

        Extras::create(['disco_id' => '37', 'extras' => 'encarte5.jpg', 'extras_s' => 'encarte5-sm.jpg', ]);
        Extras::create(['disco_id' => '37', 'extras' => 'encarte6.jpg', 'extras_s' => 'encarte6-sm.jpg', ]);

        Extras::create(['disco_id' => '37', 'extras' => 'rotulo.jpg', 'extras_s' => 'rotulo-sm.jpg', ]);
    }
}
