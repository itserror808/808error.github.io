<?php

require_once 'config.php';

if (isset($_POST['search'])) {
    $searchValue = $_POST['search'];

    // Prepare the SQL statement with the LIKE operator and wildcard characters
    $sql = "SELECT * FROM kits WHERE name LIKE CONCAT(:searchValue, '%')";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':searchValue', $searchValue, PDO::PARAM_STR);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Generate the HTML for the search results
    $html = '<ul>';

    foreach ($results as $row) {
        $html .= '<li><a href="../pack_link/' . $row['link'] . '">' . $row['name'] . '</a></li>';
    }

    $html .= '</ul>';

    echo $html;
}
