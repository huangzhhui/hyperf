<?php

namespace Hyperf\Casbin\Db;

use Hyperf\Casbin\Db\Rule;
use Casbin\Model\Model;
use Casbin\Persist\Adapter as AbstractAdapter;
use Casbin\Persist\AdapterHelper;

class Adapter implements AbstractAdapter
{

    use AdapterHelper;

    /**
     * @inheritDoc
     */
    public function loadPolicy(Model $model): void
    {
        $rows = Rule::query()->get()->toArray();
        foreach ($rows as $row) {
            $line = implode(', ', array_slice(array_values($row), 1));
            $this->loadPolicyLine(trim($line), $model);
        }
    }

    /**
     * @inheritDoc
     */
    public function savePolicy(Model $model): void
    {
        foreach ($model->model['p'] as $ptype => $ast) {
            foreach ($ast->policy as $rule) {
                $this->savePolicyLine($ptype, $rule);
            }
        }
        foreach ($model->model['g'] as $ptype => $ast) {
            foreach ($ast->policy as $rule) {
                $this->savePolicyLine($ptype, $rule);
            }
        }
    }

    private function savePolicyLine($ptype, array $rule)
    {
        $attributes['ptype'] = $ptype;
        foreach ($rule as $key => $value) {
            $attributes['v' . strval($key)] = $value;
        }
        Rule::query()->create($attributes);
    }

    /**
     * @inheritDoc
     */
    public function addPolicy(string $sec, string $ptype, array $rule): void
    {
        $this->savePolicyLine($ptype, $rule);
    }

    /**
     * @inheritDoc
     */
    public function removePolicy(string $sec, string $ptype, array $rule): void
    {
        $result = Rule::query()->where('ptype', $ptype);
        foreach ($rule as $key => $value) {
            $result->where('v' . strval($key), $value);
        }
        $result->delete();
    }

    /**
     * @inheritDoc
     */
    public function removeFilteredPolicy(string $sec, string $ptype, int $fieldIndex, string ...$fieldValues): void
    {
        $result = Rule::query()->where('ptype', $ptype);
        foreach (range(0, 5) as $value) {
            if ($fieldIndex <= $value && $value < $fieldIndex + count($fieldValues)) {
                if ('' != $fieldValues[$value - $fieldIndex]) {
                    $result->where('v' . strval($value), $fieldValues[$value - $fieldIndex]);
                }
            }
        }
        $result->delete();
    }
}