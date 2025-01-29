#### Method: **POST**
#### Path: **apiUrl/api/medicos**
Registra um novo médico no sistema

##### Authorization:
*   **Bearer** - Token de autenticação

##### Body:
*   **nome**: required|string - Nome do médico
*   **cidade_id**: required|int - ID da cidade do médico
*   **especialidade**: required|string - Especialidade do médico
```
{
	"nome": "Dr. Carlos Eduardo",
	"cidade_id": 3,
	"especialidade": "Nefrologista"
}
```

##### Response (200):
Content-Type: application/json
```
{
	"nome": "Dr. Carlos Eduardo",
	"cidade_id": 3,
	"especialidade": "Nefrologista",
	"uuid": "258c6b26-9168-46a8-bb80-33d3ada0c558",
	"updated_at": "2025-01-28 02:31:54",
	"created_at": "2025-01-28 02:31:54",
	"id": 3
}
```