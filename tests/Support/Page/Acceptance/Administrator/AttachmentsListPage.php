<?php
/**
 * @package    DPAttachments
 * @copyright  Copyright (C) 2021 Digital Peak GmbH. <https://www.digital-peak.com>
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 */

namespace Tests\Support\Page\Acceptance\Administrator;

use Tests\Support\AcceptanceTester;

class AttachmentsListPage extends AcceptanceTester
{
	public static $url       = '/administrator/index.php?option=com_dpattachments&view=attachments&filter[state]=';
	public static $rootClass = '.com-dpattachments-attachments';
}
