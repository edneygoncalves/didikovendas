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
 * Class Venda
 *
 * @property int $id
 * @property int $status_id
 * @property int $tipo_id
 * @property int $cliente_id
 * @property string|null $name
 * @property string|null $registro
 * @property string|null $maps
 * @property string|null $lote
 * @property Carbon|null $previsao_entrega
 * @property Carbon|null $entregue_em
 * @property Carbon|null $pago_em
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Cliente $cliente
 * @property VendaStatus $venda_status
 * @property VendaTipo $venda_tipo
 * @property Collection|Encomenda[] $encomendas
 *
 * @package App\Models
 */
class Venda extends Model
{
	use SoftDeletes;
	protected $table = 'venda';

	protected $casts = [
		'status_id' => 'int',
		'tipo_id' => 'int',
		'cliente_id' => 'int'
	];

	protected $dates = [
		'previsao_entrega',
		'entregue_em',
		'pago_em'
	];

	protected $fillable = [
		'status_id',
		'tipo_id',
		'cliente_id',
		'name',
		'registro',
		'maps',
		'lote',
		'previsao_entrega',
		'entregue_em',
		'pago_em'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}

	public function status()
	{
		return $this->belongsTo(VendaStatus::class, 'status_id');
	}

	public function tipo()
	{
		return $this->belongsTo(VendaTipo::class, 'tipo_id');
	}

	public function encomendas()
	{
		return $this->hasMany(Encomenda::class);
	}
}
