@extends('_template.default')

@section('title', @$title)
@section('content')

	<!-- Dashboard Content -->
	<div class="flex-1 p-6 overflow-y-auto">
		<div class="grid grid-cols-12 gap-6">
			<!-- Left Column: Data Table and Filters -->
			<div class="col-span-12 space-y-6">
			
				<!-- Filter Bar -->
				<div class="bg-white p-4 rounded-xl shadow-sm border border-slate-100 flex flex-wrap items-center gap-4">
					<div class="flex items-center gap-2 text-slate-500 text-sm font-label-bold">
						<span class="material-symbols-outlined text-base" data-icon="filter_list">filter_list</span>
						FILTRAR POR:
					</div>
					<select class="bg-slate-50 border-2 border-slate-100 rounded-lg px-3 py-1.5 text-xs font-semibold focus:border-primary focus:ring-0">
						<option>Todos os Status</option>
						<option>Ativo</option>
						<option>Bloqueado</option>
					</select>
					<select class="bg-slate-50 border-2 border-slate-100 rounded-lg px-3 py-1.5 text-xs font-semibold focus:border-primary focus:ring-0">
						<option>Todas as Contas</option>
						<option>Com Débito</option>
						<option>Sem Débito</option>
					</select>
					<div class="ml-auto flex items-center gap-2">
						<button class="p-2 text-primary bg-primary-fixed rounded flex">
							<span class="material-symbols-outlined" data-icon="add">add</span>
							Add Cliente
						</button>
					</div>
				</div>

				<!-- Data Table -->
				<div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
					<table class="w-full text-left border-collapse">
						<thead class="bg-slate-50 text-slate-500 font-label-bold text-[12px] uppercase tracking-wider">
							<tr>
								<th class="px-6 py-4 border-b border-slate-100">Nome do Cliente</th>
								<th class="px-6 py-4 border-b border-slate-100">Documento</th>
								<th class="px-6 py-4 border-b border-slate-100">Telefone</th>
								<th class="px-6 py-4 border-b border-slate-100">Saldo Caderneta</th>
								<th class="px-6 py-4 border-b border-slate-100">Status</th>
								<th class="px-6 py-4 border-b border-slate-100 text-right">Ações</th>
							</tr>
						</thead>
						<tbody class="divide-y divide-slate-100">
							<tr class="hover:bg-slate-50 transition-colors group">
								<td class="px-6 py-4">
								<div class="flex items-center gap-3">
								<div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-900 font-bold">RF</div>
								<div class="font-semibold text-primary">Ricardo Ferreira</div>
								</div>
								</td>
								<td class="px-6 py-4 text-slate-600 text-sm">123.456.789-00</td>
								<td class="px-6 py-4 text-slate-600 text-sm">(11) 98877-6655</td>
								<td class="px-6 py-4">
								<span class="text-error font-bold text-sm">R$ 1.450,00</span>
								</td>
								<td class="px-6 py-4">
								<span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[11px] font-bold uppercase">Ativo</span>
								</td>
								<td class="px-6 py-4 text-right">
								<div class="flex items-center justify-end gap-2">
								<button class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 rounded-lg transition-all" title="Ver Detalhes"><span class="material-symbols-outlined" data-icon="visibility">visibility</span></button>
								<button class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 rounded-lg transition-all" title="Editar"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
								<button class="p-2 text-orange-600 hover:bg-orange-50 rounded-lg transition-all" title="Gerenciar Crédito"><span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span></button>
								</div>
								</td>
							</tr>
							<tr class="hover:bg-slate-50 transition-colors group">
								<td class="px-6 py-4">
								<div class="flex items-center gap-3">
								<div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-orange-900 font-bold">MA</div>
								<div class="font-semibold text-primary">Maria Oliveira Alcantara</div>
								</div>
								</td>
								<td class="px-6 py-4 text-slate-600 text-sm">456.789.012-11</td>
								<td class="px-6 py-4 text-slate-600 text-sm">(11) 97766-5544</td>
								<td class="px-6 py-4">
								<span class="text-slate-500 font-medium text-sm">R$ 0,00</span>
								</td>
								<td class="px-6 py-4">
								<span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[11px] font-bold uppercase">Ativo</span>
								</td>
								<td class="px-6 py-4 text-right">
								<div class="flex items-center justify-end gap-2">
								<button class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="visibility">visibility</span></button>
								<button class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
								<button class="p-2 text-orange-600 hover:bg-orange-50 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span></button>
								</div>
								</td>
							</tr>
							<tr class="hover:bg-slate-50 transition-colors group">
								<td class="px-6 py-4">
								<div class="flex items-center gap-3">
								<div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 font-bold">JS</div>
								<div class="font-semibold text-primary">João Santos Lima</div>
								</div>
								</td>
								<td class="px-6 py-4 text-slate-600 text-sm">789.012.345-22</td>
								<td class="px-6 py-4 text-slate-600 text-sm">(11) 96655-4433</td>
								<td class="px-6 py-4">
								<span class="text-orange-600 font-bold text-sm">R$ 342,50</span>
								</td>
								<td class="px-6 py-4">
								<span class="px-3 py-1 bg-slate-200 text-slate-600 rounded-full text-[11px] font-bold uppercase">Bloqueado</span>
								</td>
								<td class="px-6 py-4 text-right">
								<div class="flex items-center justify-end gap-2">
								<button class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="visibility">visibility</span></button>
								<button class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
								<button class="p-2 text-orange-600 hover:bg-orange-50 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span></button>
								</div>
								</td>
							</tr>
							<tr class="hover:bg-slate-50 transition-colors group">
								<td class="px-6 py-4">
								<div class="flex items-center gap-3">
								<div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-900 font-bold">AC</div>
								<div class="font-semibold text-primary">Ana Carolina Souza</div>
								</div>
								</td>
								<td class="px-6 py-4 text-slate-600 text-sm">012.345.678-33</td>
								<td class="px-6 py-4 text-slate-600 text-sm">(11) 95544-3322</td>
								<td class="px-6 py-4">
								<span class="text-error font-bold text-sm">R$ 2.100,00</span>
								</td>
								<td class="px-6 py-4">
								<span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[11px] font-bold uppercase">Ativo</span>
								</td>
								<td class="px-6 py-4 text-right">
								<div class="flex items-center justify-end gap-2">
								<button class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="visibility">visibility</span></button>
								<button class="p-2 text-slate-400 hover:text-primary hover:bg-slate-100 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
								<button class="p-2 text-orange-600 hover:bg-orange-50 rounded-lg transition-all"><span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span></button>
								</div>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="px-6 py-4 bg-slate-50 flex items-center justify-between">
						<span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Mostrando 1-4 de 1.254 clientes</span>
						<div class="flex items-center gap-1">
							<button class="p-1 hover:bg-white rounded transition-colors"><span class="material-symbols-outlined text-sm" data-icon="chevron_left">chevron_left</span></button>
							<button class="px-3 py-1 bg-primary text-white rounded text-xs font-bold">1</button>
							<button class="px-3 py-1 hover:bg-white rounded text-xs font-bold">2</button>
							<button class="px-3 py-1 hover:bg-white rounded text-xs font-bold">3</button>
							<button class="p-1 hover:bg-white rounded transition-colors"><span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection