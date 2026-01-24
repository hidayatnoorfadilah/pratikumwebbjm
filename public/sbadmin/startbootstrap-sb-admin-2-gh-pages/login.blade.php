<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-500 to-green-400 flex items-center justify-center">

    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

        <!-- Kolom Kiri - Gambar -->
        <div class="hidden md:flex items-center justify-center bg-gradient-to-br from-blue-600 to-green-500 p-10">
            <img src="https://cdn-icons-png.flaticon.com/512/295/295128.png"
                 class="w-64 drop-shadow-xl" alt="Login Illustration">
        </div>

        <!-- Kolom Kanan - Form Login -->
        <div class="p-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Selamat Datang</h2>
            <p class="text-gray-500 mb-6">Silakan login untuk melanjutkan</p>

            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" class="rounded text-blue-500">
                        <span class="text-gray-600">Ingat saya</span>
                    </label>
                    <a href="#" class="text-blue-500 hover:underline">Lupa password?</a>
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-500 to-green-400 text-white py-2 rounded-lg font-semibold hover:opacity-90 transition">
                    Masuk
                </button>
            </form>
        </div>

    </div>

</body>
</html>
