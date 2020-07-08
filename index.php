<?php
$arr = [
//    [
//        "color" => "",
//        "text"  => "Még nem tudni."
//    ],
    [
        "color" => "",
        "text"  => "Sajnos jó esély van rá!"
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesz-e vajon a koronavírusnak második hulláma?</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        html, body {
            height: 100%;
        }

        body {
            background: #d7ca81;
            font-family: sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h1 {
            font-size: 4em;
            color: aliceblue;
        }
    </style>
</head>
<body>

<h1>
    <?php
    print $arr[rand(0, sizeof($arr) - 1)]['text'];

    ?></h1>

</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161094411-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-161094411-2');
</script>

</html>
