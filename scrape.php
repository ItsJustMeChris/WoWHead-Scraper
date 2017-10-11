<?php
if (!isset($_GET['url']))
{
die("Error URL not set!");
}

$html = file_get_contents($_GET['url']);
$wh_doc = new DOMDocument();
libxml_use_internal_errors(TRUE);

if (!empty($html))
{
$wh_doc->loadHTML($html);
libxml_clear_errors();
$wh_xpath = new DOMXPath($wh_doc);

$wh_row = $wh_xpath->query('//div[@class="group"]');
if ($wh_row->length > 0)
    {
    foreach($wh_row as $row)
        {
        $name = $row->getElementsByTagName('h2')->item(0);
        if ($name->nodeValue == "Head" || $name->nodeValue == "Kopf" || $name->nodeValue == "Cabeza" || $name->nodeValue == "Tête" || $name->nodeValue == "Testa" || $name->nodeValue == "Cabeça" || $name->nodeValue == "Голова" || $name->nodeValue == "머리" || $name->nodeValue == "头")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }

        if ($name->nodeValue == "Shoulder" || $name->nodeValue == "Schulter" || $name->nodeValue == "Hombro" || $name->nodeValue == "Épaules" || $name->nodeValue == "Spalle" || $name->nodeValue == "Ombros" || $name->nodeValue == "Плечи" || $name->nodeValue == "어깨" || $name->nodeValue == "肩膀")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }

        if ($name->nodeValue == "Waist" || $name->nodeValue == "Taille" || $name->nodeValue == "Cintura" || $name->nodeValue == "Taille" || $name->nodeValue == "Fianchi" || $name->nodeValue == "Cintura" || $name->nodeValue == "Пояс" || $name->nodeValue == "허리" || $name->nodeValue == "腰")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }

        if ($name->nodeValue == "Chest" || $name->nodeValue == "Brust" || $name->nodeValue == "Pecho" || $name->nodeValue == "Torse" || $name->nodeValue == "Torso" || $name->nodeValue == "Torso" || $name->nodeValue == "Грудь" || $name->nodeValue == "가슴" || $name->nodeValue == "胸")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }

        if ($name->nodeValue == "Hands" || $name->nodeValue == "Hände" || $name->nodeValue == "Manos" || $name->nodeValue == "Mains" || $name->nodeValue == "Mani" || $name->nodeValue == "Luvas" || $name->nodeValue == "Кисти рук" || $name->nodeValue == "손" || $name->nodeValue == "手")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }

        if ($name->nodeValue == "Legs" || $name->nodeValue == "Beine" || $name->nodeValue == "Piernas" || $name->nodeValue == "Jambes" || $name->nodeValue == "Gambe" || $name->nodeValue == "Pernas" || $name->nodeValue == "Ноги" || $name->nodeValue == "다리" || $name->nodeValue == "腿")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }

        if ($name->nodeValue == "Feet" || $name->nodeValue == "Füße" || $name->nodeValue == "Pies" || $name->nodeValue == "Pieds" || $name->nodeValue == "Piedi" || $name->nodeValue == "Pé" || $name->nodeValue == "Ступни" || $name->nodeValue == "발" || $name->nodeValue == "脚")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }

        if ($name->nodeValue == "Wrist" || $name->nodeValue == "Handgelenke" || $name->nodeValue == "Muñeca" || $name->nodeValue == "Poignets" || $name->nodeValue == "Polsi" || $name->nodeValue == "Pulso" || $name->nodeValue == "Запястья" || $name->nodeValue == "손목" || $name->nodeValue == "手腕")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }
        if ($name->nodeValue == "Back" || $name->nodeValue == "Rücken" || $name->nodeValue == "Espalda" || $name->nodeValue == "Dos" || $name->nodeValue == "Schiena" || $name->nodeValue == "Costas" || $name->nodeValue == "Спина" || $name->nodeValue == "뒤로" || $name->nodeValue == "后背")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }
        if ($name->nodeValue == "Two-Hand" || $name->nodeValue == "Zweihändig" || $name->nodeValue == "Dos manos" || $name->nodeValue == "Deux mains" || $name->nodeValue == "Due mani" || $name->nodeValue == "Duas Mãos" || $name->nodeValue == "Двуручное" || $name->nodeValue == "양손" || $name->nodeValue == "双手")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }
        if ($name->nodeValue == "Tabard" || $name->nodeValue == "Wappenrock" || $name->nodeValue == "Tabardo" || $name->nodeValue == "Tabard" || $name->nodeValue == "Insegna" || $name->nodeValue == "Tabardo" || $name->nodeValue == "Гербовая накидка" || $name->nodeValue == "휘장" || $name->nodeValue == "战袍")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }
        if ($name->nodeValue == "Ranged" || $name->nodeValue == "Distanz" || $name->nodeValue == "A distancia" || $name->nodeValue == "À distance" || $name->nodeValue == "A distanza" || $name->nodeValue == "Longo Alcance" || $name->nodeValue == "Дальний бой" || $name->nodeValue == "원거리" || $name->nodeValue == "远程")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }
        if ($name->nodeValue == "Held In Off-hand" || $name->nodeValue == "In Schildhand geführt" || $name->nodeValue == "Sostener con la mano izquierda" || $name->nodeValue == "Tenu en main gauche" || $name->nodeValue == "Accessorio" || $name->nodeValue == "Mão-secundária" || $name->nodeValue == "Левая рука" || $name->nodeValue == "보조 장비" || $name->nodeValue == "副手持有")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }
        if ($name->nodeValue == "One-Hand" || $name->nodeValue == "Einhändig" || $name->nodeValue == "Una mano" || $name->nodeValue == "À une main" || $name->nodeValue == "Una mano" || $name->nodeValue == "Uma Mão" || $name->nodeValue == "Одноручное" || $name->nodeValue == "한손" || $name->nodeValue == "单手")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }
        if ($name->nodeValue == "Shield" || $name->nodeValue == "Schild" || $name->nodeValue == "Escudo" || $name->nodeValue == "Bouclier" || $name->nodeValue == "Scudo" || $name->nodeValue == "Escudo" || $name->nodeValue == "Щит" || $name->nodeValue == "방패" || $name->nodeValue == "盾")
            {
            $cols = $row->getElementsByTagName('a')->item(0)->getAttribute('href');
            $whatIWant = substr($cols, strpos($cols, "=") + 1);
            echo $name->nodeValue . ": ";
            echo $whatIWant;
            echo "</br>";
            }
        }
    }
}
?>
