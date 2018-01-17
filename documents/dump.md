## Passo-a-passo para gerar o dump do banco de dados através do projeto do MeuHorario 2:

Eis aqui o que você tem de fazer para popular a sua base MySQL:

#### PASSO 1: Montar e configurar o ambiente Ruby on Rails no Linux/Mac:

Guia utilizado para configurar ambiente Ruby on Rails no Ubuntu: <https://nandovieira.com.br/configurando-ruby-rails-mysql-postgresql-git-no-ubuntu>

Dêem preferência a versão 2.3.1 do Ruby, pois é a versão utilizada na implementação do MeuHorario 2, assim como algumas das dependências do projeto requerem versão do Ruby inferior a 2.4.

#### PASSO 2: Baixar o projeto do MeuHorario 2:

GitHub do MeuHorario 2: <https://github.com/GabrielErbetta/meuhorario2>

#### PASSO 3: No arquivo Gemfile, onde tem escrito `gem 'pg'` mudar para `gem 'mysql2'` (ver arquivo [Gemfile](https://naaramusse.github.io/Holmes-Corp/documents/Gemfile)):

```ruby
# Use MySQL as the database for Active Record  
gem 'mysql2'
```

#### PASSO 4: No arquivo `config/database.yml`, configurar o banco de dados MySQL que será utilizado para receber a carga de dados, conforme exemplo abaixo (ver arquivo [database.yml](https://naaramusse.github.io/Holmes-Corp/documents/database.yml)):

```yaml
development:  
  adapter: mysql2  
  host: <my_host>  
  database: <my_database>  
  pool: 5  
  username: <my_username>  
  password: <my_password>
```

#### PASSO 5: Instalar as dependencias do projeto utilizando o comando:

```bash
bundle install
```

#### PASSO 6: Migrar as tabelas da aplicação para a base configurada no passo 4, utilizando o comando:

```bash
rake db:migrate
```

#### PASSO 7: Executar os crawlers para popular o banco de dados:

```bash
rake crawler:courses  
rake crawler:disciplines  
rake crawler:discipline_infos  
rake crawler:pre_requisites  
rake crawler:classes  
rake crawler:areas
```

Obs.: Note que o crawler de areas não deve ser executado antes do crawler de courses, pois é ele quem _seta_ o valor da coluna `area_id` da tabela `courses`.

### Pronto! Agora você já deve ter a sua base mapeada e populada.

