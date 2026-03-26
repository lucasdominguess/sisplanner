@extends('layouts.app')

@section('page_title', 'Configurações - sisplanner')

@section('content')
<!-- Header Section -->
<header class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
    <div class="space-y-1">
        <h2 class="text-3xl font-headline font-bold tracking-tight text-on-surface">Configurações</h2>
        <p class="text-on-surface-variant font-medium">Gerencie seu perfil, preferências de exibição e segurança da conta.</p>
    </div>
</header>

<!-- Settings Container -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Profile Section -->
    <div class="md:col-span-2 bg-surface-container-lowest p-8 rounded-full shadow-[0px_12px_32px_rgba(0,51,102,0.04)]">
        <div class="flex items-center gap-4 mb-6">
            <span class="material-symbols-outlined text-primary text-3xl">person</span>
            <h3 class="text-xl font-bold text-on-surface">Perfil</h3>
        </div>
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-semibold text-on-surface-variant mb-2">Nome Completo</label>
                <input type="text" class="w-full px-4 py-2 bg-surface-container-low rounded-lg border border-outline-variant/30 focus:outline-none focus:border-primary">
            </div>
            <div>
                <label class="block text-sm font-semibold text-on-surface-variant mb-2">Email</label>
                <input type="email" class="w-full px-4 py-2 bg-surface-container-low rounded-lg border border-outline-variant/30 focus:outline-none focus:border-primary">
            </div>
            <button type="submit" class="mt-6 w-full py-3 bg-gradient-to-br from-primary to-primary-container text-on-primary rounded-xl font-semibold shadow-lg shadow-primary/10 active:scale-95 transition-all">
                Salvar Alterações
            </button>
        </form>
    </div>

    <!-- Security Section -->
    <div class="bg-surface-container-lowest p-8 rounded-full shadow-[0px_12px_32px_rgba(0,51,102,0.04)]">
        <div class="flex items-center gap-4 mb-6">
            <span class="material-symbols-outlined text-primary text-3xl">lock</span>
            <h3 class="text-xl font-bold text-on-surface">Segurança</h3>
        </div>
        <button class="w-full py-2 px-4 bg-surface-container-high text-on-surface font-semibold rounded-lg hover:bg-surface-variant transition-colors mb-3">
            Alterar Senha
        </button>
        <button class="w-full py-2 px-4 bg-error/10 text-error font-semibold rounded-lg hover:bg-error/20 transition-colors">
            Ativar 2FA
        </button>
    </div>
</div>
@endsection
