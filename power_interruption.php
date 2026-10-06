<?php
include('connection.php');
// Fetch power interruption data
$sql = "SELECT * FROM power_interruption";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Interruption Notice</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
    <style>
        /* Custom Styles */
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        .notice-card {
            border-left: 5px solid #ff8800;
            /* Primary Orange */
            background-color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .notice-header {
            background-color: #ff8800;
            color: white;
            padding: 10px;
            border-radius: 5px 5px 0 0;
            font-weight: bold;
        }

        .table th {
            color: #ff8800;
        }

        .responsive-text {
            font-size: 1.2em;
        }

        .time {
            font-size: 1.1em;
            color: #333;
        }

        .affected-areas {
            font-weight: bold;
        }

        @media (max-width: 576px) {
            .responsive-text {
                font-size: 1em;
            }
        }
    </style>
</head>

<body>
    <?php include('loader.php'); ?>

    <div class="container mt-4">
        <h1 class="text-center text-primary mb-4">Power Interruption Notices</h1>

        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="notice-card">
                    <div class="notice-header text-uppercase">
                        <?= $row['type'] == 'SCHEDULED' ? 'Scheduled Power Interruption' : 'Unscheduled Power Interruption'; ?>
                    </div>
                    <div class="p-3">
                        <p class="responsive-text">
                            <strong>Date:</strong> <?= $row['day_name'] . " " . $row['day_number'] . ", " . $row['month']; ?>
                        </p>
                        <p class="time">
                            <strong>Time:</strong> <?= $row['time_from']; ?> - <?= $row['time_to']; ?>
                        </p>
                        <p class="affected-areas">
                            <strong>Affected Areas:</strong> <?= $row['affected_areas']; ?>
                        </p>
                        <p>
                            <strong>Reason:</strong> <?= $row['reason']; ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center text-muted">No power interruptions to display.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
// Close the database connection
$conn->close();
?>