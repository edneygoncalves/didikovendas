<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProdutoCategoria
 *
 * @property int $id
 * @property string $name
 * @property string $icone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|ProdutoSubcategoria[] $produto_subcategorias
 *
 * @package App\Models
 */
class ProdutoCategoria extends Model
{
	protected $table = 'produto_categoria';

	protected $fillable = [
		'name',
		'icone'
	];

	public function subcategorias()
	{
		return $this->hasMany(ProdutoSubcategoria::class, 'categoria_id');
	}

	public function produtos()
	{
        return $this->hasManyThrough(
            Produto::class,
            ProdutoSubcategoria::class,
            'categoria_id',
            'subcategoria_id'
        );
	}
}
