<?php
class Upload {

    public static function doUpload()
    {
         $uploadsDir = '/uploads/';

         if (Input::file('file')->isValid() ) //file name came from dropzone js plugins
        {

            $tempFile = Input::file('file');
            $fileName = $tempFile->getClientOriginalName();

            $destinationPath = public_path().$uploadsDir;
            $destinationPathThumb = public_path().$uploadsDir.'thumbs/';

            $targetFile = $destinationPath . $fileName;

            $tempFile->move($destinationPath, $fileName);


            if(preg_match('/[.](jpg)$/', $fileName)) {
                $im = imagecreatefromjpeg($targetFile);
            } else if (preg_match('/[.](png)$/', $fileName)) {
                $im = imagecreatefrompng($targetFile);
            } else if (preg_match('/[.](gif)$/', $fileName)) {
                $im = imagecreatefromgif($targetFile);
            }

            $ox = imagesx($im);
            $oy = imagesy($im);

            $nx = 200;
            $ny = floor($oy * ($nx / $ox));

            $nim = imagecreatetruecolor($nx, $ny);

        
            //imagecopyresized($nim, $im, 0, 0, 0, 0, $nx, $ny, $ox, $oy);
            imagecopyresampled($nim, $im, 0, 0, 0, 0, $nx, $ny, $ox, $oy);

            imagejpeg($nim, $destinationPathThumb . $fileName);

            //--------------------------------------------

 
            }

        }
}

