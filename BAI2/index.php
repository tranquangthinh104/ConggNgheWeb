<?php
$blocks = preg_split("/\n\s*\n/", trim(file_get_contents("Quiz.txt")));
?>

<!DOCTYPE html>
<html>
<body>

<h2>Bài trắc nghiệm</h2>

<form method="post">

<?php foreach ($blocks as $i => $b): 
    $lines = array_values(array_filter(explode("\n", $b)));
    $answerLine = array_pop($lines);
    $question = array_shift($lines);
?>

    <p><strong>Câu hỏi <?=($i+1)?>: <?=$question?></strong></p>

    <?php foreach ($lines as $c): 
        $key = $c[0]; 
    ?>
        <label>
            <input type="radio" name="q<?=$i?>" value="<?=$key?>"
            <?= ($_POST["q$i"] ?? '') == $key ? "checked" : "" ?>>
            <?=$c?>
        </label><br>
    <?php endforeach; ?>

    <?php if (isset($_POST["q$i"])): ?>
        <p>Chọn đáp án: <strong><?=$_POST["q$i"]?></strong></p>
    <?php endif; ?>

    <hr>

<?php endforeach; ?>

<button>Nộp bài</button>
</form>

</body>
</html>
