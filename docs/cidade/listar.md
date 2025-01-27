#### Method: **POST**
#### Path: **apiUrl/api/cidades/{nome}**
Lista todas as cidades registradas no sistema

Ex:
```
apiUrl/api/cidades
```

##### Response (200):
Content-Type: application/json
```
[
	{
		"id": 1,
		"uuid": "5f83ee0a-71a4-4d92-99bf-57e68e33fa56",
		"nome": "Salvador",
		"estado": "BA",
		"created_at": null,
		"updated_at": null,
		"deleted_at": null
	},
	{
		"id": 2,
		"uuid": "c5f2a4ff-e2e8-4e0e-a7cd-815e262e7e4c",
		"nome": "São Paulo",
		"estado": "SP",
		"created_at": "2025-01-27T01:33:00.000000Z",
		"updated_at": "2025-01-27T01:33:00.000000Z",
		"deleted_at": null
	},
	{
		"id": 3,
		"uuid": "8298b3f7-1e4b-4ad8-9d0c-7fd9aae9b8c1",
		"nome": "Rio de Janeiro",
		"estado": "RJ",
		"created_at": "2025-01-27T01:33:39.000000Z",
		"updated_at": "2025-01-27T01:33:39.000000Z",
		"deleted_at": null
	}
]
```

##### Param:
*   **nome**: nullable|string - Nome ou parte do nome da cidade

Ex:
```
apiUrl/api/cidades/rio
```

##### Response (200):
Content-Type: application/json
```
[
	{
		"id": 3,
		"uuid": "8298b3f7-1e4b-4ad8-9d0c-7fd9aae9b8c1",
		"nome": "Rio de Janeiro",
		"estado": "RJ",
		"created_at": "2025-01-27T01:33:39.000000Z",
		"updated_at": "2025-01-27T01:33:39.000000Z",
		"deleted_at": null
	}
]
```