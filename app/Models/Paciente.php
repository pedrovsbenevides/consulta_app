<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paciente
 * 
 * @property int $id
 * @property string $uuid
 * @property string $nome
 * @property string $cpf
 * @property string $celular
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Paciente extends Model
{
	use SoftDeletes;
	protected $table = 'paciente';

	protected $casts = [
		'created_at' => 'datetime:Y-m-d H:i:s',
		'updated_at' => 'datetime:Y-m-d H:i:s'
	];

	protected $fillable = [
		'uuid',
		'nome',
		'cpf',
		'celular'
	];

	public function consulta()
	{
		return $this->hasMany(Consulta::class);
	}
}
