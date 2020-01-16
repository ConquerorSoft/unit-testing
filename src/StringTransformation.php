<?php

namespace conquerorsoft\unit_testing;

class StringTransformation {
    
    public function encode(string $string):string
    {
        $alpha_decoded = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
        $alpha_encoded = ['å','∫','ç','∂','´','ƒ','©','˙','ˆ','∆','˚','¬','µ','˜','ø','π','œ','®','ß','†','¨','√','∑','≈','¥','Ω','Å','ı','Ç','Î','¡','Ï','™','Ó','£','Ô','¢','Ò','Â','∞','Ø','∏','Œ','§','Í','¶','•','◊','º','–','Á','«',' '];
        $string_to_return = "";
        for ($i = 0; $i < strlen($string); $i++) {
            $pos = strpos($alpha_decoded, $string[$i]);
            $string_to_return .= $alpha_encoded[$pos];
        }
        return $string_to_return;
    }
}
