#### Method: **GET**
#### Path: **apiUrl/api/medicos**
Lista todas as medicos registradas no sistema

Ex:
```
apiUrl/api/medicos
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
	},
	{
		"id": 2,
		"uuid": "702dc403-801f-4e9a-9939-bfc68a3b3dd7",
		"cidade_id": 2,
		"nome": "Dra. Alessandra Moura",
		"especialidade": "Neurologista",
		"created_at": "2025-01-28 01:31:15",
		"updated_at": "2025-01-28 01:31:15",
		"deleted_at": null
	},
	{
		"id": 3,
		"uuid": "258c6b26-9168-46a8-bb80-33d3ada0c558",
		"cidade_id": 3,
		"nome": "Dr. Carlos Eduardo",
		"especialidade": "Nefrologista",
		"created_at": "2025-01-28 02:31:54",
		"updated_at": "2025-01-28 02:31:54",
		"deleted_at": null
	}
]
```

##### Query Param:
*   **nome**: nullable|string - Nome ou parte do nome do medico

Ex:
```
apiUrl/api/medicos?nome=ca
```

##### Response (200):
Content-Type: application/json
```
[
	{
		"id": 3,
		"uuid": "258c6b26-9168-46a8-bb80-33d3ada0c558",
		"cidade_id": 3,
		"nome": "Dr. Carlos Eduardo",
		"especialidade": "Nefrologista",
		"created_at": "2025-01-28 02:31:54",
		"updated_at": "2025-01-28 02:31:54",
		"deleted_at": null
	}
]
```