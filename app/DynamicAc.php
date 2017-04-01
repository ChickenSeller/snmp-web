<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\DynamicAc
 *
 * @property int $id 自增ID
 * @property string $ip MAC地址
 * @property string $proccessor_info 处理器信息(json)
 * @property string $fan_info 风扇信息(json)
 * @property string $storage_info 存储器信息(json)
 * @property int $memory_size 内存容量
 * @property int $memory_used 已用内存
 * @property int $memory_free 空闲内存
 * @property string $power_supply_info 电源信息(json)
 * @property int $cpu_used_percent CPU负载
 * @property int $memory_used_percent 内存负载
 * @property int $packet_loss_percent 丢包率
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereCpuUsedPercent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereCreateTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereFanInfo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereMemoryFree($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereMemorySize($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereMemoryUsed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereMemoryUsedPercent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc wherePacketLossPercent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc wherePowerSupplyInfo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereProccessorInfo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereStorageInfo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DynamicAc whereUpdateTime($value)
 * @mixin \Eloquent
 */
class DynamicAc extends Model
{
    protected $table = "d_ac";
    public $timestamps=false;
}
