<?php

include ('common.php');
include ('twig.php');
include ('data_helper.php');
include ('data.php');

$twig = new Twig();

$selected = null;

// Page is set by the url placeholder files
if (!isset($page)) {
    $title = 'Picks';
} else {
    // Find the selected structure item  (see common.php)
    foreach ($structure as $item) {
        if ($item['uri'] === $page) {
            $selected = $item;
            $title    = $item['pt'];

            break;
        }
    }
}

// Create the datahelper
$dataHelper = new DataHelper();

if ($selected !== null) {
    $dataHelper->setData($data);
    $dataHelper->setKey($selected['key']);
}

// Render the template using twig and echo it to the output stream
echo ($twig->renderTemplate(
    array(
        'title'     => $title,
        'structure' => $structure,
        'selected'  => $selected,
        'data'      => $dataHelper->normalize()
    ), isset($selected['key']) !== true)
);