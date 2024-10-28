<?php
/**
 * index.php
 * 
 * Portail Interactif Famille-Résident pour la suite logicielle Teranga.
 * 
 * PHP version 8.0+
 * 
 * @category   EHPAD
 * @package    TerangaSoftware
 * @author     Julien Salmon
 * @copyright  2024 Julien Salmon
 * @version    1.0.0
 * @link       https://www.teranga-software.com/
 * @since      2024-10-27
 */


require_once 'config/database.php';
require_once 'entity/Event.php';
require_once 'repository/EventRepository.php';
require_once 'service/EventService.php';


// Database connexion
try {
    $pdo = Database::getConnection();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$eventRepository = new EventRepository($pdo);
$eventService = new EventService($eventRepository);

// Get events by id resident 
$residentId = 1;
$events = $eventService->getEventsForResident($residentId);

// Displaying events
require 'views/events.php';
