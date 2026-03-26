<!-- Desktop Side Navigation -->
<aside class="hidden md:flex flex-col py-8 px-4 h-screen w-64 fixed left-0 top-0 bg-[#e5e9e8] dark:bg-[#1e2323] font-['Inter'] text-sm font-medium">
    <div class="mb-10 px-4">
        <h1 class="text-2xl font-black tracking-tighter text-[#006565] dark:text-[#008080]">sisplanner</h1>
        <p class="text-[10px] uppercase tracking-[0.2em] opacity-60">Precision Sanctuary</p>
    </div>
    
    <nav class="flex-1 space-y-1">
        <!-- Dashboard -->
        <a class="flex items-center gap-3 px-4 py-3 transition-all duration-300 rounded-xl {{ request()->routeIs('dashboard') ? 'text-[#006565] dark:text-[#ffffff] font-bold border-r-4 border-[#006565] translate-x-1 rounded-r-none rounded-l-xl bg-[#f0f4f3]/50' : 'text-[#404949] dark:text-[#bfc8c8] hover:bg-[#f0f4f3] dark:hover:bg-[#2a3131] hover:translate-x-1' }}" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined" {!! request()->routeIs('dashboard') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>dashboard</span>
            <span>Painel</span>
        </a>
        
        <!-- Transações -->
        <a class="flex items-center gap-3 px-4 py-3 transition-all duration-300 rounded-xl {{ request()->routeIs('transactions') ? 'text-[#006565] dark:text-[#ffffff] font-bold border-r-4 border-[#006565] translate-x-1 rounded-r-none rounded-l-xl bg-[#f0f4f3]/50' : 'text-[#404949] dark:text-[#bfc8c8] hover:bg-[#f0f4f3] dark:hover:bg-[#2a3131] hover:translate-x-1' }}" href="{{ route('transactions') }}">
            <span class="material-symbols-outlined" {!! request()->routeIs('transactions') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>receipt_long</span>
            <span>Transações</span>
        </a>
        
        <!-- Contas & Cartões -->
        <a class="flex items-center gap-3 px-4 py-3 transition-all duration-300 rounded-xl {{ request()->routeIs('accounts') ? 'text-[#006565] dark:text-[#ffffff] font-bold border-r-4 border-[#006565] translate-x-1 rounded-r-none rounded-l-xl bg-[#f0f4f3]/50' : 'text-[#404949] dark:text-[#bfc8c8] hover:bg-[#f0f4f3] dark:hover:bg-[#2a3131] hover:translate-x-1' }}" href="{{ route('accounts') }}">
            <span class="material-symbols-outlined" {!! request()->routeIs('accounts') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>account_balance_wallet</span>
            <span>Contas & Cartões</span>
        </a>
        
        <!-- Orçamentos -->
        <a class="flex items-center gap-3 px-4 py-3 transition-all duration-300 rounded-xl {{ request()->routeIs('budgets') ? 'text-[#006565] dark:text-[#ffffff] font-bold border-r-4 border-[#006565] translate-x-1 rounded-r-none rounded-l-xl bg-[#f0f4f3]/50' : 'text-[#404949] dark:text-[#bfc8c8] hover:bg-[#f0f4f3] dark:hover:bg-[#2a3131] hover:translate-x-1' }}" href="{{ route('budgets') }}">
            <span class="material-symbols-outlined" {!! request()->routeIs('budgets') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>pie_chart</span>
            <span>Orçamentos</span>
        </a>
        
        <!-- Categorias -->
        <a class="flex items-center gap-3 px-4 py-3 transition-all duration-300 rounded-xl {{ request()->routeIs('categories') ? 'text-[#006565] dark:text-[#ffffff] font-bold border-r-4 border-[#006565] translate-x-1 rounded-r-none rounded-l-xl bg-[#f0f4f3]/50' : 'text-[#404949] dark:text-[#bfc8c8] hover:bg-[#f0f4f3] dark:hover:bg-[#2a3131] hover:translate-x-1' }}" href="{{ route('categories') }}">
            <span class="material-symbols-outlined" {!! request()->routeIs('categories') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>category</span>
            <span>Categorias</span>
        </a>
        
        <!-- Configurações -->
        <a class="flex items-center gap-3 px-4 py-3 transition-all duration-300 rounded-xl {{ request()->routeIs('settings') ? 'text-[#006565] dark:text-[#ffffff] font-bold border-r-4 border-[#006565] translate-x-1 rounded-r-none rounded-l-xl bg-[#f0f4f3]/50' : 'text-[#404949] dark:text-[#bfc8c8] hover:bg-[#f0f4f3] dark:hover:bg-[#2a3131] hover:translate-x-1' }}" href="{{ route('settings') }}">
            <span class="material-symbols-outlined" {!! request()->routeIs('settings') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>settings</span>
            <span>Configurações</span>
        </a>
    </nav>
    
    <div class="mt-auto border-t border-outline-variant/10 pt-6 px-4 space-y-4">
        <button class="w-full py-3 bg-gradient-to-br from-primary to-primary-container text-on-primary rounded-xl font-semibold shadow-[0px_12px_32px_rgba(0,101,101,0.2)] active:scale-95 transition-transform">
            Nova Transação
        </button>
        <div class="flex flex-col gap-2 pt-4">
            <button class="flex items-center gap-3 text-[#404949] dark:text-[#bfc8c8] hover:opacity-80" data-toggle-theme>
                <span class="material-symbols-outlined">light_mode</span>
                <span>Tema</span>
            </button>
            <button class="flex items-center gap-3 text-error hover:opacity-80">
                <span class="material-symbols-outlined">logout</span>
                <span>Sair</span>
            </button>
        </div>
    </div>
</aside>
