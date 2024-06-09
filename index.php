<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .newswebsite {
            justify-content: center;
            display: flex;
            background-color: #87CEFA;
        }

        .newselement {
            padding: 25px;
            border: 2px solid;
            width: 600px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .newsimage {
            justify-content: center;
            width: 300px;
        }
    </style>
    <title>News Catalogue</title>
</head>
<body>
    <div class="App">
        <?php
        // Actual API key
        $apiKey = 'Replace With Your API';
        $country = 'in';

        // Make a request to the News API
        $url = "https://newsapi.org/v2/top-headlines?country=$country&apiKey=$apiKey";
        $ch = curl_init($url);

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'User-Agent: YourAppName/1.0'
        ));

        // Execute cURL request and get response
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            echo 'cURL Error: ' . curl_error($ch);
        } else {
            // Decode the JSON response
            $data = json_decode($response, true);

            // Print the entire response for debugging
            echo '<pre>';
            //print_r($data);
            echo '</pre>';

            // Check if articles are available
            if (isset($data['status']) && $data['status'] === 'ok' && isset($data['articles']) && is_array($data['articles'])) {
                $articles = $data['articles'];

                foreach ($articles as $article): ?>
                    <div class="newswebsite">
                        <div class="newselement">
                            <img class="newsimage" src="<?= $article["urlToImage"] ?>" alt="<?= $article["title"] ?>">
                            <h3><a href="<?= $article["url"] ?>"><?= $article["title"] ?></a></h3>
                            <p><?= $article["description"] ?></p>
                        </div>
                    </div>
                <?php endforeach;
            } else {
                if (isset($data['message'])) {
                    echo 'Error: ' . $data['message'];
                } else {
                    echo 'No articles available or invalid API key.';
                }
            }
        }

        // Close cURL session
        curl_close($ch);
        ?>
    </div>
</body>
</html>
