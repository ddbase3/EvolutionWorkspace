<?php declare(strict_types=1);

namespace EvolutionWorkspace\Output;

use Base3\Api\IOutput;

final class Workspace implements IOutput {

	public static function getName(): string {
		return 'workspace';
	}

	public function getOutput(string $out = 'html', bool $final = false): string {
		// Return simple HTML output
		return '<h1>Hello Evolution Workspace</h1><p>Evolution can modify existing BASE3 components.</p><p>This is the second successful Evolution change.</p>';
	}
}
