<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>লগইন - POS System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Logo Section -->
        <div class="text-center mb-8">
            <div class="inline-block w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-lg mb-4">
                <i class="fas fa-shopping-cart text-blue-600 text-2xl"></i>
            </div>
            <h1 class="text-4xl font-bold text-white mb-2">POS System</h1>
            <p class="text-blue-100 text-sm">আপনার ব্যবসার জন্য আধুনিক সমাধান</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">
                        ইমেইল বা ইউজারনেম
                    </label>
                    <div class="relative">
                        <input type="email" id="email" name="email" required 
                            class="w-full px-4 py-3 pl-10 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-0 transition"
                            placeholder="আপনার ইমেইল প্রবেश করুন">
                        <i class="fas fa-envelope absolute left-3 top-3.5 text-gray-400"></i>
                    </div>
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-900 mb-2">
                        পাসওয়ার্ড
                    </label>
                    <div class="relative">
                        <input type="password" id="password" name="password" required 
                            class="w-full px-4 py-3 pl-10 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:ring-0 transition"
                            placeholder="আপনার পাসওয়ার্ড প্রবেশ করুন">
                        <i class="fas fa-lock absolute left-3 top-3.5 text-gray-400"></i>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-gray-300">
                        <span class="text-sm text-gray-600">আমাকে মনে রাখুন</span>
                    </label>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-700 font-medium">
                        পাসওয়ার্ড ভুলে গেছেন?
                    </a>
                </div>

                <!-- Login Button -->
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-3 rounded-lg hover:shadow-lg transition duration-200 transform hover:scale-105">
                    <i class="fas fa-sign-in-alt mr-2"></i> লগইন করুন
                </button>

                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">অথবা</span>
                    </div>
                </div>

                <!-- Demo Credentials -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <p class="text-sm font-semibold text-gray-900 mb-2">ডেমো অ্যাকাউন্ট:</p>
                    <p class="text-xs text-gray-600"><strong>Email:</strong> admin@pos.com</p>
                    <p class="text-xs text-gray-600"><strong>Password:</strong> password</p>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <div class="text-center mt-6 text-blue-100 text-sm">
            <p>&copy; 2026 POS System. সর্বাধিকার সংরক্ষিত।</p>
        </div>
    </div>
</body>
</html>
