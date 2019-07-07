<?php

require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomodificada.jpg';

$thum = new PHPThumb\GD($foto_original);
//redimensionar
$thum->resize(250, 250);

//Recortar
$thum->cropFromCenter(100);

$thum->show();
$thum->save($guardar_en);
        
        
        
        
        /*

         * 
         * \\\\\
         *          */