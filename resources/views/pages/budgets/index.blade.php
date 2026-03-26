@extends('layouts.app')

@section('page_title', 'Orçamentos - sisplanner')

@section('content')
<!-- Header Section -->
<header class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
    <div class="space-y-1">
        <h2 class="text-3xl font-headline font-bold tracking-tight text-on-surface">Orçamentos</h2>
        <p class="text-on-surface-variant font-medium">Acompanhe seus limites de gastos e mantenha sua saúde financeira sob controle.</p>
    </div>
    <div class="flex items-center gap-4">
        <button class="px-6 py-3 bg-gradient-to-br from-primary to-primary-container text-on-primary font-semibold rounded-xl shadow-lg shadow-primary/10 flex items-center gap-2 active:scale-95 transition-all">
            <span class="material-symbols-outlined">add_circle</span>
            Criar Orçamento
        </button>
    </div>
</header>

<!-- Budgets Overview -->
<div class="bg-surface-container-lowest p-8 rounded-full shadow-[0px_12px_32px_rgba(0,51,102,0.04)]">
    <div class="text-center py-12">
        <h3 class="text-lg font-bold text-on-surface mb-2">Nenhum Orçamento Cadastrado</h3>
        <p class="text-on-surface-variant">Crie seu primeiro orçamento para começar a monitorar seus gastos.</p>
    </div>
</div>
@endsection
