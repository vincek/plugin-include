<?php
/**
 * Include plugin (editbtn header component)
 *
 * @license GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author  Michael Klier <chi@chimeric.de>
 */

if (!defined('DOKU_INC'))
    define('DOKU_INC', realpath(dirname(__FILE__) . '/../../') . '/');
if (!defined('DOKU_PLUGIN'))
    define('DOKU_PLUGIN', DOKU_INC . 'lib/plugins/');
require_once (DOKU_PLUGIN . 'syntax.php');

class syntax_plugin_include_div extends DokuWiki_Syntax_Plugin {

    function getType() {
        return 'formatting';
    }
    
    function getSort() {
        return 50;
    }

    function handle($match, $state, $pos, &$handler) {
        // this is a syntax plugin that doesn't offer any syntax, so there's nothing to handle by the parser
    }

    /**
     * Renders an include edit button
     *
     * @author Michael Klier <chi@chimeric.de>
     */
    function render($mode, &$renderer, $data) {
        if ($mode == 'xhtml') {
            switch($data[0]) {
                case 'open':
                    $renderer->doc .= '<div class="plugin_include_content" id="plugin_include__' . $data[1] . '">' . DOKU_LF;
                    break;
                case 'close':
                    $renderer->doc .= '</div>' . DOKU_LF;
                    break;
            }
            return true;
        }
        return false;
    }
}
// vim:ts=4:sw=4:et:enc=utf-8:
