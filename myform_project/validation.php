<!-- http://localhost/myform_project/index.php -->
<!-- validation.php -->
<?php
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age'] ?? '';

$nameErr = $emailErr = $ageErr = "";
$valid = true;

// Validate name
if (empty($name)) {
    $nameErr = "Name is required.";
    $valid = false;
}

// Validate email
if (empty($email)) {
    $emailErr = "Email is required.";
    $valid = false;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format.";
    $valid = false;
}

// Validate age
if (empty($age)) {
    $ageErr = "Age is required.";
    $valid = false;
} elseif (!is_numeric($age) || $age <= 0) {
    $ageErr = "Age must be a positive number.";
    $valid = false;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Validation Result</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            padding: 50px;
            display: flex;
            justify-content: center;
        }

        .result-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            width: 450px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .success {
            color: green;
            font-weight: bold;
            font-size: 18px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="result-box">
    <?php if (!$valid): ?>
        <h3 style="color: red;">Form has errors:</h3>
        <?php if ($nameErr) echo "<div class='error'>• $nameErr</div>"; ?>
        <?php if ($emailErr) echo "<div class='error'>• $emailErr</div>"; ?>
        <?php if ($ageErr) echo "<div class='error'>• $ageErr</div>"; ?>
        <a href="index.php">⬅ Go Back to Form</a>
    <?php else: ?>
        <div class="success">Form submitted successfully!</div>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></p>
        <a href="index.php">⬅ Submit Another Response</a>
    <?php endif; ?>
</div>

</body>
</html>
