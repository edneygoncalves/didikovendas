<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cidade
 * 
 * @property int $id
 * @property string $name
 * @property string $uf
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Cliente[] $clientes
 *
 * @package App\Models
 */
class Cidade extends Model
{
	protected $table = 'cidade';

	protected $fillable = [
		'name',
		'uf'
	];

	public function clientes()
	{
		return $this->hasMany(Cliente::class);
	}
}
