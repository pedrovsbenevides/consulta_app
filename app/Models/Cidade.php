<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cidade
 * 
 * @property int $id
 * @property string $uuid
 * @property string $nome
 * @property string $estado
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Cidade extends Model
{
	use SoftDeletes;
	protected $table = 'cidade';

	protected $fillable = [
		'uuid',
		'nome',
		'estado'
	];

	public function medico()
	{
		return $this->hasMany(Medico::class);
	}
}
