<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProdutoSubcategoria
 *
 * @property int $id
 * @property int $categoria_id
 * @property string $name
 * @property string $icone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property ProdutoCategoria $produto_categoria
 * @property Collection|Produto[] $produtos
 *
 * @package App\Models
 */
class ProdutoSubcategoria extends Model
{
	protected $table = 'produto_subcategoria';

	protected $casts = [
		'categoria_id' => 'int'
	];

	protected $fillable = [
		'categoria_id',
		'name',
		'icone'
	];

	public function categoria()
	{
		return $this->belongsTo(ProdutoCategoria::class, 'categoria_id');
	}

	public function produtos()
	{
		return $this->hasMany(Produto::class, 'subcategoria_id');
	}
}
