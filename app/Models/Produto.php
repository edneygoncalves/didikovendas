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
 * Class Produto
 * 
 * @property int $id
 * @property int $subcategoria_id
 * @property string $name
 * @property float $valor
 * @property string $descricao
 * @property string $foto
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property ProdutoSubcategoria $produto_subcategoria
 * @property Collection|Encomenda[] $encomendas
 *
 * @package App\Models
 */
class Produto extends Model
{
	use SoftDeletes;
	protected $table = 'produto';

	protected $casts = [
		'subcategoria_id' => 'int',
		'valor' => 'float'
	];

	protected $fillable = [
		'subcategoria_id',
		'name',
		'valor',
		'descricao',
		'foto'
	];

	public function produto_subcategoria()
	{
		return $this->belongsTo(ProdutoSubcategoria::class, 'subcategoria_id');
	}

	public function encomendas()
	{
		return $this->hasMany(Encomenda::class);
	}
}
