<?php


//CHAMANDO
// Route::get('/', function () {
// return special_ucwords('fabyo guimarães de oliveira');

// //Fabyo Guimarães de Oliveira
// });
if (! function_exists('special_ucwords')) {
 function special_ucwords($string)
    {
        $words = explode(' ', strtolower(trim(preg_replace("/\s+/", ' ', $string))));
        $return[] = ucfirst($words[0]);
        
        unset($words[0]);
        
        foreach ($words as $word)
        {
            if (!preg_match("/^([dn]?[aeiou][s]?|em)$/i", $word))
            {
                $word = ucfirst($word);
            }
            $return[] = $word;
        }
        
        return implode(' ', $return);
    }
}



class Helpers
{
    public static function xlog($data, $to_screen = true) 
    {
        if ($to_screen) {
            echo '<pre class="-debug prettyprint">';
            print_r($data);
            echo '</pre>' . "\n";
        }
    }

}

