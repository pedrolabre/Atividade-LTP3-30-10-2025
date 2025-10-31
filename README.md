* O script (cadastro.php) é uma demonstração inicial de conceitos de Programação Orientada a Objetos (POO) em PHP.

Ele estabelece a estrutura de classes para um sistema de cadastro de pessoas no campus do IFTO, utilizando herança e polimorfismo com classes abstratas como Pessoa e Funcionario, e classes concretas como Estudante, Professor, Servidor e Visitante. 

O seu funcionamento é estático: ele pré-define manualmente um array de objetos e apenas exibe os dados desses objetos em uma lista HTML, servindo como uma prova de conceito inicial para a modelagem das classes.

* O script registro_campus.php transforma a demonstração estática anterior em uma aplicação web interativa. 

Reutilizando a mesma estrutura de classes POO, este arquivo implementa formulários HTML (organizados em um layout de tabela 2x2) para permitir o cadastro dinâmico de qualquer tipo de pessoa. 

O script processa os dados de entrada via $_POST e utiliza Sessões do PHP ($_SESSION) para persistir o array $pessoaIFTO, simulando um banco de dados que armazena todos os registros entre os recarregamentos da página. 

A aplicação exibe tanto os formulários de entrada quanto a lista atualizada de todas as pessoas cadastradas na sessão, com uma opção para limpar o "banco de dados".
