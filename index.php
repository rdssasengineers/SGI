<?php

/**
 * dotenv instance with .env file
 */
require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);

/**
 * Controllers
 */
require_once 'controllers/plantilla.controller.php';
$plantilla = new plantilla();
$plantilla->mostrarPlantilla();
