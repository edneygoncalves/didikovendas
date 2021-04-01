<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Fotos
 * 
 * @property int $id
 * @property string $url
 * @property string $name
 * @property int $size
 * @property string $fotable_type
 * @property int $fotable_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Fotos extends Model
{
	protected $table = 'fotos';

	protected $casts = [
		'size' => 'int',
		'fotable_id' => 'int'
	];

	protected $fillable = [
		'url',
		'name',
		'size',
		'fotable_type',
		'fotable_id'
	];
}
