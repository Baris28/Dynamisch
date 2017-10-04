<?php
include("Header.php");


$messages = array();

if (!isset($_GET["roepnaam"]) && !isset($_GET["adres"]) && !isset($_GET["email"]) && !isset($_GET["ww"])) {
    $messages[] = "Je moet eerst het formulier nog invullen.";
}
else if (strlen($_GET["roepnaam"]) == 0) {
    $messages[] = "Je hebt je naam nog niet ingevuld";
}
else if (strlen($_GET["adres"]) == 0) {
    $messages[] = "Je hebt je adres nog niet ingevuld";
}
else if (strlen($_GET["email"]) == 0) {
    $messages[] = "Je hebt je e-mail nog niet ingevuld";
}
else if (strlen($_GET["ww"]) == 0) {
    $messages[] = "Je hebt je wachtwoord nog niet ingevuld";
}

if (!count($messages) == 0) {
    //messages
    $html = "<ul>";
    foreach($messages as $message) {
        $html .= "<li>" . $message . "</li>";
    }
    $html .= "</ul>";
    echo $html;
} else {
    echo "Je naam is: " . $_GET["roepnaam"] ."<br>". "Je adres is: " . $_GET["adres"] ."<br>". "Je e-mail is: "
        . $_GET["email"] ."<br>". "Je wachtwoord wordt hier niet getoont wegens privacy redenen";



?>
<?php
    }
include("Footer.php");
