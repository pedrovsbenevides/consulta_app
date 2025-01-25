# Consulta App

# Documentação
A documentação está disponível no diretório [./docs](./docs/index.md).

# Iniciar aplicação
Certifique-se de possuir [Docker](https://docs.docker.com/get-docker/)

1. Clonar o repositório
2. Acessar o diretório do projeto e instalar as dependências com o comando:
```
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs
```