<?php

namespace Hyperf\Task;


class TaskCallback
{

    /**
     * @var \Hyperf\Task\TaskRegister
     */
    private $taskRegister;

    public function __construct(\Hyperf\Task\TaskRegister $taskRegister)
    {
        $this->taskRegister = $taskRegister;
    }

    public function onTask(\Swoole\Server $server, int $taskId, int $workerId, $data)
    {
        if (isset($data['type']) && $this->taskRegister->has($data['type'])) {
            $callback = $this->taskRegister->get($data['type']);
            switch ($data['type']) {
                case 'callable':
                    if (! isset($data['callable']) || ! is_callable($data['callable'])) {
                        $callback($data['callable'], $data['data'] ?? null);
                    }
                    break;
            }
        }
    }

}