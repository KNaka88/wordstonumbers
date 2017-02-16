<?php

    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    session_start();
    if (empty($_SESSION['chess'])) {
      $_SESSION['chess'] = array();
    }


    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__.'/../views'
    ));
    $app['debug'] = true;

    $app->get("/", function() use ($app) {
        $newchessboard = new ChessBoard();
        $newchessboard->initializeBoard();
        ChessBoard::save($newchessboard);
        return $app['twig']->render('chessboard.html.twig', array('board'=>$_SESSION['chess']));
    });


    return $app;
