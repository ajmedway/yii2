<?php

namespace yii\db\cubrid\conditions;

/**
 * {@inheritdoc}
 */
class LikeConditionBuilder extends \yii\db\conditions\LikeConditionBuilder
{
    /**
     * @inheritdoc
     */
    protected $escapeCharacter = '!';
    /**
     * `\` is initialized in [[buildLikeCondition()]] method since
     * we need to choose replacement value based on [[\yii\db\Schema::quoteValue()]].
     * @inheritdoc
     */
    protected $escapingReplacements = [
        '%' => '!%',
        '_' => '!_',
        '!' => '!!',
    ];
}
