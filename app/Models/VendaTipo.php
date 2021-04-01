<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VendaTipo
 * 
 * @property int $id
 * @property string $name
 * @property string $icone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Venda[] $vendas
 *
 * @package App\Models
 */
class VendaTipo extends Model
{
	protected $table = 'venda_tipo';

	protected $fillable = [
		'name',
		'icone'
	];

	public function vendas()
	{
		return $this->hasMany(Venda::class, 'tipo_id');
	}
}
