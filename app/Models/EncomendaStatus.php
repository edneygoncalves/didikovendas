<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EncomendaStatus
 * 
 * @property int $id
 * @property string $name
 * @property string $icone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Encomenda[] $encomendas
 *
 * @package App\Models
 */
class EncomendaStatus extends Model
{
	protected $table = 'encomenda_status';

	protected $fillable = [
		'name',
		'icone'
	];

	public function encomendas()
	{
		return $this->hasMany(Encomenda::class, 'status_id');
	}
}
