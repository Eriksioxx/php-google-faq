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
<header>
    <div class="container">
        <div class="left">
            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="Google Logo">
            <span>Privacy e termini</span>
        </div>

        <div class="right">
          <img src="avatar.jpg" alt="avatar">
        </div>
    </div>

    <div class="hader-bottom">
        <ul>
          <?php foreach($menu as $link)
            echo ('<li class="question">' . '<a href="#">' . $link['label'] .'</a>'. '</li>')
            ?>
        </ul>
      </div>
</header>

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
