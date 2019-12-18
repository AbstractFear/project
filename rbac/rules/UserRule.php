<?php
namespace app\rbac\rules;

use yii\rbac\Rule;
use app\models\News;

/**
 * Проверяем authorID на соответствие с пользователем, переданным через параметры
 */
class UserRule extends Rule
{
    public $name = 'isUser';

    /**
     * @param string|int $user the user ID.
     * @param Item $item the role or permission that this rule is associated width.
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return bool a value indicating whether the rule permits the role or permission it is associated with.
     */
    public function execute($user, $item, $params)
    {
        return isset($params['test']) ? $params['test']->user_id == $user : false;
    }
}