<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
            margin: 60px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .alert-box {
            background-color: #ffe0e0;
            border: 1px solid #ff4d4d;
            padding: 15px;
            color: #a94442;
            margin-bottom: 20px;
            border-radius: 10px;
            font-weight: bold;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.3);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .alert-box ul {
            margin: 0;
            padding-left: 20px;
        }

        .alert-box li {
            list-style-type: "❗ ";
        }

        .error {
            color: red;
            font-size: 13px;
            margin-top: 4px;
        }
    </style>
</head>
<body>
    <div class="container">

        {{-- Global Error Alert --}}
        @if ($errors->any())
            <div class="alert-box">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2>Add New Student</h2>

        <form method="POST" action="{{ route('students.store') }}">
            @csrf

            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <label>Age:</label>
            <input type="number" name="age" value="{{ old('age') }}">
            @error('age')
                <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
