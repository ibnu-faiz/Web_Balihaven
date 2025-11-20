<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaliHaven</title>
    @include('layouts.partials.link')
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Style umum */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f6;
            color: #333;
        }

        /* Welcome Section */
        .welcome-section {
            margin-top: 30px;
        }

        .welcome-title {
            font-size: 32px;
            font-weight: bold;
            color: #1EAEDB;
        }

        .welcome-subtitle {
            color: #777;
            font-size: 16px;
        }

        /* Statistik Section */
        .statistics-section {
            margin-top: 40px;
        }

        .card {
            background: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
    padding: 10px;
    width: 80%; /* Mengatur lebar kotak */
    max-width: 400px; /* Batas maksimal lebar */
    margin-left: auto; /* Memusatkan kotak */
    margin-right: auto; /* Memusatkan kotak */
        }

        .card-body {
            text-align: center;
        }

        .card-title {
            font-size: 20px;
            color: #1EAEDB;
        }

        .card-number {
            font-size: 36px;
            color: #333;
        }

        .card-footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            font-size: 14px;
        }

        /* Quick Links Section */
        .quick-links-section {
            margin-top: 40px;
        }

        .quick-links-title {
            font-size: 20px;
            font-weight: bold;
            color: #1EAEDB;
        }

        .quick-links {
            display: flex;
            gap: 15px;
        }

        .quick-link {
            display: inline-block;
            padding: 12px 20px;
            background-color: #E8F5F7;
            color: #6BAE75;
            text-decoration: none;
            font-weight: bold;
            border-radius: 30px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .quick-link:hover {
            background-color: #1EAEDB;
            color: white;
        }

        /* Announcement Section */
        .announcement-section {
            margin-top: 40px;
        }

        .announcement-title {
            font-size: 20px;
            font-weight: bold;
            color: #1EAEDB;
        }

        .announcement-card {
            background-color: #E8F5F7;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            color: #333;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .quick-links {
                flex-direction: column;
                align-items: center;
            }

            .card-number {
                font-size: 28px;
            }
        }
    </style>

</head>

<body class="bg-[#E8F5F7] font-family-karla flex">
    @include('layouts.partials.sidebar')
    @yield('content')
    @include('layouts.partials.script')


    

</body>

</html>
