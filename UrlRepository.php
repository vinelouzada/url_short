<?php

class UrlRepository{
    
    private PDO $pdo;


    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function save(string $urlOriginal, string $urlShort){
        
        $statement = $this->pdo->prepare("INSERT INTO url (url_original, url_short) VALUES(?,?)");
        $statement->bindValue(1,$urlOriginal);
        $statement->bindValue(2,$urlShort);
        $statement->execute();
    }

    public function findByCode(string $code){
        $statement = $this->pdo->prepare("SELECT * FROM url WHERE url_short = ?");
        $statement->bindValue(1, $code);
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if($result == false){
            return null;
        }

        return $result['url_original'];
    }

}