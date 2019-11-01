<?php

function generateUrlQuery($params) {
    return http_build_query($params);
    // return rawurlencode($params);
}

function generateHref($pageName, $params) {
    return 'href = " ' . $pageName . '/?' . generateUrlQuery($params) . ' "';
}

function formatGetParams() {
    echo "<ul>";
        foreach($_GET as $element) {
            echo "<li> $element </li>";
        }
    echo "</ul>";
}

function validateIP($address)
{
    if (filter_var($address, FILTER_VALIDATE_IP)) {
        echo "Address: " . $address . " is valid <br/>";
        return true;
    } else {
        echo "Address: " . $address . " is not valid <br/>";
        return false;
    }
    
}