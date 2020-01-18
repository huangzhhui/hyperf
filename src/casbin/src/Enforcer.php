<?php

namespace Hyperf\Casbin;

use Casbin\Effect\Effector;
use Casbin\Model\Model;
use Casbin\Persist\Adapter;
use Casbin\Persist\Watcher;
use Casbin\Rbac\RoleManager;
use Hyperf\Utils\ApplicationContext;
use Hyperf\Utils\Context;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class Enforcer extends \Casbin\Enforcer
{

    public function initWithFile(string $modelPath, string $policyPath): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function initWithAdapter(string $modelPath, Adapter $adapter): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function initWithModelAndAdapter(Model $m, Adapter $adapter = null): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    protected function initialize(): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function loadModel(): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function getModel(): Model
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function setModel(Model $model): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function getAdapter(): Adapter
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function setAdapter(Adapter $adapter): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function setWatcher(Watcher $watcher): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function setRoleManager(RoleManager $rm): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function setEffector(Effector $eft): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function clearPolicy(): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function loadPolicy(): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function loadFilteredPolicy($filter): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function isFiltered(): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function savePolicy(): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function enableEnforce(bool $enabled = true): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function enableLog(bool $enabled = true): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function enableAutoSave(bool $autoSave = true): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function enableAutoBuildRoleLinks(bool $autoBuildRoleLinks = true): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function buildRoleLinks(): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function enforce(...$rvals): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    protected function getExpressionLanguage(array $functions): ExpressionLanguage
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    protected function getExpString(string $expString): string
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    protected function addPolicyInternal(string $sec, string $ptype, array $rule): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    protected function removePolicyInternal(string $sec, string $ptype, array $rule): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    protected function removeFilteredPolicyInternal(
        string $sec,
        string $ptype,
        int $fieldIndex,
        string ...$fieldValues
    ): bool {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getAllSubjects(): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getAllNamedSubjects(string $ptype): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getAllObjects(): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getAllNamedObjects(string $ptype): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getAllActions(): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getAllNamedActions(string $ptype): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getAllRoles(): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getAllNamedRoles(string $ptype): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getPolicy(): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getFilteredPolicy(int $fieldIndex, string ...$fieldValues): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getNamedPolicy(string $ptype): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getFilteredNamedPolicy(string $ptype, int $fieldIndex, string ...$fieldValues): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getGroupingPolicy(): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getFilteredGroupingPolicy(int $fieldIndex, string ...$fieldValues): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getNamedGroupingPolicy(string $ptype): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getFilteredNamedGroupingPolicy(string $ptype, int $fieldIndex, string ...$fieldValues): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function hasPolicy(...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function hasNamedPolicy(string $ptype, ...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function addPolicy(...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function addNamedPolicy(string $ptype, ...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function removePolicy(...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function removeFilteredPolicy(int $fieldIndex, string ...$fieldValues): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function removeNamedPolicy(string $ptype, ...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function removeFilteredNamedPolicy(string $ptype, int $fieldIndex, string ...$fieldValues): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function hasGroupingPolicy(...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function hasNamedGroupingPolicy(string $ptype, ...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function addGroupingPolicy(...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function addNamedGroupingPolicy(string $ptype, ...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function removeGroupingPolicy(...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function removeFilteredGroupingPolicy(int $fieldIndex, string ...$fieldValues): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function removeNamedGroupingPolicy(string $ptype, ...$params): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function removeFilteredNamedGroupingPolicy(string $ptype, int $fieldIndex, string ...$fieldValues): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function addFunction(string $name, \Closure $func): void
    {
        $this->call(__FUNCTION__, func_get_args());
    }

    public function getRolesForUser(string $name): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getUsersForRole(string $name): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function hasRoleForUser(string $name, string $role): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function addRoleForUser(string $user, string $role): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function deleteRoleForUser(string $user, string $role): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function deleteRolesForUser(string $user): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function deleteUser($user): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function deleteRole(string $role): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function deletePermission(string ...$permission): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function addPermissionForUser(string $user, string ...$permission): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function deletePermissionForUser(string $user, string ...$permission): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function deletePermissionsForUser(string $user): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getPermissionsForUser(string $user): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function hasPermissionForUser(string $user, string ...$permission): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getImplicitRolesForUser(string $name, string ...$domain): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getImplicitPermissionsForUser(string $user, string ...$domain): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getImplicitUsersForPermission(string ...$permission): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getUsersForRoleInDomain(string $name, string $domain): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getRolesForUserInDomain(string $name, string $domain): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function getPermissionsForUserInDomain(string $name, string $domain): array
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function addRoleForUserInDomain(string $user, string $role, string $domain): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    public function deleteRoleForUserInDomain(string $user, string $role, string $domain): bool
    {
        return $this->call(__FUNCTION__, func_get_args());
    }

    protected function call($name, $arguments)
    {
        $enforcer = $this->getEnforcer();
        if (! method_exists($enforcer, $name)) {
            throw new \RuntimeException('Method does not exist.');
        }
        return $enforcer->{$name}(...$arguments);
    }

    protected function getEnforcer(): \Casbin\Enforcer
    {
        if (! defined('BASE_PATH')) {
            throw new \InvalidArgumentException('BASE_PATH constant does not exist.');
        }
        return Context::getOrSet(\Casbin\Enforcer::class, function () {
            return ApplicationContext::getContainer()->get(EnforcerCreator::class)->create();
        });
    }

}