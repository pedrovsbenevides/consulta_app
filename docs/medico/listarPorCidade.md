#### Method: **GET**
#### Path: **apiUrl/api/cidades/{cidadeId}/medicos**
Lista os medicos de uma cidade

##### Param:
*   **cidadeId**: required|int - ID da cidade

Ex:
```
apiUrl/api/cidades/1/medicos
```

##### Response (200):
Content-Type: application/json
```
[
	{
		"id": 1,
		"uuid": "35b6120a-fb0b-4e12-86ea-85922f5110e9",
		"cidade_id": 1,
		"nome": "Dr. Pedro Victor",
		"especialidade": "Cardiologista",
		"created_at": "2025-01-27 03:00:07",
		"updated_at": "2025-01-27 03:00:07",
		"deleted_at": null
	}
]
```
