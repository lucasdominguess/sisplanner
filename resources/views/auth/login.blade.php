@extends('layouts.guest')
@section('page_title', 'sisplanner - Precision Sanctuary')

@push('styles')
    @vite(['resources/css/auth.css'])
@endpush

@section('content')
<div class="auth-container w-full min-h-screen relative flex flex-col items-center justify-center p-6 bg-gradient-to-br from-[#f8fbfb] to-[#edf3f3] dark:from-[#111414] dark:to-[#181c1c]">
    
    <!-- Theme Toggle -->
    <div class="absolute top-6 right-6">
        <button class="w-12 h-12 flex items-center justify-center bg-white dark:bg-[#202525] rounded-xl shadow-[0_8px_16px_rgba(0,101,101,0.06)] text-[#006565] dark:text-[#63d9d9] hover:scale-105 transition-transform" aria-label="Toggle Theme">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dark_mode</span>
        </button>
    </div>

    <!-- Header / Logo -->
    <div class="text-center mb-10">
        <h1 class="text-4xl font-extrabold tracking-tighter text-[#006565] dark:text-[#63d9d9] mb-1">sisplanner</h1>
        <p class="text-xs uppercase tracking-widest text-[#404949] dark:text-[#bfc8c8] font-semibold opacity-80">Precision Sanctuary</p>
    </div>

    <!-- Login Card -->
    <div class="bg-white dark:bg-[#1e2323] w-full max-w-md rounded-3xl p-8 sm:p-10 shadow-[0_24px_64px_rgba(0,101,101,0.04)] dark:shadow-[0_24px_64px_rgba(0,0,0,0.4)] border border-white/50 dark:border-white/5 backdrop-blur-sm z-10 relative">
        <h2 class="text-2xl font-bold text-[#1e2323] dark:text-white mb-8 tracking-tight">Bem-vindo de volta</h2>

        <form action="{{ route('dashboard') }}" method="GET" class="space-y-5">
            <!-- Email -->
            <div class="space-y-1.5">
                <label for="email" class="text-xs font-bold uppercase tracking-wider text-[#6f7979] dark:text-[#bfc8c8]">E-mail</label>
                <div class="relative group">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#9ba4a4] group-focus-within:text-[#006565] transition-colors" style="font-size: 20px;">mail</span>
                    <input type="email" id="email" name="email" placeholder="nome@exemplo.com" class="w-full bg-[#f4f7f7] dark:bg-[#141818] text-[#1e2323] dark:text-white rounded-xl py-3.5 pl-12 pr-4 border-2 border-transparent focus:border-[#006565]/30 focus:bg-white dark:focus:bg-[#181c1c] outline-none transition-all placeholder:text-[#9ba4a4] font-medium" required>
                </div>
            </div>

            <!-- Password -->
            <div class="space-y-1.5">
                <div class="flex justify-between items-center">
                    <label for="password" class="text-xs font-bold uppercase tracking-wider text-[#6f7979] dark:text-[#bfc8c8]">Senha</label>
                    <a href="#" class="text-xs font-bold text-[#006565] dark:text-[#63d9d9] hover:underline hover:text-[#004d4d] transition-colors">Esqueceu a senha?</a>
                </div>
                <div class="relative group">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#9ba4a4] group-focus-within:text-[#006565] transition-colors" style="font-size: 20px;">lock</span>
                    <input type="password" id="password" name="password" placeholder="••••••••" class="w-full bg-[#f4f7f7] dark:bg-[#141818] text-[#1e2323] dark:text-white rounded-xl py-3.5 pl-12 pr-4 border-2 border-transparent focus:border-[#006565]/30 focus:bg-white dark:focus:bg-[#181c1c] outline-none transition-all placeholder:text-[#9ba4a4] tracking-widest font-medium" required>
                </div>
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full bg-[#006565] hover:bg-[#004d4d] text-white font-bold py-3.5 px-4 rounded-xl flex items-center justify-center gap-2 active:scale-[0.98] transition-all shadow-[0_8px_16px_rgba(0,101,101,0.2)]">
                    Entrar
                    <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </button>
            </div>
        </form>

        <div class="flex items-center gap-4 my-8">
            <div class="h-px bg-[#e6ecec] dark:bg-[#2a3131] flex-1"></div>
            <span class="text-[10px] font-bold uppercase tracking-widest text-[#9ba4a4]">Ou entre com</span>
            <div class="h-px bg-[#e6ecec] dark:bg-[#2a3131] flex-1"></div>
        </div>

        <button class="w-full bg-[#f4f7f7] dark:bg-[#2a3131] hover:bg-[#e6ecec] dark:hover:bg-[#343c3c] text-[#1e2323] dark:text-white font-bold py-3.5 px-4 rounded-xl flex items-center justify-center gap-3 transition-colors">
            <!-- Basic Google SVG Icon representing G -->
            <svg class="w-5 h-5" viewBox="0 0 24 24">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            Continuar com Google
        </button>
    </div>

    <!-- Sign up Link -->
    <div class="mt-8 text-sm text-[#6f7979] dark:text-[#9ba4a4] font-medium">
        Não tem uma conta? <a href="#" class="text-[#006565] dark:text-[#63d9d9] font-bold hover:underline">Cadastre-se</a>
    </div>

    <!-- Footer -->
    <footer class="mt-auto pt-16 pb-4 w-full flex flex-col items-center">
        <div class="flex flex-wrap justify-center gap-6 mb-4 text-xs font-medium text-[#6f7979] dark:text-[#9ba4a4]">
            <a href="#" class="hover:text-[#006565] dark:hover:text-[#63d9d9] transition-colors">Termos de Serviço</a>
            <a href="#" class="hover:text-[#006565] dark:hover:text-[#63d9d9] transition-colors">Política de Privacidade</a>
            <a href="#" class="hover:text-[#006565] dark:hover:text-[#63d9d9] transition-colors">Segurança</a>
        </div>
        <p class="text-[9px] uppercase tracking-[0.2em] font-bold text-[#bec9c9] dark:text-[#3f4949]">
            © 2024 SISPLANNER — PRECISION SANCTUARY
        </p>
    </footer>
</div>

@push('scripts')
    @vite(['resources/js/auth.js'])
@endpush
@endsection
