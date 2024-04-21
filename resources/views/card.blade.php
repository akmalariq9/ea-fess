<!DOCTYPE html>
<html>
<head>
    <title>All Messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
            background-color: #f8f9fa;
        }
        .card {
            display: grid;
            grid-template-rows: auto 1fr auto;
            height: 100%;
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa; /* Warna latar belakang card */
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan card */
            transition: box-shadow 0.3s ease; /* Transisi bayangan */
        }
        h1 {
            color: blue;
            
        }
        .card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Bayangan card saat dihover */
        }
        .card-title {
            font-size: 16px;
            font-weight: bold;
            color: #333; /* Warna teks judul card */
        }
        .card-text {
            font-size: 14px;
            color: #666; /* Warna teks teks card */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">All Messages</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($messages as $message)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $message->message }}</h5>
                            <p class="card-text">Created at: {{ $message->created_at }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
