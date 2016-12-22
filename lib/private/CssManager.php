<?php
/**
 * @copyright Copyright (c) 2016, John Molakvoæ (skjnldsv@protonmail.com)
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OC;

use OCP\Files\IAppData;
use OCP\Files\NotFoundException;
use OCP\Files\SimpleFS\ISimpleFile;

/**
 * This class implements methods to access SCSS cached files
 * @since 11.0.0
 */

class CssManager {

	/** @var IAppData */
	private $appData;

	/**
	 * CssManager constructor.
	 *
	 * @param IAppData $appData
	 */
	public function __construct(IAppData $appData) {
		$this->appData = $appData;
	}

	/**
	 * Get the css file and return ISimpleFile
	 *
	 * @param string $fileName css filename with extension
	 * @param string $appName css app name
	 * @return ISimpleFile
	 * @throws NotFoundException
	 */
	public function getCss($fileName, $appName) {
		$folder = $this->appData->getFolder($appName);
		return $folder->getFile($fileName);
	}
}
