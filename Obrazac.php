
<?php
$wordsJSON = file_get_contents('Words.json');
$words = json_decode($wordsJSON, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
    text-align:center;
}
         .container {
            display: flex; 
            justify-content: space-between; 
            align-items: flex-start; 
        }
        .forma {
            flex: 1; 
            margin-right: 20px; 
        }
        table, th, td {
            flex: 1; 
            border: 1px solid black;
        }
        tr {
            clear: both; 
        }
    </style>
</head>
<body>
    <br><br>
    <div class="container">
        <form action="indexobrada.php" method="post" class="forma">
            <label for="rijec">Upišite riječ:</label>
            <input type="text" id="rijec" name="rijec" required>
            <button type="submit">Pošalji</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Rijec</th>
                    <th>Broj slova</th>
                    <th>Broj suglasnika</th>
                    <th>Broj samoglasnika</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($words as $word): ?>
    <tr>
        <td><?= htmlspecialchars($word['Riječ']) ?></td>
        <td><?= htmlspecialchars($word['Broj slova']) ?></td>
        <td><?= htmlspecialchars($word['Broj suglasnika']) ?></td>
        <td><?= htmlspecialchars($word['Broj samoglasnika']) ?></td>
    </tr>
    <?php endforeach; ?>
    <?php if (empty($words)): ?>
    <tr>
        <td colspan="4">Nema podataka.</td>
    </tr>
    <?php endif; ?>
</tbody>
        </table>
    </div>
</body>
</html>