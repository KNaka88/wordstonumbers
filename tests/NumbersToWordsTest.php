<?php

    require_once "src/NumbersToWords.php";

    class NumbersToWords_test extends PHPUnit_Framework_TestCase
    {

        function test_numbers_to_words_unshift()
        {
            //Arrange
            $user_input = 34;
            $test_numbers_to_words = new NumbersToWords($user_input);


            //Act
            $result = $test_numbers_to_words->numbers_to_words();

            //Assert
            $this->assertEquals('thirty four', $result);

        }

        // function test_numbers_to_words_unshiftMore()
        // {
        //     //Arrange
        //     $user_input = 3444;
        //     $test_numbers_to_words = new NumbersToWords($user_input);
        //
        //
        //     //Act
        //     $result = $test_numbers_to_words->numbers_to_words();
        //
        //     //Assert
        //     $this->assertEquals('003444', $result);
        //
        // }

        // function test_numbers_to_words_unshiftMoreAgain()
        // {
        //     //Arrange
        //     $user_input = 3444444;
        //     $test_numbers_to_words = new NumbersToWords($user_input);
        //
        //
        //     //Act
        //     $result = $test_numbers_to_words->numbers_to_words();
        //
        //     //Assert
        //     $this->assertEquals('003444', $result);
        //
        // }



    }
