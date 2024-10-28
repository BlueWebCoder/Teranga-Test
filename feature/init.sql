-- Création de la base de données
CREATE DATABASE IF NOT EXISTS teranga;
USE teranga;

-- Création de la table residents
CREATE TABLE IF NOT EXISTS residents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    date_de_naissance DATE NOT NULL,
    sexe ENUM('M', 'F') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertion des données dans la table residents
INSERT INTO residents (nom, prenom, date_de_naissance, sexe) VALUES
('Durand', 'Jean', '1945-05-12', 'M'),
('Martin', 'Marie', '1950-08-23', 'F'),
('Bernard', 'Paul', '1938-11-30', 'M'),
('Dubois', 'Sophie', '1947-03-15', 'F'),
('Moreau', 'Pierre', '1939-02-20', 'M'),
('Laurent', 'Isabelle', '1953-07-10', 'F'),
('Simon', 'Jacques', '1941-09-05', 'M'),
('Michel', 'Claudine', '1943-12-11', 'F'),
('Lefevre', 'Andre', '1949-04-22', 'M'),
('Roux', 'Monique', '1955-01-18', 'F');

-- Création de la table events
CREATE TABLE IF NOT EXISTS events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    resident_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    date DATETIME NOT NULL,
    photo_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (resident_id) REFERENCES residents(id)
);

-- Insertion des données dans la table events
INSERT INTO events (resident_id, title, description, date, photo_url) VALUES
(1, 'Anniversaire de Jean', 'Célébration de l\'anniversaire de Jean avec les proches.', '2024-10-15 14:00:00', 'https://example.com/photos/anniversaire_jean.jpg'),
(2, 'Atelier de peinture', 'Les résidents ont participé à un atelier de peinture sur le thème de l\'automne.', '2024-10-18 10:00:00', 'https://example.com/photos/atelier_peinture.jpg'),
(3, 'Sortie au parc', 'Sortie en groupe au parc pour profiter du beau temps.', '2024-10-20 11:30:00', 'https://example.com/photos/sortie_parc.jpg'),
(4, 'Concert de piano', 'Concert de piano dans la salle commune pour tous les résidents.', '2024-10-22 16:00:00', 'https://example.com/photos/concert_piano.jpg'),
(5, 'Fête de la musique', 'Fête de la musique avec des performances musicales des résidents et du personnel.', '2024-06-21 15:00:00', 'https://example.com/photos/fete_musique.jpg'),
(6, 'Atelier cuisine', 'Atelier de cuisine pour préparer des pâtisseries avec les résidents.', '2024-10-25 09:00:00', 'https://example.com/photos/atelier_cuisine.jpg'),
(7, 'Projection de film', 'Projection du film "Le fabuleux destin d\'Amélie Poulain" dans la salle commune.', '2024-10-30 18:00:00', 'https://example.com/photos/projection_film.jpg'),
(8, 'Jeux de société', 'Après-midi de jeux de société pour stimuler l\'interaction sociale entre les résidents.', '2024-10-28 14:00:00', 'https://example.com/photos/jeux_societe.jpg'),
(9, 'Séance de yoga', 'Séance de yoga adaptée aux résidents pour maintenir la forme physique.', '2024-11-02 10:30:00', 'https://example.com/photos/seance_yoga.jpg'),
(10, 'Lecture de contes', 'Lecture de contes pour les résidents dans la bibliothèque.', '2024-11-05 17:00:00', 'https://example.com/photos/lecture_contes.jpg');
