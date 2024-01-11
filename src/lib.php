<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Atto HTML editor
 *
 * @package    tool_htmlbootstrapeditor
 * @copyright  2019 RECIT
 * @license    {@link http://www.gnu.org/licenses/gpl-3.0.html} GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

function tool_htmlbootstrapeditor_inject_js() {
    global $PAGE;

    $PAGE->requires->js('/admin/tool/htmlbootstrapeditor/content.js');
    $PAGE->requires->js('/admin/tool/htmlbootstrapeditor/editor.js');
}

function tool_htmlbootstrapeditor_init_settings() {
    global $PAGE, $CFG;

    $settings = array(
        'currentthemesubrev' => theme_get_sub_revision_for_theme($CFG->theme),
        'showcase_url' => get_config('tool_htmlbootstrapeditor', 'enableshowcase') == 1 ? get_config('tool_htmlbootstrapeditor', 'showcase_url') : '',
        'stylesheet_to_add' => get_config('tool_htmlbootstrapeditor', 'stylesheet_to_add'),
        'iconclass' => get_config('tool_htmlbootstrapeditor', 'iconclass'),
        'pixabaykey' => get_config('tool_htmlbootstrapeditor', 'pixabaykey'),
    );

    $PAGE->requires->js_init_call('M.recit.htmlbootstrapeditor.init_settings', array($settings));
}

/**
 * Initialise the js strings required for this module.
 */
function tool_htmlbootstrapeditor_strings_for_js() {
    global $PAGE; 

    $PAGE->requires->strings_for_js(array('pluginname',
                                          'htmleditor',
                                          'howmuchcols',
                                          'selectoption',
                                          'definecols',
                                          'imagebank',
                                          'category',
                                          'templateadded',
                                          'msgsuccess',
                                          'backgroundcover',
                                          'verticalalign',
                                          'heading',
                                          'headingstyle',
                                          'audiohelp',
                                          'headingwithicon',
                                          'appliedasstyle',
                                          'gridbuilder',
                                          'confirmreplace',
                                          'coltotal',
                                          'top',
                                          'bottom',
                                          'lateral',
                                          'paddingtype',
                                          'responsive',
                                          'all',
                                          'create',
                                          'reverserow',
                                          'verticalspace',
                                          'search',
                                          'herit',
                                          'inputurl',
                                          'createlink',
                                          'texttoshow',
                                          'openinnewwindow',
                                          'description',
                                          'name',
                                          'selecticon',
                                          'inserttop',
                                          'insertbottom',
                                          'deleteformat',
                                          'margin',
                                          'border',
                                          'padding',
                                          'min',
                                          'layouts',
                                          'value',
                                          'max',
                                          'column',
                                          'line',
                                          'returntohtmleditor',
                                          'bold',
                                          'italic',
                                          'underline',
                                          'strikethrough',
                                          'removeformat',
                                          'bgcolor',
                                          'removebgcolor',
                                          'fontcolor',
                                          'removefontcolor',
                                          'list',
                                          'numberedlist',
                                          'alignleft',
                                          'aligncenter',
                                          'alignright',
                                          'justify',
                                          'outdent',
                                          'indent',
                                          'link',
                                          'removelink',
                                          'undo',
                                          'redo',
                                          'highlighttool',
                                          'math',
                                          'addimage',
                                          'screenshot',
                                          'failedtodrop',
                                          'drag',
                                          'back',
                                          'edit',
                                          'createcomponent',
                                          'moveelementup',
                                          'moveelementdown',
                                          'clone',
                                          'delete',
                                          'addcomponent',
                                          'addcomponentdesc',
                                          'bootstrap',
                                          'htmlproprieties',
                                          'style',
                                          'bookmark',
                                          'templates',
                                          'components',
                                          'html',
                                          'mycomponents',
                                          'basecomponents',
                                          'showroom',
                                          'createtemplate',
                                          'import',
                                          'savetemplate',
                                          'options',
                                          'exportcollection',
                                          'export',
                                          'cancel',
                                          'save',
                                          'deleteconfirmmsg',
                                          'errorseeconsole',
                                          'texteditor',
                                          'canvas',
                                          'preview',
                                          'sourcecode',
                                          'proprieties',
                                          'tree',
                                          'iframe',
                                          'title',
                                          'insidebegining',
                                          'insideend',
                                          'inside',
                                          'before',
                                          'after',
                                          'paragraph',
                                          'button',
                                          'collapsebutton',
                                          'videobutton',
                                          'btnoutline',
                                          'audio',
                                          'video',
                                          'embed',
                                          'grid',
                                          'row',
                                          'column',
                                          'table',
                                          'tablecell',
                                          'tabletitle',
                                          'tablerow',
                                          'listitem',
                                          'alert',
                                          'avatarcard',
                                          'card',
                                          'cardbody',
                                          'cardheader',
                                          'cardfooter',
                                          'flipcard',
                                          'front',
                                          'rear',
                                          'media',
                                          'mediabody',
                                          'carousel',
                                          'carouselnav',
                                          'tab',
                                          'accordion',
                                          'accordionitem',
                                          'tabcontent',
                                          'split',
                                          'image',
                                          'imagewithcaption',
                                          'clickableimage',
                                          'getstarted',
                                          'icon',
                                          'width',
                                          'height',
                                          'align',
                                          'layout',
                                          'font',
                                          'default',
                                          'fontsize',
                                          'color',
                                          'invalidcomponent',
                                          'nativecomponents',
                                          'text',
                                          'control',
                                          'container',
                                          'actions',
                                          'background',
                                            'backgroundcolor',
                                            'backgroundimage',
                                            'iconsize',
                                            'linkoptions',
                                            'href',
                                            'linkaction',
                                            'samepage',
                                            'newtab',
                                            'source',
                                            'videourl',
                                            'properties',
                                            'htmlcode',
                                            'taboptions',
                                            'pill',
                                            'left',
                                            'center',
                                            'right',
                                            'fullwidth',
                                            'horizontal',
                                            'addtab',
                                            'accordionoptions',
                                            'add',
                                            'layoutspacing',
                                            'spacing',
                                            'borderstyle',
                                            'spacing',
                                            'bordercolor',
                                            'borderradius',
                                            'basic',
                                            'classlist',
                                            'backgroundcolor',
                                            'shadow',
                                            'none',
                                            'alignment',
                                            'responsivesize',
                                            'buttonfullwidth',
                                            'outline',
                                            'size',
                                            'big',
                                            'small',
                                            'htmlattributes',
                                            'id',
                                            'no',
                                            'yes',
                                            'striped',
                                            'sourcecodedesigner',
                                            'nonbreakingspace',
                                            'horizontalbar',
                                            'navigation',
                                            'textcolor',
                                            'keyword',
                                            'tableheader',
                                            'smartphone',
                                            'verticaltablet',
                                            'horizontaltablet',
                                            'hdscreen',
                                            'fhdscreen', 'dimension', 'fullheight'
                                        ),
                                    'tool_htmlbootstrapeditor');
}
