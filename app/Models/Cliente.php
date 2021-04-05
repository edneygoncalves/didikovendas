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



    public function getFotoAttribute()
    {
        if (!strlen($this->attributes['foto'])) {
            return null;
        }
        return \Storage::cloud()->temporaryUrl('clientes/' . $this->attributes['foto'], \Carbon\Carbon::now()->addMinutes(1));

    }


    public function setFotoAttribute($img)
    {
        if (strlen($img) > 0)
            $this->attributes['foto'] = \StoreBase64($img, 812);
    }


    public function getUrlWhatsappAttribute()
    {
        $whats = preg_replace('/[^0-9]/','', $this->attributes['whatsapp']);
        return 'https://web.whatsapp.com/send?phone=' . $whats;
    }

}
