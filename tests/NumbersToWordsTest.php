<?php

    require_once "src/NumbersToWords.php";

    class NumbersToWords_test extends PHPUnit_Framework_TestCase
    {

        function test_numbers_to_words_unshift()
        {
            //Arrange
            $user_input = 878789423;
            $test_numbers_to_words = new NumbersToWords($user_input);


            //Act
            $result = $test_numbers_to_words->numbers_to_words();

            //Assert
            $this->assertEquals('four thousand one hundred and twenty two', $result);

        }

        // function test_numbers_to_words_unique()
        // {
        //     //Arrange
        //     $user_input = 19;
        //     $test_numbers_to_words = new NumbersToWords($user_input);
        //
        //
        //     //Act
        //     $result = $test_numbers_to_words->numbers_to_words();
        //
        //     //Assert
        //     $this->assertEquals('nineteen', $result);
        //
        // }
        //
        // function test_numbers_to_words_uniqueTwo()
        // {
        //     //Arrange
        //     $user_input = 30;
        //     $test_numbers_to_words = new NumbersToWords($user_input);
        //
        //
        //     //Act
        //     $result = $test_numbers_to_words->numbers_to_words();
        //
        //     //Assert
        //     $this->assertEquals('thirty ', $result);
        // }
        //
        //
        // function test_numbers_to_words_hundreds()
        // {
        //     //Arrange
        //     $user_input = 520;
        //     $test_numbers_to_words = new NumbersToWords($user_input);
        //
        //
        //     //Act
        //     $result = $test_numbers_to_words->numbers_to_words();
        //
        //     //Assert
        //     $this->assertEquals('five hundred and twenty ', $result);
        //
        // }
        //
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
        //     $this->assertEquals('three thousand four hundred and fourty four', $result);
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
