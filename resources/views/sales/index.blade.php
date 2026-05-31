@extends('layouts.main')

@section('title', 'বিক্রয় POS')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 h-[calc(100vh-200px)]">
    <!-- Left Side - Products -->
    <div class="lg:col-span-2 bg-white rounded-xl shadow-lg flex flex-col overflow-hidden" x-data="{ cart: [] }">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">পণ্য নির্বাচন</h2>
            <div class="relative">
                <input type="text" placeholder="পণ্য খুঁজুন..."
                    class="w-full px-4 py-2 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="flex-1 overflow-y-auto p-6 space-y-3">
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                <button @click="cart.push({id: 1, name: 'চাল', price: 320})" class="p-4 bg-gradient-to-br from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 rounded-lg border-2 border-blue-200 hover:border-blue-400 transition transform hover:scale-105">
                    <i class="fas fa-bag text-2xl text-blue-600 mb-2"></i>
                    <p class="font-semibold text-gray-900 text-sm">চাল</p>
                    <p class="text-blue-600 font-bold text-sm">৳ 320</p>
                </button>
                <button @click="cart.push({id: 2, name: 'ডাল', price: 380})" class="p-4 bg-gradient-to-br from-purple-50 to-purple-100 hover:from-purple-100 hover:to-purple-200 rounded-lg border-2 border-purple-200 hover:border-purple-400 transition transform hover:scale-105">
                    <i class="fas fa-bag text-2xl text-purple-600 mb-2"></i>
                    <p class="font-semibold text-gray-900 text-sm">ডাল</p>
                    <p class="text-purple-600 font-bold text-sm">৳ 380</p>
                </button>
                <button @click="cart.push({id: 3, name: 'তেল', price: 850})" class="p-4 bg-gradient-to-br from-green-50 to-green-100 hover:from-green-100 hover:to-green-200 rounded-lg border-2 border-green-200 hover:border-green-400 transition transform hover:scale-105">
                    <i class="fas fa-bag text-2xl text-green-600 mb-2"></i>
                    <p class="font-semibold text-gray-900 text-sm">তেল</p>
                    <p class="text-green-600 font-bold text-sm">৳ 850</p>
                </button>
                <button @click="cart.push({id: 4, name: 'ডিম', price: 300})" class="p-4 bg-gradient-to-br from-red-50 to-red-100 hover:from-red-100 hover:to-red-200 rounded-lg border-2 border-red-200 hover:border-red-400 transition transform hover:scale-105">
                    <i class="fas fa-bag text-2xl text-red-600 mb-2"></i>
                    <p class="font-semibold text-gray-900 text-sm">ডিম</p>
                    <p class="text-red-600 font-bold text-sm">৳ 300</p>
                </button>
                <button @click="cart.push({id: 5, name: 'চিনি', price: 280})" class="p-4 bg-gradient-to-br from-yellow-50 to-yellow-100 hover:from-yellow-100 hover:to-yellow-200 rounded-lg border-2 border-yellow-200 hover:border-yellow-400 transition transform hover:scale-105">
                    <i class="fas fa-bag text-2xl text-yellow-600 mb-2"></i>
                    <p class="font-semibold text-gray-900 text-sm">চিনি</p>
                    <p class="text-yellow-600 font-bold text-sm">৳ 280</p>
                </button>
                <button @click="cart.push({id: 6, name: 'লবণ', price: 100})" class="p-4 bg-gradient-to-br from-orange-50 to-orange-100 hover:from-orange-100 hover:to-orange-200 rounded-lg border-2 border-orange-200 hover:border-orange-400 transition transform hover:scale-105">
                    <i class="fas fa-bag text-2xl text-orange-600 mb-2"></i>
                    <p class="font-semibold text-gray-900 text-sm">লবণ</p>
                    <p class="text-orange-600 font-bold text-sm">৳ 100</p>
                </button>
            </div>
        </div>
    </div>

    <!-- Right Side - Cart Summary -->
    <div class="bg-white rounded-xl shadow-lg flex flex-col overflow-hidden">
        <div class="p-6 border-b border-gray-200 bg-gray-50">
            <h2 class="text-2xl font-bold text-gray-900">কার্ট সারসংক্ষেপ</h2>
        </div>

        <div class="flex-1 overflow-y-auto p-6 space-y-3">
            <!-- Cart items will appear here -->
            <div class="text-center py-12 text-gray-500">
                <i class="fas fa-shopping-cart text-4xl mb-4 opacity-20"></i>
                <p>কার্ট খালি আছে</p>
            </div>
        </div>

        <!-- Cart Footer -->
        <div class="p-6 border-t border-gray-200 bg-gray-50 space-y-4">
            <div class="space-y-2">
                <div class="flex justify-between text-sm text-gray-600">
                    <span>সাবটোটাল:</span>
                    <span>৳ 0.00</span>
                </div>
                <div class="flex justify-between text-sm text-gray-600">
                    <span>ট্যাক্স (৫%):</span>
                    <span>৳ 0.00</span>
                </div>
                <div class="flex justify-between text-lg font-bold text-gray-900 pt-2 border-t border-gray-300">
                    <span>মোট:</span>
                    <span>৳ 0.00</span>
                </div>
            </div>

            <div class="space-y-3">
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>পেমেন্ট পদ্ধতি নির্বাচন করুন</option>
                    <option>নগদ</option>
                    <option>কার্ড</option>
                    <option>চেক</option>
                </select>
                <button class="w-full bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold py-3 rounded-lg transition transform hover:scale-105">
                    <i class="fas fa-check-circle mr-2"></i> চেকআউট
                </button>
                <button class="w-full bg-gray-300 hover:bg-gray-400 text-gray-900 font-semibold py-2 rounded-lg transition">
                    <i class="fas fa-trash mr-2"></i> কার্ট খালি করুন
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
