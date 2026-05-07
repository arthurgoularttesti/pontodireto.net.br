@extends('_template.default')

@section('title', @$title)
@section('content')

	

	<!-- Dashboard Canvas -->
	<div class="flex-1 overflow-y-auto p-6 custom-scrollbar bg-surface-bright">
		<div class="mx-auto space-y-6">
			<!-- Welcome Section -->
			<div class="flex items-end justify-between">
			<div>
			<h1 class="font-headline-lg text-on-surface">Painel de Controle</h1>
			<p class="text-on-surface-variant font-body-md">Visão geral da operação em tempo real.</p>
			</div>
			<div class="flex gap-3">
			<button class="flex items-center gap-2 px-4 py-2 border border-outline-variant bg-white text-on-surface rounded font-label-bold text-sm hover:bg-slate-50 transition-colors">
			<span class="material-symbols-outlined text-sm">calendar_today</span>
										Hoje: 24 Out 2023
									</button>
			<button class="flex items-center gap-2 px-4 py-2 bg-secondary-container text-on-secondary-container rounded font-label-bold text-sm hover:opacity-90 transition-all shadow-sm">
			<span class="material-symbols-outlined text-sm">download</span>
										Exportar Relatório
									</button>
			</div>
			</div>
			<!-- Bento Grid Summary Cards -->
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
			<!-- Vendas Hoje -->
			<div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm relative overflow-hidden">
			<div class="absolute top-0 right-0 p-4 opacity-10">
			<span class="material-symbols-outlined text-6xl text-orange-600">payments</span>
			</div>
			<p class="text-slate-500 font-label-bold uppercase text-[11px] tracking-widest mb-1">Vendas Hoje</p>
			<h2 class="font-numeral-xl text-on-surface">R$ 12.450,80</h2>
			<div class="mt-4 flex items-center gap-2 text-green-600">
			<span class="material-symbols-outlined text-sm">trending_up</span>
			<span class="text-xs font-bold">+12.5% em relação a ontem</span>
			</div>
			</div>
			<!-- Clientes Ativos -->
			<div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm relative overflow-hidden">
			<div class="absolute top-0 right-0 p-4 opacity-10">
			<span class="material-symbols-outlined text-6xl text-blue-900">group</span>
			</div>
			<p class="text-slate-500 font-label-bold uppercase text-[11px] tracking-widest mb-1">Clientes Ativos</p>
			<h2 class="font-numeral-xl text-on-surface">342</h2>
			<div class="mt-4 flex items-center gap-2 text-green-600">
			<span class="material-symbols-outlined text-sm">person_add</span>
			<span class="text-xs font-bold">18 novos hoje</span>
			</div>
			</div>
			<!-- Alertas de Estoque -->
			<div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm relative overflow-hidden">
			<div class="absolute top-0 right-0 p-4 opacity-10">
			<span class="material-symbols-outlined text-6xl text-error">warning</span>
			</div>
			<p class="text-slate-500 font-label-bold uppercase text-[11px] tracking-widest mb-1">Alertas Estoque</p>
			<h2 class="font-numeral-xl text-error">14 Itens</h2>
			<div class="mt-4 flex items-center gap-2 text-error">
			<span class="material-symbols-outlined text-sm">inventory</span>
			<span class="text-xs font-bold">Reposição urgente necessária</span>
			</div>
			</div>
			<!-- Ticket Médio -->
			<div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm relative overflow-hidden">
			<div class="absolute top-0 right-0 p-4 opacity-10">
			<span class="material-symbols-outlined text-6xl text-secondary">receipt_long</span>
			</div>
			<p class="text-slate-500 font-label-bold uppercase text-[11px] tracking-widest mb-1">Ticket Médio</p>
			<h2 class="font-numeral-xl text-on-surface">R$ 84,20</h2>
			<div class="mt-4 flex items-center gap-2 text-blue-600">
			<span class="material-symbols-outlined text-sm">info</span>
			<span class="text-xs font-bold">Estável este mês</span>
			</div>
			</div>
			</div>
			<!-- Main Analytics Section -->
			<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
			<!-- Sales Graph -->
			<div class="lg:col-span-2 bg-white p-8 rounded-xl border border-slate-200 shadow-sm">
			<div class="flex items-center justify-between mb-8">
			<div>
			<h3 class="font-headline-md text-on-surface">Desempenho Semanal</h3>
			<p class="text-slate-500 text-sm">Volume de vendas por período (R$)</p>
			</div>
			<div class="flex bg-slate-100 p-1 rounded-lg">
			<button class="px-3 py-1 text-xs font-bold rounded bg-white shadow-sm">SEMANA</button>
			<button class="px-3 py-1 text-xs font-bold text-slate-500">MÊS</button>
			</div>
			</div>
			<div class="h-64 flex items-end justify-between gap-4 px-2">
			<div class="flex-1 flex flex-col items-center gap-2 group">
			<div class="w-full bg-slate-100 rounded-t h-[40%] group-hover:bg-orange-600/20 transition-colors relative">
			<div class="absolute bottom-0 w-full bg-orange-600 h-[60%] rounded-t"></div>
			</div>
			<span class="text-[10px] font-bold text-slate-400">SEG</span>
			</div>
			<div class="flex-1 flex flex-col items-center gap-2 group">
			<div class="w-full bg-slate-100 rounded-t h-[65%] group-hover:bg-orange-600/20 transition-colors relative">
			<div class="absolute bottom-0 w-full bg-orange-600 h-[80%] rounded-t"></div>
			</div>
			<span class="text-[10px] font-bold text-slate-400">TER</span>
			</div>
			<div class="flex-1 flex flex-col items-center gap-2 group">
			<div class="w-full bg-slate-100 rounded-t h-[55%] group-hover:bg-orange-600/20 transition-colors relative">
			<div class="absolute bottom-0 w-full bg-orange-600 h-[45%] rounded-t"></div>
			</div>
			<span class="text-[10px] font-bold text-slate-400">QUA</span>
			</div>
			<div class="flex-1 flex flex-col items-center gap-2 group">
			<div class="w-full bg-slate-100 rounded-t h-[85%] group-hover:bg-orange-600/20 transition-colors relative">
			<div class="absolute bottom-0 w-full bg-orange-600 h-[95%] rounded-t"></div>
			</div>
			<span class="text-[10px] font-bold text-slate-400">QUI</span>
			</div>
			<div class="flex-1 flex flex-col items-center gap-2 group">
			<div class="w-full bg-slate-100 rounded-t h-[70%] group-hover:bg-orange-600/20 transition-colors relative">
			<div class="absolute bottom-0 w-full bg-orange-600 h-[70%] rounded-t"></div>
			</div>
			<span class="text-[10px] font-bold text-slate-400">SEX</span>
			</div>
			<div class="flex-1 flex flex-col items-center gap-2 group">
			<div class="w-full bg-slate-100 rounded-t h-[95%] group-hover:bg-orange-600/20 transition-colors relative">
			<div class="absolute bottom-0 w-full bg-orange-600 h-[100%] rounded-t"></div>
			</div>
			<span class="text-[10px] font-bold text-slate-400">SÁB</span>
			</div>
			<div class="flex-1 flex flex-col items-center gap-2 group">
			<div class="w-full bg-slate-100 rounded-t h-[30%] group-hover:bg-orange-600/20 transition-colors relative">
			<div class="absolute bottom-0 w-full bg-orange-600 h-[30%] rounded-t"></div>
			</div>
			<span class="text-[10px] font-bold text-slate-400">DOM</span>
			</div>
			</div>
			</div>
			<!-- Top Products -->
			<div class="bg-white rounded-xl border border-slate-200 shadow-sm flex flex-col">
			<div class="p-6 border-b border-slate-100">
			<h3 class="font-headline-md text-on-surface text-lg">Produtos Mais Vendidos</h3>
			<p class="text-slate-500 text-xs">Ranking de volume (Hoje)</p>
			</div>
			<div class="flex-1 p-2 space-y-1">
			<div class="flex items-center gap-4 p-3 hover:bg-slate-50 rounded-lg transition-colors cursor-pointer group">
			<div class="w-10 h-10 bg-slate-100 rounded flex items-center justify-center text-blue-900 group-hover:bg-white shadow-sm">
			<span class="material-symbols-outlined">fastfood</span>
			</div>
			<div class="flex-1">
			<p class="text-sm font-bold text-on-surface">X-Bacon Especial</p>
			<p class="text-[11px] text-slate-500">84 unidades vendidas</p>
			</div>
			<span class="text-xs font-bold text-orange-600">#1</span>
			</div>
			<div class="flex items-center gap-4 p-3 hover:bg-slate-50 rounded-lg transition-colors cursor-pointer group">
			<div class="w-10 h-10 bg-slate-100 rounded flex items-center justify-center text-blue-900 group-hover:bg-white shadow-sm">
			<span class="material-symbols-outlined">local_bar</span>
			</div>
			<div class="flex-1">
			<p class="text-sm font-bold text-on-surface">Cerveja Artesanal 500ml</p>
			<p class="text-[11px] text-slate-500">62 unidades vendidas</p>
			</div>
			<span class="text-xs font-bold text-orange-600">#2</span>
			</div>
			<div class="flex items-center gap-4 p-3 hover:bg-slate-50 rounded-lg transition-colors cursor-pointer group">
			<div class="w-10 h-10 bg-slate-100 rounded flex items-center justify-center text-blue-900 group-hover:bg-white shadow-sm">
			<span class="material-symbols-outlined">icecream</span>
			</div>
			<div class="flex-1">
			<p class="text-sm font-bold text-on-surface">Sobremesa Petit Gateau</p>
			<p class="text-[11px] text-slate-500">45 unidades vendidas</p>
			</div>
			<span class="text-xs font-bold text-orange-600">#3</span>
			</div>
			<div class="flex items-center gap-4 p-3 hover:bg-slate-50 rounded-lg transition-colors cursor-pointer group">
			<div class="w-10 h-10 bg-slate-100 rounded flex items-center justify-center text-blue-900 group-hover:bg-white shadow-sm">
			<span class="material-symbols-outlined">coffee</span>
			</div>
			<div class="flex-1">
			<p class="text-sm font-bold text-on-surface">Espresso Duplo</p>
			<p class="text-[11px] text-slate-500">38 unidades vendidas</p>
			</div>
			<span class="text-xs font-bold text-orange-600">#4</span>
			</div>
			</div>
			<div class="p-4 bg-slate-50 border-t border-slate-100 text-center">
			<button class="text-xs font-bold text-blue-900 hover:text-orange-600 transition-colors uppercase tracking-widest">Ver Todos os Produtos</button>
			</div>
			</div>
			</div>
			<!-- Recent Transactions Table -->
			<div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden mb-12">
			<div class="p-6 border-b border-slate-100 flex items-center justify-between">
			<h3 class="font-headline-md text-on-surface">Transações Recentes</h3>
			<button class="material-symbols-outlined text-slate-400 hover:text-blue-900 transition-colors">filter_list</button>
			</div>
			<div class="overflow-x-auto">
			<table class="w-full text-left">
			<thead class="bg-slate-50 text-slate-500 text-[11px] font-bold uppercase tracking-widest">
			<tr>
			<th class="px-6 py-4">ID Pedido</th>
			<th class="px-6 py-4">Cliente</th>
			<th class="px-6 py-4">Método</th>
			<th class="px-6 py-4">Status</th>
			<th class="px-6 py-4">Total</th>
			<th class="px-6 py-4 text-right">Ações</th>
			</tr>
			</thead>
			<tbody class="divide-y divide-slate-100 text-sm">
			<tr class="hover:bg-slate-50/80 transition-colors">
			<td class="px-6 py-4 font-mono font-bold text-blue-900">#ORD-9021</td>
			<td class="px-6 py-4">
			<div class="flex items-center gap-3">
			<div class="w-8 h-8 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center font-bold text-xs">JS</div>
			<span>João Silva</span>
			</div>
			</td>
			<td class="px-6 py-4">
			<div class="flex items-center gap-2">
			<span class="material-symbols-outlined text-sm">credit_card</span>
														Cartão de Crédito
													</div>
			</td>
			<td class="px-6 py-4">
			<span class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded-full uppercase tracking-tighter">Concluído</span>
			</td>
			<td class="px-6 py-4 font-bold">R$ 145,90</td>
			<td class="px-6 py-4 text-right">
			<button class="text-slate-400 hover:text-orange-600 transition-colors">
			<span class="material-symbols-outlined">visibility</span>
			</button>
			</td>
			</tr>
			<tr class="hover:bg-slate-50/80 transition-colors">
			<td class="px-6 py-4 font-mono font-bold text-blue-900">#ORD-9020</td>
			<td class="px-6 py-4">
			<div class="flex items-center gap-3">
			<div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs">MA</div>
			<span>Maria Oliveira</span>
			</div>
			</td>
			<td class="px-6 py-4">
			<div class="flex items-center gap-2">
			<span class="material-symbols-outlined text-sm">payments</span>
														Dinheiro
													</div>
			</td>
			<td class="px-6 py-4">
			<span class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded-full uppercase tracking-tighter">Concluído</span>
			</td>
			<td class="px-6 py-4 font-bold">R$ 52,00</td>
			<td class="px-6 py-4 text-right">
			<button class="text-slate-400 hover:text-orange-600 transition-colors">
			<span class="material-symbols-outlined">visibility</span>
			</button>
			</td>
			</tr>
			<tr class="hover:bg-slate-50/80 transition-colors">
			<td class="px-6 py-4 font-mono font-bold text-blue-900">#ORD-9019</td>
			<td class="px-6 py-4">
			<div class="flex items-center gap-3">
			<div class="w-8 h-8 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center font-bold text-xs">RC</div>
			<span>Ricardo Costa</span>
			</div>
			</td>
			<td class="px-6 py-4">
			<div class="flex items-center gap-2">
			<span class="material-symbols-outlined text-sm">qr_code_2</span>
														PIX
													</div>
			</td>
			<td class="px-6 py-4">
			<span class="px-3 py-1 bg-orange-100 text-orange-700 text-[10px] font-bold rounded-full uppercase tracking-tighter">Pendente</span>
			</td>
			<td class="px-6 py-4 font-bold">R$ 210,50</td>
			<td class="px-6 py-4 text-right">
			<button class="text-slate-400 hover:text-orange-600 transition-colors">
			<span class="material-symbols-outlined">visibility</span>
			</button>
			</td>
			</tr>
			</tbody>
			</table>
			</div>
			</div>
			</div>
			</div>
			<!-- Ad Promotion Modal (Small Pop-up) -->
			<div class="hidden md:flex fixed bottom-8 right-8 w-80 bg-blue-950 rounded-2xl overflow-hidden shadow-2xl border border-blue-900 group z-50">
			<div class="relative h-32 overflow-hidden">
			<img alt="Promotion" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida/ADBb0uhdzN--ABX20yEXdRExNirbYPl9b4G-3I_FFZ0nQ8vTO6_lY_dprYVfiayfcwrskobNEInvNLj-rbs3oxYlXYdnLb9BJueekQY3yD66j6AskGvNzv2BmAD6NDdTg7o4XMhx79w0Fov8R1t1lUA6QWXc82taP5ZfOIlVvSyqOp7L_DdnC9J_RmqTaJVjyUiDFKLNBWmLvSR1yIVkuXqPFIvJSYYSFPSrcAgzeDAiPie4dlan8wgjkVIlwnQ"/>
			<div class="absolute inset-0 bg-gradient-to-t from-blue-950 to-transparent"></div>
			</div>
			<div class="p-5">
			<h4 class="text-white font-bold text-sm mb-1 uppercase tracking-tight">Novos Módulos de IA</h4>
			<p class="text-blue-200 text-xs mb-4">Otimize seu estoque com previsões baseadas em inteligência artificial.</p>
			<button class="w-full py-2 bg-orange-600 hover:bg-orange-500 text-white font-bold text-[10px] uppercase tracking-widest rounded transition-colors">Conhecer agora</button>
		</div>
		<button class="absolute top-2 right-2 text-white/50 hover:text-white">
			<span class="material-symbols-outlined text-sm">close</span>
		</button>
	</div>

	<!-- Floating Action Button -->
	<!-- <button class="fixed bottom-8 right-8 w-16 h-16 bg-secondary-container text-white rounded-full shadow-2xl flex items-center justify-center hover:scale-105 active:scale-95 transition-transform z-50">
		<span class="material-symbols-outlined text-[32px]" data-icon="add_shopping_cart">add_shopping_cart</span>
	</button> -->

@endsection