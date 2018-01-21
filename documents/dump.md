## Gerando o dump do banco de dados MySQL

Aqui estão descritos os passos para gerar o dump do banco de dados MySQL para o Sistema de Sugestão de Matrícula utilizando as ferramentas disponíveis no projeto do MeuHorario 2:

### PASSO 1: Montar e configurar o ambiente Ruby on Rails no Linux/Mac:

Guia utilizado para configurar ambiente Ruby on Rails no Ubuntu: <https://nandovieira.com.br/configurando-ruby-rails-mysql-postgresql-git-no-ubuntu>

Dêem preferência a versão 2.3.1 do Ruby, pois é a versão utilizada na implementação do MeuHorario 2, assim como algumas das dependências do projeto requerem versão do Ruby inferior a 2.4.

### PASSO 2: Baixar o projeto do MeuHorario 2:

GitHub do MeuHorario 2: <https://github.com/GabrielErbetta/meuhorario2>

### PASSO 3: No arquivo `Gemfile`, onde tem escrito `gem 'pg'` mudar para `gem 'mysql2'` (ver arquivo [Gemfile](https://naaramusse.github.io/Holmes-Corp/documents/Gemfile)):

```ruby
# Use MySQL as the database for Active Record  
gem 'mysql2'
```

### PASSO 4: No arquivo `config/database.yml`, configurar o banco de dados MySQL que será utilizado para receber a carga de dados, conforme exemplo abaixo (ver arquivo [database.yml](https://naaramusse.github.io/Holmes-Corp/documents/database.yml)):

```yaml
development:  
  adapter: mysql2  
  host: <my_host>  
  database: <my_database>  
  pool: 5  
  username: <my_username>  
  password: <my_password>
```

### PASSO 5: Instalar as dependencias do projeto utilizando o comando:

```bash
bundle install
```

### PASSO 6: Migrar as tabelas da aplicação para a base configurada no passo 4, utilizando o comando:

```bash
rake db:migrate
```

### PASSO 7: Executar os crawlers para popular o banco de dados:

```bash
rake crawler:courses  
rake crawler:disciplines  
rake crawler:discipline_infos  
rake crawler:pre_requisites  
rake crawler:classes  
rake crawler:areas
```

### PASSO 8: Gerar arquivo de exportação:

Pode ser feito de duas maneiras:

* Utilizando o MySQL Workbench:

Com o programa MySQL Workbench em execução, selecione a guia `Management` e, dentro dela, a opção `Data Export`. Daí, basta selecionar o banco de dados (schema) que contém as tabelas com os dados migrados, escolher um nome para o arquivo do dump e executar (`Start Export`).

* Utilizando o terminal:

Com o terminal em execução, basta executar o comando:

```bash
mysqldump -u username -p database_name > database_exportname.sql
```

Onde `mysqldump` é o comando a ser executado, `database_name` é o nome que foi dado ao seu banco de dados e que contém as tabelas que foram migradas e os dados populados, `database_exportname.sql` é o nome do arquivo que receberá o dump da base e `username` é o nome do usuário do banco.
