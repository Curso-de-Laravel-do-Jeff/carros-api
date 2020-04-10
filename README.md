# API
---
- API Endpoint: https://curso-carros-api.herokuapp.com/api

## Credenciais
---
- E-mail: `teste@mail.com`
- Senha: `123`

## Rotas
---
- `POST` /login => ['email' => `:email`, 'senha' `:senha`]

Rotas a seguir precisam estar logados (/login para obter o token de acesso), basta utilizar [Bearer `token`] no `header` `Authorization`

- `PUT` /cars (Retorna lista com todos os carros)
- `DELETE` /cars/delete/{id} (Deleta um carro)
- `PUT` /cars/show/{id} (Exibe um carro)
- `POST`/cars/store (Armazena um carro) =>['brand' => `:brand`, 'model' => `:model`, 'year' => `:year`, 'color' => `:color`, 'value' => `value`]
- `PUT` /cars/update/{id} (Atualiza um carro) => ['brand' => `:brand`, 'model' => `:model`, 'year' => `:year`, 'color' => `:color`, 'value' => `value`]
