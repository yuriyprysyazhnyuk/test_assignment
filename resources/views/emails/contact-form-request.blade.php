<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            background: #ffffff;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div>
        <h3>Hi!</h3>
        <h4>Contact form data:</h4>
    </div>

    <ul>
        @foreach ($data as $dataKey => $dataValue)
            <li>
                <strong>{{$dataKey}}</strong> - {{$dataValue}}
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
