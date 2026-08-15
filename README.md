# EvolutionWorkspace

`EvolutionWorkspace` is a normal BASE3 plugin and the dedicated writable source area for the Evolution agent.

The plugin itself is intentionally minimal. `EvolutionWorkspacePlugin` is the plugin composition class. Outputs, displays, services, migrations, assets, templates and tests are added as separate normal BASE3 components when requested.

Evolution may replace, extend or remove code in this plugin. No runtime code outside this plugin depends on its concrete implementation.
