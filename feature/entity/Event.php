<?php

/**
 * Event.php
 * 
 * Classe représentant un événement pour le portail Interactif Famille-Résident.
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
 * 
 */



// Event entities with getter/setter settings
class Event
{
    private int $id;
    private int $residentId;
    private string $title;
    private string $description;
    private DateTime $date;
    private ?string $photoUrl;
    
    /**
     * __construct
     *
     * @param  mixed $id
     * @param  mixed $residentId
     * @param  mixed $title
     * @param  mixed $description
     * @param  mixed $date
     * @param  mixed $photoUrl
     * @return void
     */
    public function __construct(int $id, int $residentId, string $title, string $description, DateTime $date, ?string $photoUrl = null)
    {
        $this->id = $id;
        $this->residentId = $residentId;
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->photoUrl = $photoUrl;
    }
    
    /**
     * getId
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * getResidentId
     *
     * @return int
     */
    public function getResidentId(): int
    {
        return $this->residentId;
    }
    
    /**
     * getTitle
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    
    /**
     * getDescription
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    
    /**
     * getDate
     *
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }
    
    /**
     * getPhotoUrl
     *
     * @return string
     */
    public function getPhotoUrl(): ?string
    {
        return $this->photoUrl;
    }
}
