<?php
/**
 * events.php
 * 
 * Vue pour afficher le fil d'événements du résident dans le portail.
 * 
 * PHP version 8.0+
 * 
 * @category   EHPAD
 * @package    TerangaSoftware
 * @subpackage Views
 * @author     Julien salmon
 * @copyright  2024 Julien Salmon
 * @version    1.0.0
 * @link       https://www.teranga-software.com/
 * @since      2024-10-27
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fil d'événements du résident</title>
</head>
<body>
    <h1>Fil d'événements du résident</h1>
    <ul>
        <?php foreach ($events as $event): ?>
            <li>
                <h2><?= htmlspecialchars($event->getTitle()) ?></h2>
                <p><?= htmlspecialchars($event->getDescription()) ?></p>
                <p><strong>Date :</strong> <?= $event->getDate()->format('d/m/Y') ?></p>
                <?php if ($event->getPhotoUrl()): ?>
                    <img src="<?= htmlspecialchars($event->getPhotoUrl()) ?>" alt="Photo de l'événement" style="max-width: 200px;">
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
