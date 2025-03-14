/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import {initTabs} from "./Tabs";
import {initAccordions} from "./Accordion";
import {initSymbolsSearch} from "./SymbolsSearch";
import {initSymbolsTable} from "./SymbolsTable";

document.addEventListener("DOMContentLoaded", function () {
	initTabs();
	initAccordions();
	initSymbolsSearch();
	initSymbolsTable();
});
