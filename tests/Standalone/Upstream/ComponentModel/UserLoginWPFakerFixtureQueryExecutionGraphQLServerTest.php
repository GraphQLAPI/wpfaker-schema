<?php

declare(strict_types=1);

namespace PHPUnitForGraphQLAPI\GraphQLAPI\Standalone\Upstream\ComponentModel;

use PHPUnitForGraphQLAPI\WPFakerSchema\Standalone\AbstractWPFakerFixtureQueryExecutionGraphQLServerTest;

class UserLoginWPFakerFixtureQueryExecutionGraphQLServerTest extends AbstractWPFakerFixtureQueryExecutionGraphQLServerTest
{
    /**
     * Directory under the fixture files are placed
     */
    protected function getFixtureFolder(): string
    {
        return __DIR__ . '/FixtureUserLogin';
    }

    /**
     * @return string[]
     */
    protected static function getGraphQLServerComponentClasses(): array
    {
        return [
            ...parent::getGraphQLServerComponentClasses(),
            ...[
                \PoPWPSchema\Users\Component::class,
                \PoPCMSSchema\UserStateMutationsWP\Component::class,
            ]
        ];
    }
}
