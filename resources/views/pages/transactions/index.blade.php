@extends('layouts.app')

@section('page_title', 'Transações - sisplanner')

@section('content')
<!-- Header Section -->
<header class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
    <div class="space-y-1">
        <h2 class="text-3xl font-headline font-bold tracking-tight text-on-surface">Transações</h2>
        <p class="text-on-surface-variant font-medium">Visualize e gerencie seu histórico de transações.</p>
    </div>
    <div class="flex items-center gap-4">
        <button class="px-6 py-3 bg-surface-container-high text-on-surface-variant font-semibold rounded-xl hover:bg-surface-variant transition-colors flex items-center gap-2">
            <span class="material-symbols-outlined">calendar_month</span>
            Filtrar por Data
        </button>
        <button class="px-6 py-3 bg-gradient-to-br from-primary to-primary-container text-on-primary font-semibold rounded-xl shadow-lg shadow-primary/10 flex items-center gap-2 active:scale-95 transition-all">
            <span class="material-symbols-outlined">add_circle</span>
            Nova Transação
        </button>
    </div>
</header>

<!-- Transactions List Placeholder -->
<div class="bg-surface-container-lowest rounded-full p-8 shadow-[0px_12px_32px_rgba(0,51,102,0.04)]">
    <p class="text-on-surface-variant text-center py-12">Transações aparecerão aqui quando adicionadas.</p>
</div>
@endsection
