<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fornecedor
 * 
 * @property int $id
 * @property string $name
 * @property string|null $responsavel
 * @property string|null $nome_contato
 * @property string|null $whatsapp
 * @property string|null $foto
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Encomenda[] $encomendas
 *
 * @package App\Models
 */
class Fornecedor extends Model
{
	use SoftDeletes;
	protected $table = 'fornecedor';

	protected $fillable = [
		'name',
		'responsavel',
		'nome_contato',
		'whatsapp',
		'foto'
	];

	public function encomendas()
	{
		return $this->hasMany(Encomenda::class);
	}
}
