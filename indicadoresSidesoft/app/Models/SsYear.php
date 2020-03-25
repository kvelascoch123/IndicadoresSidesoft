<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SsYear
 * 
 * @property int $ss_year_id
 * @property string $name
 * @property float $value
 * @property bool $isactive
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|SsBacklogYear[] $ss_backlog_years
 *
 * @package App\Models
 */
class SsYear extends Model
{
	protected $table = 'ss_year';
	protected $primaryKey = 'ss_year_id';

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

	public function ss_backlog_years()
	{
		return $this->hasMany(SsBacklogYear::class);
	}
}
