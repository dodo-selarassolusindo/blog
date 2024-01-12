<?php

namespace PHPMaker2024\prj_membership\Entity;

use DateTime;
use DateTimeImmutable;
use DateInterval;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\SequenceGenerator;
use Doctrine\DBAL\Types\Types;
use PHPMaker2024\prj_membership\AbstractEntity;
use PHPMaker2024\prj_membership\AdvancedSecurity;
use PHPMaker2024\prj_membership\UserProfile;
use function PHPMaker2024\prj_membership\Config;
use function PHPMaker2024\prj_membership\EntityManager;
use function PHPMaker2024\prj_membership\RemoveXss;
use function PHPMaker2024\prj_membership\HtmlDecode;
use function PHPMaker2024\prj_membership\EncryptPassword;

/**
 * Entity class for "userlevelpermissions" table
 */
#[Entity]
#[Table(name: "userlevelpermissions")]
class Userlevelpermission extends AbstractEntity
{
    public static array $propertyNames = [
        'UserLevelID' => 'userLevelId',
        'TableName' => 'tableName',
        'Permission' => 'permission',
    ];

    #[Id]
    #[Column(name: "UserLevelID", type: "integer")]
    private int $userLevelId;

    #[Id]
    #[Column(name: "TableName", type: "string")]
    private string $tableName;

    #[Column(name: "Permission", type: "integer")]
    private int $permission;

    public function __construct(int $userLevelId, string $tableName)
    {
        $this->userLevelId = $userLevelId;
        $this->tableName = $tableName;
    }

    public function getUserLevelId(): int
    {
        return $this->userLevelId;
    }

    public function setUserLevelId(int $value): static
    {
        $this->userLevelId = $value;
        return $this;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function setTableName(string $value): static
    {
        $this->tableName = $value;
        return $this;
    }

    public function getPermission(): int
    {
        return $this->permission;
    }

    public function setPermission(int $value): static
    {
        $this->permission = $value;
        return $this;
    }
}
