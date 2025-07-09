<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            padding: 50px;
            display: flex;
            justify-content: center;
        }

        .form-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007BFF;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Register</h2>
    <form action="validation.php" method="get">
        <label>Name:</label>
        <input type="text" name="name">
        <br>

        <label>Email:</label>
        <input type="text" name="email">
        <br>

        <label>Age:</label>
        <input type="number" name="age">
        <br>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
