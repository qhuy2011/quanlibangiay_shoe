<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Darky</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-100 text-slate-900 font-sans">

    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(56,189,248,0.12),_transparent_20%),radial-gradient(circle_at_bottom_right,_rgba(59,130,246,0.12),_transparent_20%)] pointer-events-none"></div>

    <div class="relative z-10 flex min-h-screen">
        <aside class="w-72 bg-white border-r border-slate-200 shadow-xl shadow-slate-200/30">
            <div class="px-6 py-8">
                <div class="flex items-center gap-3">
                    <div class="h-12 w-12 rounded-3xl bg-sky-500 flex items-center justify-center text-white shadow-lg shadow-sky-500/20">
                        <i class="fas fa-shoe-prints text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm uppercase tracking-[0.35em] text-slate-400">Admin Panel</p>
                        <h1 class="text-2xl font-bold text-slate-900">Darky</h1>
                    </div>
                </div>
            </div>

            <nav class="px-4 pb-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 rounded-3xl bg-sky-500/10 px-4 py-3 text-slate-900 transition hover:bg-sky-500/15">
                    <i class="fas fa-home w-5 text-sky-500"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('admin.products.index') }}" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-slate-700 transition hover:bg-slate-100">
                    <i class="fas fa-box w-5 text-slate-400"></i>
                    <span>Quản lý Sản phẩm</span>
                </a>
                <a href="{{ route('admin.orders.index') }}" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-slate-700 transition hover:bg-slate-100">
                    <i class="fas fa-shopping-cart w-5 text-slate-400"></i>
                    <span>Quản lý Đơn hàng</span>
                </a>
                <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-slate-700 transition hover:bg-slate-100">
                    <i class="fas fa-cog w-5 text-slate-400"></i>
                    <span>Cài đặt Website</span>
                </a>
                <a href="{{ route('admin.reviews.index') }}" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-slate-700 transition hover:bg-slate-100">
                    <i class="fas fa-comments w-5 text-slate-400"></i>
                    <span>Quản lý Bình luận</span>
                </a>
                <a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-slate-700 transition hover:bg-slate-100">
                    <i class="fas fa-users w-5 text-slate-400"></i>
                    <span>Quản lý Tài khoản</span>
                </a>

                <div class="mt-6 border-t border-slate-200 pt-4">
                    <a href="{{ route('logout') }}" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-red-600 transition hover:bg-red-50 hover:text-red-700">
                        <i class="fas fa-sign-out-alt w-5"></i>
                        <span>Đăng xuất</span>
                    </a>
                </div>
            </nav>
        </aside>

        <main class="flex-1 p-8 sm:p-10">
            <header class="mb-8 rounded-3xl border border-slate-200 bg-white p-6 shadow-2xl shadow-slate-200/40">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.3em] text-sky-500">Bảng điều khiển</p>
                        <h2 class="mt-3 text-3xl font-bold text-slate-900">Tổng quan hệ thống</h2>
                        <p class="mt-2 text-slate-600">Xem số liệu nhanh và quản lý cửa hàng hiệu quả hơn với giao diện sáng, rõ ràng.</p>
                    </div>
                    <div class="inline-flex items-center gap-4 rounded-full border border-slate-200 bg-slate-50 px-5 py-3 text-slate-700 shadow-lg shadow-slate-200/40">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=3b82f6&color=ffffff" class="h-12 w-12 rounded-full border border-slate-200" alt="Admin avatar">
                        <div>
                            <p class="text-sm text-slate-500">Xin chào,</p>
                            <p class="text-base font-semibold text-slate-900">Admin</p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="space-y-8">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
