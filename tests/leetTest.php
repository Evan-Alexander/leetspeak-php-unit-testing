<?php

    require_once "src/LeetSpeak.php";

    class LeetSpeakTest extends PHPUnit_Framework_TestCase
    {
        function test_substituteE()
        {
            // Arrange
            $test_object = new LeetSpeak;
            $input = "Don't you love these 'String' Exercises? I do!";
            // Act
            $result = $test_object->leetTranslate($input);

            // Assert
            $this->assertEquals("Don't you lov3 th3s3 'String' 3x3rcis3s? I do!", $result);
        }


    }


?>
