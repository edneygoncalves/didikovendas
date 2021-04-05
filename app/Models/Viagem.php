<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Viagem
 *
 * @property int $id
 * @property string|null $name
 * @property int $cidade_id
 * @property Carbon|null $data
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Cidade $cidade
 * @property Collection|Venda[] $vendas
 *
 * @package App\Models
 */
class Viagem extends Model
{
	protected $table = 'viagem';

	protected $casts = [
		'cidade_id' => 'int'
	];

	protected $dates = [
		'data'
	];

	protected $fillable = [
		'name',
		'cidade_id',
		'data'
	];

    public static function next()
    {
        $viagens = self::where('data', '>=', now())->get();

        if($viagens->count())
            return $viagens;

        return false;
    }

	public function cidade()
	{
		return $this->belongsTo(Cidade::class);
	}

	public function vendas()
	{
		return $this->hasMany(Venda::class);
	}
}
