<!DOCTYPE html>
<html>
<head>
    <title>External Affairs Fess</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
        }
        input[type="text"],
        input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            flex: 1;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>External Affairs Fess</h1>
        <form action="{{ route('submit.fess') }}" method="post">
            @csrf
            <input type="text" name="fess_text" placeholder="Express yourself..." required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
