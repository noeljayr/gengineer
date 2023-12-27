<?php
$urls = ["https://gengineer.org/",
    "https://gengineer.org/news",
    "https://gengineer.org/donate",
    "https://gengineer.org/partners",
    "https://gengineer.org/about us",
    "https://gengineer.org/coding",
    "https://gengineer.org/be-volunteer",
    "https://gengineer.org/electric propeller car",
    "https://gengineer.org/renewable energy",
    "https://gengineer.org/sponsors",
    "https://gengineer.org/stem awareness",
    "https://gengineer.org/stem lab",
    "https://gengineer.org/stem role  models",
    "https://gengineer.org/stem sponsorship",
    "https://gengineer.org/stem tours",
    "https://gengineer.org/stem workshops",
    "https://gengineer.org/stop motion animation",
    "https://gengineer.org/structural engineering",
    "https://gengineer.org/team",
    "https://gengineer.org/tutorials",
    "https://gengineer.org/upcoming",
    "https://gengineer.org/volunteers"
    ];

// Create the XML structure
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

foreach ($urls as $url) {
    $urlElement = $xml->addChild("url");
    $urlElement->addChild("loc", $url);
    $urlElement->addChild("lastmod", date("c"));
}

// Save to a file
$xml->asXML("sitemap.xml");
?>
