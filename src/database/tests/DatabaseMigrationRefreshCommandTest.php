<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace HyperfTest\Database;

use Hyperf\Database\Commands\Migrations\MigrateCommand;
use Hyperf\Database\Commands\Migrations\RefreshCommand;
use Hyperf\Database\Commands\Migrations\ResetCommand;
use Hyperf\Database\Commands\Migrations\RollbackCommand;
use Mockery;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application as ConsoleApplication;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

/**
 * @internal
 * @coversNothing
 */
class DatabaseMigrationRefreshCommandTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        ! defined('BASE_PATH') && define('BASE_PATH', __DIR__);
    }

    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function testRefreshCommandCallsCommandsWithProperArguments()
    {
        $command = new RefreshCommand();

        $console = Mockery::mock(ConsoleApplication::class)->makePartial();
        $console->__construct();
        $command->setApplication($console);

        $resetCommand = Mockery::mock(ResetCommand::class);
        $migrateCommand = Mockery::mock(MigrateCommand::class);

        $console->shouldReceive('find')->with('migrate:reset')->andReturn($resetCommand);
        $console->shouldReceive('find')->with('migrate')->andReturn($migrateCommand);

        $quote = DIRECTORY_SEPARATOR == '\\' ? '"' : "'";
        var_dump(new InputMatcher("--force=1 {$quote}migrate:reset{$quote}"));
        $resetCommand->shouldReceive('run')->with(new InputMatcher("--force=1 {$quote}migrate:reset{$quote}"), Mockery::any());
        $migrateCommand->shouldReceive('run')->with(new InputMatcher('--force=1 migrate'), Mockery::any());

        $this->runCommand($command);
    }

    public function testRefreshCommandCallsCommandsWithStep()
    {
        $command = new RefreshCommand();

        $console = Mockery::mock(ConsoleApplication::class)->makePartial();
        $console->__construct();
        $command->setApplication($console);

        $rollbackCommand = Mockery::mock(RollbackCommand::class);
        $migrateCommand = Mockery::mock(MigrateCommand::class);

        $console->shouldReceive('find')->with('migrate:rollback')->andReturn($rollbackCommand);
        $console->shouldReceive('find')->with('migrate')->andReturn($migrateCommand);

        $quote = DIRECTORY_SEPARATOR == '\\' ? '"' : "'";
        $rollbackCommand->shouldReceive('run')->with(new InputMatcher("--step=2 --force=1 {$quote}migrate:rollback{$quote}"), Mockery::any());
        $migrateCommand->shouldReceive('run')->with(new InputMatcher('--force=1 migrate'), Mockery::any());

        $this->runCommand($command, ['--step' => 2]);
    }

    protected function runCommand($command, $input = [])
    {
        return $command->run(new ArrayInput($input), new NullOutput());
    }
}

class InputMatcher extends Mockery\Matcher\MatcherAbstract
{
    public function __toString()
    {
        return '';
    }

    /**
     * @param \Symfony\Component\Console\Input\ArrayInput $actual
     * @return bool
     */
    public function match(&$actual)
    {
        return (string) $actual == $this->_expected;
    }
}
