# Consulta App

## Documentação
A documentação está disponível no diretório [./docs](./docs/index.md).

## Configurando a partir do GitHub
Certifique-se de possuir [Docker](https://docs.docker.com/get-docker/)

1. Clonar o repositório
> Para configuração em Windows utilize o terminal WSL2 para clonar o repositório e utilize o VS Code com a extensão [Remote Development](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.vscode-remote-extensionpack) para abrir o diretório, visualizar o código e executar os comandos a seguir.

2. Renomear o `.env.example` para `.env`

3. Instalar as dependências do projeto
```bash
docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php84-composer:latest composer install --ignore-platform-reqs
```

4. Gerar a chave da aplicação
```bash
./vendor/bin/sail artisan key:generate
```

5. Gerar a chave JWT
```bash
./vendor/bin/sail artisan jwt:secret
```

6. Iniciar contêineres com o Sail
```bash
./vendor/bin/sail up -d
```
> O argumento '-d' executa os contêineres em segundo plano.

7. Rodar migrations e seeders
```bash
./vendor/bin/sail artisan migrate --seed 
```

Após inicialização dos contêineres a API estará disponível no endereço: `http://localhost:80` ou simplesmente `http://localhost`

## Autenticação
Realize a autenticação com o usuário registrado na UserSeeder.
```
{
	"email": "admin@gmail.com",
	"password": "admin"
}
```