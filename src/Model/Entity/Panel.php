<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Panel Entity
 *
 * @property int $id
 * @property string $app_name
 * @property string|null $username
 * @property string|null $password
 * @property string|null $url
 * @property string|null $file
 * @property string|null $docs_file
 * @property string|null $public_key
 * @property string|null $secret_key
 * @property string|null $api_key
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 */
class Panel extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'app_name' => true,
        'username' => true,
        'password' => true,
        'url' => true,
        'file' => true,
        'docs_file' => true,
        'public_key' => true,
        'secret_key' => true,
        'api_key' => true,
        'created' => true,
        'modified' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
