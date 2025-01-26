<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Consulta
 * 
 * @property int $id
 * @property string $uuid
 * @property int $medico_id
 * @property int $paciente_id
 * @property Carbon $data
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Consulta extends Model
{
	use SoftDeletes;
	protected $table = 'consulta';

	protected $casts = [
		'medico_id' => 'int',
		'paciente_id' => 'int',
		'data' => 'datetime'
	];

	protected $fillable = [
		'uuid',
		'medico_id',
		'paciente_id',
		'data'
	];

	public function medico()
	{
		return $this->belongsTo(Medico::class);
	}

	public function paciente()
	{
		return $this->belongsTo(Paciente::class);
	}
}
