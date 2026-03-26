@extends('layouts.app')

@section('page_title', 'Painel - sisplanner')

@push('styles')
    @vite(['resources/css/dashboard.css'])
@endpush

@section('content')
<!-- Top Navbar embedded in content to match dashboard standard look -->
<header class="flex justify-between items-center mb-8">
    <div class="text-[#1e2323] dark:text-white font-medium text-lg hidden md:block">
        Olá, Alex
    </div>
    
    <div class="flex items-center gap-4 ml-auto">
        <!-- Search -->
        <div class="relative hidden sm:flex items-center">
            <span class="material-symbols-outlined absolute left-3 text-[#9ba4a4] text-[20px]">search</span>
            <input type="text" placeholder="Pesquisar dados..." class="bg-[#f0f4f3] dark:bg-[#202525] text-[#1e2323] dark:text-white rounded-full py-2 pl-10 pr-4 w-64 outline-none border border-transparent focus:border-[#006565]/30 text-sm placeholder:text-[#9ba4a4] transition-colors">
        </div>
        
        <!-- Icons -->
        <button class="w-10 h-10 rounded-full flex items-center justify-center text-[#9ba4a4] hover:bg-[#f0f4f3] dark:hover:bg-[#202525] transition-colors">
            <span class="material-symbols-outlined text-[20px]">dark_mode</span>
        </button>
        <button class="w-10 h-10 rounded-full flex items-center justify-center text-[#9ba4a4] hover:bg-[#f0f4f3] dark:hover:bg-[#202525] transition-colors relative">
            <span class="material-symbols-outlined text-[20px]">notifications</span>
            <span class="absolute top-2 right-2.5 w-2 h-2 bg-[#ba1a1a] rounded-full border border-white dark:border-[#1e2323]"></span>
        </button>
        <button class="w-10 h-10 rounded-full flex items-center justify-center text-[#9ba4a4] hover:bg-[#f0f4f3] dark:hover:bg-[#202525] transition-colors">
            <span class="material-symbols-outlined text-[20px]">help</span>
        </button>
        
        <!-- User Avatar -->
        <img src="https://i.pravatar.cc/150?u=alex" alt="Alex Avatar" class="w-10 h-10 rounded-full border-2 border-white dark:border-[#1e2323] shadow-sm ml-2 cursor-pointer hover:border-[#006565] transition-colors object-cover bg-[#f0f4f3]">
    </div>
</header>

<!-- Dashboard Title Section -->
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-8 gap-4">
    <div>
        <h1 class="text-3xl font-bold tracking-tight text-[#1e2323] dark:text-[#ffffff] mb-1">Olá, Alex</h1>
        <p class="text-[14px] text-[#6f7979] dark:text-[#9ba4a4] font-medium">Aqui está seu status financeiro de Outubro 2023.</p>
    </div>
    <button class="bg-[#006565] hover:bg-[#004d4d] text-white font-bold py-3 px-6 rounded-xl flex items-center gap-2 transition-transform active:scale-[0.98] shadow-lg shadow-[#006565]/20">
        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add</span>
        Nova Transação
    </button>
</div>

<!-- 4 Cards Metrics Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Card 1: Saldo -->
    <div class="bg-white dark:bg-[#202525] p-6 rounded-3xl shadow-[0_12px_24px_rgba(0,101,101,0.03)] border border-[#006565]/5 dark:border-white/5 flex flex-col justify-between">
        <div class="flex justify-between items-start mb-4">
            <span class="text-[11px] font-bold uppercase tracking-wider text-[#6f7979] dark:text-[#9ba4a4]">Saldo Total</span>
            <div class="w-8 h-8 rounded-lg bg-[#e6f2f2] dark:bg-[#006565]/20 text-[#006565] flex items-center justify-center">
                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">account_balance</span>
            </div>
        </div>
        <div>
            <div class="text-2xl font-black tracking-tight text-[#1e2323] dark:text-white mb-2">R$ 24.500,00</div>
            <div class="flex items-center text-[10px] font-bold text-[#006565] mb-4">
                <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>
                +2,4% desde o mês passado
            </div>
        </div>
        <div class="w-full bg-[#f0f4f3] dark:bg-[#141818] h-1.5 rounded-full overflow-hidden mt-auto">
            <div class="bg-[#006565] h-full rounded-full" style="width: 70%"></div>
        </div>
    </div>

    <!-- Card 2: Receita -->
    <div class="bg-white dark:bg-[#202525] p-6 rounded-3xl shadow-[0_12px_24px_rgba(0,101,101,0.03)] border border-[#006565]/5 dark:border-white/5 flex flex-col justify-between">
        <div class="flex justify-between items-start mb-4">
            <span class="text-[11px] font-bold uppercase tracking-wider text-[#6f7979] dark:text-[#9ba4a4]">Receita Mensal</span>
            <div class="w-8 h-8 rounded-lg bg-[#e8eaf6] dark:bg-[#3b5998]/20 text-[#3b5998] flex items-center justify-center">
                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">payments</span>
            </div>
        </div>
        <div>
            <div class="text-2xl font-black tracking-tight text-[#1e2323] dark:text-white mb-2">R$ 5.200,00</div>
            <div class="flex items-center text-[10px] font-bold text-[#006565] mb-4">
                <span class="material-symbols-outlined text-[14px] mr-1">arrow_upward</span>
                Saúde financeira completa
            </div>
        </div>
        <div class="flex items-end justify-between h-8 mt-auto px-1 gap-2">
            <div class="w-1 bg-[#006565]/30 rounded-t-sm h-[30%]"></div>
            <div class="w-1 bg-[#006565]/50 rounded-t-sm h-[50%]"></div>
            <div class="w-1 bg-[#006565]/40 rounded-t-sm h-[40%]"></div>
            <div class="w-1 bg-[#006565]/70 rounded-t-sm h-[60%]"></div>
            <div class="w-1 bg-[#006565]/60 rounded-t-sm h-[50%]"></div>
            <div class="w-1 bg-[#006565] rounded-t-sm h-[90%]"></div>
        </div>
    </div>

    <!-- Card 3: Despesas -->
    <div class="bg-white dark:bg-[#202525] p-6 rounded-3xl shadow-[0_12px_24px_rgba(0,101,101,0.03)] border border-[#ba1a1a]/5 dark:border-[#ba1a1a]/10 flex flex-col justify-between">
        <div class="flex justify-between items-start mb-4">
            <span class="text-[11px] font-bold uppercase tracking-wider text-[#6f7979] dark:text-[#9ba4a4]">Despesas Mensais</span>
            <div class="w-8 h-8 rounded-lg bg-[#ffebee] dark:bg-[#ba1a1a]/20 text-[#ba1a1a] flex items-center justify-center">
                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">shopping_bag</span>
            </div>
        </div>
        <div>
            <div class="text-2xl font-black tracking-tight text-[#1e2323] dark:text-white mb-2">R$ 3.150,00</div>
            <div class="flex items-center text-[10px] font-bold text-[#ba1a1a] mb-4">
                <span class="material-symbols-outlined text-[14px] mr-1">warning</span>
                12% acima da meta
            </div>
        </div>
        <div class="flex items-end justify-between h-8 mt-auto px-1 gap-2">
            <div class="w-1 bg-[#ba1a1a]/40 rounded-t-sm h-[70%]"></div>
            <div class="w-1 bg-[#ba1a1a]/30 rounded-t-sm h-[40%]"></div>
            <div class="w-1 bg-[#ba1a1a]/50 rounded-t-sm h-[60%]"></div>
            <div class="w-1 bg-[#ba1a1a]/40 rounded-t-sm h-[50%]"></div>
            <div class="w-1 bg-[#ba1a1a]/60 rounded-t-sm h-[30%]"></div>
            <div class="w-1 bg-[#ba1a1a] rounded-t-sm h-[40%]"></div>
        </div>
    </div>

    <!-- Card 4: Restante -->
    <div class="bg-white dark:bg-[#202525] p-6 rounded-3xl shadow-[0_12px_24px_rgba(0,101,101,0.03)] border border-[#a0522d]/5 dark:border-[#a0522d]/10 flex flex-col justify-between">
        <div class="flex justify-between items-start mb-4">
            <span class="text-[11px] font-bold uppercase tracking-wider text-[#6f7979] dark:text-[#9ba4a4]">Restante</span>
            <div class="w-8 h-8 rounded-lg bg-[#fff3e0] dark:bg-[#a0522d]/20 text-[#a0522d] flex items-center justify-center">
                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">pie_chart</span>
            </div>
        </div>
        <div>
            <div class="text-2xl font-black tracking-tight text-[#1e2323] dark:text-white mb-2">R$ 1.050,00</div>
            <div class="flex items-center text-[10px] font-bold text-[#6f7979] dark:text-[#9ba4a4] mb-4">
                <span class="material-symbols-outlined text-[14px] mr-1">schedule</span>
                11 dias restantes
            </div>
        </div>
        <div class="w-full bg-[#f0f4f3] dark:bg-[#141818] h-1.5 rounded-full overflow-hidden mt-auto">
            <div class="bg-[#006565] h-full rounded-full" style="width: 80%"></div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <!-- Bar Chart -->
    <div class="lg:col-span-2 bg-white dark:bg-[#202525] p-8 rounded-3xl shadow-[0_12px_24px_rgba(0,101,101,0.03)] border justify-between flex flex-col border-[#006565]/5 dark:border-white/5">
        <div class="flex justify-between items-center mb-10">
            <h3 class="text-lg font-bold tracking-tight text-[#1e2323] dark:text-white">Receitas vs. Despesas</h3>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2"><div class="w-2.5 h-2.5 rounded-full bg-[#006565]"></div><span class="text-[10px] font-bold text-[#6f7979] uppercase">Receitas</span></div>
                <div class="flex items-center gap-2"><div class="w-2.5 h-2.5 rounded-full bg-[#3b5998]"></div><span class="text-[10px] font-bold text-[#6f7979] uppercase">Despesas</span></div>
            </div>
        </div>
        
        <!-- Render Bar Chart logic using dashboard.css class -->
        <div class="bar-chart px-4">
            <div class="flex flex-col h-full"><div class="bar-group"><div class="bar bar-receita" style="height: 60%"></div><div class="bar bar-despesa" style="height: 40%"></div></div><div class="bar-label">MAIO</div></div>
            <div class="flex flex-col h-full"><div class="bar-group"><div class="bar bar-receita" style="height: 85%"></div><div class="bar bar-despesa" style="height: 45%"></div></div><div class="bar-label">JUNHO</div></div>
            <div class="flex flex-col h-full"><div class="bar-group"><div class="bar bar-receita" style="height: 70%"></div><div class="bar bar-despesa" style="height: 55%"></div></div><div class="bar-label">JULHO</div></div>
            <div class="flex flex-col h-full"><div class="bar-group"><div class="bar bar-receita" style="height: 55%"></div><div class="bar bar-despesa" style="height: 50%"></div></div><div class="bar-label">AGO</div></div>
            <div class="flex flex-col h-full"><div class="bar-group"><div class="bar bar-receita" style="height: 95%"></div><div class="bar bar-despesa" style="height: 48%"></div></div><div class="bar-label">SET</div></div>
            <div class="flex flex-col h-full"><div class="bar-group"><div class="bar bar-receita" style="height: 80%"></div><div class="bar bar-despesa" style="height: 52%"></div></div><div class="bar-label">OUT</div></div>
        </div>
    </div>

    <!-- Square/Donut Area Chart -->
    <div class="bg-white dark:bg-[#202525] p-8 rounded-3xl shadow-[0_12px_24px_rgba(0,101,101,0.03)] border justify-between flex flex-col border-[#006565]/5 dark:border-white/5">
        <h3 class="text-lg font-bold tracking-tight text-[#1e2323] dark:text-white mb-8">Despesas por Categoria</h3>
        
        <div class="square-chart-container mb-8">
            <div class="square-layer square-bg"></div>
            <div class="square-overlay"></div>
            <div class="square-overlay-3"></div>
            <div class="square-layer square-fg dark:bg-[#181c1c]">
                <span class="text-[10px] font-bold text-[#9ba4a4] tracking-widest uppercase mb-1">Total</span>
                <span class="text-xl font-black text-[#1e2323] dark:text-white tabular-nums">R$ 3.150</span>
            </div>
        </div>

        <div class="space-y-4">
            <div class="flex justify-between items-center text-xs font-bold w-full">
                <div class="flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-[#006565]"></div><span class="text-[#6f7979] dark:text-[#bfc8c8]">Moradia</span></div>
                <span class="text-[#1e2323] dark:text-white">40%</span>
            </div>
            <div class="flex justify-between items-center text-xs font-bold w-full">
                <div class="flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-[#3b5998]"></div><span class="text-[#6f7979] dark:text-[#bfc8c8]">Alimentação</span></div>
                <span class="text-[#1e2323] dark:text-white">25%</span>
            </div>
            <div class="flex justify-between items-center text-xs font-bold w-full">
                <div class="flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-[#a0522d]"></div><span class="text-[#6f7979] dark:text-[#bfc8c8]">Transporte</span></div>
                <span class="text-[#1e2323] dark:text-white">20%</span>
            </div>
        </div>
    </div>
</div>

<!-- List area / Próximos Pagamentos -->
<div class="bg-white dark:bg-[#202525] p-8 rounded-3xl shadow-[0_12px_24px_rgba(0,101,101,0.03)] border border-[#006565]/5 dark:border-white/5 overflow-hidden">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
        <div>
            <h3 class="text-xl font-bold tracking-tight text-[#1e2323] dark:text-white mb-1">Próximos Pagamentos</h3>
            <p class="text-xs font-medium text-[#6f7979] dark:text-[#9ba4a4]">Monitorando suas dívidas e compromissos pendentes</p>
        </div>
        <a href="#" class="text-sm font-bold text-[#006565] dark:text-[#63d9d9] hover:underline">Ver Cronograma Completo</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full min-w-[600px] text-left">
            <thead>
                <tr class="border-b border-[#f0f4f3] dark:border-[#2a3131]">
                    <th class="pb-4 text-[10px] font-black uppercase tracking-[0.15em] text-[#9ba4a4]">Descrição</th>
                    <th class="pb-4 text-[10px] font-black uppercase tracking-[0.15em] text-[#9ba4a4]">Categoria</th>
                    <th class="pb-4 text-[10px] font-black uppercase tracking-[0.15em] text-[#9ba4a4]">Vencimento</th>
                    <th class="pb-4 text-[10px] font-black uppercase tracking-[0.15em] text-[#9ba4a4]">Valor</th>
                    <th class="pb-4 text-[10px] font-black uppercase tracking-[0.15em] text-[#9ba4a4] text-right">Ação</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr class="border-b border-[#f0f4f3] dark:border-[#2a3131] hover:bg-[#f8fbfb] dark:hover:bg-[#242a2a] transition-colors group">
                    <td class="py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-[#e6ecec] dark:bg-[#181c1c] text-[#404949] dark:text-[#bfc8c8] flex items-center justify-center">
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
                            </div>
                            <span class="font-bold text-sm text-[#1e2323] dark:text-white">Parcela da Hipoteca</span>
                        </div>
                    </td>
                    <td class="py-5">
                        <span class="bg-[#e6ecec] dark:bg-[#181c1c] text-[#404949] dark:text-[#bfc8c8] text-[9px] font-bold uppercase tracking-widest px-3 py-1.5 rounded-md">Moradia</span>
                    </td>
                    <td class="py-5 text-sm font-medium text-[#6f7979] dark:text-[#9ba4a4]">28 Out, 2023</td>
                    <td class="py-5 text-sm font-black tabular-nums text-[#1e2323] dark:text-white">R$ 1.850,00</td>
                    <td class="py-5 text-right">
                        <button class="text-xs font-bold text-[#006565] dark:text-[#63d9d9] border-2 border-[#e6ecec] dark:border-[#2a3131] hover:border-[#006565] rounded-lg px-4 py-2 transition-colors">Marcar como Pago</button>
                    </td>
                </tr>
                <!-- Row 2 -->
                <tr class="border-b border-[#f0f4f3] dark:border-[#2a3131] bg-[#ba1a1a]/5 hover:bg-[#ba1a1a]/10 dark:bg-[#ba1a1a]/10 dark:hover:bg-[#ba1a1a]/20 transition-colors group">
                    <td class="py-5 pl-2 rounded-l-xl">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-[#ffdad6] dark:bg-[#410002] text-[#ba1a1a] flex items-center justify-center shadow-[0_4px_12px_rgba(186,26,26,0.15)]">
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">bolt</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-bold text-sm text-[#1e2323] dark:text-white">Conta de Luz</span>
                                <span class="text-[9px] text-[#ba1a1a] font-bold tracking-widest uppercase">Atrasado</span>
                            </div>
                        </div>
                    </td>
                    <td class="py-5">
                        <span class="bg-[#e6ecec] dark:bg-[#181c1c] text-[#404949] dark:text-[#bfc8c8] text-[9px] font-bold uppercase tracking-widest px-3 py-1.5 rounded-md">Utilidades</span>
                    </td>
                    <td class="py-5 text-sm font-bold text-[#ba1a1a]">20 Out, 2023</td>
                    <td class="py-5 text-sm font-black tabular-nums text-[#ba1a1a]">R$ 142,50</td>
                    <td class="py-5 text-right pr-2 rounded-r-xl">
                        <button class="text-xs font-bold text-white bg-[#006565] hover:bg-[#004d4d] rounded-lg px-4 py-2 flex items-center justify-end gap-1 ml-auto transition-colors shadow-md shadow-[#006565]/30">Pagar Agora</button>
                    </td>
                </tr>
                <!-- Row 3 -->
                <tr class="hover:bg-[#f8fbfb] dark:hover:bg-[#242a2a] transition-colors group">
                    <td class="py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-[#e6ecec] dark:bg-[#181c1c] text-[#404949] dark:text-[#bfc8c8] flex items-center justify-center">
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">credit_card</span>
                            </div>
                            <span class="font-bold text-sm text-[#1e2323] dark:text-white">Cartão de Crédito Platinum</span>
                        </div>
                    </td>
                    <td class="py-5">
                        <span class="bg-[#e6ecec] dark:bg-[#181c1c] text-[#404949] dark:text-[#bfc8c8] text-[9px] font-bold uppercase tracking-widest px-3 py-1.5 rounded-md">Dívida</span>
                    </td>
                    <td class="py-5 text-sm font-medium text-[#6f7979] dark:text-[#9ba4a4]">02 Nov, 2023</td>
                    <td class="py-5 text-sm font-black tabular-nums text-[#1e2323] dark:text-white">R$ 450,00</td>
                    <td class="py-5 text-right">
                        <button class="text-xs font-bold text-[#006565] dark:text-[#63d9d9] border-2 border-[#e6ecec] dark:border-[#2a3131] hover:border-[#006565] rounded-lg px-4 py-2 transition-colors">Marcar como Pago</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
    @vite(['resources/js/dashboard.js'])
@endpush
@endsection
