# Teste na empresa Mega Laudo
==============================
Primeiramente gostaria de agradecer a oportunidade! É a primeira vez que crio um projeto desse tipo. O desafio é simples mas tem suas complexidades para um desenvolvedor JR.

Optei pelo MySQL e PHP por ter mais familiaridade com a linguagem, mas não consegui fazer as interações com o tempo exigido pois tive um problema em meu notebook.

O que consegui fazer foi criar as tabelas e criar uma interface para o sistema.

## Ferramentas
---------------------------
**XAMPP** -> https://www.apachefriends.org/pt_br/index.html
*Apache* - Servidor Web
*PHPMySQL* - Banco de Dados

**Vidual Studio Code**
*IDE* - Ambiente de desenvolvimento

### Banco de Dados/MySQL

**Tarefas**
- [x] Criar Banco de Dados "BD_MegaLaudo";
- [x] Criar uma tabela denominada "Veiculo" com as colunas **"ID_Veiculo"**, "Placa", "Marca", "Modelo", "AnoModelo" e "AnoFabricacao";
- [x] Criar uma tabela denominada "Cliente" com as colunas **"ID_Cliente"**, "Nome", "CPF", "Telefone" e "Endereco";
- [x] Criar uma tabela denominada "Servico" com as colunas **"ID_Servico"**,**"ID_Veiculo"**, **"ID_Cliente"**, **"Data_servico"**, "Nome", "Descicao", "Cliente", "Veiculo" e "Valor"; 
- [] Adicionar os scripts de criação das tabelas e das procedures em uma pasta denominada "Scripts_SQL";

> **Observações:**
> - Criei algumas colunas extras que estão em negrito

### Back-End/PHP

**Tarefa**
- [] Desenvolver uma 'mini api' que seja responsável por gerenciar as operações CRUD criadas no seu banco de dados, bem como seus retornos;
- *Sugiro a utilização de objetos para cada um dos tipos de dados.*

> **Observações:**
> -Não deu para finalizar

### Front-End/HTML/CSS/JS/BOOSTRATP

**Tarefa**
- [] Ver a lista de todos os serviços cadastrados;
- [x] Adicionar um novo serviço;
- [] Listar os serviços cadastrados para um veículo;
- [] Listar os serviços cadastrados para um cliente;
- [x] Página Responsiva;

> **Observações:**
> -Não Finalizei tudo