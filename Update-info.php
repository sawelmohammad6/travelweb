<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .update-container {
        max-width: 400px;
        margin: 50px auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .update-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .update-form-group {
        margin-bottom: 20px;
    }

    .update-form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .update-form-group input {
        width: 80%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .update-btn {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    .update-btn:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<div class="update-container">
    <h2>Update Information</h2>
    <form id="updateForm" action="#" method="POST">
        <div class="update-form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="update-form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="update-form-group">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="update-form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="update-btn">Update</button>
    </form>
</div>

</body>
</html>
