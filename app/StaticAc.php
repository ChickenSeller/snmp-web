<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\StaticAc
 *
 * @mixin \Eloquent
 * @property int $id 自增ID
 * @property string $bssid AC设备物理地址
 * @property string $ip AC设备IP地址
 * @property string $location
 * @property string $master_ip 母设备IP地址
 * @property string $model_name AC设备型号
 * @property string $create_time 记录创建时间
 * @property string $update_time 记录更新时间
 * @method static \Illuminate\Database\Query\Builder|\App\StaticAc whereBssid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StaticAc whereCreateTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StaticAc whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StaticAc whereIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StaticAc whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StaticAc whereMasterIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StaticAc whereModelName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StaticAc whereUpdateTime($value)
 */
class StaticAc extends Model
{
    protected $table = "s_ac";
    public $timestamps=false;
}
