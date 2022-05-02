<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Ecommerce API
Esta API criada para fins de testes, e possui poucas rotas e dados, mas é ótima para usar em projetos front end, e podendo ser melhoradas adicionando mais itens, no momentos só há produtos e marcas com seus respectivos relacionamentos.

#### Models usados no projeto
* Product
* Brand

#### Uso
Clone o projeto via git clone ou baixe o arquivo zip.

#### .env
Copie o conteúdo do arquivo .env.example para o arquivo .env. Crie um banco de dados e conecte seu banco de dados no arquivo .env.
#### Composer Install
Na raiz do projeto via terminal, execute o comando abaixo para instalar os pacotes.
###### `composer install`
#### Generate Key
Após a instalação, execute o seguinte comando para gerar uma nova Key do laravel.
###### `php artisan key:generate`
#### Run Migration
Se sua configuração do banco estiver correta, execute o comando abaixo para gerar as tabelas do banco de dados.
###### `php artisan migrate`
#### Database Seeding
 Para finalizar, execute o comando abaixo para gerar alguns dados de exemplo para a api, deixei apenas 15 produtos e 5 marcas, mas nada impede que vc possa adicionar mais nas próprias seeds.
###### `php artisan db:seed`

# API EndPoints
# Products
* Product GET All `/api/products`
* Product GET Single `/api/products/1`        
* Product POST Create `/api/products`
        
        name: String
        description: String
        price: Double
        highlights: Boolean
        voltage: String
        brand_id: Integer
        image: String
        
* Product POST Update `/api/products/1`

        name: String
        description: String
        price: Double
        highlights: Boolean
        voltage: String
        brand_id: Integer
        image: String
        _method: PUT
        
* Product DELETE Destroy `/api/products/1`
# Brands

* Brands GET All `/api/brands`
* Brands GET Single `/api/brands/1`        
* Brands POST Create `/api/brands`
        
        name: String
        
* Brands PUT Update `/api/brands/1`

        name: String
        
* Brands DELETE Destroy `/api/brands/1`
# Highlights

* Brands GET All `/api/highlights`
