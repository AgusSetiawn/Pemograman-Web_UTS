<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            line-height: 1.6;
            opacity: 0;
            animation: fadeIn 2s forwards;
        }

        .header {
            width: 100%;
            text-align: center;
            padding: 40px;
            background-color: #191970;
            margin-top: 65px;
            margin-bottom: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            font-size: 2.5rem;
            color: #f5f5f5;
            margin-bottom: 10px;
        }

        .header p {
            color: #FF681F;
            font-size: 1.1rem;
        }

        .profile-image {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: zoomIn 3s ease-in-out;
            transition: transform 0.3s ease;
        }

        .profile-image:hover {
            transform: scale(1.05);
        }

        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #343a40;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .social-icons a {
            color: #007bff;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
            margin-left: 15px;
        }

        .social-icons a:hover {
            color: #0056b3;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0);
            }

            to {
                transform: scale(1);
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Tentang Saya</h1>
        <p>Selamat Datang Di Profile Page Saya!</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="assets/images/profil.jpeg" alt="Profile Picture" class="profile-image mb-4">
            </div>
            <div class="col-md-8">
                <h2>Agus Setiawan</h2>
                <p>
                    Saya Merupakan Mahasiswa dari Universitas Pelita Bangsa. Saya Menyukai Semua Hal Berkaitan dengan Teknologi. Untuk Saat Ini Hal Yang Saya Sukai Adalah Mengkoding, Mengedit, Khususnya Untuk Youtube & Media Social Saya.
                </p>
                <p>
                    Saat Di Waktu Luang Saya Sangat Suka Mempelajari Hal Baru Apalagi Tentang Teknologi.
                </p>

            </div>
        </div>

        <h3 class="mt-5">Connect with Me</h3>
        <div class="social-icons mb-4">
            <a href="?page=404" target="_blank" class="fab fa-facebook-square"></a>
            <a href="?page=404" target="_blank" class="fab fa-twitter-square"></a>
            <a href="?page=404" target="_blank" class="fab fa-linkedin"></a>
            <a href="?page=404" target="_blank" class="fab fa-instagram-square"></a>
        </div>
    </div>
    <br><br><br><br><br>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>