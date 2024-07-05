<?php

declare(strict_types=1);

/**
 * SPDX-FileCopyrightText: 2024 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

namespace OCA\Whiteboard\Service;

use OCP\AppFramework\Services\IAppConfig;

class ConfigService {
	public function __construct(
		private IAppConfig $appConfig,
	) {
	}

	public function getJwtSecretKey(): string {
		return $this->appConfig->getAppValueString('jwt_secret_key', '');
	}

	public function getCollabBackendUrl(): string {
		return $this->appConfig->getAppValueString('collabBackendUrl', '');
	}
}