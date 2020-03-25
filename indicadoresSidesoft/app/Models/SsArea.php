<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SsArea
 * 
 * @property int $ss_area_id
 * @property string $name
 * @property float $value
 * @property bool $isactive
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|SsUser[] $ss_users
 *
 * @package App\Models
 */
class SsArea extends Model
{
	protected $table = 'ss_area';
	protected $primaryKey = 'ss_area_id';

	protected $casts = [
		'value' => 'float',
		'isactive' => 'bool'
	];

	protected $fillable = [
		'name',
		'value',
		'isactive',
		'description'
	];

	public function ss_users()
	{
		return $this->hasMany(SsUser::class);
	}
}
