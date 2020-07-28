<?php
/**
 * Class AnalyticsWebsiteByCountryModel
 * Model for analytics_website_by_country table in database
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */
namespace App\Models;

use CodeIgniter\Model;

class AnalyticsWebsiteByCountryModel extends Model
{
    protected $table = 'analytics_website_by_country';
    protected $primaryKey = 'id';

    protected $allowedFields = [];

    protected $returnType = 'App\Entities\AnalyticsWebsiteByCountry';
    protected $useSoftDeletes = false;

    protected $useTimestamps = false;
}