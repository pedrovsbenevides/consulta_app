#### Method: **POST**
#### Path: **apiUrl/api/medicos/consulta**
Registra uma nova consulta no sistema

##### Authorization:
*   **Bearer** - Token de autenticação

##### Body:
*   **medico_id**: required|int - ID do medico
*   **paciente_id**: required|int - ID do paciente
*   **data**: required|date - Data da consulta no formato Y-m-d H:i:s
```
{
	"medico_id": 1,
	"paciente_id": 2,
	"data": "2025-01-29 15:00:00"
}
```

##### Response (200):
Content-Type: application/json
```
{
	"medico_id": 1,
	"paciente_id": 2,
	"data": "2025-01-29 15:00:00",
	"uuid": "ea4d1d5b-2a00-4c30-88a4-ccbe23b1da58",
	"updated_at": "2025-01-28 03:17:49",
	"created_at": "2025-01-28 03:17:49",
	"id": 2
}
```