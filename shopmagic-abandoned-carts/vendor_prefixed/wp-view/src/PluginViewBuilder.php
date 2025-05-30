<?php

namespace ShopMagicCartVendor\WPDesk\View;

use ShopMagicCartVendor\WPDesk\View\Renderer\SimplePhpRenderer;
use ShopMagicCartVendor\WPDesk\View\Resolver\ChainResolver;
use ShopMagicCartVendor\WPDesk\View\Resolver\DirResolver;
use ShopMagicCartVendor\WPDesk\View\Resolver\WPThemeResolver;
/**
 * Facilitates building of the default plugin renderer.
 *
 * @package WPDesk\View
 */
class PluginViewBuilder
{
    /** @var string */
    private $plugin_dir;
    /** @var string[] */
    private $template_dirs;
    /**
     * @param string $plugin_dir Plugin directory path(absolute path)
     * @param string|string[] $template_dir Directory or list of directories with templates to render
     */
    public function __construct($plugin_dir, $template_dir = 'templates')
    {
        $this->plugin_dir = $plugin_dir;
        if (!is_array($template_dir)) {
            $this->template_dirs = [$template_dir];
        } else {
            $this->template_dirs = $template_dir;
        }
    }
    /**
     * Creates simple renderer that search for the templates in plugin dir and in theme/child dir.
     *
     * For example if your plugin dir is /plugin, template dir is /templates, theme is /theme, and a child theme is /child
     * the templates will be loaded from(order is important):
     * - /child/plugin/*.php
     * - /theme/plugin/*.php
     * - /plugin/templates/*.php
     *
     * @return SimplePhpRenderer
     */
    public function createSimpleRenderer()
    {
        $resolver = new ChainResolver();
        $resolver->appendResolver(new WPThemeResolver(basename($this->plugin_dir)));
        foreach ($this->template_dirs as $dir) {
            $dir = trailingslashit($this->plugin_dir) . trailingslashit($dir);
            $resolver->appendResolver(new DirResolver($dir));
        }
        return new SimplePhpRenderer($resolver);
    }
    /**
     * Load templates using simple renderer.
     *
     * @param string $name Name of the template
     * @param string $path Additional path of the template ie. for path "path" the templates would be loaded from /plugin/templates/path/*.php
     * @param array $args Arguments for templates to use
     *
     * @return string Rendered template.
     */
    public function loadTemplate($name, $path = '.', $args = [])
    {
        $renderer = $this->createSimpleRenderer();
        return $renderer->render(trailingslashit($path) . $name, $args);
    }
}
