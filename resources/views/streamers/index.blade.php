<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Streamers</title>
</head>
<body>
    <h1>streamers</h1>
    <div class="streamer-table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Streamer Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($streamers as $streamer)
                <tr>
                    <td>{{ $streamer->name }}</td>
                    <td>
                        <button>詳細</button>
                        <button>編集</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>