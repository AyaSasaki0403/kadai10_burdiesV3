<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['food']) && !empty($_POST['food'])) {
        $selected_foods = $_POST['food'];
        echo "<h2>好きな食事カテゴリー:</h2>";
        echo "<ul>";
        foreach ($selected_foods as $food) {
            if ($food == "Other" && !empty($_POST['other_food'])) {
                echo "<li>その他: " . htmlspecialchars($_POST['other_food']) . "</li>";
            } else {
                echo "<li>" . htmlspecialchars($food) . "</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "<h2>食事のカテゴリーが選択されていません。</h2>";
    }

    if (isset($_POST['drink']) && !empty($_POST['drink'])) {
        $selected_drinks = $_POST['drink'];
        echo "<h2>好きな飲み物カテゴリー:</h2>";
        echo "<ul>";
        foreach ($selected_drinks as $drink) {
            if ($drink == "Other" && !empty($_POST['other_drink'])) {
                echo "<li>その他: " . htmlspecialchars($_POST['other_drink']) . "</li>";
            } else {
                echo "<li>" . htmlspecialchars($drink) . "</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "<h2>飲み物のカテゴリーが選択されていません。</h2>";
    }

    if (isset($_POST['who']) && !empty($_POST['who'])) {
        $selected_who = $_POST['who'];
        echo "<h2>普段飲食店で食事をする相手:</h2>";
        echo "<ul>";
        foreach ($selected_who as $who) {
            if ($who == "Other" && !empty($_POST['other_who'])) {
                echo "<li>その他: " . htmlspecialchars($_POST['other_who']) . "</li>";
            } else {
                echo "<li>" . htmlspecialchars($who) . "</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "<h2>食事相手が選択されていません。</h2>";
    }

    if (isset($_POST['frequency']) && !empty($_POST['frequency'])) {
        $selected_frequency = $_POST['frequency'];
        echo "<h2>外食する頻度:</h2>";
        echo "<ul>";
        foreach ($selected_frequency as $frequency) {
            if ($frequency == "Other" && !empty($_POST['other_frequency'])) {
                echo "<li>その他: " . htmlspecialchars($_POST['other_frequency']) . "</li>";
            } else {
                echo "<li>" . htmlspecialchars($frequency) . "</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "<h2>外食する頻度が選択されていません。</h2>";
    }
    
    if (isset($_POST['importance']) && !empty($_POST['importance'])) {
        $selected_importance = $_POST['importance'];
        echo "<h2>飲食店を決める際に気にする点:</h2>";
        echo "<ul>";
        foreach ($selected_importance as $importance) {
            if ($importance == "Other" && !empty($_POST['other_importance'])) {
                echo "<li>その他: " . htmlspecialchars($_POST['other_importance']) . "</li>";
            } else {
                echo "<li>" . htmlspecialchars($importance) . "</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "<h2>飲食店を決める際に気にする点が選択されていません。</h2>";
    }

    if (isset($_POST['mind']) && !empty($_POST['mind'])) {
        $selected_mind = $_POST['mind'];
        echo "<h2>飲食店を選ぶ時の心情:</h2>";
        echo "<ul>";
        foreach ($selected_mind as $mind) {
            if ($mind == "Other" && !empty($_POST['other_mind'])) {
                echo "<li>その他: " . htmlspecialchars($_POST['other_mind']) . "</li>";
            } else {
                echo "<li>" . htmlspecialchars($mind) . "</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "<h2>飲食店を選ぶ時の心情が選択されていません。</h2>";
    }


} else {
    echo "<h2>無効なリクエストです。</h2>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録内容</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            margin-top: 20px;
            font-size: 15px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
    </style>

</head>

<body>


    
</body>
</html>