# Especificação Funcional: Ponto Direto (Sistema PDV Local)

## 1. Visão Geral
Sistema de gestão de vendas, estoque e financeiro para pequenos varejistas com arquitetura Client-Server local.

## 2. Módulos Principais
- **PDV Fast:** Venda ágil, gestão de grade (bebidas), multi-pagamento e operação offline.
- **Estoque e Compras:** Controle de cascos/vasilhames, custo médio, alertas de reposição e entrada via XML.
- **Gestão Financeira:** Fechamento de caixa cego, contas a pagar/receber e fluxo de caixa.

## 3. Requisitos Críticos
- Sincronização local (latência zero).
- Conversão de volume (fardos/unidades).
- Emissão fiscal (NFC-e/SAT) com contingência.
- Gestão de crédito ("caderneta").
- Interface otimizada para touchscreen.