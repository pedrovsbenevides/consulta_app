<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Medico
 * 
 * @property int $id
 * @property string $uuid
 * @property int $cidade_id
 * @property string $nome
 * @property string $especialidade
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Medico extends Model
{
	use SoftDeletes;
	protected $table = 'medico';

	protected $casts = [
		'cidade_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'cidade_id',
		'nome',
		'especialidade'
	];

	public function cidade()
	{
		return $this->belongsTo(Cidade::class);
	}

	public function consulta()
	{
		return $this->hasMany(Consulta::class);
	}
}
