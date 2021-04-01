<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Endereco
 * 
 * @property int $id
 * @property int $cidade_id
 * @property string|null $regiao
 * @property string|null $bairro
 * @property string|null $rua
 * @property string|null $numero
 * @property string|null $complemento
 * @property string|null $maps
 * @property string $enderecable_type
 * @property int $enderecable_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Endereco extends Model
{
	protected $table = 'endereco';

	protected $casts = [
		'cidade_id' => 'int',
		'enderecable_id' => 'int'
	];

	protected $fillable = [
		'cidade_id',
		'regiao',
		'bairro',
		'rua',
		'numero',
		'complemento',
		'maps',
		'enderecable_type',
		'enderecable_id'
	];
}
