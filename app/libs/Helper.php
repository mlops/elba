<?php


class Helper {

    public static function listImages($dir)
    {
        $images = [];
        // if ( dir($dir) && count(glob($dir.'/{*.jpg,*.gif,*.png}', GLOB_BRACE) > 0 ) )
        if ( dir($dir) && count(glob($dir.'/{*.jpg,*.gif,*.png}', GLOB_BRACE) > 0 ) )
        {

            foreach (glob($dir.'/{*.jpg,*.gif,*.png}', GLOB_BRACE) as $file) {
                $images[] = basename($file);
            }
        }
        return $images;

    }

    public static function deleteImage($image, $dir, $dirThumbs)
    {
        unlink($dir . $image);
        unlink($dirThumbs . $image);

    }

    public static function setTitle($segment)
    {
        if($segment == '') {
            $homeTitle = DB::table('pages')->where('slug', '=', 'home')->pluck('title');
            echo $homeTitle;
        }else{
            echo ucwords(str_replace('-', ' ', $segment));

        }

   

    }


    

}
