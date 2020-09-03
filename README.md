Avaliacao de Candidato
==============================

Olá Andressa.

Essa avaliação prática consiste em 3 etapas para avaliarmos seu conhecimento em C#, SQL e Front-End(HTML5, CSS e JavaScript)

Este repositório será exclusivo para o sua avaliação. Pode organizá-lo da forma que achar necessário.

O teste
--------
### Banco de dados/SQL

A primeira etapa será a criação de um **banco de dados**. Para seu projeto, você deve:

- Criar uma tabela denominada "Veiculo" com as colunas "Placa", "Marca", "Modelo", "AnoModelo" e "AnoFabricacao";
- Criar uma tabela denominada "Cliente" com as colunas "Nome", "CPF", "Telefone" e "Endereco";
- Criar uma tabela denominada "Servico" com as colunas "Nome", "Descicao", "Cliente", "Veiculo" e "Valor";

Após a criação das tabelas, você deve criar as procedures necessárias para realizar operações CRUD nessas tabelas de forma que a aplicação fique funcional.
> **Observações:**
> - Para seus testes, você pode criar um banco local na sua máquina. Não há necessidade de consumir uma base de dados prévia, os dados poderão ser inseridos manualmente;
> - Você pode criar mais colunas conforme ver necessidade;
> - Para incluir o banco no projeto, você poderá adicionar os scripts de criação das tabelas e das procedures em uma pasta denominada "Scripts_SQL". Não há necessidade de incluir sua massa de dados.


### Back-End/C#

A segunda etapa será o desenvolvimento **backend/C#**. Para seu projeto, você deve:

- Desenvolver uma 'mini api' que seja responsável por gerenciar as operações CRUD criadas no seu banco de dados, bem como seus retornos.

> **Observações:**
> - Sugiro a utilização de objetos para cada um dos tipos de dados.

### Front-End

Para a terceira etapa da avaliação, você deverá desenvolver uma SPA (Single Page Application) e nela deve ser possível:

- Ver a lista de todos os servicos cadastrados
- Adicionar um novo serviço
- Listar os serviços cadastrados para um veículo
- Listar os serviços cadastrados para um cliente

> **Obs:**
> - A página deve ser responsiva.

### Observações importantes:

- Você pode usar frameworks, tanto para o front-end, quanto para o back-end, mas um código limpo será melhor avaliado.
- Será considerado ponto positivo no teste a utilização de JS puro, orientação a objetos, design patterns e rotinas para testes.
- Será considerado a velocidade e a usabilidade do projeto. Uma interface intuitiva será melhor avaliada.
