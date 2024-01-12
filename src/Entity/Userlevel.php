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
 * Entity class for "userlevels" table
 */
#[Entity]
#[Table(name: "userlevels")]
class Userlevel extends AbstractEntity
{
    public static array $propertyNames = [
        'UserLevelID' => 'userLevelId',
        'UserLevelName' => 'userLevelName',
    ];

    #[Id]
    #[Column(name: "UserLevelID", type: "integer", unique: true)]
    private int $userLevelId;

    #[Column(name: "UserLevelName", type: "string")]
    private string $userLevelName;

    public function getUserLevelId(): int
    {
        return $this->userLevelId;
    }

    public function setUserLevelId(int $value): static
    {
        $this->userLevelId = $value;
        return $this;
    }

    public function getUserLevelName(): string
    {
        return HtmlDecode($this->userLevelName);
    }

    public function setUserLevelName(string $value): static
    {
        $this->userLevelName = RemoveXss($value);
        return $this;
    }
}
