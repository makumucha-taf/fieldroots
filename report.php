<?php
$conn = new mysqli("localhost", "root", "", "fieldrts_db");
if ($conn->connect_error) { 
    die("Database Connection Error: " . $conn->connect_error); 
}

$result = $conn->query("SELECT * FROM products");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Field Quality Test Report</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; padding: 2rem; background: #f7f5ef; }
        h1 { color: #1b301b; margin-bottom: 1rem; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { padding: 12px 15px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #274d28; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .missing { background-color: #ffcdd2; color: #b71c1c; font-weight: bold; }
        .valid { color: #2e7d32; font-weight: 500; }
    </style>
</head>
<body>
    <h1>Field Validation Test Report</h1>
    <p>Displays product records and flags incomplete entries (empty descriptions).</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price (KES)</th>
                <th>Description Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
                <?php $is_missing = empty(trim($row['description'])); ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td>KES <?= number_format($row['price'], 2) ?></td>
                    <td class="<?= $is_missing ? 'missing' : 'valid' ?>">
                        <?= $is_missing ? '⚠️ MISSING DESCRIPTION' : htmlspecialchars($row['description']) ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
