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
            $this->assertEquals("D0n't y0u l0v3 th3s3 'String' 3x3rcis3s? I d0!", $result);
        }

        function test_substitute0()
        {
            // Arrange
            $test_object = new LeetSpeak;
            $input = "Don't you love these 'String' Exercises? I do!";
            // Act
            $result = $test_object->leetTranslate($input);

            // Assert
            $this->assertEquals("D0n't y0u l0v3 th3s3 'String' 3x3rcis3s? I d0!", $result);
        }

        function test_substitute1()
        {
            // Arrange
            $test_object = new LeetSpeak;
            $input = "I am Lucy";
            // Act
            $result = $test_object->leetTranslate($input);

            // Assert
            $this->assertEquals("1 am Lucy", $result);
        }

        function test_substituteS()
        {
            // Arrange
            $test_object = new LeetSpeak;
            $input = "Sam is a Snakes";
            // Act
            $result = $test_object->leetTranslate($input);

            // Assert
            $this->assertEquals("Sam iZ a Snak3Z", $result);
        }


    }


?>
