#### Method: **GET**
#### Path: **apiUrl/api/medicos/{medicoId}/pacientes**
Lista os pacientes que possuem consulta com um médico

##### Param:
*   **medicoId**: required|int - ID do médico

Ex:
```
apiUrl/api/medicos/1/pacientes
```

##### Response (200):
Content-Type: application/json
```
[
	{
		"id": 2,
		"uuid": "15905355-d44f-4077-90da-b7d34c3dee7a",
		"nome": "Matheus Henrique",
		"cpf": "870.825.650-03",
		"celular": "(11) 9 8432-5789",
		"created_at": "2025-01-28 03:50:43",
		"updated_at": "2025-01-28 03:50:43",
		"deleted_at": null,
		"consulta": [
			{
				"id": 2,
				"uuid": "ea4d1d5b-2a00-4c30-88a4-ccbe23b1da58",
				"medico_id": 1,
				"paciente_id": 2,
				"data": "2025-01-29 15:00:00",
				"created_at": "2025-01-28 03:17:49",
				"updated_at": "2025-01-28 03:17:49",
				"deleted_at": null
			}
		]
	},
	{
		"id": 1,
		"uuid": "a514ee05-326d-4da4-aafb-6b1402b14b91",
		"nome": "Luana Rodrigues Garcia",
		"cpf": "795.429.941-60",
		"celular": "(11) 98484-6362",
		"created_at": "2025-01-28 02:42:28",
		"updated_at": "2025-01-28 02:43:56",
		"deleted_at": null,
		"consulta": [
			{
				"id": 3,
				"uuid": "1e77f8f4-1637-4f76-bcd6-808b653c8fe6",
				"medico_id": 1,
				"paciente_id": 1,
				"data": "2025-01-27 15:00:00",
				"created_at": "2025-01-28 03:22:41",
				"updated_at": "2025-01-28 03:22:41",
				"deleted_at": null
			}
		]
	}
]
```

##### Query Param:
*   **apenas-agendadas**: nullable|bool - Flag para filtrar somente pacientes com consultas que ainda não foram realizadas 

Ex:
```
apiUrl/api/medicos/1/pacientes?apenas-agendadas=True
```

##### Response (200):
Content-Type: application/json
```
[
	{
		"id": 2,
		"uuid": "15905355-d44f-4077-90da-b7d34c3dee7a",
		"nome": "Matheus Henrique",
		"cpf": "870.825.650-03",
		"celular": "(11) 9 8432-5789",
		"created_at": "2025-01-28 03:50:43",
		"updated_at": "2025-01-28 03:50:43",
		"deleted_at": null,
		"consulta": [
			{
				"id": 2,
				"uuid": "ea4d1d5b-2a00-4c30-88a4-ccbe23b1da58",
				"medico_id": 1,
				"paciente_id": 2,
				"data": "2025-01-29 15:00:00",
				"created_at": "2025-01-28 03:17:49",
				"updated_at": "2025-01-28 03:17:49",
				"deleted_at": null
			}
		]
	}
]
```