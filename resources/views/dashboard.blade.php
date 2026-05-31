@extends('layouts.main')

@section('title', 'ড্যাশবোর্ড')

@section('content')
<div class="space-y-8">
    <!-- Page Header -->
    <div>
        <h1 class="text-3xl font-bold text-gray-900">স্বাগতম, Admin!</h1>
        <p class="text-gray-600 mt-2">আপনার ব্যবসায়িক কর্মক্ষমতা এক নজরে দেখুন</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Sales -->
        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg p-6 text-white">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-blue-100 text-sm font-medium">আজকের বিক্রয়</p>
                    <p class="text-3xl font-bold mt-2">৳ 45,250</p>
                    <p class="text-blue-100 text-xs mt-2"><i class="fas fa-arrow-up"></i> ১২% বৃদ্ধি</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                    <i class="fas fa-chart-line text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Total Products -->
        <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl shadow-lg p-6 text-white">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-purple-100 text-sm font-medium">মোট পণ্য</p>
                    <p class="text-3xl font-bold mt-2">1,245</p>
                    <p class="text-purple-100 text-xs mt-2">ইনভেন্টরিতে</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                    <i class="fas fa-box text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Total Customers -->
        <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-lg p-6 text-white">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-green-100 text-sm font-medium">মোট গ্রাহক</p>
                    <p class="text-3xl font-bold mt-2">342</p>
                    <p class="text-green-100 text-xs mt-2">নিবন্ধিত</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                    <i class="fas fa-users text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Low Stock -->
        <div class="bg-gradient-to-br from-red-500 to-red-600 rounded-xl shadow-lg p-6 text-white">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-red-100 text-sm font-medium">কম স্টক</p>
                    <p class="text-3xl font-bold mt-2">23</p>
                    <p class="text-red-100 text-xs mt-2">মনোযোগ প্রয়োজন</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                    <i class="fas fa-exclamation text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Weekly Sales Chart -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="mb-6">
                <h3 class="text-lg font-bold text-gray-900">সাপ্তাহিক বিক্রয়</h3>
                <p class="text-sm text-gray-600">গত ৭ দিনের বিক্রয় প্রবণতা</p>
            </div>
            <div class="h-80">
                <canvas id="weeklySalesChart"></canvas>
            </div>
        </div>

        <!-- Top Products Chart -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="mb-6">
                <h3 class="text-lg font-bold text-gray-900">শীর্ষ পণ্য</h3>
                <p class="text-sm text-gray-600">সর্বাধিক বিক্রীত পণ্য</p>
            </div>
            <div class="h-80">
                <canvas id="topProductsChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Recent Transactions -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-bold text-gray-900">সর্বশেষ লেনদেন</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">তারিখ</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">গ্রাহক</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">পণ্য</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">পরিমাণ</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">টাকা</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">কর্ম</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 text-sm text-gray-900">২৮/৫/২০২৬</td>
                        <td class="px-6 py-4 text-sm text-gray-900 font-medium">মোহাম্মদ করিম</td>
                        <td class="px-6 py-4 text-sm text-gray-600">চাল - ১০ কেজি</td>
                        <td class="px-6 py-4 text-sm text-gray-600">2</td>
                        <td class="px-6 py-4 text-sm font-semibold text-gray-900">৳ 3,200</td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-blue-600 hover:text-blue-700 font-medium">চালান</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Weekly Sales Chart
    const weeklySalesCtx = document.getElementById('weeklySalesChart').getContext('2d');
    new Chart(weeklySalesCtx, {
        type: 'line',
        data: {
            labels: ['সোম', 'মঙ্গল', 'বুধ', 'বৃহ', 'শুক্র', 'শনি', 'রবি'],
            datasets: [{
                label: 'বিক্রয়',
                data: [12000, 19000, 3000, 5000, 20000, 30000, 35000],
                borderColor: '#0ea5e9',
                backgroundColor: 'rgba(14, 165, 233, 0.1)',
                tension: 0.4,
                fill: true,
                pointRadius: 6,
                pointBackgroundColor: '#0ea5e9',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)',
                    }
                },
                x: {
                    grid: {
                        display: false,
                    }
                }
            }
        }
    });

    // Top Products Chart
    const topProductsCtx = document.getElementById('topProductsChart').getContext('2d');
    new Chart(topProductsCtx, {
        type: 'doughnut',
        data: {
            labels: ['চাল', 'ডাল', 'ডিম', 'তেল', 'চিনি'],
            datasets: [{
                data: [30, 25, 20, 15, 10],
                backgroundColor: [
                    '#0ea5e9',
                    '#8b5cf6',
                    '#ec4899',
                    '#f59e0b',
                    '#10b981'
                ],
                borderColor: '#fff',
                borderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20,
                        font: {
                            size: 13,
                        }
                    }
                }
            }
        }
    });
</script>
@endsection
