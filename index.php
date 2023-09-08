<?php
try {
    // SQLite veritabanı bağlantısı
    $db = new PDO('sqlite:my.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // "data" tablosundan "userid" ve "who" sütunlarını listeleme
    $query = "SELECT userid, who FROM data";
    $result = $db->query($query);

    if ($result) {
        echo "<h2>data Tablosu:</h2>";
        echo "<ul>";
        foreach ($result as $row) {
            echo "<li>User ID: " . $row['userid'] . ", Who: " . $row['who'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "data tablosu boş veya sorgu başarısız.";
    }
} catch (PDOException $e) {
    print 'Hata: ' . $e->getMessage();
}
?>
