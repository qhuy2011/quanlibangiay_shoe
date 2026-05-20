<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Darky Shoe Store')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(56,189,248,0.2),_transparent_32%),linear-gradient(180deg,_#0f172a_0%,_#020617_100%)] pointer-events-none"></div>

    <header class="relative z-20 border-b border-slate-800/80 bg-slate-950/95 backdrop-blur sticky top-0">
        <div class="container mx-auto px-6 py-4 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <a href="/" class="flex items-center gap-3 text-xl font-extrabold tracking-tight text-cyan-400 hover:text-cyan-300 transition">
                <div class="w-12 h-12 rounded-3xl bg-gradient-to-br from-cyan-500 to-sky-600 flex items-center justify-center shadow-lg shadow-cyan-500/20">
                    <i class="fas fa-shoe-prints text-white text-xl"></i>
                </div>
                <span class="hidden sm:inline">Darky</span>
            </a>

            <nav class="hidden md:flex items-center gap-8 text-slate-200">
                <a href="/" class="transition hover:text-cyan-300">Trang chủ</a>
                <a href="#products" class="transition hover:text-cyan-300">Sản phẩm</a>
                <a href="{{ route('cart.index') }}" class="transition hover:text-cyan-300">Giỏ hàng</a>
                @auth
                    <a href="{{ route('user.orders.index') }}" class="transition hover:text-cyan-300">Đơn hàng của tôi</a>
                    @if(Auth::user()->role >= 1)
                        <a href="{{ route('admin.dashboard') }}" class="transition hover:text-cyan-300">Quản trị</a>
                    @endif
                @endauth
            </nav>

            <div class="flex items-center justify-between gap-3">
                @auth
                    <div class="hidden sm:flex items-center gap-3 rounded-full bg-slate-900/80 px-4 py-2 border border-slate-700 shadow-sm">
                        <span class="text-slate-300">Xin chào, {{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}" class="inline-flex items-center gap-2 rounded-full bg-cyan-500 px-4 py-2 text-slate-950 font-semibold transition hover:bg-cyan-400">
                            <i class="fas fa-sign-out-alt"></i>Đăng xuất
                        </a>
                    </div>
                @else
                    <div class="hidden sm:flex items-center gap-3">
                        <a href="{{ route('login') }}" class="text-slate-200 transition hover:text-cyan-300">Đăng nhập</a>
                        <a href="{{ route('register') }}" class="inline-flex items-center gap-2 rounded-full bg-cyan-500 px-4 py-2 text-slate-950 font-semibold transition hover:bg-cyan-400">
                            <i class="fas fa-user-plus"></i>Đăng ký
                        </a>
                    </div>
                @endauth

                <button id="mobile-menu-btn" class="md:hidden inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-700 bg-slate-900/90 text-slate-200 transition hover:border-cyan-400 hover:text-cyan-300">
                    <i class="fas fa-bars text-lg"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden hidden border-t border-slate-800 bg-slate-950/95">
            <div class="container mx-auto px-6 py-4 space-y-3">
                <a href="/" class="block rounded-2xl bg-slate-900/80 px-4 py-3 text-slate-200 transition hover:bg-slate-800">Trang chủ</a>
                <a href="#products" class="block rounded-2xl bg-slate-900/80 px-4 py-3 text-slate-200 transition hover:bg-slate-800">Sản phẩm</a>
                <a href="{{ route('cart.index') }}" class="block rounded-2xl bg-slate-900/80 px-4 py-3 text-slate-200 transition hover:bg-slate-800">Giỏ hàng</a>
                @auth
                    <a href="{{ route('user.orders.index') }}" class="block rounded-2xl bg-slate-900/80 px-4 py-3 text-slate-200 transition hover:bg-slate-800">Đơn hàng của tôi</a>
                    @if(Auth::user()->role >= 1)
                        <a href="{{ route('admin.dashboard') }}" class="block rounded-2xl bg-slate-900/80 px-4 py-3 text-slate-200 transition hover:bg-slate-800">Quản trị</a>
                    @endif
                    <a href="{{ route('logout') }}" class="block rounded-2xl bg-cyan-500 px-4 py-3 text-slate-950 text-center font-semibold transition hover:bg-cyan-400">Đăng xuất</a>
                @else
                    <a href="{{ route('login') }}" class="block rounded-2xl bg-slate-900/80 px-4 py-3 text-slate-200 transition hover:bg-slate-800">Đăng nhập</a>
                    <a href="{{ route('register') }}" class="block rounded-2xl bg-cyan-500 px-4 py-3 text-slate-950 text-center font-semibold transition hover:bg-cyan-400">Đăng ký</a>
                @endauth
            </div>
        </div>
    </header>

    <main class="relative z-10 container mx-auto px-6 py-10">
        <section class="mb-10 rounded-3xl border border-slate-800/80 bg-slate-900/80 p-8 shadow-2xl shadow-cyan-500/10 backdrop-blur sm:p-10">
            <div class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
                <div>
                    <span class="inline-flex items-center gap-2 rounded-full border border-cyan-500/20 bg-cyan-500/10 px-4 py-2 text-sm font-semibold text-cyan-200">
                        <i class="fas fa-rocket"></i> Giao diện mới sành điệu</span>
                    <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                        Darky - Nơi phong cách dẫn đầu từng bước chân.
                    </h1>
                    <p class="mt-6 max-w-2xl text-slate-300 leading-relaxed text-lg">
                        Khám phá bộ sưu tập giày thể thao, sneaker và fashion cao cấp với chất lượng chính hãng, thiết kế trẻ trung, thoải mái và giá cạnh tranh.
                    </p>
                    <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center">
                        <a href="#products" class="inline-flex items-center justify-center rounded-full bg-cyan-500 px-6 py-3 text-base font-semibold text-slate-950 transition hover:bg-cyan-400">Xem sản phẩm</a>
                        <a href="{{ route('cart.index') }}" class="inline-flex items-center justify-center rounded-full border border-slate-700 bg-slate-900 px-6 py-3 text-base font-semibold text-slate-100 transition hover:border-cyan-400 hover:text-cyan-300">Mở giỏ hàng</a>
                    </div>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl bg-slate-950/90 p-5 border border-slate-800 shadow-xl shadow-slate-950/40">
                        <span class="text-sm uppercase tracking-[0.3em] text-cyan-300">Nhanh chóng</span>
                        <h2 class="mt-4 text-2xl font-semibold text-white">Thanh toán linh hoạt</h2>
                        <p class="mt-3 text-slate-400">Đặt hàng dễ dàng, thanh toán bảo mật và nhận hàng tận nơi.</p>
                    </div>
                    <div class="rounded-3xl bg-slate-950/90 p-5 border border-slate-800 shadow-xl shadow-slate-950/40">
                        <span class="text-sm uppercase tracking-[0.3em] text-cyan-300">Uy tín</span>
                        <h2 class="mt-4 text-2xl font-semibold text-white">Hỗ trợ 24/7</h2>
                        <p class="mt-3 text-slate-400">Đội ngũ chăm sóc khách hàng luôn sẵn sàng tư vấn mọi thắc mắc.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="rounded-3xl border border-slate-800/80 bg-slate-900/80 p-8 shadow-2xl shadow-slate-950/20">
            @yield('content')
        </div>
    </main>

    <footer class="relative z-10 border-t border-slate-800 bg-slate-950/95 py-12 text-slate-300">
        <div class="container mx-auto px-6">
            <div class="grid gap-8 lg:grid-cols-3">
                <div>
                    <a href="/" class="flex items-center gap-3 text-2xl font-bold text-slate-100">
                        <div class="w-12 h-12 rounded-3xl bg-cyan-500 flex items-center justify-center text-slate-950 shadow-lg shadow-cyan-500/20">
                            <i class="fas fa-shoe-prints"></i>
                        </div>
                        <span>Darky</span>
                    </a>
                    <p class="mt-4 max-w-lg text-slate-400 leading-relaxed">
                        Shop giày phong cách, thời thượng và chất lượng. Luôn cập nhật xu hướng mới nhất để giúp bạn tỏa sáng mỗi ngày.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-slate-100 mb-4">Liên kết nhanh</h3>
                    <ul class="space-y-3 text-slate-400">
                        <li><a href="/" class="transition hover:text-cyan-300">Trang chủ</a></li>
                        <li><a href="#products" class="transition hover:text-cyan-300">Sản phẩm</a></li>
                        <li><a href="{{ route('cart.index') }}" class="transition hover:text-cyan-300">Giỏ hàng</a></li>
                        <li><a href="#contact" class="transition hover:text-cyan-300">Liên hệ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-slate-100 mb-4">Hỗ trợ khách hàng</h3>
                    <ul class="space-y-3 text-slate-400">
                        <li><a href="#" class="transition hover:text-cyan-300">Chính sách đổi trả</a></li>
                        <li><a href="#" class="transition hover:text-cyan-300">Hướng dẫn mua hàng</a></li>
                        <li><a href="#" class="transition hover:text-cyan-300">Vận chuyển</a></li>
                        <li><a href="#" class="transition hover:text-cyan-300">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-10 border-t border-slate-800 pt-6 text-center text-sm text-slate-500">
                &copy; {{ date('Y') }} Darky. Tất cả quyền được bảo lưu.
            </div>
        </div>
    </footer>

    @include('components.chatbot-widget')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
