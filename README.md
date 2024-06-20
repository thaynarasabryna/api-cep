# Estudo CEP com API ViaCEP

Este projeto é um exemplo simples de como utilizar a API do ViaCEP para buscar informações de endereço a partir de um CEP informado pelo usuário.

![cep](https://github.com/thaynarasabryna/api-cep/assets/112216179/41103def-ace9-4744-ba4c-cf3ffd1bc69c)

## Tecnologias Utilizadas

- **JavaScript** (AJAX, jQuery): Para realizar requisições assíncronas e dinamicamente atualizar a página com os dados do endereço.
- **PHP**: Para lidar com as requisições do lado do servidor e fazer a chamada para a API do ViaCEP.
- **Bootstrap**: Utilizado para o layout e estilização dos elementos HTML, proporcionando uma interface limpa e responsiva.

## Funcionalidades

- **Busca por CEP**: Permite ao usuário inserir um CEP no formato XXXXX-XXX e obter informações de logradouro, bairro, cidade e estado.
- **Validação de CEP**: Verifica se o CEP inserido está no formato correto antes de realizar a requisição.
- **Feedback Visual**: Exibe feedback visual durante o carregamento dos dados e em caso de erro na busca do CEP.

## Como Usar

1. Clone o repositório para o seu ambiente local.
2. git clone https://github.com/thaynarasabryna/api-cep.git
3. Entre na pasta --> cd api-cep/
4. Configure um servidor local PHP (ex.: XAMPP, WAMP) ou utilize o servidor embutido do PHP para executar o projeto.
5. Abra o arquivo index.php no seu navegador.
6. Insira um CEP válido no campo de busca e aguarde a exibição dos dados de endereço.
