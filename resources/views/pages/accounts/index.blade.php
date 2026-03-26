@extends('layouts.app')

@section('page_title', 'Contas e Cartões - sisplanner')

@section('content')
<!-- Header Section -->
<header class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
    <div class="space-y-1">
        <h2 class="text-3xl font-headline font-bold tracking-tight text-on-surface">Contas e Cartões</h2>
        <p class="text-on-surface-variant font-medium">Gerencie suas contas bancárias e cartões de crédito.</p>
    </div>
    <div class="flex items-center gap-4">
        <button class="px-6 py-3 bg-gradient-to-br from-primary to-primary-container text-on-primary font-semibold rounded-xl shadow-lg shadow-primary/10 flex items-center gap-2 active:scale-95 transition-all">
            <span class="material-symbols-outlined">add_circle</span>
            Adicionar Conta
        </button>
    </div>
</header>

<!-- Accounts Overview -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-surface-container-lowest p-8 rounded-full shadow-[0px_12px_32px_rgba(0,51,102,0.04)]">
        <h3 class="text-lg font-bold text-on-surface mb-4">Contas Bancárias</h3>
        <p class="text-on-surface-variant">Nenhuma conta cadastrada ainda.</p>
    </div>
    <div class="bg-surface-container-lowest p-8 rounded-full shadow-[0px_12px_32px_rgba(0,51,102,0.04)]">
        <h3 class="text-lg font-bold text-on-surface mb-4">Cartões de Crédito</h3>
        <p class="text-on-surface-variant">Nenhum cartão cadastrado ainda.</p>
    </div>
</div>
@endsection
