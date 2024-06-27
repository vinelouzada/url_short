<?php

require "ConnectDatabase.php";
require "UrlRepository.php";

//URL -> CODIGO

//Receber URL do formulario
$url = $_POST['url'];

//Criar um código
$alphaNumeric = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
$shuffle = str_shuffle($alphaNumeric);
$shuffleShort = substr($shuffle, 0,5);


//Salvar no Banco de Dados
$urlRepository = new UrlRepository($pdo);
$urlRepository->save($url, $shuffleShort);

header("Location: result.php?code=$shuffleShort");
