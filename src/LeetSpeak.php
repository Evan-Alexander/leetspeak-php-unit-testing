<?php

    class LeetSpeak
    {

        function leetTranslate($input_string)
        {
            $output_string = $input_string;
            $output_string = preg_replace("/o/i","0", $output_string);
            $output_string = preg_replace("/e/i","3",$output_string);
            return $output_string;
        }


    }


?>
