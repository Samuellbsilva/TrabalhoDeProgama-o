# Projeto: Sistema para Clínica Esperança

Este projeto foi desenvolvido como parte do curso de **Técnico em Informática**. Ele reúne trabalhos antigos para aproveitar estruturas e conceitos aprendidos em aulas anteriores, com o objetivo de criar um sistema funcional para uma clínica. O sistema inclui funcionalidades como agendamento de consultas, visualização de médicos disponíveis e eventos, com foco em uma interface amigável para o usuário.

---

## Descrição do Sistema

O sistema foi projetado para atender às necessidades de uma clínica fictícia chamada **Clínica Esperança**. Ele permite que os usuários acessem informações sobre médicos, agendamentos, serviços oferecidos pela clínica, além de visualizar banners e novidades.

### Funcionalidades

- **Página Inicial (Home)**:  
  Exibe um banner de imagens rotativas (carrossel) com imagens e informações relevantes.  
  Menu de navegação para acessar as principais seções: médicos, agendamentos e pesquisa.

- **Serviços**:  
  Apresentação dos serviços oferecidos pela clínica, como consultas médicas, exames de imagem, cirurgia ambulatorial, e terapias integrativas.

- **Novidades**:  
  Exibe informações sobre os últimos avanços na medicina e novidades da clínica.

- **Página de Médicos**:  
  Lista de médicos disponíveis, com informações sobre especialidades e horários.

- **Agendamentos**:  
  Sistema para agendar consultas e visualizar disponibilidade.

- **Pesquisa**:  
  Pesquisa de novidades e atualizações sobre a clínica.

---

## Tecnologias Utilizadas

- **Frontend**: 
  - HTML
  - CSS (Materialize, Bootstrap)
  - JavaScript (Swiper)
  
- **Backend**: 
  - PHP (PDO para conexão com o banco de dados MySQL)
  
- **Banco de Dados**: 
  - MySQL

---

## Estrutura do Projeto

- **`index.php`**: Página inicial do site com o carrossel de banners.
- **`departamento/departamento.php`**: Página que exibe os médicos e suas especialidades.
- **`agendamento/agendamento.php`**: Página para agendar consultas médicas.
- **`eventos/eventos.php`**: Página de novidades e atualizações da clínica.
- **`Conexao.php`**: Classe responsável pela conexão com o banco de dados utilizando PDO.
- **`UsuarioController.php`**: Controlador para manipulação dos dados de usuários.
- **`Administrador.php`**: Classe para verificar e gerenciar o status de administrador.

---

## Como Executar

1. Clone o repositório ou baixe os arquivos.
2. Configure o servidor PHP e MySQL em seu ambiente local.
3. Certifique-se de que o banco de dados está configurado corretamente (a estrutura está prevista para ser criada em MySQL).
4. Abra o arquivo `index.php` no seu navegador para acessar a página inicial.

---

## Contribuições

Este projeto foi desenvolvido por **[Samuel Lemos Bento Silva]**. Para contribuições ou sugestões, por favor, entre em contato. 

---

### Licença

Este projeto é licenciado sob a [Licença MIT](LICENSE).

