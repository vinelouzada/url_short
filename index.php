<?php 

    require "ConnectDatabase.php";
    require "UrlRepository.php";

   

   $shortURL = explode("/",$_SERVER['REQUEST_URI']);
   var_dump($shortURL);

   if(!is_null($shortURL[1])){

    $urlRepository = new UrlRepository($pdo);
    $url = $urlRepository->findByCode($shortURL[1]);

        if(!is_null($url)){
            header("Location: $url");
        }
   }


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encurtador de URL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .container h1 {
            margin-bottom: 20px;
            color: #333333;
        }
        .container input[type="url"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }
        .container button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Encurtador de URL</h1>
    <form action="ShortUrlService.php" method="POST">
        <input type="url" name="url" placeholder="Insira a URL aqui" required>
        <button type="submit">Encurtar URL</button>
    </form>
</div>
</body>
</html>
