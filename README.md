## Atenção -> coloquei três vídeos abaixo para vocês!!

[ Video 1 - Codeigniter ](https://youtu.be/5FDs_Es1GjE)  
[ Vídeo 2 - Codeigniter ](https://youtu.be/_dTHMBUmMWQ) 
[ Vídeo 3 - Codeigniter ](https://youtu.be/nf0dgtWmAA8)  




App/View/*
App/Controller/Home.php
App/Config/Routes.php

Model ;(

-> para melhorar a vida de vocês : aumentar nível de debug
renomear aqui "env"  para ".env"
Mudar linha onde menciona 
## CI_ENVIRONMENT = production (remover o hashtag)
para 
CI_ENVIRONMENT = development


Criar o model para qualquer tabela no banco de dados: 

php spark make:model NomeTabelaModel

editar o App/Model/NomeTabelaModel.php e colocar no allowsFields ['meu campo 1', 'meu campo 2' ...]


Depois descomentar as linhas de databases do .env e colocar desta maneira: 


 database.default.hostname = localhost
 database.default.database = funcionarios
 database.default.username = root
 database.default.password =
 database.default.DBDriver = MySQLi
 database.default.DBPrefix =
 database.default.port = 3306


## Usando Models no CodeIgniter

Após configurar o banco de dados no arquivo `.env`, você pode criar e usar models para interagir com as tabelas. Siga estes passos:

### 1. Criar um Model
Use o comando Spark do CodeIgniter para gerar um model para uma tabela específica:

```
php spark make:model NomeDaTabelaModel
```

Isso criará um arquivo em `App/Models/NomeDaTabelaModel.php`.

### 2. Configurar o Model
Edite o arquivo gerado para definir os campos permitidos (allowedFields). Por exemplo:

```php
<?php

namespace App\Models;

use CodeIgniter\Model;

class NomeDaTabelaModel extends Model
{
    protected $table = 'nome_da_tabela'; // Nome da tabela no banco
    protected $primaryKey = 'id'; // Chave primária
    protected $allowedFields = ['campo1', 'campo2', 'campo3']; // Campos que podem ser inseridos/atualizados
}
```

### 3. Usar o Model em um Controller
No seu controller (ex.: `App/Controllers/Home.php`), carregue e use o model para operações CRUD:

```php
<?php

namespace App\Controllers;

use App\Models\NomeDaTabelaModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new NomeDaTabelaModel();

        // Inserir dados
        $data = [
            'campo1' => 'valor1',
            'campo2' => 'valor2'
        ];
        $model->insert($data);

        // Buscar todos os registros
        $dados = $model->findAll();

        // Buscar por ID
        $registro = $model->find(1);

        // Atualizar
        $model->update(1, $data);

        // Deletar
        $model->delete(1);

        // Passar dados para a view
        return view('minha_view', ['dados' => $dados]);
    }
}
```

### 4. Dicas Adicionais
- Certifique-se de que a tabela existe no banco de dados configurado.
- Use validações no model para garantir a integridade dos dados.
- Para queries mais complexas, use o Query Builder: `$model->where('campo', 'valor')->findAll();`.

Isso cobre o básico para criar e usar models no CodeIgniter. Para mais detalhes, consulte a documentação oficial.