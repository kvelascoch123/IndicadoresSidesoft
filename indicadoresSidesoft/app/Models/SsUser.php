<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SsUser
 * 
 * @property int $ss_user_id
 * @property string $name
 * @property string $email
 * @property string $tax_id
 * @property int $ss_area_id
 * @property float $value
 * @property bool $isactive
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property SsArea $ss_area
 * @property Collection|SsBacklogYear[] $ss_backlog_years
 *
 * @package App\Models
 */
class SsUser extends Model
{
	protected $table = 'ss_user';
	protected $primaryKey = 'ss_user_id';

	protected $casts = [
		'ss_area_id' => 'int',
		'value' => 'float',
		'isactive' => 'bool'
	];

	protected $fillable = [
		'name',
		'email',
		'tax_id',
		'ss_area_id',
		'value',
		'isactive',
		'description'
	];

	public function ss_area()
	{
		return $this->belongsTo(SsArea::class);
	}

	public function ss_backlog_years()
	{
		return $this->hasMany(SsBacklogYear::class);
	}
}
