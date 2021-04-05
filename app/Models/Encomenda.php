<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Encomenda
 *
 * @property int $id
 * @property int $produto_id
 * @property int|null $fornecedor_id
 * @property int|null $venda_id
 * @property float|null $custo
 * @property float|null $venda
 * @property int $status_id
 * @property string|null $name
 * @property string|null $registro
 * @property string|null $lote
 * @property Carbon|null $retirado_em
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Fornecedor|null $fornecedor
 * @property Produto $produto
 * @property EncomendaStatus $encomenda_status
 *
 * @package App\Models
 */
class Encomenda extends Model
{
	use SoftDeletes;
	protected $table = 'encomenda';

	protected $casts = [
		'produto_id' => 'int',
		'fornecedor_id' => 'int',
		'venda_id' => 'int',
		'custo' => 'float',
		'venda' => 'float',
		'status_id' => 'int'
	];

	protected $dates = [
		'retirado_em'
	];

	protected $fillable = [
		'produto_id',
		'fornecedor_id',
		'venda_id',
		'custo',
		'venda',
		'status_id',
		'name',
		'registro',
		'lote',
		'retirado_em'
	];

	public function fornecedor()
	{
		return $this->belongsTo(Fornecedor::class);
	}

	public function produto()
	{
		return $this->belongsTo(Produto::class);
	}

	public function status()
	{
		return $this->belongsTo(EncomendaStatus::class, 'status_id');
	}

	public function venda()
	{
		return $this->belongsTo(Venda::class);
	}
}
