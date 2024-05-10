<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syaid Andhika | About</title>
    <link rel="icon" type="image/x-icon" href="/foto/icon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-gray-100">
    <!-- Header and Navigation Menu -->
    <div class="flex justify-between items-center bg-blue-800 text-white p-4 mb-6">
        <h1 class="text-3xl font-bold">My Personal Information</h1>
        <!-- Navigation Menu -->
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-white hover:text-gray-200">Home</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">About</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">Blog</a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 p-4">
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="flex items-center space-x-6 mb-4">
                        <img class="h-24 w-24 rounded-full mx-auto" src="/foto/aku.png" alt="Syaid Andhika">
                        <div class="font-semibold text-lg">Syaid Andhika<br><span
                                class="text-sm font-normal text-gray-600">Junior Web Developer</span></div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold mb-4">My Story</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here'.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-4">
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="font-semibold text-lg mb-6">Personal Information</div>
                    <p>Age: 21 years old</p>
                    <p>Phone: +62-8960-7765-169</p>
                    <p>Email: syaidxandhika@gmail.com</p>
                    <div class="mt-6">
                        <h2 class="text-2xl font-bold mb-2">Find me in!</h2>
                        <a href="#" class="text-blue-500"><i class="fab fa-linkedin"></i> LinkedIn</a>
                        <a href="#" class="text-blue-300 ml-4"><i class="fab fa-twitter"></i> Twitter</a>
                        <a href="#" class="text-red-300 ml-4"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#" class="text-blue-500 ml-4"><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="#" class="text-black-300 ml-4"><i class="fab fa-github"></i> Github</a>
                    </div>
                </div>
            </div>
            <!-- Project Gallery -->
            <div class="w-full p-4">
                <section class="bg-white shadow rounded-lg p-6">
                    <div class="container mx-auto">
                        <h2 class="text-3xl font-bold text-center mb-6">Project Gallery</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Project 1 -->
                            <div class="bg-white shadow rounded-lg p-3 h-full">
                                <img src="/foto/login-1.png" alt="Project 1" class="w-full rounded mb-4">
                                <h3 class="text-xl font-semibold mb-2">Admin Absensi</h3>

                            </div>
                            <!-- Project 2 -->
                            <div class="bg-white shadow rounded-lg p-3 h-full">
                                <img src="/foto/login-2.png" alt="Project 2" class="w-full rounded mb-4">
                                <h3 class="text-xl font-semibold mb-2">Admin Listrik</h3>

                            </div>
                            <!-- Project 3 -->
                            <div class="bg-white shadow rounded-lg p-3 h-full">
                                <img src="/foto/dashboard-1.png" alt="Project 3" class="w-full rounded mb-4">
                                <h3 class="text-xl font-semibold mb-2">Dashbord Absensi</h3>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-100 text-gray-600 py-4 flex flex-wrap justify-between">
        <div class="container mx-auto px-4">
            <p class="text-center">Copyright © 2024 Syaid Andhika. All rights reserved.</p>
        </div>
    </footer>

    <!-- Add this CSS code to keep the footer at the bottom of the screen on desktop devices -->
    <style>
        @media (min-width: 768px) {
            footer {
                position: fixed;
                bottom: 0;
                width: 100%;
            }
        }
    </style>
</body>

</html>