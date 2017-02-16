<?php

class NumbersToWords
{
    private $user_input;

    function __construct($numbers)
    {
        $this->user_input = $numbers;
    }


    function numbers_to_words(){
        $ones_array = array(
            "0" => '',
            "1" => "one",
            "2" => "two",
            "3" => "three",
            "4" => "four",
            "5" => "five",
            "6" => "six",
            "7" => "seven",
            "8" => "eight",
            "9" => "nine"
        );
        $tens_array = array(
            "2" => "twenty",
            "3" => "thirty",
            "4" => "fourty",
            "5" => "fifty",
            "6" => "sixty",
            "7" => "seventy",
            "8" => "eighty",
            "9" => "ninety"
        );
        $unique_array = array(
            "10" => "ten",
            "11" => "eleven",
            "12" => "twelve",
            "13" => "thirteen",
            "14" => "fourteen",
            "15" => "fifteen",
            "16" => "sixteen",
            "17" => "seventeen",
            "18" => "eighteen",
            "19" => "nineteen",
            "20" => "twenty",
            "30" => "thirty",
            "40" => "fourty",
            "50" => "fifty",
            "60" => "sixty",
            "70" => "seventy",
            "80" => "eighty",
            "90" => "ninety"
        );
        $return_words = "";
        $user_input = $this->user_input;  //3444
        $split_array = str_split($user_input); //(3,4,4,4)
        $countDigit = count($split_array); //4

        while($countDigit % 3 != 0){
            array_unshift($split_array, 0);
            $countDigit++;
        }

        //$split_array (0, 0, 3, 4, 4, 4)
        $countDigitSet = count($split_array);

        $number_chunk_array = array_chunk($split_array, 3);
        //[0, 0, 3], [4, 4, 4]

        for($i=0; $i<count($number_chunk_array); $i++){
            
            for($j=0; $j<count($number_chunk_array[$i]); $j++){
                if($j == 0 && $number_chunk_array[$i][$j] != "0" ){
                    $return_words .= $ones_array[$number_chunk_array[$i][$j]] . "hundred";
                }elseif($j == 1){
                    $return_words .= $tens_array[$number_chunk_array[$i][$j]] . " ";
                }elseif($j == 2){
                    $return_words .= $ones_array[$number_chunk_array[$i][$j]];
                }
            }
        }

        return $return_words;
        //
        // 444
        // four hundred fourty four
        //
        // 220
        // two hundred twenty
        // 330 220
        //
        // 113
        // one hundred thirteen




    }

}
