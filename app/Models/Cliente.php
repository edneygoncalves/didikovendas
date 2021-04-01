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
 * Class Cliente
 * 
 * @property int $id
 * @property string $name
 * @property string|null $nome_contato
 * @property string|null $whatsapp
 * @property string|null $messenger_face
 * @property string|null $foto
 * @property int|null $cidade_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Cidade|null $cidade
 * @property Collection|Venda[] $vendas
 *
 * @package App\Models
 */
class Cliente extends Model
{
	use SoftDeletes;
	protected $table = 'cliente';

	protected $casts = [
		'cidade_id' => 'int'
	];

	protected $fillable = [
		'name',
		'nome_contato',
		'whatsapp',
		'messenger_face',
		'foto',
		'cidade_id'
	];

	public function cidade()
	{
		return $this->belongsTo(Cidade::class);
	}

	public function vendas()
	{
		return $this->hasMany(Venda::class);
	}
}
