<?php declare(strict_types=1);

namespace EvolutionWorkspace;

use Base3\Api\IContainer;
use Base3\Api\IPlugin;

final class EvolutionWorkspacePlugin implements IPlugin {

	public function __construct(
		private readonly IContainer $container
	) {}

	public static function getName(): string {
		return 'evolutionworkspaceplugin';
	}

	public function init() {
		$this->container->set(
			self::getName(),
			$this,
			IContainer::SHARED
		);
	}
}
