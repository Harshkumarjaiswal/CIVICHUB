<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIVICHUB:Municipal Management Services Suite</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        .footer {
            text-align: center;
            float: right;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        
        .contactdown {
            text-align: center;
            border-top: solid 0.3px;
        }
    </style>
</head>

<body class="font-roboto bg-gray-100 text-gray-800">
    <header class="flex justify-between items-center p-6">
        <div class="text-gray-700 font-bold tracking-wide uppercase">
            Be The Change
        </div>
        <nav class="flex space-x-6">
            <a href="index.php" class="text-gray-700 hover:text-gray-900">Home</a>
            <a href="About.php" class="text-gray-700 hover:text-gray-900">About</a>
            <a href="form.php" class="text-gray-700 hover:text-gray-900">Raise a Complaint</a>
            <a href="contact.php" class="text-gray-700 hover:text-gray-900">Contact</a>
            <a href="adminlogin.php" class="text-gray-700 hover:text-gray-900">Admin Login</a>
        </nav>
    </header>

    <main class="flex justify-center items-center min-h-screen bg-white">
        <div class="max-w-4xl mx-auto p-8 flex space-x-12">
            <div class="relative w-1/2">
                <div class="absolute top-0 left-0 text-gray-300 text-9xl font-bold leading-none">
                    <div>CIV</div>
                    <div>HUB</div>
                </div>
                <img src="image/main image.png" alt="Fresh green leaves signifying growth and rejuvenation on a light background" class="relative z-10">
            </div>
            <div class="w-1/2 flex flex-col justify-center space-y-6">
                <h1 class="text-3xl font-bold text-gray-800 leading-tight">
                    Municipal Management Services Suite
                </h1>
                <p class="text-gray-600 leading-relaxed">
                    Integrated software platform designed to streamline and enhance the delivery of public services at the local government level. This comprehensive system offers a range of tools and features to efficiently manage various municipal functions such as waste
                    management, water and sewage services, road maintenance, public safety, and citizen engagement.
                </p>
                <a href="form.php" class="w-44 text-center bg-green-800 text-white py-3 px-4 rounded-md shadow-lg hover:bg-green-700 transition duration-300">
            Start Now
          </a>
            </div>
        </div>
    </main>
    <footer>

        <div class="contactdown">
            <button class="bg-green-600 text-white font-bold px-6 py-2 rounded-full mb-6">
                    CONTACT US
                  </button>
            <div class="phone">
                <i class="fas fa-phone text-green-600 w-8"></i>
                <span class="ml-4">+91 7070513933</span>
            </div>
            <div class="envelope">
                <i class="fas fa-envelope text-green-600 w-8"></i>
                <span class="ml-4">civichub05team@gmail.com</span>
            </div>
            <div class="marker">
                <i class="fas fa-map-marker-alt text-green-600 w-8"></i>
                <span class="ml-4">Ranchi</span>
            </div>
        </div>

        <div class="container">
            <p>@2024 CivicHub. All Right reserved</p>
            <p>&copy; CIVICHUB:Municipal Management Services Suite</p>

        </div>
    </footer>
</body>

</html>