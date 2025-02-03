<?php
header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET["text"]) && !empty($_GET["text"])) {
        $text2 = $_GET["text"];
        $new_text = [];

        // Version 1 
        $text = $text2;
        $text = str_replace(['a', 'b', 'c', 'd', 'e', 'E', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'], 
                            ['ᗩ', 'ᗷ', 'ᑕ', 'ᗪ', 'E', 'E', 'G', 'ᕼ', 'I', 'ᒍ', 'K', 'ᒪ', 'ᗰ', 'ᑎ', 'O', 'ᑭ', 'ᑫ', 'ᖇ', 'ᔕ', 'T', 'ᑌ', 'ᐯ', 'ᗯ', '᙭', 'Y', 'ᘔ'], $text);

        $text = str_replace(
            ['ض', 'ص', 'ث', 'ق', 'ف', 'غ', 'ع', 'ه', 'خ', 'ح', 'ج', 'ش', 'س', 'ي', 'ب', 'ل', 'ا', 'ت', 'ن', 'ܭ', 'م', 'ة', 'ء', 'ظ', 'ط', 'ذ', 'د', 'ز', 'ر', 'و', 'ى'],
            ['᎗ᘞ̇', '᎗ᘗ', '᎗̇̈ɹ', 'ᓆ', 'ᓅ', '᎗ჺ', '᎗ϛ', '᎗බ', 'ᓘ', 'ᓗ', 'ᓗฺ', '᎗ɹ̇̈ɹɹ', '᎗ɹɹɹ', '᎗̤ɹ', '᎗̣ɹ', '⅃', 'Ȋ', '᎗̈ɹ', '᎗̇ɹ', 'ك', 'ᓄ', '᎗Ꭷ', 'ء', '᎗̇Ь', '᎗Ь', '̇ↄ', 'ↄ', 'j', 'ȷ', 'g', 'ʟɾʅ'], $text);

        $new_text[] = $text;

        // Version 2
        $text = $text2;
        $text = str_replace(['a', 'b', 'c', 'd', 'e', 'E', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'], 
                            ['ᗩ2', 'ᗷ2', 'ᑕ3', 'ᗪ4', 'E5', 'E6', 'G7', 'ᕼ', 'I', 'ᒍ', 'K', 'ᒪ', 'ᗰ', 'ᑎ', 'O', 'ᑭ', 'ᑫ', 'ᖇ', 'ᔕ', 'T', 'ᑌ', 'ᐯ', 'ᗯ', '᙭', 'Y', 'ᘔ'], $text);

        $text = str_replace(
            ['ض', 'ص', 'ث', 'ق', 'ف', 'غ', 'ع', 'ه', 'خ', 'ح', 'ج', 'ش', 'س', 'ي', 'ب', 'ل', 'ا', 'ت', 'ن', 'ܭ', 'م', 'ة', 'ء', 'ظ', 'ط', 'ذ', 'د', 'ز', 'ر', 'و', 'ى'],
            ['᎗ᘞ̇', '᎗ᘗ', '᎗̇̈ɹ', 'ᓆ', 'ᓅ', '᎗ჺ', '᎗ϛ', '᎗බ', 'ᓘ', 'ᓗ', 'ᓗฺ', '᎗ɹ̇̈ɹɹ', '᎗ɹɹɹ', '᎗̤ɹ', '᎗̣ɹ', '⅃', 'Ȋ', '᎗̈ɹ', '᎗̇ɹ', 'ك', 'ᓄ', '᎗Ꭷ', 'ء', '᎗̇Ь', '᎗Ь', '̇ↄ', 'ↄ', 'j', 'ȷ', 'g', 'ʟɾʅ'], $text);

        $new_text[] = $text;

        echo json_encode([
            "ok" => true,
            "text" => $_GET["text"],
            "newText" => $new_text,
        ], JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode([
            "ok" => false,
            "msg_error" => "Text is empty!",
        ], JSON_UNESCAPED_UNICODE);
    }
} else {
    echo json_encode([
        "ok" => false,
        "msg_error" => "Only GET method is allowed!",
    ], JSON_UNESCAPED_UNICODE);
}
?>
API زخرفة أسماء
