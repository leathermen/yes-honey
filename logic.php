<?php

$answer_array = [TRUE, FALSE];

function isQuestionAnswered(){
    if ($questionAnswered = isset($_GET['question']) === TRUE){
        return TRUE;
    } else {
        return FALSE;
        }
    }

function yesOrNo($answer_array)
{
    $yesOrNo = array_rand($answer_array);
    return $yesOrNo;
}


