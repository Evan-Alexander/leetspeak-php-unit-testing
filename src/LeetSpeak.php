<?php

    class LeetSpeak
    {

        function leetTranslate($input_string)
        {
            return preg_replace("/e/i","3",$input_string);
        }
    }


?>
