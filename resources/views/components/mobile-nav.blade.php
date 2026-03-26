<!-- Mobile Bottom Navigation -->
<nav class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-6 pt-3 bg-white/80 dark:bg-[#181c1c]/80 backdrop-blur-xl z-50 rounded-t-3xl border-t border-[#003366]/10 dark:border-[#bfc8c8]/10 shadow-[0px_-12px_32px_rgba(0,51,102,0.06)]">
    <a href="{{ route('dashboard') }}" class="flex flex-col items-center justify-center {{ request()->routeIs('dashboard') ? 'text-[#006565] dark:text-[#008080] scale-110 font-bold' : 'text-[#404949] dark:text-[#bfc8c8] opacity-70' }} transition-all">
        <span class="material-symbols-outlined" {!! request()->routeIs('dashboard') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>home</span>
        <span class="text-[10px] font-['Inter'] uppercase tracking-widest mt-1">Início</span>
    </a>
    <a href="{{ route('transactions') }}" class="flex flex-col items-center justify-center {{ request()->routeIs('transactions') ? 'text-[#006565] dark:text-[#008080] scale-110 font-bold' : 'text-[#404949] dark:text-[#bfc8c8] opacity-70' }} transition-all">
        <span class="material-symbols-outlined" {!! request()->routeIs('transactions') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>list_alt</span>
        <span class="text-[10px] font-['Inter'] uppercase tracking-widest mt-1">Lista</span>
    </a>
    <div class="flex flex-col items-center justify-center text-white bg-gradient-to-br from-[#006565] to-[#004d4d] rounded-full p-3 shadow-lg -mt-8 mx-2 border-4 border-white dark:border-[#181c1c] cursor-pointer hover:scale-105 transition-transform">
        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1; font-size: 28px;">add</span>
    </div>
    <a href="{{ route('budgets') }}" class="flex flex-col items-center justify-center {{ request()->routeIs('budgets') ? 'text-[#006565] dark:text-[#008080] scale-110 font-bold' : 'text-[#404949] dark:text-[#bfc8c8] opacity-70' }} transition-all">
        <span class="material-symbols-outlined" {!! request()->routeIs('budgets') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>insights</span>
        <span class="text-[10px] font-['Inter'] uppercase tracking-widest mt-1">Metas</span>
    </a>
    <a href="{{ route('settings') }}" class="flex flex-col items-center justify-center {{ request()->routeIs('settings') ? 'text-[#006565] dark:text-[#008080] scale-110 font-bold' : 'text-[#404949] dark:text-[#bfc8c8] opacity-70' }} transition-all">
        <span class="material-symbols-outlined" {!! request()->routeIs('settings') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>more_horiz</span>
        <span class="text-[10px] font-['Inter'] uppercase tracking-widest mt-1">Mais</span>
    </a>
</nav>
