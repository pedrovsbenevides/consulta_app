#### Method: **PUT**
#### Path: **apiUrl/api/pacientes/{pacienteId}**
Atualiza o registro de um paciente no sistema

##### Authorization:
*   **Bearer** - Token de autenticação

##### Param:
*   **pacienteId** : required|int - ID do paciente a ser atualizado

##### Body:
```
{
	"nome": "Luana Rodrigues Garcia",
	"celular": "(11) 98484-6362"
}
```

##### Response (200):
Content-Type: application/json
```
{
	"id": 1,
	"uuid": "a514ee05-326d-4da4-aafb-6b1402b14b91",
	"nome": "Luana Rodrigues Garcia",
	"cpf": "795.429.941-60",
	"celular": "(11) 98484-6362",
	"created_at": "2025-01-28 02:42:28",
	"updated_at": "2025-01-28 02:43:56",
	"deleted_at": null
}
```