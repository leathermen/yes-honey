<!DOCTYPE html>
<html>

<head>
    <title>Yes, honey?</title>
</head>

<body>

    <form action="index.php" method="GET">
        <h4>Your question:</h4>
        <input type="text" name="question" placeholder="Enter your question...">
        <button>Get result</button>
    </form>

    <?php if ($questionAnswered === TRUE): ?>
        <?php if ($answerPositive === TRUE): ?>
            <img src="https://gamebanana.com/sprays/embeddables/77252?type=sdt_image" alt="Yes, honey">
        <?php else: ?>
            <img src="https://i.pinimg.com/736x/4a/27/77/4a2777f259f837a53ca818dedc27766e.jpg" alt="Noes">
        <?php endif; ?>
    <?php endif; ?>

</body>
//тест
</html>