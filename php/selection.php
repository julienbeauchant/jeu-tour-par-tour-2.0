<form method="$_POST">
    <select name="selectPlayer1" id="">
        <option value="Amber">amber</option>
        <option value="Barbara">barbara</option>
        <option value="Layla">layla</option>
        <option value="Yanfei">yanfei</option>
    </select>
    <select name="selectPlayer2" id="">
        <option value="Amber">amber</option>
        <option value="Barbara">barbara</option>
        <option value="Layla">layla</option>
        <option value="Yanfei">yanfei</option>
    </select>
    <input type="submit" name="select" value="select">
    <input type="submit" name="destroy" value="destroy">
</form>

<?php
if (isset($_POST['select'])){
    $_SESSION['player1']['classe'] = $_POST['selectPlayer1'];

    if($_POST['selectPlayer1'] == "Amber"){
        echo "player1 = Amber";
    }
    if($_POST['selectPlayer1'] == "Barbara"){
        echo "player1 = Barbara";
    }
    if($_POST['selectPlayer1'] == "Layla"){
        echo "player1 = Layla";
    }
    if($_POST['selectPlayer1'] == "Yanfei"){
        echo "player1 = Yanfei";
    }

    $_SESSION['player2']['classe'] = $_POST['selectPlayer2'];

    if($_POST['selectPlayer2'] == "Amber"){
        echo "player2 = Amber";
    }
    if($_POST['selectPlayer2'] == "Barbara"){
        echo "player2 = Barbara";
    }
    if($_POST['selectPlayer2'] == "Layla"){
        echo "player2 = Layla";
    }
    if($_POST['selectPlayer2'] == "Yanfei"){
        echo "player2 = Yanfei";
    }

    echo $_POST['selectPlayer1'] . ' ' . $_POST['selectPlayer2'];
}
?>