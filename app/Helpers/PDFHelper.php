<?php

namespace App\Helpers;

use App\Models\Door;
use Codedge\Fpdf\Fpdf\Fpdf;

class PDFHelper
{
    public static function makeDoorPDF(Door $door, bool $download = true)    {

        $fileName = 'temp.png';
        $file = fopen($fileName, 'wb');
        fwrite($file, base64_decode(explode(',', $door->image)[1]));
        fclose($file);

        list($width, $height) = getimagesize($fileName);

        $image = imagecreatefrompng($fileName);
        $newImage = imagecreatetruecolor($width, $height + 240);

        // imagecreate

        $white = imagecolorallocate($newImage, 255, 255, 255);

        $text = "Проверка текста";        
        imagecopyresized($newImage, $image, 0, 0, 0, 0, $width, $height, $width, $height);

        $text = [];
        $text[] = 'Дверь ID      : ' . $door->id;
        $text[] = 'Цвет покраски : ' . $door->dyeing->name;
        $text[] = 'Цвет плёнки   : ' . $door->skin->name;
        $text[] = 'Цвет ручки    : ' . $door->knob->name;
        $text[] = 'Ширина        : ' . $door->widthDimension->value . ' мм.';
        $text[] = 'Высота        : ' . $door->heightDimension->value . ' мм.';

        $fontPath = '/usr/share/fonts/truetype/dejavu/DejaVuSansMono.ttf';

        $pos = 0;
        foreach($text as $t) 
        {
            imagettftext($newImage, 13, 0, 10, 600 + $pos, $white, $fontPath, $t);
            $pos += 17;
        }
        
        imagepng($newImage, $fileName);
        imagedestroy($image);        

        $pdf = new FPDF;
        $pdf->AddPage('', [220, 165]);
        
        $pdf->Image($fileName, 0, 5, 0);
        $pdf_name = base_path() . '/Дверь-' . $door->id . '.pdf';
        
        unlink($fileName);
        
        if($download === true)
        {
            $pdf->Output('D', $pdf_name, true);
        }
        else {
            $pdf->Output('F', $pdf_name, true);
        }

        return  $pdf_name;
                
    }

}