<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Job
 * 
 * @property string $id
 * @property string $queue
 * @property string $payload
 * @property int $attempts
 * @property int $reserved_at
 * @property int $available_at
 * @property int $created_at
 *
 * @package App\Models
 */
class Job extends Model
{
	protected $table = 'jobs';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'attempts' => 'int',
		'reserved_at' => 'int',
		'available_at' => 'int',
		'created_at' => 'int'
	];

	protected $fillable = [
		'id',
		'queue',
		'payload',
		'attempts',
		'reserved_at',
		'available_at'
	];
}
