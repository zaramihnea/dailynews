<html>
<head>
    <title>Daily news</title>
    <link rel="stylesheet" href="style.css" /> 
</head>
<body>
    <h1>Daily news</h1>
    <div class="rss-container">
        <div class="feed" id="digi-feed">
            <h2>Digi24 Feed</h2>
            <div class="news-box">
                <?php
                define ('FEED', 'https://www.digi24.ro/rss'); 	// adresa fluxului de știri RSS
                define ('XPATH', '/rss/channel/item');          // expresia XPath utilizată

                try {
                    $dom = new DomDocument();
                    $dom->load (FEED); // încărcăm documentul XML
                    $xpath = new DOMXpath($dom);
                    // baleiăm însemnările (aici, elementele <item>) 
                    $items = $xpath->query (XPATH);
                    foreach ($items as $news) {
                        $title = $news->getElementsByTagname('title')->item(0)->nodeValue;
                        $link = $news->getElementsByTagname('link')->item(0)->nodeValue;
                        $description = $news->getElementsByTagname('description')->item(0)->nodeValue;
                        echo '<div class="news-item"><h3><a href="' . $link . '">' . $title . '</a></h3>
                        <div class="description">' . $description . '</div><br>
                        </div>';
                    }
                }
                catch (RuntimeException $e) { 
                    echo $e->getMessage (); 
                }
                ?>
            </div>
        </div>
        <div class="feed" id="antena-feed">
            <h2>Antena3 feed</h2>
            <div class="news-box">
                <?php
                define ('FEED2', 'https://antena3.ro/rss');
                try {
                    $dom = new DomDocument();
                    $dom->load (FEED2); // încărcăm documentul XML
                    $xpath = new DOMXpath($dom);
                    // baleiăm însemnările (aici, elementele <item>) 
                    $items = $xpath->query (XPATH);
                    foreach ($items as $news) {
                        $title = $news->getElementsByTagname('title')->item(0)->nodeValue;
                        $link = $news->getElementsByTagname('link')->item(0)->nodeValue;
                        $description = $news->getElementsByTagname('description')->item(0)->nodeValue;
                        echo '<div class="news-item"><h3><a href="' . $link . '">' . $title . '</a></h3>
                        <div class="description">' . $description . '</div><br>
                        </div>';
                    }
                }
                catch (RuntimeException $e) { 
                    echo $e->getMessage (); 
                }
                ?>
            </div>
        </div>
        <div class="feed" id="bzi-feed">
            <h2>BZI feed</h2>
            <div class="news-box">
                <?php
                define ('FEED3', 'https://www.bzi.ro/feed');
                try {
                    $dom = new DomDocument();
                    $dom->load (FEED3); // încărcăm documentul XML
                    $xpath = new DOMXpath($dom);
                    // baleiăm însemnările (aici, elementele <item>) 
                    $items = $xpath->query (XPATH);
                    foreach ($items as $news) {
                        $title = $news->getElementsByTagname('title')->item(0)->nodeValue;
                        $link = $news->getElementsByTagname('link')->item(0)->nodeValue;
                        $description = $news->getElementsByTagname('description')->item(0)->nodeValue;
                        echo '<div class="news-item"><h3><a href="' . $link . '">' . $title . '</a></h3>
                        <div class="description">' . $description . '</div><br>
                        </div>';
                    }
                }
                catch (RuntimeException $e) { 
                    echo $e->getMessage (); 
                }
                ?>
            </div>
        </div>
        <div class="feed" id="protv-feed">
            <h2>ProTV feed</h2>
            <div class="news-box">
                <?php
                define ('FEED4', 'https://rss.stirileprotv.ro/');
                try {
                    $dom = new DomDocument();
                    $dom->load (FEED4); // încărcăm documentul XML
                    $xpath = new DOMXpath($dom);
                    // baleiăm însemnările (aici, elementele <item>) 
                    $items = $xpath->query (XPATH);
                    foreach ($items as $news) {
                        $title = $news->getElementsByTagname('title')->item(0)->nodeValue;
                        $link = $news->getElementsByTagname('link')->item(0)->nodeValue;
                        $description = $news->getElementsByTagname('description')->item(0)->nodeValue;
                        echo '<div class="news-item"><h3><a href="' . $link . '">' . $title . '</a></h3>
                        <div class="description">' . $description . '</div><br>
                        </div>';
                    }
                }
                catch (RuntimeException $e) { 
                    echo $e->getMessage (); 
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>