<?php

/**
 * EventRepository.php
 * 
 * Classe pour gérer l'accès aux données des événements depuis la base de données.
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


class EventRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    /**
     * getEventsByResidentId
     *
     * @param  mixed $residentId
     * @return array
     */
    public function getEventsByResidentId(int $residentId): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM events WHERE resident_id = :residentId ORDER BY date DESC');
        $stmt->execute(['residentId' => $residentId]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $events = [];
        foreach ($results as $row) {
            $events[] = new Event(
                $row['id'],
                $row['resident_id'],
                $row['title'],
                $row['description'],
                new DateTime($row['date']),
                $row['photo_url'] ?? null
            );
        }
        return $events;
    }
    
    /**
     * getResidentId
     *
     * @param  mixed $pdo
     * @return void
     */
    public function getResidentId(PDO $pdo) {
        try {
            // Préparer la requête pour sélectionner l'ID du premier résident trouvé
            $stmt = $pdo->prepare("SELECT id FROM residents LIMIT 1");
            $stmt->execute();
            
            // Récupérer le résultat
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Retourner l'ID si trouvé, sinon null
            return $result ? (int)$result['id'] : null;
        } catch (PDOException $e) {
            // Gérer les erreurs de connexion à la base de données
            echo "Erreur lors de la récupération de l'ID du résident : " . $e->getMessage();
            return null;
        }
    }
}
