<?php
/**
 * Created by CRMEB.
 * Copyright (c) 2017~2019 http://www.crmeb.com All rights reserved.
 * Author: liaofei <136327134@qq.com>
 * Date: 2019/3/27 21:44
 */

namespace app\models\user;

use app\models\store\StoreOrder;
use think\Collection;
use think\db\exception\DataNotFoundException;
use think\db\exception\DbException;
use think\db\exception\ModelNotFoundException;
use think\facade\Cache;
use crmeb\traits\ModelTrait;
use crmeb\basic\BaseModel;

/**
 * TODO 用户消费新增金额明细 model
 * Class UserBill
 * @package app\models\user
 */
class UserSpread extends BaseModel
{
    /**
     * 数据表主键
     * @var string
     */
    protected $pk = 'id';

    /**
     * 模型名称
     * @var string
     */
    protected $name = 'user_spread';

    use ModelTrait;

    /**
     * @param $uid
     * @param $spread_uid
     * @return bool|UserSpread
     * @throws DataNotFoundException
     * @throws DbException
     * @throws ModelNotFoundException
     */
    public static function setSpread($uid, $spread_uid)
    {
        if (!$spread_uid) {
            return true;
        }

        $sp = $spread_uid;
        $userlist = User::column('uid,spread_uid', 'uid');
        while ($sp) {
            if ($sp == $uid) {
                $spread_uid = 0;
                break;
            }
            $sp = $userlist[$sp]['spread_uid'] ?? 0;
        }

        $user = User::where('uid', $uid)->find();
        $spread_user = User::get($spread_uid);
        if (!$user || !$spread_user || !$spread_user['is_promoter']) {
            return true;
        }
        //首先获取绑定方式
        $bind_type = sys_config('bind_type', 1);
        switch ($bind_type) {
            case 2:
                if (self::where('uid', $uid)->where('lock', 1)->find()) {
                    return true;
                }
                return self::create([
                    'uid' => $uid,
                    'spread_uid' => $spread_uid,
                    'lock' => 0,
                    'spread_time' => time()
                ]);
                break;
            case 3:
                if (self::where('uid', $uid)->where('lock', 1)->find()) {
                    return true;
                }
                self::create([
                    'uid' => $uid,
                    'spread_uid' => $spread_uid,
                    'lock' => 0,
                    'spread_time' => time()
                ]);
                $user['spread_uid'] = $spread_uid;
                $user['spread_time'] = time();
                return $user->save() && User::setUserSpreadCount($spread_uid);
                break;
            default:
                if (self::where('uid', $uid)->where('lock', 1)->find()) {
                    return true;
                }
                self::create([
                    'uid' => $uid,
                    'spread_uid' => $spread_uid,
                    'lock' => 1,
                    'spread_time' => time()
                ]);
                $user['spread_uid'] = $spread_uid;
                $user['spread_time'] = time();
                return $user->save() && User::setUserSpreadCount($spread_uid);
                break;
        }
    }


    /**
     * @param $uid
     * @return bool
     * @throws DataNotFoundException
     * @throws DbException
     * @throws ModelNotFoundException
     */
    public static function setSpreadSure($uid)
    {
        //首先获取绑定方式
        $bind_type = sys_config('bind_type', 1);
        if ($bind_type != 2) {
            return true;
        }
        if (self::where('uid', $uid)->where('lock', 1)->find()) {
            return true;
        }
        $log = self::where('uid', $uid)->order('spread_time', 'desc')->find();
        if (!$log) {
            return true;
        }
        $sp = $log['spread_uid'];
        $userlist = User::column('uid,spread_uid', 'uid');
        while ($sp) {
            if ($sp == $uid) {
                $log['spread_uid'] = 0;
                break;
            }
            $sp = $userlist[$sp]['spread_uid'];
        }
        if (!$log['spread_uid']) {
            return true;
        }
        $log['lock'] = 1;
        return $log->save() && User::where('uid', $uid)->update(['spread_uid' => $log['spread_uid'], 'spread_time' => $log['spread_time']]) && User::setUserSpreadCount($log['spread_uid']);
    }
}
