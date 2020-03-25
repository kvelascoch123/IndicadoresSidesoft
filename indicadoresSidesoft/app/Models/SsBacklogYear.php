<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SsBacklogYear
 * 
 * @property int $ss_backlog_year_id
 * @property int $ss_backlog_id
 * @property int $ss_year_id
 * @property int $ss_user_id
 * @property float $average
 * @property bool $isactive
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property SsBacklog $ss_backlog
 * @property SsUser $ss_user
 * @property SsYear $ss_year
 *
 * @package App\Models
 */
class SsBacklogYear extends Model
{
	protected $table = 'ss_backlog_year';
	protected $primaryKey = 'ss_backlog_year_id';

	protected $casts = [
		'ss_backlog_id' => 'int',
		'ss_year_id' => 'int',
		'ss_user_id' => 'int',
		'average' => 'float',
		'isactive' => 'bool'
	];

	protected $fillable = [
		'ss_backlog_id',
		'ss_year_id',
		'ss_user_id',
		'average',
		'isactive',
		'description'
	];

	public function ss_backlog()
	{
		return $this->belongsTo(SsBacklog::class);
	}

	public function ss_user()
	{
		return $this->belongsTo(SsUser::class);
	}

	public function ss_year()
	{
		return $this->belongsTo(SsYear::class);
	}
}
