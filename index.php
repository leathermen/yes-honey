<?php

require 'logic.php';

$questionAnswered = isQuestionAnswered();
$answerPositive = yesOrNo($answer_array);

require 'template.php';

//Тест
