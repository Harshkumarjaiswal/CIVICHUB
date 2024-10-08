<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </link>

</head>

<body class="bg-white flex items-center justify-center h-screen">
    <div class="absolute top-4 left-4">
        <span class="flex items-center bg-green-900 text-white px-4 py-2 rounded-full text-sm">
            <i class="fas fa-user-circle mr-2"></i> ADMINISTRATION PANEL
        </span>
    </div>

    <div class="flex items-center">
        <div class="mr-16">
            <img src="image/about.png" alt="A realistic illustration of a green leafy plant on a white background">
        </div>
        <div class="border-2 border-black rounded-lg shadow-lg p-8">
            <div class="flex justify-center -mt-12 mb-4">
                <div class="bg-white p-4 rounded-full border-2 border-black">
                    <i class="fas fa-user text-4xl"></i>
                </div>
            </div>
            <form action="action.php" method="POST">
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold" for="username"><i class="fas fa-user mr-2"></i>Username</label>
                    <input name="username" class="border-2 border-black w-full py-2 px-3 rounded" type="text" id="username" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-bold" for="password"><i class="fas fa-lock mr-2"></i>Password</label>
                    <input name="password" class="border-2 border-black w-full py-2 px-3 rounded" type="password" id="password" placeholder="Password">
                </div>
                <div class="flex justify-center">
                    <button name="login_submit" class="bg-green-900 text-white py-2 px-8 rounded-full font-bold">LOGIN</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>