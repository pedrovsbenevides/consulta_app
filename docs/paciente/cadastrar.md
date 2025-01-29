#### Method: **POST**
#### Path: **apiUrl/api/pacientes**
Registra um paciente no sistema

##### Authorization:
*   **Bearer** - Token de autenticação

##### Body:
```
{
	"nome": "Matheus Henrique",
	"cpf": "870.825.650-03",
	"celular": "(11) 9 8432-5789"
}
```

##### Response (200):
Content-Type: application/json
```
{
	"nome": "Matheus Henrique",
	"cpf": "870.825.650-03",
	"celular": "(11) 9 8432-5789",
	"uuid": "15905355-d44f-4077-90da-b7d34c3dee7a",
	"updated_at": "2025-01-28 03:50:43",
	"created_at": "2025-01-28 03:50:43",
	"id": 2
}
```