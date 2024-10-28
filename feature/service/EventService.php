<?php

/**
 * EventService.php
 * 
 * Classe de service pour la gestion de la logique métier liée aux événements.
 * 
 * PHP version 8.0+
 * 
 * @category   EHPAD
 * @package    TerangaSoftware
 * @author     Julien Salmon
 * @copyright  2024 Julien Salmon
 * @version    1.0.0
 * @link       https://www.teranga-software.com/
 * 
 */

class EventService
{
    private EventRepository $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }
    
    /**
     * getEventsForResident
     *
     * @param  mixed $residentId
     * @return array
     */
    public function getEventsForResident(int $residentId): array
    {
        return $this->eventRepository->getEventsByResidentId($residentId);
    }
}
