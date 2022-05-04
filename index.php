<?php 
    include('data/faq.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="" href="styles.css">
    <title>Google FAQ</title>
</head>
<body>


    <main>
        <div class="faq">
            
            <?php foreach($faqs as $faq) {
                echo('<div class="question">' . $faq['question'] . '</div>');
                echo('<div class="answer">' . $faq['answer'] . '</div>');
            }?>

        </div>
    </main>

    <footer></footer>
</body>
</html>
