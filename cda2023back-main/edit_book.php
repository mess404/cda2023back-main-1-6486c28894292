<?php
// Inclure le fichier de connexion à la base de données
require_once 'db_connection.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];

    // Insérer le nouveau livre dans la base de données
    $query = $db->prepare('INSERT INTO books (title, author, year, genre) VALUES (?, ?, ?, ?)');
    $query->execute([$title, $author, $year, $genre]);

    // Rediriger vers la page d'accueil après l'ajout du livre
    header('Location: index.php');
    exit;
}
?>
