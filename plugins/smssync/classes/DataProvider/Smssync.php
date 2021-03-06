<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * SMSSync Data Providers
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    DataProvider\SMSSync
 * @copyright  2013 Ushahidi
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License Version 3 (GPLv3)
 */

use Ushahidi\Core\Entity\Contact;

class DataProvider_Smssync extends DataProvider {

	/**
	 * Contact type user for this provider
	 */
	public $contact_type = Contact::PHONE;

	/**
	 * @return mixed
	 */
	public function send($to, $message, $title = "")
	{
		// The SMSSync App on the phone will pick this SMS later for sending
		// For now just send back an autogenerated Tracking ID
		return array(Message_Status::PENDING_POLL, $this->tracking_id(Message_Type::SMS));
	}

}
