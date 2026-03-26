@extends('layouts.app')

@section('page_title', 'Categorias - sisplanner')

@section('content')
<!-- Header Section -->
<header class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
    <div class="space-y-1">
        <h2 class="text-4xl font-headline font-bold tracking-tight text-on-surface">Categorias</h2>
        <p class="text-on-surface-variant font-medium">Organize sua vida financeira com precisão.</p>
    </div>
    <div class="flex items-center gap-4">
        <button class="px-6 py-3 bg-surface-container-high text-on-surface-variant font-semibold rounded-xl hover:bg-surface-variant transition-colors flex items-center gap-2">
            <span class="material-symbols-outlined">settings_suggest</span>
            Gerenciar Categorias
        </button>
        <button class="px-6 py-3 bg-gradient-to-br from-primary to-primary-container text-on-primary font-semibold rounded-xl shadow-lg shadow-primary/10 flex items-center gap-2 active:scale-95 transition-all">
            <span class="material-symbols-outlined">add_circle</span>
            Adicionar Categoria
        </button>
    </div>
</header>

<!-- Bento Grid Layout -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-6">
    <!-- Summary Chart Card -->
    <div class="md:col-span-4 bg-surface-container-low rounded-full p-8 flex flex-col items-center justify-center text-center">
        <div class="relative w-48 h-48 mb-6">
            <!-- Simple SVG Donut Placeholder -->
            <svg class="w-full h-full transform -rotate-90" viewbox="0 0 36 36">
                <path class="text-surface-variant" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="100, 100" stroke-width="3"></path>
                <path class="text-primary" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="45, 100" stroke-width="3"></path>
                <path class="text-secondary" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="30, 100" stroke-dashoffset="-45" stroke-width="3"></path>
                <path class="text-tertiary" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="15, 100" stroke-dashoffset="-75" stroke-width="3"></path>
            </svg>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <span class="text-xs uppercase tracking-widest opacity-60">Total</span>
                <span class="text-xl font-bold tabular-nums text-primary">R$ 2.450</span>
            </div>
        </div>
        <h3 class="text-lg font-bold mb-2">Distribuição Mensal</h3>
        <p class="text-sm text-on-surface-variant px-4">Alimentação representa a maior parte dos seus gastos este mês.</p>
    </div>

    <!-- Categories Grid -->
    <div class="md:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <!-- Category Card: Grocery -->
        <div class="group bg-surface-container-lowest p-6 rounded-full shadow-[0px_12px_32px_rgba(0,51,102,0.04)] hover:shadow-[0px_12px_32px_rgba(0,101,101,0.08)] transition-all flex items-center justify-between border border-transparent hover:border-primary/10">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-primary/10 text-primary rounded-full flex items-center justify-center">
                    <span class="material-symbols-outlined">shopping_cart</span>
                </div>
                <div>
                    <h4 class="font-bold text-on-surface">Alimentação</h4>
                    <span class="text-xs text-on-surface-variant font-medium">Mercado e feira</span>
                </div>
            </div>
            <div class="text-right">
                <div class="text-lg font-bold tabular-nums text-on-surface">R$ 850,00</div>
                <button class="text-[10px] uppercase font-bold tracking-widest text-primary opacity-0 group-hover:opacity-100 transition-opacity">Editar</button>
            </div>
        </div>

        <!-- Category Card: Car -->
        <div class="group bg-surface-container-lowest p-6 rounded-full shadow-[0px_12px_32px_rgba(0,51,102,0.04)] hover:shadow-[0px_12px_32px_rgba(0,101,101,0.08)] transition-all flex items-center justify-between border border-transparent hover:border-primary/10">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-secondary/10 text-secondary rounded-full flex items-center justify-center">
                    <span class="material-symbols-outlined">directions_car</span>
                </div>
                <div>
                    <h4 class="font-bold text-on-surface">Transporte</h4>
                    <span class="text-xs text-on-surface-variant font-medium">Combustível e apps</span>
                </div>
            </div>
            <div class="text-right">
                <div class="text-lg font-bold tabular-nums text-on-surface">R$ 420,00</div>
                <button class="text-[10px] uppercase font-bold tracking-widest text-primary opacity-0 group-hover:opacity-100 transition-opacity">Editar</button>
            </div>
        </div>

        <!-- Category Card: Book -->
        <div class="group bg-surface-container-lowest p-6 rounded-full shadow-[0px_12px_32px_rgba(0,51,102,0.04)] hover:shadow-[0px_12px_32px_rgba(0,101,101,0.08)] transition-all flex items-center justify-between border border-transparent hover:border-primary/10">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-tertiary/10 text-tertiary rounded-full flex items-center justify-center">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <div>
                    <h4 class="font-bold text-on-surface">Educação</h4>
                    <span class="text-xs text-on-surface-variant font-medium">Cursos e livros</span>
                </div>
            </div>
            <div class="text-right">
                <div class="text-lg font-bold tabular-nums text-on-surface">R$ 1.180,00</div>
                <button class="text-[10px] uppercase font-bold tracking-widest text-primary opacity-0 group-hover:opacity-100 transition-opacity">Editar</button>
            </div>
        </div>

        <!-- New Category Quick Card -->
        <div class="bg-surface-container-low p-6 rounded-full border-2 border-dashed border-outline-variant/30 flex items-center justify-center hover:bg-surface-container transition-colors cursor-pointer group">
            <div class="flex items-center gap-3 text-on-surface-variant font-semibold">
                <span class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">add</span>
                Nova Categoria
            </div>
        </div>
    </div>
</div>

<!-- Management Section with Glassmorphism -->
<section class="mt-12 bg-white/40 backdrop-blur-2xl rounded-full p-8 flex flex-col md:flex-row items-center justify-between gap-8 border border-white/20">
    <div class="flex items-center gap-6">
        <div class="hidden sm:block">
            <img alt="Financial analysis visual" class="w-24 h-24 object-cover rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlj-FmI1N89Mf5bI-HFfpN0qg04WdsPzX96YEh2oE1Tb6EdIvlNFd4ulgfXMPS2iXG03W4pWFMkqXq8Wf1m4DG4TJSieqaC9RK3ITAUNE6Xn6fLkDe4VIRv2sghmJPgfydDh5ZbUjbjn0dDSDGSczdSpuMdMOdn_xOe9f7WxESx80_rbDimj3VxK2V2C-lVGVVB-5quy1aYToCgrxO5Xk6HhqweHjijH5GJJ5fOIzwCXO_Nz44TVVyv-Gw4pG6VZMQq9fNEGuTEOU">
        </div>
        <div>
            <h3 class="text-2xl font-bold text-on-surface">Gerencie seus fluxos</h3>
            <p class="text-on-surface-variant max-w-md">Personalize ícones e cores para cada categoria para uma visualização rápida e intuitiva dos seus gastos.</p>
        </div>
    </div>
    <div class="flex gap-4">
        <div class="flex flex-col items-center">
            <span class="text-3xl font-black text-primary tabular-nums">12</span>
            <span class="text-[10px] uppercase tracking-widest font-bold opacity-60">Ativas</span>
        </div>
        <div class="w-[1px] h-12 bg-outline-variant/30 self-center"></div>
        <div class="flex flex-col items-center">
            <span class="text-3xl font-black text-secondary tabular-nums">04</span>
            <span class="text-[10px] uppercase tracking-widest font-bold opacity-60">Arquivadas</span>
        </div>
    </div>
</section>
@endsection
