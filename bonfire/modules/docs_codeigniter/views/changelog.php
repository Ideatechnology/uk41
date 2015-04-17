
<h1>Change Log</h1>

<h2>Version 2.1.4</h2>
<p>Release Date: July 8, 2013</p>


<ul>
	<li>General Changes
		<ul>
			<li>Improved security in <kbd>xss_clean()</kbd>.</li>
		</ul>
	</li>
</ul>

<h3>Bug fixes for 2.1.4:</h3>
<ul>
	<li>Fixed a bug (#1936) - <a href="libraries/migration.html">Migrations Library</a> method <samp>latest()</samp> had a typo when retrieving language values.</li>
	<li>Fixed a bug (#2021) - <a href="libraries/migration.html">Migrations Library</a> configuration file was mistakenly using Windows style line feeds.</li>
	<li>Fixed a bug (#1273) - <a href="database/active_record.html">Active Record</a> method <samp>set_update_batch()</samp> was using the incorrect variables and would cause an error.</li>
	<li>Fixed a bug (#2337) - <a href="libraries/email.html">Email Library</a> method <samp>print_debugger()</samp> was not using <samp>htmlspecialchars()</samp> when being shown in the browser.</li>
</ul>


<h2>Version 2.1.3</h2>
<p>Release Date: October 8, 2012</p>

<h3>Bug fixes for 2.1.3:</h3>
<ul>
	<li>Fixed a bug (#1543) - <a href="libraries/caching.html#file">File-based Caching</a> method <samp>get_metadata()</samp> used a non-existent array key to look for the TTL value.</li>
	<li>Fixed a bug (#1314) - <a href="libraries/session.html">Session Library</a> method <samp>sess_destroy()</samp> didn't destroy the userdata array.</li>
	<li>Fixed a bug where the <a href="libraries/profiler.html">Profiler Library</a> issued an E_WARNING error if <a href="libraries/session.html">Session</a> userdata contains objects.</li>
	<li>Fixed a bug (#1699) - <a href="libraries/migration.html">Migration Library</a> ignored the <samp>$config['migration_path']</samp> setting.</li>
	<li>Fixed a bug (#227) - <a href="libraries/input.html">Input Library</a> allowed unconditional spoofing of HTTP clients' IP addresses through the HTTP_CLIENT_IP header.</li>
	<li>Fixed a bug (#907) - <a href="libraries/input.html">Input Library</a> ignored HTTP_X_CLUSTER_CLIENT_IP and HTTP_X_CLIENT_IP headers when checking for proxies.</li>
	<li>Fixed a bug (#940) - <samp>csrf_verify()</samp> used to set the CSRF cookie while processing a POST request with no actual POST data, which resulted in validating a request that should be considered invalid.</li>
	<li>Fixed a bug in the <a href="libraries/security.html">Security Library</a> where a CSRF cookie was created even if <samp>$config['csrf_protection']</samp> is set tot FALSE.</li>
	<li>Fixed a bug (#1715) - <a href="libraries/input.html">Input Library</a> triggered <samp>csrf_verify()</samp> on CLI requests.</li>
</ul>

<h2>Version 2.1.2</h2>
<p>Release Date: June 29, 2012</p>

<ul>
	<li>General Changes
		<ul>
			<li>Improved security in <kbd>xss_clean()</kbd>.</li>
		</ul>
	</li>
</ul>

<h2>Version 2.1.1</h2>
<p>Release Date: June 12, 2012</p>

<ul>
	<li>General Changes
		<ul>
			<li>Fixed support for docx, xlsx files in mimes.php.</li>
		</ul>
	</li>
	<li>Libraries
		<ul>
			<li>Further improved MIME type detection in the <a href="libraries/file_uploading.html">File Uploading Library</a>.</li>
			<li>Added support for IPv6 to the <a href="libraries/input.html">Input Library</a>.</li>
			<li>Added support for the IP format parameter to the <a href="libraries/form_validation.html">Form Validation Library</a>.</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li><samp>url_title()</samp> performance and output improved. You can now use any string as the word delimiter. Backwards compatible with 'dash' or 'underscore' as words delimiters.</li>
		</ul>
	</li>
</ul>

<h3>Bug fixes for 2.1.1</h3>
<ul>
	<li>Fixed a bug (#697) - A wrong array key was used in the Upload library to check for mime-types.</li>
	<li>Fixed a bug - form_open() compared $action against site_url() instead of base_url()</li>
	<li>Fixed a bug - CI_Upload::_file_mime_type() could've failed if mime_content_type() is used for the detection and returns FALSE.</li>
	<li>Fixed a bug (#538) - Windows paths were ignored when using the <a href="libraries/image_lib.html">Image Manipulation Class</a> to create a new file.</li>
	<li>Fixed a bug - When database caching was enabled, $this->db->query() checked the cache before binding variables which resulted in cached queries never being found.</li>
	<li>Fixed a bug - CSRF cookie value was allowed to be any (non-empty) string before being written to the output, making code injection a risk.</li>
	<li>Fixed a bug (#726) - PDO put a 'dbname' argument in it's connection string regardless of the database platform in use, which made it impossible to use SQLite.</li>
	<li>Fixed a bug - CI_DB_pdo_result::num_rows() was not returning properly value with SELECT queries, cause it was relying on PDOStatement::rowCount().</li>
	<li>Fixed a bug (#1059) - CI_Image_lib::clear() was not correctly clearing all necessary object properties, namely width and height.</li>
</ul>


<h2>Version 2.1.0</h2>
<p>Release Date: November 14, 2011</p>

<ul>
	<li>General Changes
		<ul>
			<li>Fixed a potential parameter injection flaw in the <a href="libraries/security.html">Security Library</a> and strengthened the XSS filter for HTML5 vulnerabilites.</li>
			<li>Callback validation rules can now accept parameters like any other validation rule.</li>
			<li>Added html_escape() to the <a href="general/common_functions.html">Common functions</a> to escape HTML output for preventing XSS easliy.</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li>Added <samp>increment_string()</samp> to <a href="helpers/string_helper.html">String Helper</a> to turn "foo" into "foo-1" or "foo-1" into "foo-2".</li>
			<li>Altered form helper - made action on form_open_multipart helper function call optional. Fixes (#65)</li>
			<li><samp>url_title()</samp> will now trim extra dashes from beginning and end.</li>
			<li>Improved speed of <a href="helpers/string_helper.html">String Helper</a>'s <b>random_string()</b> method</li>
		</ul>
	</li>
	<li>Database
		<ul>
			<li>Added a <a href="http://www.cubrid.org/" target="_blank">CUBRID</a> driver to the <a href="libraries/database.html">Database driver</a>. Thanks to the CUBRID team for supplying this patch.</li>
			<li>Added a <a href="http://www.php.net/manual/en/intro.pdo.php" target="_blank">PDO</a> driver to the <a href="libraries/database.html">Database driver</a>.</li>
			<li>Typecast limit and offset in the <a href="database/queries.html">Database driver</a> to integers to avoid possible injection.</li>
			<li>Added additional option 'none' for the optional third argument for <kbd>$this->db->like()</kbd> in the <a href="database/active_record.html">Database driver</a>.
			</li>
			<li>Added <kbd>$this->db->insert_batch()</kbd> support to the OCI8 (Oracle) driver.</li>
		</ul>
	</li>
	<li>Libraries
		<ul>
			<li>Changed <kbd>$this->cart->insert()</kbd> in the <a href="libraries/cart.html">Cart library</a> to return the Row ID if a single item was inserted successfully.</li>
			<li>Added support to set an optional parameter in your callback rules of validation using the <a href="libraries/form_validation.html">Form Validation library</a>.</li>
			<li>Added a <a href="libraries/migration.html">Migration library</a> to assist with applying incremental updates to your database schema.</li>
			<li>Driver children can be located in any package path.</li>
			<li>Added <samp>is_unique</samp> to the <a href="libraries/form_validation.html">Form Validation library</a>.</li>
			<li>Added <kbd>$config['use_page_numbers']</kbd> to the <a href="libraries/pagination.html">Pagination library</a>, which enables real page numbers in the URI.</li>
			<li>Added TLS and SSL Encryption for SMTP.</li>
		</ul>
	</li>
	<li>Core
		<ul>
			<li>Changed private functions in <a href="libraries/cart.html">URI library</a> to protected so <kdb>MY_URI</kdb> can override them.</li>
			<li>Removed <samp>CI_CORE</samp> boolean constant from CodeIgniter.php (there are no longer different Reactor and Core versions).</li>
		</ul>
	</li>
</ul>

<h3>Bug fixes for 2.1.0</h3>
<ul>
	<li>Fixed #378 Robots identified as regular browsers by the <a href="libraries/user_agent.html">User Agent class</a>.</li>
	<li>If a config class was loaded first then a library with the same name is loaded, the config would be ignored.</li>
	<li>Fixed a bug (Reactor #19) where 1) the 404_override route was being ignored in some cases, and 2) auto-loaded libraries were not available to the 404_override controller when a controller existed but the requested method did not.</li>
	<li>Fixed a bug (Reactor #89) where MySQL export would fail if the table had hyphens or other non alphanumeric/underscore characters.</li>
	<li>Fixed a bug (#200) where MySQL queries would be malformed after calling <kbd>$this->db->count_all()</kbd> then <kdb>$this->db->get()</kdb></li>
	<li>Fixed bug #105 that stopped query errors from being logged unless database debugging was enabled</li>
	<li>Fixed a bug (#160) - Removed unneeded array copy in the file cache driver.</li>
	<li>Fixed a bug (#150) - <samp>field_data()</samp> now correctly returns column length.</li>
	<li>Fixed a bug (#8) - <samp>load_class()</samp> now looks for core classes in <samp>APPPATH</samp> first, allowing them to be replaced.</li>
	<li>Fixed a bug (#24) - ODBC database driver called incorrect parent in __construct().</li>
	<li>Fixed a bug (#85) - OCI8 (Oracle) database <kbd>escape_str()</kbd> function did not escape correct.</li>
	<li>Fixed a bug (#344) - Using schema found in <a href="libraries/sessions.html">Saving Session Data to a Database</a>, system would throw error "user_data does not have a default value" when deleting then creating a session.</li>
	<li>Fixed a bug (#112) - OCI8 (Oracle) driver didn't pass the configured database character set when connecting.</li>
	<li>Fixed a bug (#182) - OCI8 (Oracle) driver used to re-execute the statement whenever num_rows() is called.</li>
	<li>Fixed a bug (#82) - WHERE clause field names in the DB <kbd>update_string()</kbd> method were not escaped, resulting in failed queries in some cases.</li>
	<li>Fixed a bug (#89) - Fix a variable type mismatch in DB <kbd>display_error()</kbd> where an array is expected, but a string could be set instead.</li>
	<li>Fixed a bug (#467) - Suppress warnings generated from <kbd>get_magic_quotes_gpc()</kbd> (deprecated in PHP 5.4)</li>
	<li>Fixed a bug (#484) - First time <kbd>_csrf_set_hash()</kbd> is called, hash is never set to the cookie (in Security.php).</li>
	<li>Fixed a bug (#60) - Added <kbd>_file_mime_type()</kbd> method to the <a href="libraries/file_uploading.html">File Uploading Library</a> in order to fix a possible MIME-type injection (also fixes bug #394).</li>
	<li>Fixed a bug (#537) - Support for all wav type in browser.</li>
	<li>Fixed a bug (#576) - Using <kbd>ini_get()</kbd> function to detect if apc is enabled or not.</li>
	<li>Fixed invalid date time format in <a href="helpers/date_helper.html">Date helper</a> and <a href="libraries/xmlrpc.html">XMLRPC library</a>.</li>
</ul>

<h2>Version 2.0.3</h2>
<p>Release Date: August 20, 2011</p>

<ul>
	<li>Security
		<ul>
			<li>An improvement was made to the MySQL and MySQLi drivers to prevent exposing a potential vector for SQL injection on sites using multi-byte character sets in the database client connection.  <p>An incompatibility in PHP versions &lt; 5.2.3 and MySQL &lt; 5.0.7 with <em>mysql_set_charset()</em> creates a situation where using multi-byte  character sets on these environments may potentially expose a SQL injection attack vector.  Latin-1, UTF-8, and other "low ASCII" character sets are unaffected on all environments.</p>  <p class="critical">If you are running or considering running a multi-byte character set for your database connection, please pay close attention to the server environment you are deploying on to ensure you are not vulnerable.</p></li>
		</ul>
	</li>
	<li>General Changes
		<ul>
			<li>Fixed a bug where there was a misspelling within a code comment in the index.php file.</li>
			<li>Added Session Class userdata to the output profiler.  Additionally, added a show/hide toggle on HTTP Headers, Session Data and Config Variables.</li>
			<li>Removed internal usage of the <samp>EXT</samp> constant.</li>
			<li>Visual updates to the welcome_message view file and default error templates. Thanks to <a href="https://bitbucket.org/danijelb">danijelb</a> for the pull request.</li>
			<li>Added "application/x-csv" to mimes.php.</li>
			<li>Fixed a bug where <a href="libraries/email.html">Email library</a> attachments with a "." in the name would using invalid MIME-types.</li>
			<li>Callback validation rules can now accept parameters like any other validation rule.</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li>Added an optional third parameter to <samp>heading()</samp> which allows adding html attributes to the rendered heading tag.</li>
			<li><kbd>form_open()</kbd> now only adds a hidden (Cross-site Reference Forgery) protection field when the form's action is internal and is set to the post method. (Reactor #165)</li>
			<li>Re-worked <samp>plural()</samp> and <samp>singular()</samp> functions in the <a href="helpers/inflector_helper.html">Inflector helper</a> to support considerably more words.</li>
		</ul>
	</li>
	<li>Libraries
		<ul>
			<li>Altered Session to use a longer match against the user_agent string. See upgrade notes if using database sessions.</li>
			<li>Added <kbd>is_unique</kbd> to the <a href="libraries/form_validation.html">Form Validation library</a>.</li>
			<li>Added <kbd>$this->db->set_dbprefix()</kbd> to the <a href="database/queries.html">Database Driver</a>.</li>
			<li>Changed <kbd>$this->cart->insert()</kbd> in the <a href="libraries/cart.html">Cart Library</a> to return the Row ID if a single item was inserted successfully.</li>
			<li>Added <kbd>$this->load->get_var()</kbd> to the <a href="libraries/loader.html">Loader library</a> to retrieve global vars set with <kbd>$this->load->view()</kbd> and <kbd>$this->load->vars()</kbd>.</li>
			<li>Changed <kbd>$this->db->having()</kbd> to insert quotes using escape() rather than escape_str().</li>
		</ul>
	</li>
</ul>

<h3>Bug fixes for 2.0.3</h3>
<ul>
	<li>Added ENVIRONMENT to reserved constants. (Reactor #196)</li>
	<li>Changed server check to ensure SCRIPT_NAME is defined. (Reactor #57)</li>
	<li>Removed <samp>APPPATH.'third_party'</samp> from the packages autoloader to negate needless file stats if no packages exist or if the developer does not load any other packages by default.</li>
	<li>Fixed a bug (Reactor #231) where Sessions Library database table example SQL did not contain an index on last_activity. See <a href="installation/upgrade_203.html">Upgrade Notes</a>.</li>
	<li>Fixed a bug (Reactor #229) where the Sessions Library example SQL in the documentation contained incorrect SQL.</li>
	<li>Fixed a bug (Core #340) where when passing in the second parameter to $this->db->select(), column names in subsequent queries would not be properly escaped.</li>
	<li>Fixed issue #199 - Attributes passed as string does not include a space between it and the opening tag.</li>
	<li>Fixed a bug where the method <kbd>$this->cart->total_items()</kbd> from <a href="libraries/cart.html">Cart Library</a> now returns the sum of the quantity of all items in the cart instead of your total count.</li>
	<li>Fixed a bug where not setting 'null' when adding fields in db_forge for mysql and mysqli drivers would default to NULL instead of NOT NULL as the docs suggest.</li>
	<li>Fixed a bug where using <kbd>$this->db->select_max()</kdb>, <kbd>$this->db->select_min()</kdb>, etc could throw notices. Thanks to w43l for the patch.</li>
	<li>Replace checks for STDIN with php_sapi_name() == 'cli' which on the whole is more reliable. This should get parameters in crontab working.</li>
</ul>

<h2>Version 2.0.2</h2>
<p>Release Date: April 7, 2011<br />
Hg Tag: v2.0.2</p>

<ul>
	<li>General changes
		<ul>
			<li>The <a href="./libraries/security.html">Security library</a> was moved to the core and is now loaded automatically. Please remove your loading calls.</li>
			<li>The CI_SHA class is now deprecated. All supported versions of PHP provide a <kbd>sha1()</kbd> function.</li>
			<li><kbd>constants.php</kbd> will now be loaded from the environment folder if available.</li>
			<li>Added language key error logging</li>
			<li>Made Environment Support optional. Comment out or delete the constant to stop environment checks.</li>
			<li>Added Environment Support for Hooks.</li>
			<li>Added CI_ Prefix to the <a href="libraries/caching.html">Cache driver</a>.</li>
			<li>Added <a href="./general/cli.html">CLI usage</a> documentation.</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li>Removed the previously deprecated <kbd>dohash()</kbd> from the <a href="./helpers/security_helper.html">Security helper</a>; use <kbd>do_hash()</kbd> instead.</li>
			<li>Changed the 'plural' function so that it doesn't ruin the captalization of your string. It also take into consideration acronyms which are all caps.</li>
		</ul>
	</li>
	<li>Database
		<ul>
			<li><kbd>$this->db->count_all_results()</kbd> will now return an integer instead of a string.</li>
		</ul>
	</li>
</ul>

<h3>Bug fixes for 2.0.2</h3>
<ul>
	<li>Fixed a bug (Reactor #145) where the Output Library had parse_exec_vars set to protected.</li>
	<li>Fixed a bug (Reactor #80) where is_really_writable would create an empty file when on Windows or with safe_mode enabled.</li>
	<li>Fixed various bugs with User Guide.</li>
	<li>Added is_cli_request() method to documentation for <a href="libraries/input.html">Input class</a>.</li>
	<li>Added form_validation_lang entries for <kbd>decimal</kbd>, <kbd>less_than</kbd> and <kbd>greater_than</kbd>.</li>
	<li><a href="https://bitbucket.org/ellislab/codeigniter-reactor/issue/153/escape-str-bug-in-mssql-driver">Fixed issue #153</a> Escape Str Bug in MSSQL driver.</li>
	<li><a href="https://bitbucket.org/ellislab/codeigniter-reactor/issue/172/bug-in-chrome-and-form_open-in-201">Fixed issue #172</a> Google Chrome 11 posts incorrectly when action is empty.</li>

</ul>

<h2>Version 2.0.1</h2>
<p>Release Date: March 15, 2011<br />
Hg Tag: v2.0.1</p>

<ul>
	<li>General changes
		<ul>
			<li>Added <kbd>$config['cookie_secure']</kbd> to the config file to allow requiring a secure (HTTPS) in order to set cookies.</li>
			<li>Added the constant <kbd>CI_CORE</kbd> to help differentiate between Core: TRUE and Reactor: FALSE.</li>
			<li>Added an <kbd>ENVIRONMENT</kbd> constant in index.php, which affects PHP error reporting settings, and optionally,
                which configuration files are loaded (see below). Read more on the <a href="general/environments.html">Handling Environments</a> page.</li>
			<li>Added support for <a href="libraries/config.html#environments">environment-specific</a> configuration files.</li>
		</ul>
	</li>
	<li>Libraries
		<ul>
			<li>Added <kbd>decimal</kbd>, <kbd>less_than</kbd> and <kbd>greater_than</kbd> rules to the <a href="libraries/form_validation.html">Form validation Class</a>.</li>
			<li><a href="libraries/input.html">Input Class</a> methods <kbd>post()</kbd> and <kbd>get()</kbd> will now return a full array if the first argument is not provided.</li>
			<li>Secure cookies can now be made with the <kbd>set_cookie()</kbd> helper and <a href="libraries/input.html">Input Class</a> method.</li>
			<li>Added <kbd>set_content_type()</kbd> to <a href="libraries/output.html">Output Class</a> to set the output <kbd>Content-Type</kbd> HTTP header based on a MIME Type or a config/mimes.php array key.</li>
			<li><a href="libraries/output.html">Output Class</a> will now support method chaining.</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li>Changed the logic for <kbd>form_open()</kbd> in <a href="helpers/form_helper.html">Form helper</a>. If no value is passed it will submit to the current URL.</li>
		</ul>
	</li>
</ul>

<h3>Bug fixes for 2.0.1</h3>
<ul>
	<li>CLI requests can now be run from any folder, not just when CD'ed next to index.php.</li>
	<li>Fixed issue #41: Added audio/mp3 mime type to mp3.</li>
	<li>Fixed a bug (Core #329) where the file caching driver referenced the incorrect cache directory.</li>
	<li>Fixed a bug (Reactor #69) where the SHA1 library was named incorrectly.</li>
</ul>

<h2>Version 2.0.0</h2>
<p>Release Date: January 28, 2011<br />
Hg Tag: v2.0.0</p>

<ul>
	<li>General changes
		<ul>
			<li>PHP 4 support is removed. CodeIgniter now requires PHP 5.1.6.</li>
			<li>Scaffolding, having been deprecated for a number of versions, has been removed.</li>
			<li>Plugins have been removed, in favor of Helpers.  The CAPTCHA plugin has been converted to a Helper and <a href="./helpers/captcha_helper.html">documented</a>.  The JavaScript calendar plugin was removed due to the ready availability of great JavaScript calendars, particularly with jQuery.</li>
			<li>Added new special Library type: <a href="./general/drivers.html">Drivers</a>.</li>
			<li>Added full query-string support.  See the config file for details.</li>
			<li>Moved the application folder outside of the system folder.</li>
			<li>Moved system/cache and system/logs directories to the application directory.</li>
			<li>Added routing overrides to the main index.php file, enabling the normal routing to be overridden on a per "index" file basis.</li>
			<li>Added the ability to set config values (or override config values) directly from data set in the main index.php file.  This allows a single application to be used with multiple front controllers, each having its own config values.</li>
			<li>Added <kbd>$config['directory_trigger']</kbd> to the config file so that a controller sub-directory can be specified when running _GET strings instead of URI segments.</li>
			<li>Added ability to set "Package" paths - specific paths where the Loader and Config classes should try to look first for a requested file.  This allows distribution of sub-applications with their own libraries, models, config files, etc. in a single "package" directory.  See the <a href="libraries/loader.html">Loader class</a> documentation for more details.</li>
			<li>In-development code is now hosted at <a href="http://bitbucket.org/ellislab/codeigniter-reactor/">BitBucket</a>.</li>
			<li>Removed the deprecated Validation Class.</li>
			<li>Added CI_ Prefix to all core classes.</li>
			<li>Package paths can now be set in application/config/autoload.php.</li>
			<li><a href="libraries/file_uploading.html">Upload library</a> file_name can now be set without an extension, the extension will be taken from the uploaded file instead of the given name.</li>
			<li>In <a href="database/forge.html">Database Forge</a> the name can be omitted from $this->dbforge->modify_column()'s 2nd param if you aren't changing the name.</li>
			<li><kbd>$config['base_url']</kbd> is now empty by default and will guess what it should be.</li>
			<li>Enabled full Command Line Interface compatibility with <kbd>config['uri_protocol'] = 'CLI';</kbd>.</li>
		</ul>
	<li>Libraries
		<ul>
			<li>Added a <a href="libraries/caching.html">Cache driver</a> with APC, memcached, and file-based support.</li>
			<li>Added <var>$prefix</var>, <var>$suffix</var> and <var>$first_url</var> properties to <a href="./libraries/pagination.html">Pagination library</a>.</li>
			<li>Added the ability to suppress first, previous, next, last, and page links by setting their values to FALSE in the <a href="./libraries/pagination.html">Pagination library</a>.</li>
			<li>Added <a href="./libraries/security.html">Security library</a>, which now contains the <dfn>xss_clean</dfn> function, <dfn>filename_security</dfn> function and other security related functions.</li>
			<li>Added CSRF (Cross-site Reference Forgery) protection to the <a href="./libraries/security.html">Security library</a>.</li>
			<li>Added <var>$parse_exec_vars</var> property to Output library.</li>
			<li>Added ability to enable / disable individual sections of the <a href="general/profiling.html">Profiler</a></li>
			<li>Added a wildcard option <kbd>$config['allowed_types'] = '*'</kbd> to the <a href="./libraries/file_uploading.html">File Uploading Class</a>.</li>
			<li>Added an 'object' config variable to the XML-RPC Server library so that one can specify the object to look for requested methods, instead of assuming it is in the $CI superobject.</li>
			<li>Added "is_object" into the list of unit tests capable of being run.</li>
			<li>Table library will generate an empty cell with a blank string, or NULL value.</li>
			<li>Added ability to set tag attributes for individual cells in the Table library</li>
			<li>Added a <kbd>parse_string()</kbd> method to the <a href="libraries/parser.html">Parser Class</a>.</li>
			<li>Added HTTP headers and Config information to the <a href="general/profiling.html">Profiler</a> output.</li>
			<li>Added Chrome and Flock to the list of detectable browsers by <kbd>browser()</kbd> in the <a href="libraries/user_agent.html">User Agent Class</a>.</li>
			<li>The <a href="libraries/unit_testing.html">Unit Test Class</a> now has an optional "notes" field available to it, and allows for discrete display of test result items using <kbd>$this->unit->set_test_items()</kbd>.</li>
			<li>Added a <kbd>$xss_clean</kbd> class variable to the XMLRPC library, enabling control over the use of the Security library's <kbd>xss_clean()</kbd> method.</li>
			<li>Added a <kbd>download()</kbd> method to the <a href="libraries/ftp.html">FTP library</a></li>
			<li>Changed <kbd>do_xss_clean()</kbd> to return FALSE if the uploaded file fails XSS checks.</li>
			<li>Added stripslashes() and trim()ing of double quotes from $_FILES type value to standardize input in Upload library.</li>
			<li>Added a second parameter (boolean) to <kbd>$this->zip->read_dir('/path/to/directory', FALSE)</kbd> to remove the preceding trail of empty folders when creating a Zip archive. This example would contain a zip with "directory" and all of its contents.</li>
			<li>Added ability in the Image Library to handle PNG transparency for resize operations when using the GD lib.</li>
			<li>Modified the Session class to prevent use if no encryption key is set in the config file.</li>
			<li>Added a new config item to the Session class <kbd>sess_expire_on_close</kbd> to allow sessions to auto-expire when the browser window is closed.</li>
			<li>Improved performance of the Encryption library on servers where Mcrypt is available.</li>
			<li>Changed the default encryption mode in the Encryption library to CBC.</li>
			<li>Added an <kbd>encode_from_legacy()</kbd> method to provide a way to transition encrypted data from CodeIgniter 1.x to CodeIgniter 2.x.
				Please see the <a href="./installation/upgrade_200.html">upgrade instructions</a> for details.</li>
			<li>Altered Form_Validation library to allow for method chaining on <kbd>set_rules()</kbd>, <kbd>set_message()</kbd> and <kbd>set_error_delimiters()</kbd> functions.</li>
			<li>Altered Email Library to allow for method chaining.</li>
			<li>Added <kbd>request_headers()</kbd>, <kbd>get_request_header()</kbd> and <kbd>is_ajax_request()</kbd> to the input class.</li>
			<li>Altered <a href="libraries/user_agent.html">User agent library</a> so that <kbd>is_browser()</kbd>, <kbd>is_mobile()</kbd> and <kbd>is_robot()</kbd> can optionally check for a specific browser or mobile device.</li>
			<li>Altered <a href="libraries/input.html">Input library</a> so that <kbd>post()</kbd> and <kbd>get()</kbd> will return all POST and GET items (respectively) if there are no parameters passed in.</li>
		</ul>
	</li>
	<li>Database
		<ul>
			<li><a href="./database/configuration.html">database configuration</a>.</li>
			<li>Added <kbd>autoinit</kbd> value to <a href="./database/configuration.html">database configuration</a>.</li>
			<li>Added <kbd>stricton</kbd> value to <a href="./database/configuration.html">database configuration</a>.</li>
			<li>Added <kbd>database_exists()</kbd> to the <a href="database/utilities.html">Database Utilities Class</a>.</li>
			<li>Semantic change to db->version() function to allow a list of exceptions for databases with functions to return version string instead of specially formed SQL queries. Currently this list only includes Oracle and SQLite.</li>
			<li>Fixed a bug where driver specific table identifier protection could lead to malformed queries in the <kbd>field_data()</kbd> functions.</li>
			<li>Fixed a bug where an undefined class variable was referenced in database drivers.</li>
			<li>Modified the database errors to show the filename and line number of the problematic query.</li>
			<li>Removed the following deprecated functions: orwhere, orlike, groupby, orhaving, orderby, getwhere.</li>
			<li>Removed deprecated _drop_database() and _create_database() functions from the db utility drivers.</li>
			<li>Improved dbforge create_table() function for the Postgres driver.</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li>Added <kbd>convert_accented_characters()</kbd> function to <a href="./helpers/text_helper.html">text helper</a>.</li>
			<li>Added accept-charset to the list of inserted attributes of <kbd>form_open()</kbd> in the <a href="helpers/form_helper.html">Form Helper</a>.</li>
			<li>Deprecated the <kbd>dohash()</kbd> function in favour of <kbd>do_hash()</kbd> for naming consistency.</li>
			<li>Non-backwards compatible change made to <kbd>get_dir_file_info()</kbd> in the <a href="helpers/file_helper.html">File Helper</a>.  No longer recurses
				by default so as to encourage responsible use (this function can cause server performance issues when used without caution).</li>
			<li>Modified the second parameter of <kbd>directory_map()</kbd> in the <a href="helpers/directory_helper.html">Directory Helper</a> to accept an integer to specify recursion depth.</li>
			<li>Modified <kbd>delete_files()</kbd> in the <a href="helpers/file_helper.html">File Helper</a> to return FALSE on failure.</li>
			<li>Added an optional second parameter to <kbd>byte_format()</kbd> in the <a href="helpers/number_helper.html">Number Helper</a> to allow for decimal precision.</li>
			<li>Added alpha, and sha1 string types to <kbd>random_string()</kbd> in the <a href="helpers/string_helper.html">String Helper</a>.</li>
			<li>Modified <kbd>prep_url()</kbd> so as to not prepend http:// if the supplied string already has a scheme.</li>
			<li>Modified <kbd>get_file_info</kbd> in the file helper, changing filectime() to filemtime() for dates.</li>
			<li>Modified <kbd>smiley_js()</kbd> to add optional third parameter to return only the javascript with no script tags.</li>
			<li>The <kbd>img()</kbd> function of the <a href="./helpers/html_helper.html">HTML helper</a> will now generate an empty string as an alt attribute if one is not provided.</li>
			<li>If CSRF is enabled in the application config file, <kbd>form_open()</kbd> will automatically insert it as a hidden field.</li>
			<li>Added <kbd>sanitize_filename()</kbd> into the <a href="./helpers/security_helper.html">Security helper</a>.</li>
			<li>Added <kbd>ellipsize()</kbd> to the <a href="./helpers/text_helper.html">Text Helper</a></li>
			<li>Added <kbd>elements()</kbd> to the <a href="./helpers/array_helper.html">Array Helper</a></li>
		</ul>
	</li>
	<li>Other Changes
		<ul>
			<li>Added an optional second parameter to <kbd>show_404()</kbd> to disable logging.</li>
			<li>Updated loader to automatically apply the sub-class prefix as an option when loading classes.  Class names can be prefixed with the standard "CI_" or the same prefix as the subclass prefix, or no prefix at all.</li>
			<li>Increased randomness with <kbd>is_really_writable()</kbd> to avoid file collisions when hundreds or thousands of requests occur at once.</li>
			<li>Switched some DIR_WRITE_MODE constant uses to FILE_WRITE_MODE where files and not directories are being operated on.</li>
			<li><kbd>get_mime_by_extension()</kbd> is now case insensitive.</li>
			<li>Added "default" to the list <a href="general/reserved_names.html">Reserved Names</a>.</li>
			<li>Added 'application/x-msdownload' for .exe files and ''application/x-gzip-compressed' for .tgz files to config/mimes.php.</li>
			<li>Updated the output library to no longer compress output or send content-length headers if the server runs with zlib.output_compression enabled.</li>
			<li>Eliminated a call to is_really_writable() on each request unless it is really needed (Output caching)</li>
			<li>Documented <kbd>append_output()</kbd> in the <a href="libraries/output.html">Output Class</a>.</li>
			<li>Documented a second argument in the <kbd>decode()</kbd> function for the <a href="libraries/encryption.html">Encryption Class</a>.</li>
			<li>Documented db->close().</li>
			<li>Updated the router to support a default route with any number of segments.</li>
			<li>Moved _remove_invisible_characters() function from the <a href="libraries/security.html">Security Library</a> to <a href="general/common_functions.html">common functions.</a></li>
			<li>Added audio/mpeg3 as a valid mime type for MP3.</li>
		</ul>
	</li>
</ul>

<h3>Bug fixes for 2.0.0</h3>
<ul>
	<li>Fixed a bug where you could not change the User-Agent when sending email.</li>
	<li>Fixed a bug where the Output class would send incorrect cached output for controllers implementing their own <dfn>_output()</dfn> method.</li>
	<li>Fixed a bug where a failed query would not have a saved query execution time causing errors in the Profiler</li>
	<li>Fixed a bug that was writing log entries when multiple identical helpers and plugins were loaded.</li>
	<li>Fixed assorted user guide typos or examples (#10693, #8951, #7825, #8660, #7883, #6771, #10656).</li>
	<li>Fixed a language key in the profiler: "profiler_no_memory_usage" to "profiler_no_memory".</li>
	<li>Fixed an error in the Zip library that didn't allow downloading on PHP 4 servers.</li>
	<li>Fixed a bug in the Form Validation library where fields passed as rule parameters were not being translated (#9132)</li>
	<li>Modified inflector helper to properly pluralize words that end in 'ch' or 'sh'</li>
	<li>Fixed a bug in xss_clean() that was not allowing hyphens in query strings of submitted URLs.</li>
	<li>Fixed bugs in get_dir_file_info() and get_file_info() in the File Helper with recursion, and file paths on Windows.</li>
	<li>Fixed a bug where Active Record override parameter would not let you disable Active Record if it was enabled in your database config file.</li>
	<li>Fixed a bug in reduce_double_slashes() in the String Helper to properly remove duplicate leading slashes (#7585)</li>
	<li>Fixed a bug in values_parsing() of the XML-RPC library which prevented NULL variables typed as 'string' from being handled properly.</li>
	<li>Fixed a bug were form_open_multipart() didn't accept string attribute arguments (#10930).</li>
	<li>Fixed a bug (#10470) where <kdb>get_mime_by_extension()</kbd> was case sensitive.</li>
	<li>Fixed a bug where some error messages for the SQLite and Oracle drivers would not display.</li>
	<li>Fixed a bug where files created with the Zip Library would result in file creation dates of 1980.</li>
	<li>Fixed a bug in the Session library that would result in PHP error when attempting to store values with objects.</li>
	<li>Fixed a bug where extending the Controller class would result in a fatal PHP error.</li>
	<li>Fixed a PHP Strict Standards Error in the index.php file.</li>
	<li>Fixed a bug where getimagesize() was being needlessly checked on non-image files in is_allowed_type().</li>
	<li>Fixed a bug in the Encryption library where an empty key was not triggering an error.</li>
	<li>Fixed a bug in the Email library where CC and BCC recipients were not reset when using the clear() method (#109).</li>
	<li>Fixed a bug in the URL Helper where prep_url() could cause a PHP error on PHP versions &lt; 5.1.2.</li>
	<li>Added a log message in core/output if the cache directory config value was not found.</li>
	<li>Fixed a bug where multiple libraries could not be loaded by passing an array to load-&gt;library()</li>
	<li>Fixed a bug in the html helper where too much white space was rendered between the src and alt tags in the img() function.</li>
	<li>Fixed a bug in the profilers _compile_queries() function.</li>
	<li>Fixed a bug in the date helper where the DATE_ISO8601 variable was returning an incorrectly formatted date string.</li>
</ul>

<h2>Version 1.7.2</h2>
<p>Release Date: September 11, 2009<br />
Hg Tag: v1.7.2</p>

<ul>
	<li>Libraries
		<ul>
			<li>Added a new <a href="libraries/cart.html">Cart Class</a>.</li>
			<li>Added the ability to pass $config['file_name'] for the <a href="libraries/file_uploading.html">File Uploading Class</a> and rename the uploaded file.</li>
			<li>Changed order of listed user-agents so Safari would more accurately report itself. (#6844)</li>
		</ul>
	</li>
	<li>Database
		<ul>
			<li>Switched from using gettype() in escape() to is_* methods, since future PHP versions might change its output.</li>
			<li>Updated all database drivers to handle arrays in escape_str()</li>
			<li>Added escape_like_str() method for escaping strings to be used in LIKE conditions</li>
			<li>Updated Active Record to utilize the new LIKE escaping mechanism.</li>
			<li>Added reconnect() method to DB drivers to try to keep alive / reestablish a connection after a long idle.</li>
			<li>Modified MSSQL driver to use mssql_get_last_message() for error messages.</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li>Added <kbd>form_multiselect()</kbd> to the <a href="helpers/form_helper.html">Form helper</a>.</li>
			<li>Modified <kbd>form_hidden()</kbd> in the <a href="helpers/form_helper.html">Form helper</a> to accept multi-dimensional arrays.</li>
			<li>Modified <kbd>form_prep()</kbd> in the <a href="helpers/form_helper.html">Form helper</a> to keep track of prepped fields to avoid multiple prep/mutation from subsequent calls which can occur when using Form Validation
				and form helper functions to output form fields.</li>
			<li>Modified <kbd>directory_map()</kbd> in the <a href="helpers/directory_helper.html">Directory helper</a> to allow the inclusion of hidden files, and to return FALSE on failure to read directory.</li>
			<li>Modified the <a href="helpers/smiley_helper.html">Smiley helper</a> to work with multiple fields and insert the smiley at the last known cursor position.</li>
		</ul>
	</li>
	<li>General
		<ul>
			<li>Compatible with PHP 5.3.0</li>
			<li>Modified <a href="general/errors.html">show_error()</a> to allow sending of HTTP server response codes.</li>
			<li>Modified <a href="general/errors.html">show_404()</a> to send 404 status code, removing non-CGI compatible header() statement from error_404.php template.</li>
			<li>Added set_status_header() to the <a href="general/common_functions.html">Common functions<a> to allow use when the Output class is unavailable.</li>
			<li>Added is_php() to <a href="general/common_functions.html">Common functions</a> to facilitate PHP version comparisons.</p>
			<li>Added 2 CodeIgniter "cheatsheets" (thanks to DesignFellow.com for this contribution).</li>
		</ul>
	</li>
</ul>

<h3>Bug fixes for 1.7.2</h3>
<ul>
	<li>Fixed assorted user guide typos or examples (#6743, #7214, #7516, #7287, #7852, #8224, #8324, #8349).</li>
	<li>Fixed a bug in the Form Validation library where multiple callbacks weren't working (#6110)</li>
	<li>doctype helper default value was missing a "1".</li>
	<li>Fixed a bug in the language class when outputting an error for an unfound file.</li>
	<li>Fixed a bug in the Calendar library where the shortname was output for "May".</li>
	<li>Fixed a bug with ORIG_PATH_INFO that was allowing URIs of just a slash through.</li>
	<li>Fixed a fatal error in the Oracle and ODBC drivers (#6752)</li>
	<li>Fixed a bug where xml_from_result() was checking for a nonexistent method.</li>
	<li>Fixed a bug where Database Forge's add_column and modify_column were not looping through when sent multiple fields.</li>
	<li>Fixed a bug where the File Helper was using '/' instead of the DIRECTORY_SEPARATOR constant.</li>
	<li>Fixed a bug to prevent PHP errors when attempting to use sendmail on servers that have manually disabled the PHP popen() function.</li>
	<li>Fixed a bug that would cause PHP errors in XML-RPC data if the PHP data type did not match the specified XML-RPC type.</li>
	<li>Fixed a bug in the XML-RPC class with parsing dateTime.iso8601 data types.</li>
	<li>Fixed a case sensitive string replacement in xss_clean()</li>
	<li>Fixed a bug in form_textarea() where form data was not prepped correctly.</li>
	<li>Fixed a bug in form_prep() causing it to not preserve entities in the user's original input when called back into a form element</li>
	<li>Fixed a bug in _protect_identifiers() where the swap prefix ($swap_pre) was not being observed.</li>
	<li>Fixed a bug where the 400 status header sent with the 'disallowed URI characters' was not compatible with CGI environments.</li>
	<li>Fixed a bug in the typography class where heading tags could have paragraph tags inserted when using auto_typography().</li>
</ul>

<h2>Version 1.7.1</h2>
<p>Release Date: February 10, 2009<br />
Hg Tag: 1.7.1</p>

<ul>
	<li>Libraries
		<ul>
			<li>Fixed an arbitrary script execution security flaw (#6068) in the Form Validation library (thanks to hkk)</li>
			<li>Changed default current page indicator in the Pagination library to use &lt;strong&gt; instead of &lt;b&gt;</li>
			<li>A "HTTP/1.1 400 Bad Request" header is now sent when disallowed characters are encountered.</li>
			<li>Added &lt;big&gt;, &lt;small&gt;, &lt;q&gt;, and &lt;tt&gt; to the Typography parser's inline elements.</li>
			<li>Added more accurate error reporting for the Email library when using sendmail.</li>
			<li>Removed a strict type check from the <kbd>rotate()</kbd> function of the <a href="libraries/image_lib.html">Image Manipulation Class</a>.</li>
			<li>Added enhanced error checking in file saving in the Image library when using the GD lib.</li>
			<li>Added an additional newline between multipart email headers and the MIME message text for better compatibility with a variety of MUAs.</li>
			<li>Made modest improvements to efficiency and accuracy of explode_name() in the Image lib.</li>
		</ul>
	</li>
	<li>Database
		<ul>
			<li>Added where_in to the list of expected arguments received by <kbd>delete()</kbd>.</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li>Added the ability to have optgroups in <kbd>form_dropdown()</kbd> within the <a href="helpers/form_helper.html">form helper</a>.</li>
			<li>Added a doctype() function to the <a href="helpers/html_helper.html">HTML helper</a>.</li>
			<li>Added ability to force lowercase for <kbd>url_title()</kbd> in the <a href="helpers/url_helper.html">URL helper</a>.</li>
			<li>Changed the default "type" of <kbd>form_button()</kbd> to "button" from "submit" in the <a href="helpers/form_helper.html">form helper</a>.</li>
			<li>Changed redirect() in the URL helper to allow redirections to URLs outside of the CI site.</li>
			<li>Updated get_cookie() to try to fetch the cookie using the global cookie prefix if the requested cookie name doesn't exist.</li>
		</ul>
	</li>
	<li>Other Changes
		<ul>
			<li>Improved security in <kbd>xss_clean()</kbd> to help prevent attacks targeting Internet Explorer.</li>
			<li>Added 'application/msexcel' to config/mimes.php for .xls files.</li>
			<li>Added 'proxy_ips' config item to whitelist reverse proxy servers from which to trust the HTTP_X_FORWARDED_FOR header to
				to determine the visitor's IP address.</li>
			<li>Improved accuracy of Upload::is_allowed_filetype() for images (#6715)</li>
		</ul>
	</li>
</ul>

<h3>Bug fixes for 1.7.1</h3>
<ul>
	<li>Database
		<ul>
			<li>Fixed a bug when doing 'random' on order_by() (#5706).</li>
			<li>Fixed a bug where adding a primary key through Forge could fail (#5731).</li>
			<li>Fixed a bug when using DB cache on multiple databases (#5737).</li>
			<li>Fixed a bug where TRUNCATE was not considered a "write" query (#6619).</li>
			<li>Fixed a bug where csv_from_result() was checking for a nonexistent method.</li>
			<li>Fixed a bug _protect_identifiers() where it was improperly removing all pipe symbols from items</li>
		</ul>
	</li>
	<li>Fixed assorted user guide typos or examples (#5998, #6093, #6259, #6339, #6432, #6521).</li>
	<li>Fixed a bug in the MySQLi driver when no port is specified</li>
	<li>Fixed a bug (#5702), in which the field label was not being fetched properly, when "matching" one field to another.</li>
	<li>Fixed a bug in which identifers were not being escaped properly when reserved characters were used.</li>
	<li>Fixed a bug with the regular expression used to protect submitted paragraph tags in auto typography.</li>
	<li>Fixed a bug where double dashes within tag attributes were being converted to em dash entities.</li>
	<li>Fixed a bug where double spaces within tag attributes were being converted to non-breaking space entities.</li>
	<li>Fixed some accuracy issues with curly quotes in Typography::format_characters()</li>
	<li>Changed a few docblock comments to reflect actual return values.</li>
	<li>Fixed a bug with high ascii characters in subject and from email headers.</li>
	<li>Fixed a bug in xss_clean() where whitespace following a validated character entity would not be preserved.</li>
	<li>Fixed a bug where HTML comments and &lt;pre&gt; tags were being parsed in Typography::auto_typography().</li>
	<li>Fixed a bug with non-breaking space cleanup in Typography::auto_typography().</li>
	<li>Fixed a bug in database escaping where a compound statement (ie: SUM()) wasn't handled correctly with database prefixes.</li>
	<li>Fixed a bug when an opening quote is preceded by a paragraph tag and immediately followed by another tag.</li>
	<li>Fixed a bug in the Text Helper affecting some locales where word_censor() would not work on words beginning or ending with an accented character.</li>
	<li>Fixed a bug in the Text Helper character limiter where the provided limit intersects the last word of the string.</li>
	<li>Fixed a bug (#6342) with plural() in the Inflection helper with words ending in "y".</li>
	<li>Fixed bug (#6517) where Routed URI segments returned by URI::rsegment() method were incorrect for the default controller.</li>
	<li>Fixed a bug (#6706) in the Security Helper where xss_clean() was using a deprecated second argument.</li>
	<li>Fixed a bug in the URL helper url_title() function where trailing periods were allowed at the end of a URL.</li>
	<li>Fixed a bug (#6669) in the Email class when CRLF's are used for the newline character with headers when used with the "mail" protocol.</li>
	<li>Fixed a bug (#6500) where URI::A_filter_uri() was exit()ing an error instead of using show_error().</li>
	<li>Fixed a bug (#6592) in the File Helper where get_dir_file_info() where recursion was not occurring properly.</li>
	<li>Tweaked Typography::auto_typography() for some edge-cases.</li>
</ul>


<h2>Version 1.7</h2>
<p>Release Date: October 23, 2008<br />
Hg Tag: 1.7.0</p>

<ul>
	<li>Libraries
		<ul>
			<li>Added a new <a href="libraries/form_validation.html">Form Validation Class</a>.  It simplifies setting rules and field names, supports arrays as field names, allows groups of validation rules to be saved in a config file, and adds some helper functions for use in view files.  <strong>Please note that the old Validation class is now deprecated</strong>. We will leave it in the library folder for some time so that existing applications that use it will not break, but you are encouraged to migrate to the new version.</li>
			<li>Updated the <a href="libraries/sessions.html">Sessions class</a> so that any custom data being saved gets stored to a database rather than the session cookie (assuming you are using a database to store session data), permitting much more data to be saved.</li>
			<li>Added the ability to store libraries in subdirectories within either the main "libraries" or the local application "libraries" folder. Please see the <a href="libraries/loader.html">Loader class</a> for more info.</li>
			<li>Added the ability to assign library objects to your own variable names when you use <kbd>$this->load->library()</kbd>. Please see the <a href="libraries/loader.html">Loader class</a> for more info.</li>
			<li>Added controller class/method info to <a href="general/profiling.html">Profiler class</a> and support for multiple database connections.</li>
			<li>Improved the "auto typography" feature and moved it out of the helper into its own <a href="libraries/typography.html">Typography Class</a>.</li>
			<li>Improved performance and accuracy of <kbd>xss_clean()</kbd>, including reduction of false positives on image/file tests.</li>
			<li>Improved <a href="./libraries/parser.html">Parser class</a> to allow multiple calls to the parse() function.  The output of each is appended in the output.</li>
			<li>Added <dfn>max_filename</dfn> option to set a file name length limit in the  <a href="libraries/file_uploading.html">File Upload Class</a>.</li>
			<li>Added <dfn>set_status_header()</dfn> function to <a href="libraries/output.html">Output class</a>.</li>
			<li>Modified <a href="libraries/pagination.html">Pagination</a> class to only output the "First" link when the link for page one would not be shown.</li>
			<li>Added support for mb_strlen in the <a href="libraries/form_validation.html">Form Validation</a> class so that multi-byte languages will calculate string lengths properly.</li>
		</ul>
	</li>
	<li>Database
		<ul>
			<li>Improved Active Record class to allow full path column and table names:  hostname.database.table.column.  Also improved the alias handling.</li>
			<li>Improved how table and column names are escaped and prefixed.  It now honors full path names when adding prefixes and escaping.</li>
			<li>Added Active Record caching feature to "update" and "delete" functions.</li>
			<li>Added removal of non-printing control characters in <kbd>escape_str()</kbd> of DB drivers that do not have native PHP escaping mechanisms (mssql, oci8, odbc), to avoid potential SQL errors, and possible sources of SQL injection.</li>
			<li>Added port support to MySQL, MySQLi, and MS SQL database drivers.</li>
			<li>Added driver name variable in each DB driver, based on bug report #4436.</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li>Added several new "setting" functions to the <a href="helpers/form_helper.html">Form helper</a> that allow POST data to be retrieved and set into forms.  These are intended to be used on their own, or with the new <a href="libraries/form_validation.html">Form Validation Class</a>.</li>
			<li>Added <kbd>current_url()</kbd> and uri_segments() to  <a href="helpers/url_helper.html">URL helper</a>.</li>
			<li>Altered <kbd>auto_link()</kbd> in the <a href="helpers/url_helper.html">URL helper</a> so that email addresses with "+" included will be linked.</li>
			<li>Added <kbd>meta()</kbd> function to  <a href="helpers/html_helper.html">HTML helper</a>.</li>
			<li>Improved accuracy of calculations in <a href="helpers/number_helper.html">Number helper</a>.</li>
			<li>Removed added newlines ("\n") from most form and html helper functions.</li>
			<li>Tightened up validation in the <a href="helpers/date_helper.html">Date helper</a> function <kbd>human_to_unix()</kbd>, and eliminated the POSIX regex.</li>
			<li>Updated <a href="helpers/date_helper.html">Date helper</a> to match the world's current time zones and offsets.</li>
			<li>Modified url_title() in the <a href="helpers/url_helper.html">URL helper</a> to remove characters and digits that are part of
				character entities, to allow dashes, underscores, and periods regardless of the $separator, and to allow uppercase characters.</li>
			<li>Added support for arbitrary attributes in anchor_popup() of the <a href="helpers/url_helper.html">URL helper</a>.</li>
		</ul>
	</li>
	<li>Other Changes
		<ul>
			<li>Added <a href="./general/styleguide.html">PHP Style Guide</a> to docs.</li>
			<li>Added sanitization in <kbd>xss_clean()</kbd> for a deprecated HTML tag that could be abused in user input in Internet Explorer.</li>
			<li>Added a few openxml document mime types, and an additional mobile agent to mimes.php and user_agents.php respectively.</li>
			<li>Added a file lock check during caching, before trying to write to the file.</li>
			<li>Modified Cookie key cleaning to unset a few troublesome key names that can be present in certain environments, preventing CI from halting execution.</li>
			<li>Changed the output of the profiler to use style attribute rather than clear, and added the id "codeigniter_profiler" to the container div.</li>
		</ul>
	</li>
</ul>

<h3>Bug fixes for 1.7.0</h3>
<ul>
	<li>Fixed bug in <kbd>xss_clean()</kbd> that could remove some desirable tag attributes.</li>
	<li>Fixed assorted user guide typos or examples (#4807, #4812, #4840, #4862, #4864, #4899, #4930, #5006, #5071, #5158, #5229, #5254, #5351).</li>
	<li>Fixed an edit from 1.6.3 that made the $robots array in user_agents.php go poof.</li>
	<li>Fixed a bug in the <a href="libraries/email.html">Email library</a> with quoted-printable encoding improperly encoding space and tab characters.</li>
	<li>Modified XSS sanitization to no longer add semicolons after &amp;[single letter], such as in M&amp;M's, B&amp;B, etc.</li>
	<li>Modified XSS sanitization to no longer strip XHTML image tags of closing slashes.</li>
	<li>Fixed a bug in the Session class when database sessions are used where upon session update all userdata would be errantly written to the session cookie.</li>
	<li>Fixed a bug (#4536) in backups with the MySQL driver where some legacy code was causing certain characters to be double escaped.</li>
	<li>Fixed a routing bug (#4661) that occurred when the default route pointed to a subfolder.</li>
	<li>Fixed the spelling of "Dhaka" in the <kbd>timezone_menu()</kbd> function of the <a href="helpers/date_helper.html">Date helper.</a></li>
	<li>Fixed the spelling of "raspberry" in config/smileys.php.</li>
	<li>Fixed incorrect parenthesis in <kbd>form_open()</kbd> function (#5135).</li>
	<li>Fixed a bug that was ignoring case when comparing controller methods (#4560).</li>
	<li>Fixed a bug (#4615) that was not setting SMTP authorization settings when using the initialize function.</li>
	<li>Fixed a bug in <kbd>highlight_code()</kbd> in the <a href="helpers/text_helper.html">Text helper</a> that would leave a stray &lt;/span&gt; in certain cases.</li>
	<li>Fixed Oracle bug (#3306) that was preventing multiple queries in one action.</li>
	<li>Fixed ODBC bug that was ignoring connection params due to its use of a constructor.</li>
	<li>Fixed a DB driver bug with num_rows() that would cause an error with the Oracle driver.</li>
	<li>Fixed MS SQL bug (#4915).  Added brackets around database name in MS SQL driver when selecting the database, in the event that reserved characters are used in the name.</li>
	<li>Fixed a DB caching bug (4718) in which the path was incorrect when no URI segments were present.</li>
	<li>Fixed Image_lib class bug #4562.  A path was not defined for NetPBM.</li>
	<li>Fixed Image_lib class bug #4532.  When cropping an image with identical height/width settings on output, a copy is made.</li>
	<li>Fixed DB_driver bug (4900), in which a database error was not being logged correctly.</li>
	<li>Fixed DB backup bug in which field names were not being escaped.</li>
	<li>Fixed a DB Active Record caching bug in which multiple calls to cached data were not being honored.</li>
	<li>Fixed a bug in the Session class that was disallowing slashes in the serialized array.</li>
	<li>Fixed a Form Validation bug in which the "isset" error message was being trigged by the "required" rule.</li>
	<li>Fixed a spelling error in a Loader error message.</li>
	<li>Fixed a bug (5050) with IP validation with empty segments.</li>
	<li>Fixed a bug in which the parser was being greedy if multiple identical sets of tags were encountered.</li>
</ul>

<h2>Version 1.6.3</h2>
<p>Release Date: June 26, 2008<br />
Hg Tag: v1.6.3</p>

<p>Version 1.6.3 is a security and maintenance release and is recommended for all users.</p>
<ul>
	<li>Database
		<ul>
			<li>Modified MySQL/MySQLi Forge class to give explicit names to keys</li>
			<li>Added ability to set multiple column non-primary keys to the <a href="database/forge.html">Forge class</a></li>
			<li>Added ability to set additional database config values in <a href="database/connecting.html">DSN connections</a> via the query string.</li>
			</ul>
	</li>
	<li>Libraries
		<ul>
			<li>Set the mime type check in the <a href="libraries/file_uploading.html">Upload class</a> to reference the global mimes variable.</li>
			<li>Added support for query strings to the <a href="libraries/pagination.html">Pagination class</a>, automatically detected or explicitly declared.</li>
			<li>Added <kbd>get_post()</kbd> to the <a href="libraries/input.html">Input class</a>.</li>
			<li>Documented <kbd>get()</kbd> in the <a href="libraries/input.html">Input class</a>.</li>
			<li>Added the ability to automatically output language items as form labels in the <a href="libraries/language.html">Language class</a>.</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li>Added a <a href="helpers/language_helper.html">Language helper</a>.</li>
			<li>Added a <a href="helpers/number_helper.html">Number helper</a>.</li>
			<li><a href="helpers/form_helper.html">Form helper</a> refactored to allow <kbd>form_open()</kbd> and <kbd>form_fieldset()</kbd> to accept arrays or strings as arguments.</li>
		</ul>
	</li>
	<li>Other changes
		<ul>
			<li>Improved security in <kbd>xss_clean()</kbd>.</li>
			<li>Removed an unused Router reference in <kbd>_display_cache()</kbd>.</li>
			<li>Added ability to <a href="libraries/input.html">use xss_clean() to test images</a> for XSS, useful for upload security.</li>
			<li>Considerably expanded list of mobile user-agents in config/user_agents.php.</li>
			<li>Charset information in the userguide has been moved above title for internationalization purposes (#4614).</li>
			<li>Added &quot;Using Associative Arrays In a Request Parameter&quot; example to the <a href="libraries/xmlrpc.html">XMLRPC userguide page</a>.</li>
			<li>Removed maxlength and size as automatically added attributes of form_input() in the <a href="helpers/form_helper.html">form helper</a>.</li>
			<li>Documented the language file use of <kbd>byte_format()</kbd> in the <a href="helpers/number_helper.html">number helper</a>.</li>
		</ul>
	</li>
</ul>


<h3>Bug fixes for 1.6.3</h3>

<ul>
	<li>Added a language key for valid_emails in validation_lang.php.</li>
	<li>Amended fixes for bug (#3419) with parsing DSN database connections.</li>
	<li>Moved the <kbd>_has_operators()</kbd> function (#4535) into DB_driver from DB_active_rec.</li>
	<li>Fixed a syntax error in upload_lang.php.</li>
	<li>Fixed a bug (#4542) with a regular expression in the Image library.</li>
	<li>Fixed a bug (#4561) where <kbd>orhaving()</kbd> wasn't properly passing values.</li>
	<li>Removed some unused variables from the code (#4563).</li>
	<li>Fixed a bug where <kbd>having()</kbd> was not adding an = into the statement (#4568).</li>
	<li>Fixed assorted user guide typos or examples (#4574, #4706).</li>
	<li>Added quoted-printable headers to Email class when the multi-part override is used.</li>
	<li>Fixed a double opening &lt;p&gt; tag in the index pages of each system directory.</li>
</ul>

<h2>Version 1.6.2</h2>
<p>Release Date: May 13, 2008<br />
Hg Tag: 1.6.2</p>
<ul>
	<li>Active Record
		<ul>
			<li>Added the ability to prevent escaping in <kbd>having()</kbd> clauses.</li>
			<li>Added <kbd>rename_table()</kbd> into <a href="./database/forge.html">DBForge</a>.</li>
			<li>Fixed a bug that wasn't allowing escaping to be turned off if the value of a query was NULL.</li>
			<li>DB Forge is now assigned to any models that exist after loading (#3457).</li>
			</ul>
	</li>
	<li>Database
		<ul>
			<li>Added <a href="./database/transactions.html">Strict Mode</a> to database transactions.</li>
			<li>Escape behaviour in where() clauses has changed; values in those with the &quot;FALSE&quot; argument are no longer escaped (ie: quoted).</li>
		</ul>
	</li>
	<li>Config
		<ul>
			<li>Added 'application/vnd.ms-powerpoint' to list of mime types.</li>
			<li>Added 'audio/mpg' to list of mime types.</li>
			<li>Added new user-modifiable file constants.php containing file mode and fopen constants.</li>
			<li>Added the ability to set CRLF settings via config in the <a href="libraries/email.html">Email</a> class.</li>
		</ul>
	</li>
	<li>Libraries
		<ul>
			<li>Added increased security for filename handling in the Upload library.</li>
			<li>Added increased security for sessions for client-side data tampering.</li>
			<li>The MySQLi forge class is now in sync with MySQL forge. </li>
			<li>Added the ability to set CRLF settings via config in the <a href="libraries/email.html">Email</a> class.</li>
			<li><a href="libraries/unit_testing.html">Unit Testing</a> results are now colour coded, and a change was made to the default template of results.</li>
			<li>Added a valid_emails rule to the Validation class.</li>
			<li>The <a href="libraries/zip.html">Zip class</a> now exits within <kbd>download()</kbd>.</li>
			<li>The <a href="libraries/zip.html">Zip class</a> has undergone a substantial re-write for speed and clarity (thanks stanleyxu for the hard work and code contribution in bug report #3425!)</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li>Added a <a href="helpers/compatibility_helper.html">Compatibility Helper</a> for using some common PHP 5 functions safely in applications that might run on PHP 4 servers (thanks Seppo for the hard work and code contribution!)</li>
			<li>Added <kbd>form_button()</kbd> in the <a href="helpers/form_helper.html">Form helper</a>.</li>
			<li>Changed the <kbd>radio()</kbd> and <kbd>checkbox()</kbd> functions to default to not checked by default.</li>
			<li>Added the ability to include an optional HTTP Response Code in the <kbd>redirect()</kbd> function of the <a href="helpers/url_helper.html">URL Helper</a>.</li>
			<li>Modified <kbd>img()</kbd> in the <a href="helpers/html_helper.html">HTML Helper</a> to remove an unneeded space (#4208).</li>
			<li>Modified <kbd>anchor()</kbd> in the <a href="helpers/url_helper.html">URL helper</a> to no longer add a default title= attribute (#4209).</li>
			<li>The <a href="helpers/download_helper.html">Download helper</a> now exits within <kbd>force_download()</kbd>.</li>
			<li>Added <kbd>get_dir_file_info()</kbd>, <kbd>get_file_info()</kbd>, and <kbd>get_mime_by_extension()</kbd> to the <a href="helpers/file_helper.html">File Helper</a>.</li>
			<li>Added <kbd>symbolic_permissions()</kbd> and <kbd>octal_permissions()</kbd> to the <a href='helpers/file_helper.html'>File helper</a>.</li>
		</ul>
	</li>
	<li>Plugins
		<ul>
			<li>Modified captcha generation to first look for the function imagecreatetruecolor, and fallback to imagecreate if it isn't available (#4226).</li>
		</ul>
	</li>
	<li>Other
		Changes
		<ul>
			<li>Added ability for <a href="libraries/input.html">xss_clean()</a> to accept arrays.</li>
			<li>Removed closing PHP tags from all PHP files to avoid accidental output and potential 'cannot modify headers' errors.</li>
			<li>Removed &quot;scripts&quot; from the auto-load search path. Scripts were deprecated
				in Version 1.4.1 (September 21, 2006). If you still need to use them for legacy reasons, they must now be manually loaded in each Controller.</li>
			<li>Added a <a href="general/reserved_names.html">Reserved Names</a> page to the userguide, and migrated reserved controller names into it.</li>
			<li>Added a <a href="general/common_functions.html">Common Functions</a> page to the userguide for globally available functions.</li>
			<li>Improved security and performance of xss_clean().</li>
		</ul>
	</li>
	</ul>

<h3>Bugfixes for 1.6.2</h3>
<ul>
	<li>Fixed a bug where SET queries were not being handled as "write" queries.</li>
	<li>Fixed a bug (#3191) with ORIG_PATH_INFO URI parsing.</li>
	<li>Fixed a bug in DB Forge, when inserting an id field (#3456).</li>
	<li>Fixed a bug in the table library that could cause identically constructed rows to be dropped (#3459).</li>
	<li>Fixed DB Driver and MySQLi result driver checking for resources instead of objects (#3461).</li>
	<li>Fixed an AR_caching error where it wasn't tracking table aliases (#3463).</li>
	<li>Fixed a bug in AR compiling, where select statements with arguments got incorrectly escaped (#3478).</li>
	<li>Fixed an incorrect documentation of $this-&gt;load-&gt;language (#3520).</li>
	<li>Fixed bugs (#3523, #4350) in get_filenames() with recursion and problems with Windows when $include_path is used.</li>
	<li>Fixed a bug (#4153) in the XML-RPC class preventing dateTime.iso8601 from being used.</li>
	<li>Fixed an AR bug with or_where_not_in() (#4171).</li>
	<li>Fixed a bug with <a href="libraries/input.html">xss_clean()</a> that would add semicolons to GET URI variable strings.</li>
	<li>Fixed a bug (#4206) in the Directory Helper where the directory resource was not being closed, and minor improvements.</li>
	<li>Fixed a bug in the FTP library where delete_dir() was not working recursively (#4215).</li>
	<li>Fixed a Validation bug when set_rules() is used with a non-array field name and rule (#4220).</li>
	<li>Fixed a bug (#4223) where DB caching would not work for returned DB objects or multiple DB connections.</li>
	<li>Fixed a bug in the Upload library that might output the same error twice (#4390).</li>
	<li>Fixed an AR bug when joining with a table alias and table prefix (#4400).</li>
	<li>Fixed a bug in the DB class testing the $params argument.</li>
	<li>Fixed a bug in the Table library where the integer 0 in cell data would be displayed as a blank cell.</li>
	<li>Fixed a bug in <kbd>link_tag()</kbd> of the <a href="helpers/url_helper.html">URL helper</a> where a key was passed instead of a value.</li>
	<li>Fixed a bug in DB_result::row() that prevented it from returning individual fields with MySQL NULL values.</li>
	<li>Fixed a bug where SMTP emails were not having dot transformation performed on lines that begin with a dot.</li>
	<li>Fixed a bug in display_error() in the DB driver that was instantiating new Language and Exception objects, and not using the error heading.</li>
	<li>Fixed a bug (#4413) where a URI containing slashes only e.g. 'http://example.com/index.php?//' would result in PHP errors</li>
	<li>Fixed an array to string conversion error in the Validation library (#4425)</li>
	<li>Fixed bug (#4451, #4299, #4339) where failed transactions will not rollback when debug mode is enabled.</li>
	<li>Fixed a bug (#4506) with overlay_watermark() in the Image library preventing support for PNG-24s with alpha transparency</li>
	<li>Fixed assorted user guide typos (#3453, #4364, #4379, #4399, #4408, #4412, #4448, #4488).</li>
	</ul>

<h2>Version 1.6.1</h2>
<p>Release Date: February 12, 2008<br />
Hg Tag: 1.6.1</p>
<ul>
	<li>Active Record
		<ul>
			<li>Added <a href="./database/active_record.html#caching">Active Record Caching</a>.</li>
			<li>Made Active Record fully database-prefix aware.</li>
		</ul>
	</li>
	<li>Database drivers
		<ul>
			<li>Added support for setting client character set and collation for MySQLi.</li>
		</ul>
	</li>
	<li>Core Changes
		<ul>
			<li>Modified <kbd>xss_clean()</kbd> to be more intelligent with its handling of URL encoded strings.</li>
			<li>Added $_SERVER, $_FILES, $_ENV, and $_SESSION to sanitization of globals.</li>
			<li>Added a <a href="./helpers/path_helper.html">Path Helper</a>.</li>
			<li>Simplified <kbd>_reindex_segments()</kbd> in the URI class.</li>
			<li>Escaped the '-' in the default 'permitted_uri_chars' config item, to prevent errors if developers just try to add additional characters to the end of the default expression.</li>
			<li>Modified method calling to controllers to show a 404 when a private or protected method is accessed via a URL.</li>
			<li>Modified framework initiated 404s to log the controller and method for invalid requests.</li>
		</ul>
	</li>
	<li>Helpers
		<ul>
			<li>Modified <kbd>get_filenames()</kbd> in the File Helper to return FALSE if the $source_dir is not readable.</li>
		</ul>
	</li>
</ul>


<h3>Bugfixes for 1.6.1</h3>
<ul>
	<li>Deprecated is_numeric as a validation rule. Use of numeric and integer are preferred.</li>
	<li>Fixed bug (#3379) in DBForge with SQLite for table creation.</li>
	<li>Made Active Record fully database prefix aware (#3384).</li>
	<li>Fixed a bug where DBForge was outputting invalid SQL in Postgres by adding brackets around the tables in FROM.</li>
	<li>Changed the behaviour of Active Record's update() to make the WHERE clause optional (#3395).</li>
	<li>Fixed a bug (#3396) where certain POST variables would cause a PHP warning.</li>
	<li>Fixed a bug in query binding (#3402).</li>
	<li>Changed order of SQL keywords in the Profiler $highlight array so OR would not be highlighted before ORDER BY.</li>
	<li>Fixed a bug (#3404) where the MySQLi driver was testing if $this->conn_id was a resource instead of an object.</li>
	<li>Fixed a bug (#3419) connecting to a database via a DSN string.</li>
	<li>Fixed a bug (#3445) where the routed segment array was not re-indexed to begin with 1 when the default controller is used.</li>
	<li>Fixed assorted user guide typos.</li>
</ul>



<h2>Version 1.6.0</h2>
<p>Release Date: January 30, 2008 </p>
<ul>
	<li>DBForge
		<ul>
			<li>Added <a href="./database/forge.html">DBForge</a> to the database tools.</li>
			<li>Moved <kbd>create_database()</kbd> and <kbd>drop_database()</kbd> into <a href="./database/forge.html">DBForge</a>.</li>
			<li>Added <kbd>add_field()</kbd>, <kbd>add_key()</kbd>, <kbd>create_table()</kbd>, <kbd>drop_table()</kbd>, <kbd>add_column()</kbd>, <kbd>drop_column()</kbd>, <kbd>modify_column()</kbd> into <a href="./database/forge.html">DBForge</a>.</li>
		</ul>
	</li>

	<li>Active Record
		<ul>
			<li>Added <kbd>protect_identifiers()</kbd> in <a href="./database/active_record.html">Active Record</a>.</li>
			<li>All AR queries are backticked if appropriate to the database.</li>
			<li>Added <kbd>where_in()</kbd>, <kbd>or_where_in()</kbd>, <kbd>where_not_in()</kbd>,  <kbd>or_where_not_in()</kbd>, <kbd>not_like()</kbd> and <kbd>or_not_like()</kbd> to <a href="./database/active_record.html">Active Record</a>.</li>
			<li>Added support for <kbd>limit()</kbd>  into <kbd>update()</kbd> and <kbd>delete()</kbd> statements in  <a href="./database/active_record.html">Active Record</a>.</li>
			<li>Added <kbd>empty_table()</kbd> and <kbd>truncate_table()</kbd> to <a href="./database/active_record.html">Active Record</a>.</li>
			<li>Added the ability to pass an array of tables to the <kbd>delete()</kbd> statement in <a href="./database/active_record.html">Active Record</a>.</li>
			<li>Added <kbd>count_all_results()</kbd> function to <a href="./database/active_record.html">Active Record</a>.</li>
			<li>Added <kbd>select_max()</kbd>, <kbd>select_min()</kbd>, <kbd>select_avg()</kbd> and <kbd>select_sum()</kbd> to <a href="./database/active_record.html">Active Record</a>.</li>
			<li>Added the ability to use aliases with joins in <a href="./database/active_record.html">Active Record</a>.</li>
			<li>Added a third parameter to Active Record's <kbd>like()</kbd> clause to control where the wildcard goes. </li>
			<li>Added a third parameter to <kbd>set()</kbd> in <a href="./database/active_record.html">Active Record</a> that withholds escaping data.</li>
			<li>Changed the behaviour of variables submitted to the where() clause with no values to auto set &quot;IS NULL&quot;</li>
		</ul>
	</li>

	<li>Other Database Related
		<ul>
			<li>MySQL driver now requires MySQL 4.1+</li>
			<li>Added $this->DB->save_queries variable to DB driver, enabling queries to get saved or not. Previously they were always saved.</li>
			<li>Added $this->db->dbprefix() to manually add database prefixes.</li>
			<li>Added 'random' as an <kbd>order_by()</kbd> option , and removed &quot;rand()&quot; as a listed option as it was MySQL only.</li>
			<li>Added a check for NULL fields in the MySQL database backup utility.</li>
			<li>Added &quot;constrain_by_prefix&quot; parameter to db-&gt;list_table() function.  If set to TRUE it will limit the result to only table names with the current prefix.</li>
			<li>Deprecated from Active Record; <kbd>getwhere()</kbd> for <kbd>get_where()</kbd>; <kbd>groupby()</kbd> for <kbd>group_by()</kbd>; <kbd>havingor()</kbd> for <kbd>having_or()</kbd>; <kbd>orderby()</kbd> for <kbd>order_by</kbd>; <kbd>orwhere()</kbd> for <kbd>or_where()</kbd>; and <kbd>orlike()</kbd> for <kbd>or_like()</kbd>.</li>
			<li>Modified <kbd>csv_from_result()</kbd> to output CSV data more in the spirit of basic rules of RFC 4180.</li>
			<li>Added 'char_set' and 'dbcollat' database configuration settings, to explicitly set the client communication properly.</li>
			<li>Removed 'active_r' configuration setting and replaced with a global $active_record setting, which is more
				in harmony with the global nature of the behavior (#1834).</li>
		</ul>
	</li>

	<li>Core changes
		<ul>
			<li>Added ability to load multiple views, whose content will be appended to the output in the order loaded.</li>
			<li>Added the ability to <a href="./general/autoloader.html">auto-load</a> <a href="./general/models.html">Models</a>.</li>
			<li>Reorganized the URI and Routes classes for better clarity.</li>
			<li>Added Compat.php to allow function overrides for older versions of PHP or PHP environments missing certain extensions / libraries</li>
			<li>Added memory usage, GET, URI string data, and individual query execution time to Profiler output.</li>
			<li>Deprecated Scaffolding.</li>
			<li>Added is_really_writable() to Common.php to provide a cross-platform reliable method of testing file/folder writability.</li>
		</ul>
	</li>

	<li>Libraries
		<ul>
			<li>Changed the load protocol of Models to allow for extension.</li>
			<li>Strengthened the Encryption library to help protect against man in the middle attacks when MCRYPT_MODE_CBC mode is used.</li>
			<li>Added Flashdata variables, session_id regeneration and configurable session update times to the <a href="./libraries/sessions.html">Session class.</a></li>
			<li>Removed 'last_visit' from the Session class.</li>
			<li>Added a language entry for valid_ip validation error.</li>
			<li>Modified prep_for_form() in the Validation class to accept arrays, adding support for POST array validation (via callbacks only)</li>
			<li>Added an &quot;integer&quot; rule into the Validation library.</li>
			<li>Added valid_base64() to the Validation library.</li>
			<li>Documented clear() in the <a href="../libraries/image_lib.html">Image Processing</a> library.</li>
			<li>Changed the behaviour of custom callbacks so that they no longer trigger the &quot;required&quot; rule. </li>
			<li>Modified Upload class $_FILES error messages to be more precise.</li>
			<li>Moved the safe mode and auth checks for the Email library into the constructor. </li>
			<li>Modified variable names in _ci_load() method of Loader class to avoid conflicts with view variables.</li>
			<li>Added a few additional mime type variations for CSV.</li>
			<li>Enabled the 'system' methods for the XML-RPC Server library, except for 'system.multicall' which is still disabled.</li>
		</ul>
	</li>

	<li>Helpers &amp; Plugins
		<ul>
			<li>Added link_tag() to the <a href="./helpers/html_helper.html">HTML helper.</a></li>
			<li>Added img() to the <a href="./helpers/html_helper.html">HTML helper.</a></li>
			<li>Added ability to <a href="./general/helpers.html">"extend" Helpers</a>.</li>
			<li>Added an <a href="./helpers/email_helper.html">email helper</a> into core helpers.</li>
			<li>Added <kbd>strip_quotes()</kbd> function to <a href="./helpers/string_helper.html">string helper</a>.</li>
			<li>Added <kbd>reduce_multiples()</kbd> function to <a href="./helpers/string_helper.html">string helper</a>.</li>
			<li>Added <kbd>quotes_to_entities()</kbd> function to <a href="./helpers/string_helper.html">string helper</a>.</li>
			<li>Added <kbd>form_fieldset()</kbd>, <kbd>form_fieldset_close()</kbd>, <kbd>form_label()</kbd>, and <kbd>form_reset()</kbd> function to <a href="./helpers/form_helper.html">form helper</a>.</li>
			<li>Added support for external urls in <kbd>form_open()</kbd>.</li>
			<li>Removed support for db_backup in MySQLi due to incompatible functions.</li>
			<li>Javascript Calendar plugin now uses the months and days from the calendar language file, instead of hard-coded values, internationalizing it.</li>
		</ul>
	</li>


	<li>Documentation Changes
		<ul>
			<li>Added <a href="./doc_style/index.html">Writing Documentation</a> section for the community to use in writing their own documentation.</li>
			<li>Added titles to all user manual pages.</li>
			<li>Added attributes into &lt;html&gt; of userguide for valid html.</li>
			<li>Added <a href="http://codeigniter.com/user_guide/libraries/zip.html">Zip Encoding Class</a> to the table of contents of the userguide.</li>
			<li>Moved part of the userguide menu javascript to an external file.</li>
			<li>Documented <kbd>distinct()</kbd> in <a href="./database/active_record.html">Active Record</a>. </li>
			<li>Documented the <kbd>timezones()</kbd> function in the <a href="./helpers/date_helper.html">Date Helper</a>.</li>
			<li>Documented unset_userdata in the <a href="./libraries/sessions.html">Session class</a>.</li>
			<li>Documented 2 config options to the <a href="./database/configuration.html">Database configuration</a> page.</li>
		</ul>
	</li>
</ul>

<h3>Bug fixes for Version 1.6.0</h3>

<ul>
	<li>Fixed a bug (#1813) preventing using $CI->db in the same application with returned database objects.</li>
	<li>Fixed a bug (#1842) where the $this->uri->rsegments array would not include the 'index' method if routed to the controller without an implicit method.</li>
	<li>Fixed a bug (#1872) where word_limiter() was not retaining whitespace.</li>
	<li>Fixed a bug (#1890) in csv_from_result() where content that included the delimiter would break the file.</li>
	<li>Fixed a bug (#2542)in the clean_email() method of the Email class to allow for non-numeric / non-sequential array keys.</li>
	<li>Fixed a bug (#2545) in <kbd>_html_entity_decode_callback()</kbd> when 'global_xss_filtering' is enabled.</li>
	<li>Fixed a bug (#2668) in the <a href="./libraries/parser.html">parser class</a> where numeric data was ignored.</li>
	<li>Fixed a bug (#2679) where the &quot;previous&quot; pagination link would get drawn on the first page.</li>
	<li>Fixed a bug (#2702) in _object_to_array that broke some types of inserts and updates.</li>
	<li>Fixed a bug (#2732) in the SQLite driver for PHP 4.</li>
	<li>Fixed a bug (#2754) in Pagination to scan for non-positive num_links.</li>
	<li>Fixed a bug (#2762) in the <a href="./libraries/sessions.html">Session library</a> where user agent matching would fail on user agents ending with a space. </li>
	<li>Fixed a bug (#2784) $field_names[] vs $Ffield_names[] in postgres and sqlite drivers.</li>
	<li>Fixed a bug (#2810) in the typography helper causing extraneous paragraph tags when string contains tags.</li>
	<li>Fixed a bug (#2849) where arguments passed to a subfolder controller method would be incorrectly shifted, dropping the 3rd segment value.</li>
	<li>Fixed a bug (#2858) which referenced a wrong variable in the Image class.</li>
	<li>Fixed a bug (#2875)when loading plugin files as _plugin. and not _pi.</li>
	<li>Fixed a bug (#2912) in <kbd>get_filenames()</kbd> in the <a href="./helpers/file_helper.html">File Helper </a>where the array wasn't cleared after each call.</li>
	<li>Fixed a bug (#2974) in <kbd>highlight_phrase()</kbd> that caused an error with slashes.</li>
	<li>Fixed a bug (#3003) in the Encryption Library to support modes other than MCRYPT_MODE_ECB</li>
	<li>Fixed a bug (#3015) in the <a href="./libraries/user_agent.html">User Agent library</a> where more then 2 languages where not reported with languages().</li>
	<li>Fixed a bug (#3017) in the <a href="./libraries/email.html">Email</a> library where some timezones were calculated incorrectly. </li>
	<li>Fixed a bug (#3024) in which master_dim wasn't getting reset by clear() in the Image library.</li>
	<li>Fixed a bug (#3156) in Text Helper highlight_code() causing PHP tags to be handled incorrectly.</li>
	<li>Fixed a bug (#3166) that prevented num_rows from working in Oracle.</li>
	<li>Fixed a bug (#3175) preventing certain libraries from working properly when autoloaded in PHP 4.</li>
	<li>Fixed a bug (#3267) in the Typography Helper where unordered list was listed &quot;un.</li>
	<li>Fixed a bug (#3268) where the Router could leave '/' as the path.</li>
	<li>Fixed a bug (#3279) where the Email class was sending the wrong Content-Transfer-Encoding for some character sets.</li>
	<li>Fixed a bug (#3284) where the rsegment array would not be set properly if the requested URI contained more segments than the routed URI.</li>
	<li>Removed extraneous load of $CFG in _display_cache() of the Output class (#3285).</li>
	<li>Removed an extraneous call to loading models (#3286).</li>
	<li>Fixed a bug (#3310) with sanitization of globals in the Input class that could unset CI's global variables.</li>
	<li>Fixed a bug (#3314) which would cause the top level path to be deleted in delete_files() of the File helper.</li>
	<li>Fixed a bug (#3328) where the smiley helper might return an undefined variable.</li>
	<li>Fixed a bug (#3330) in the FTP class where a comparison wasn't getting made.</li>
	<li>Removed an unused parameter from Profiler (#3332).</li>
	<li>Fixed a bug in database driver where num_rows property wasn't getting updated.</li>
	<li>Fixed a bug in the <a href="./libraries/file_uploading.html">upload library</a> when allowed_files wasn't defined.</li>
	<li>Fixed a bug in <kbd>word_wrap()</kbd> of the Text Helper that incorrectly referenced an object. </li>
	<li>Fixed a bug in Validation where <kbd>valid_ip()</kbd> wasn't called properly.</li>
	<li>Fixed a bug in Validation where individual error messages for checkboxes wasn't supported.</li>
	<li>Fixed a bug in captcha calling an invalid PHP function.</li>
	<li>Fixed a bug in the cookie helper "set_cookie" function.  It was not honoring the config settings.</li>
	<li>Fixed a bug that was making validation callbacks required even when not set as such.</li>
	<li>Fixed a bug in the XML-RPC library so if a type is specified, a more intelligent decision is made as to the default type.</li>
	<li>Fixed an example of comma-separated emails in the email library documentation.</li>
	<li>Fixed an example in the Calendar library for Showing Next/Previous Month Links.</li>
	<li>Fixed a typo in the database language file.</li>
	<li>Fixed a typo in the image language file &quot;suppor&quot; to &quot;support&quot;.</li>
	<li>Fixed an example for XML RPC.</li>
	<li>Fixed an example of <kbd>accept_charset()</kbd> in the <a href="./libraries/user_agent.html">User Agent Library</a>.</li>
	<li>Fixed a typo in the docblock comments that had CodeIgniter spelled CodeIgnitor.</li>
	<li>Fixed a typo in the <a href="./helpers/string_helper.html">String Helper</a> (uniquid changed to uniqid).</li>
	<li>Fixed typos in the email Language class (email_attachment_unredable, email_filed_smtp_login), and FTP Class (ftp_unable_to_remame).</li>
	<li>Added a stripslashes()  into the Upload Library.</li>
	<li>Fixed a series of grammatical and spelling errors in the language files.</li>
	<li>Fixed assorted user guide typos.</li>
</ul>
<h2>Version 1.5.4</h2>
<p>Release Date: July 12, 2007 </p>
<ul>
	<li>Added <a href="./libraries/language.html">custom Language files</a> to the <a href="./general/autoloader.html">autoload</a> options. </li>
	<li>Added stripslashes() to the _clean_input_data() function in the <a href="./libraries/input.html">Input class</a> when magic quotes is on so that data will always be un-slashed within the framework.</li>
	<li>Added array to string into the <a href="general/profiling.html">profiler</a>.</li>
	<li>Added some additional mime types in application/config/mimes.php.</li>
	<li>Added filename_security() method to <a href="./libraries/input.html">Input library</a>.</li>
	<li>Added some additional arguments to the <a href="./helpers/inflector_helper.html">Inflection helper</a> singular() to compensate for words ending in "s".  Also added a force parameter to pluralize().</li>
	<li>Added $config['charset'] to the config file.  Default value is 'UTF-8', used in some string handling functions.</li>
	<li>Fixed MSSQL insert_id().</li>
	<li>Fixed a logic error in the DB trans_status() function.  It was incorrectly returning TRUE on failure and FALSE on success.</li>
	<li>Fixed a bug that was allowing multiple load attempts on extended classes.</li>
	<li>Fixed a bug in the bootstrap file that was incorrectly attempting to discern the full server path even when it was explicity set by the user.</li>
	<li>Fixed a bug in the escape_str() function in the MySQL driver.</li>
	<li>Fixed a typo in the <a href="./libraries/calendar.html">Calendar library </a> </li>
	<li>Fixed a typo in rpcs.php library</li>
	<li>Fixed a bug in the <a href="./libraries/zip.html">Zip library</a>, providing PC Zip file compatibility with Mac OS X</li>
	<li>Fixed a bug in router that was ignoring the scaffolding route for optimization </li>
	<li>Fixed an IP validation bug.</li>
	<li>Fixed a bug in display of POST keys in the <a href="./general/profiling.html">Profiler</a> output</li>
	<li>Fixed a bug in display of queries with characters that would be interpreted as HTML in the <a href="./general/profiling.html">Profiler</a> output</li>
	<li>Fixed a bug in display of Email class print debugger with characters that would be interpreted as HTML in the debugging output</li>
	<li>Fixed a bug in the Content-Transfer-Encoding of HTML emails with the quoted-printable MIME type</li>
	<li>Fixed a bug where one could unset certain PHP superglobals by setting them via GET or POST data</li>
	<li>Fixed an undefined function error in the insert_id() function of the PostgreSQL driver</li>
	<li>Fixed various doc typos. </li>
	<li>Documented two functions from the <a href="./helpers/string_helper.html">String helper </a> that were missing from the user guide:  trim_slashes() and reduce_double_slashes().</li>
	<li>Docs now validate to XHTML 1 transitional</li>
	<li>Updated the XSS Filtering to take into account the IE expression() ability and improved certain deletions to prevent possible exploits</li>
	<li>Modified the Router so that when Query Strings are Enabled, the controller trigger and function trigger values are sanitized for filename include security.</li>
	<li>Modified the is_image() method in the Upload library to take into account Windows IE 6/7 eccentricities when dealing with MIMEs</li>
	<li>Modified XSS Cleaning routine to be more performance friendly and compatible with PHP 5.2's new PCRE backtrack and recursion limits.</li>
	<li>Modified the <a href="./helpers/url_helper.html">URL Helper</a> to type cast the $title as a string in case a numeric value is supplied</li>
	<li>Modified Form Helper form_dropdown() to type cast the keys and values of the options array as strings, allowing numeric values to be properly set as 'selected'</li>
	<li>Deprecated the use if <kbd>is_numeric()</kbd> in various places since it allows periods.  Due to compatibility problems with <kbd>ctype_digit()</kbd>, making it unreliable in some installations, the following regular expression was used instead:  <kbd>preg_match("/[^0-9]/", $n)</kbd></li>
	<li>Deprecated: APPVER has been deprecated and replaced with CI_VERSION for clarity. </li>
</ul>
<h2>Version 1.5.3</h2>
<p>Release Date: April 15, 2007 </p>
<ul>
	<li>Added array to string into the profiler </li>
	<li>Code Igniter references updated to CodeIgniter </li>
	<li>pMachine references updated to EllisLab </li>
	<li>Fixed a bug in the repeater function of <a href="./helpers/string_helper.html">string helper</a>. </li>
	<li>Fixed a bug in ODBC driver </li>
	<li>Fixed a bug in result_array() that was returning an empty array when no result is produced.</li>
	<li>Fixed a bug in the redirect function of the <a href="./helpers/url_helper.html">url helper</a>. </li>
	<li>Fixed an undefined variable in Loader </li>
	<li>Fixed a version bug in the Postgres driver </li>
	<li>Fixed a bug in the textarea function of the form helper for use with strings</li>
	<li>Fixed doc typos. </li>
</ul>
<h2>Version 1.5.2</h2>
<p>Release Date: February 13, 2007 </p>
<ul>
	<li>Added <a href="./installation/downloads.html#svn">subversion information</a> to the <a href="./installation/downloads.html">downloads</a> page. </li>
	<li>Added support for captions in the <a href="./libraries/table.html">Table Library</a> </li>
	<li>Fixed a bug in the <a href="./helpers/download_helper.html">download_helper</a> that was causing Internet Explorer to load rather than download </li>
	<li>Fixed a bug in the Active Record Join function that was not taking table prefixes into consideration.</li>
	<li>Removed unescaped variables in error messages of Input and Router classes</li>
	<li>Fixed a bug in the Loader that was causing errors on Libraries loaded twice. A debug message is now silently made in the log.  </li>
	<li>Fixed a bug in the <a href="./helpers/form_helper.html">form helper</a> that gave textarea a value attribute </li>
	<li>Fixed a bug in the <a href="./libraries/image_lib.php">Image Library</a> that was ignoring resizing the same size image </li>
	<li>Fixed some doc typos.</li>
</ul>


<h2>Version 1.5.1</h2>
<p>Release Date: November 23, 2006</p>
<ul>
	<li>Added support for submitting arrays of libraries in the $this-&gt;load-&gt;library function.</li>
	<li>Added support for naming custom library files in lower or uppercase.</li>
	<li>Fixed a bug related to output buffering.</li>
	<li>Fixed a bug in the active record class that was not resetting query data after a completed query.</li>
	<li>Fixed a bug that was suppressing errors in controllers.</li>
	<li>Fixed a problem that can cause a loop to occur when the config file is missing.</li>
	<li>Fixed a bug that occurred when multiple models were loaded with the third parameter set to TRUE.</li>
	<li>Fixed an oversight that was not unsetting globals properly in the input sanitize function.</li>
	<li>Fixed some bugs in the Oracle DB driver.</li>
	<li>Fixed an incorrectly named variable in the MySQLi result driver.</li>
	<li>Fixed some doc typos.</li>
</ul>
<h2>Version 1.5.0.1</h2>
<p>Release Date: October 31, 2006</p>
<ul>
<li>Fixed a problem in which duplicate attempts to load helpers and classes were not being stopped.</li>
<li>Fixed a bug in the word_wrap() helper function.</li>
<li>Fixed an invalid color Hex number in the Profiler class.</li>
<li>Fixed a corrupted image in the user guide.</li>
</ul>



<h2>Version 1.5.0</h2>
<p>Release Date: October 30, 2006</p>

<ul>
<li>Added <a href="./database/utilities.html">DB utility class</a>, permitting DB backups, CVS or XML files from DB results, and various other functions.</li>
<li>Added <a href="./database/caching.html">Database Caching Class</a>.</li>
<li>Added <a href="./database/transactions.html">transaction support</a> to the database classes.</li>
<li>Added <a href="./general/profiling.html">Profiler Class</a> which generates a report of Benchmark execution times, queries, and POST data at the bottom of your pages.</li>
<li>Added <a href="./libraries/user_agent.html">User Agent Library</a> which allows browsers, robots, and mobile devises to be identified.</li>
<li>Added <a href="./libraries/table.html">HTML Table Class</a> , enabling tables to be generated from arrays or database results.</li>
<li>Added <a href="./libraries/zip.html">Zip Encoding Library</a>.</li>
<li>Added <a href="./libraries/ftp.html">FTP Library</a>.</li>
<li>Added the ability to <a href="./general/creating_libraries.html">extend libraries</a> and <a href="./general/core_classes.html">extend core classes</a>, in addition to being able to replace them.</li>
<li>Added support for storing <a href="./general/models.html">models within sub-folders</a>.</li>
<li>Added <a href="./helpers/download_helper.html">Download Helper</a>.</li>
<li>Added <a href="./database/queries.html">simple_query()</a> function to the database classes</li>
<li>Added <a href="./helpers/date_helper.html">standard_date()</a> function to the Date Helper.</li>
<li>Added <a href="./database/results.html">$query->free_result()</a> to database class.</li>
<li>Added <a href="./database/fields.html">$query->list_fields()</a> function to database class</li>
<li>Added <a href="./database/helpers.html">$this->db->platform()</a> function</li>
<li>Added new <a href="./helpers/file_helper.html">File Helper</a>:  get_filenames()</li>
<li>Added new helper:  <a href="./helpers/smiley_helper.html">Smiley Helper</a></li>
<li>Added support for &lt;ul> and &lt;ol> lists in the  <a href="./helpers/html_helper.html">HTML Helper</a></li>
<li>Added the ability to rewrite <a href="./general/alternative_php.html">short tags</a> on-the-fly, converting them to standard PHP statements, for those servers that do not support short tags.  This allows the cleaner syntax to be used regardless of whether it's supported by the server.</li>
<li>Added the ability to <a href="./general/managing_apps.html">rename or relocate the "application" folder</a>.</li>
<li>Added more thorough initialization in the upload class so that all class variables are reset.</li>
<li>Added "is_numeric" to validation, which uses the native PHP is_numeric function.</li>
<li>Improved the URI handler to make it more reliable when the $config['uri_protocol'] item is set to AUTO.</li>
<li>Moved most of the functions in the Controller class into the Loader class, allowing fewer reserved function names for controllers when running under PHP 5.</li>
<li>Updated the DB Result class to return an empty array when $query->result() doesn't produce a result.</li>
<li>Updated the <dfn>input->cookie()</dfn> and <dfn>input->post()</dfn> functions in <a href="./libraries/input.html">Input Class</a> to permit arrays contained cookies that are arrays to be run through the XSS filter.</li>
<li>Documented three functions from the <a href="./libraries/validation.html">Validation class</a> that were missing from the user guide:  set_select(), set_radio(), and set_checkbox().</li>
<li>Fixed a bug in the Email class related to SMTP Helo data.</li>
<li>Fixed a bug in the word wrapping helper and function in the email class.</li>
<li>Fixed a bug in the validation class.</li>
<li>Fixed a bug in the typography helper that was incorrectly wrapping block level elements in paragraph tags.</li>
<li>Fixed a problem in the form_prep() function that was double encoding entities.</li>
<li>Fixed a bug that affects some versions of PHP when output buffering is nested.</li>
<li>Fixed a bug that caused CI to stop working when the PHP magic __get() or __set() functions were used within models or controllers.</li>
<li>Fixed a pagination bug that was permitting negative values in the URL.</li>
<li>Fixed an oversight in which the Loader class was not allowed to be extended.</li>
<li>Changed <dfn>_get_config()</dfn> to <dfn>get_config()</dfn> since the function is not a private one.</li>
<li><strong>Deprecated "init" folder</strong>.  Initialization happens automatically now.  <a href="./general/creating_libraries.html">Please see documentation</a>.</li>
<li><strong>Deprecated</strong> $this->db->field_names()  USE  $this->db->list_fields()</li>
<li><strong>Deprecated</strong> the <dfn>$config['log_errors']</dfn> item from the config.php file.  Instead, <dfn>$config['log_threshold']</dfn> can be set to "0" to turn it off.</li>
</ul>




<h2>Version 1.4.1</h2>
<p>Release Date: September 21, 2006</p>

<ul>
<li>Added a new feature that passes URI segments directly to your function calls as parameters. See the <a href="./general/controllers.html">Controllers</a> page for more info.</li>
<li>Added support for a function named <dfn>_output()</dfn>, which when used in your controllers will received the final rendered output from the output class.  More info in the <a href="controllers.html">Controllers</a> page.</li>
<li>Added several new functions in the <a href="./libraries/uri.html">URI Class</a> to let you retrieve and manipulate URI segments that have been re-routed using the <a href="routing.html">URI Routing</a> feature. Previously, the URI class did not permit you to access any re-routed URI segments, but now it does.</li>
<li>Added <a href="./libraries/output.html">$this->output->set_header()</a> function, which allows you to set server headers.</li>
<li>Updated plugins, helpers, and language classes to allow your <dfn>application</dfn> folder to contain its own plugins, helpers, and language folders.  Previously they were always treated as global for your entire installation.  If your application folder contains any of these resources they will be used <em>instead</em> the global ones.</li>
<li>Added <a href="./helpers/inflector_helper.html">Inflector helper</a>.</li>
<li>Added <dfn>element()</dfn> function in the <a href="./helpers/array_helper.html">array helper</a>.</li>
<li>Added <dfn>RAND()</dfn> to active record <dfn>orderby()</dfn> function.</li>
<li>Added <dfn>delete_cookie()</dfn> and <dfn>get_cookie()</dfn> to <a href="./helpers/cookie_helper.html">Cookie helper</a>, even though the input class has a cookie fetching function.</li>
<li>Added Oracle database driver (still undergoing testing so it might have some bugs).</li>
<li>Added the ability to combine pseudo-variables and php variables in the template parser class.</li>
<li>Added output compression option to the config file.</li>
<li>Removed the is_numeric test from the db->escape() function.</li>
<li>Fixed a MySQLi bug that was causing error messages not to contain proper error data.</li>
<li>Fixed a bug in the email class which was causing it to ignore explicitly set alternative headers.</li>
<li>Fixed a bug that was causing a PHP error when the Exceptions class was called within the get_config() function since it was causing problems.</li>
<li>Fixed an oversight in the cookie helper in which the config file cookie settings were not being honored.</li>
<li>Fixed an oversight in the upload class. An item mentioned in the 1.4 changelog was missing.</li>
<li>Added some code to allow email attachments to be reset when sending batches of email.</li>
<li>Deprecated the <dfn>application/scripts</dfn> folder. It will continue to work for legacy users, but it is recommended that you create your own
<a href="./general/libraries.html">libraries</a> or <a href="./general/models.html">models</a> instead.  It was originally added before CI had user libraries or models, but it's not needed anymore.</li>
<li>Deprecated the <dfn>$autoload['core']</dfn> item from the <kbd>autoload.php</kbd> file.  Instead, please now use: <kbd>$autoload['libraries']</kbd></li>
<li>Deprecated the following database functions: $this->db->smart_escape_str() and $this->db->fields().</li>
</ul>



<h2>Version 1.4.0</h2>
<p>Release Date: September 17, 2006</p>

<ul>
<li>Added <a href="./general/hooks.html">Hooks</a> feature, enabling you to tap into and modify the inner workings of the framework without hacking the core files.</li>
<li>Added the ability to organize controller files <a href="./general/controllers.html">into sub-folders</a>.  Kudos to Marco for <a href="http://codeigniter.com/forums/viewthread/627/">suggesting</a> this (and the next two) feature.</li>
<li>Added regular expressions support for <a href="./general/routing.html">routing rules</a>.</li>
<li>Added the ability to <a href="./general/controllers.html">remap function calls</a> within your controllers.</li>
<li>Added the ability to <a href="./general/core_classes.html">replace core system classes</a> with your own classes.</li>
<li>Added support for % character in URL.</li>
<li>Added the ability to supply full URLs using the <a href="./helpers/url_helper.html">anchor()</a> helper function.</li>
<li>Added mode parameter to <a href="./helpers/file_helper.html">file_write()</a> helper.</li>
<li>Added support for changing the port number in the <a href="./database/configuration.html">Postgres driver</a>.</li>
<li>Moved the list of "allowed URI characters" out of the Router class and into the config file.</li>
<li>Moved the MIME type array out of the Upload class and into its own file in the applications/config/ folder.</li>
<li>Updated the Upload class to allow the upload field name to be set when calling <a href="./libraries/file_uploading.html">do_upload()</a>.</li>
<li>Updated the <a href="./libraries/config.html">Config Library</a> to be able to load config files silently, and to be able to assign config files to their own index (to avoid collisions if you use multiple config files).</li>
<li>Updated the URI Protocol code to allow more options so that URLs will work more reliably in different environments.</li>
<li>Updated the <dfn>form_open()</dfn> helper to allow the GET method to be used.</li>
<li>Updated the MySQLi <dfn>execute()</dfn> function with some code to help prevent lost connection errors.</li>
<li>Updated the SQLite Driver to check for object support before attempting to return results as objects.  If unsupported it returns an array.</li>
<li>Updated the Models loader function to allow multiple loads of the same model.</li>
<li>Updated the MS SQL driver so that single quotes are escaped.</li>
<li>Updated the Postgres and ODBC drivers for better compatibility.</li>
<li>Removed a strtolower() call that was changing URL segments to lower case.</li>
<li>Removed some references that were interfering with PHP 4.4.1 compatibility.</li>
<li>Removed backticks from Postgres class since these are not needed.</li>
<li>Renamed <dfn>display()</dfn> to <dfn>_display()</dfn> in the Output class to make it clear that it's a private function.</li>
<li>Deprecated the hash() function due to a naming conflict with a native PHP function with the same name.  Please use <kbd>dohash()</kbd> instead.</li>
<li>Fixed an bug that was preventing the input class from unsetting GET variables.</li>
<li>Fixed a router bug that was making it too greedy when matching end segments.</li>
<li>Fixed a bug that was preventing multiple discrete database calls.</li>
<li>Fixed a bug in which loading a language file was producing a "file contains no data" message.</li>
<li>Fixed a session bug caused by the XSS Filtering feature inadvertently changing the case of certain words.</li>
<li>Fixed some missing prefixes when using the database prefix feature.</li>
<li>Fixed a typo in the Calendar class (cal_november).</li>
<li>Fixed a bug in the <dfn>form_checkbox()</dfn> helper.</li>
<li>Fixed a bug that was allowing the second segment of the URI to be identical to the class name.</li>
<li>Fixed an evaluation bug in the database initialization function.</li>
<li>Fixed a minor bug in one of the error messages in the language class.</li>
<li>Fixed a bug in the date helper <dfn>timespan</dfn> function.</li>
<li>Fixed an undefined variable in the DB Driver class.</li>
<li>Fixed a bug in which dollar signs used as binding replacement values in the DB class would be treated as RegEx back-references.</li>
<li>Fixed a bug in the <dfn>set_hash()</dfn> function which was preventing MD5 from being used.</li>
<li>Fixed a couple bugs in the Unit Testing class.</li>
<li>Fixed an incorrectly named variable in the Validation class.</li>
<li>Fixed an incorrectly named variable in the URI class.</li>
<li>Fixed a bug in the config class that was preventing the base URL from being called properly.</li>
<li>Fixed a bug in the validation class that was not permitting callbacks if the form field was empty.</li>
<li>Fixed a problem that was preventing scaffolding from working properly with MySQLi.</li>
<li>Fixed some MS SQL bugs.</li>
<li>Fixed some doc typos.</li>
</ul>



<h2>Version 1.3.3</h2>
<p>Release Date: June 1, 2006</p>

<ul>

<li>Models do <strong>not</strong> connect automatically to the database as of this version. <a href="./general/models.html">More info here</a>.</li>
<li>Updated the Sessions class to utilize the active record class when running session related queries.  Previously the queries assumed MySQL syntax.</li>
<li>Updated alternator() function to re-initialize when called with no arguments, allowing multiple calls.</li>
<li>Fixed a bug in the active record "having" function.</li>
<li>Fixed a problem in the validation class which was making checkboxes be ignored when required.</li>
<li>Fixed a bug in the word_limiter() helper function.  It was cutting off the fist word.</li>
<li>Fixed a bug in the xss_clean function due to a PHP bug that affects some versions of html_entity_decode.</li>
<li>Fixed a validation bug that was preventing rules from being set twice in one controller.</li>
<li>Fixed a calendar bug that was not letting it use dynamically loaded languages.</li>
<li>Fixed a bug in the active record class when using WHERE clauses with LIKE</li>
<li>Fixed a bug in the hash() security helper.</li>
<li>Fixed some typos.</li>
</ul>




<h2>Version 1.3.2</h2>
<p>Release Date: April 17, 2006</p>

<ul>
<li>Changed the behavior of the validation class such that if a "required" rule is NOT explicitly stated for a field then all other tests get ignored.</li>
<li>Fixed a bug in the Controller class that was causing it to look in the local "init" folder instead of the main system one.</li>
<li>Fixed a bug in the init_pagination file.  The $config item was not being set correctly.</li>
<li>Fixed a bug in the auto typography helper that was causing inconsistent behavior.</li>
<li>Fixed a couple bugs in the Model class.</li>
<li>Fixed some documentation typos and errata.</li>
</ul>



<h2>Version 1.3.1</h2>
<p>Release Date: April 11, 2006</p>

<ul>
<li>Added a <a href="./libraries/unit_testing.html">Unit Testing Library</a>.</li>
<li>Added the ability to pass objects to the <strong>insert()</strong> and <strong>update()</strong>  database functions.
This feature enables you to (among other things) use your  <a href="./general/models.html">Model class</a> variables to run queries with. See the Models page for details.</li>
<li>Added the ability to pass objects to the <a href="./general/views.html">view loading function</a>: $this->load->view('my_view', <var>$object</var>);</li>
<li>Added <kbd>getwhere</kbd> function to <a href="./database/active_record.html">Active Record class</a>.</li>
<li>Added <kbd>count_all</kbd> function to <a href="./database/active_record.html">Active Record class</a>.</li>
<li>Added language file for scaffolding and fixed a scaffolding bug that occurs when there are no rows in the specified table.</li>
<li>Added <a href="./database/queries.html">$this->db->last_query()</a>, which allows you to view your last query that was run.</li>
<li>Added a new mime type to the upload class for better compatibility.</li>
<li>Changed how cache files are read to prevent PHP errors if the cache file contains an XML tag, which PHP wants to interpret as a short tag.</li>
<li>Fixed a bug in a couple of the active record functions (where and orderby).</li>
<li>Fixed a bug in the image library when realpath() returns false.</li>
<li>Fixed a bug in the Models that was preventing libraries from being used within them.</li>
<li>Fixed a bug in the "exact_length" function of the validation class.</li>
<li>Fixed some typos in the user guide</li>
</ul>


<h2>Version 1.3</h2>
<p>Release Date: April 3, 2006</p>

<ul>
<li>Added support for <a href="models.html">Models</a>.</li>
<li>Redesigned the database libraries to support additional RDBMs (Postgres, MySQLi, etc.).</li>
<li>Redesigned the <a href="./database/active_record.html">Active Record class</a> to enable more varied types of queries with simpler syntax, and advanced features like JOINs.</li>
<li>Added a feature to the database class that lets you run <a href="./database/call_function.html">custom function calls</a>.</li>
<li>Added support for <a href="controllers.html">private functions</a> in your controllers.  Any controller function name that starts with an underscore will not be served by a URI request.</li>
<li>Added the ability to pass your own initialization parameters to your <a href="creating_libraries.html">custom core libraries</a> when using $this->load->library()</li>
<li>Added support for running standard <a href="urls.html">query string URLs</a>.  These can be optionally enabled in your config file.</li>
<li>Added the ability to  <a href="urls.html">specify a "suffix"</a>, which will be appended to your URLs.  For example, you could add .html to your URLs, making them appear static. This feature is enabled in your config file.</li>
<li>Added a new error template for use with native PHP errors.</li>
<li>Added "alternator" function in the <a href="./helpers/string_helper.html">string helpers</a>.</li>
<li>Removed slashing from the input class. After much debate we decided to kill this feature.</li>
<li>Change the commenting style in the scripts to the PEAR standard so that IDEs and tools like phpDocumenter can harvest the comments.</li>
<li>Added better class and function name-spacing to avoid collisions with user developed classes. All CodeIgniter classes are now prefixed with <dfn>CI_</dfn> and
all controller methods are prefixed with <dfn>_ci</dfn> to avoid controller collisions. A list of reserved function names can be <a href="controllers.html">found here</a>.</li>
<li>Redesigned how the "CI" super object is referenced, depending on whether PHP 4 or 5 is being run, since PHP 5 allows a more graceful way to manage objects that utilizes a bit less resources.</li>
<li>Deprecated: <var>$this->db->use_table()</var> has been deprecated. Please read the <a href="./database/active_record.html">Active Record</a> page for information.</li>
<li>Deprecated: <var>$this->db->smart_escape_str()</var> has been deprecated. Please use this instead: <var>$this->db->escape()</var></li>
<li>Fixed a bug in the exception handler which was preventing some PHP errors from showing up.</li>
<li>Fixed a typo in the URI class.  $this->total_segment() should be plural: $this->total_segments()</li>
<li>Fixed some typos in the default calendar template</li>
<li>Fixed some typos in the user guide</li>
</ul>








<h2>Version 1.2</h2>
<p>Release Date: March 21, 2006</p>

<ul>
<li>Redesigned some internal aspects of the framework to resolve scoping problems that surfaced during the beta tests. The problem was most notable when instantiating classes in your constructors, particularly if those classes in turn did work in their constructors.</li>
<li>Added a global function named <a href="ancillary_classes.html">get_instance()</a> allowing the main CodeIgniter object to be accessible throughout your own classes.</li>
<li>Added new <a href="./helpers/file_helper.html">File Helper</a>:  delete_files()</li>
<li>Added new <a href="./helpers/url_helper.html">URL Helpers</a>:  base_url(), index_page()</li>
<li>Added the ability to create your own <a href="creating_libraries.html">core libraries</a> and store them in your local application directory.</li>
<li>Added an <kbd>overwrite</kbd> option to the <a href="./libraries/file_uploading.html">Upload class</a>, enabling files to be overwritten rather than having the file name appended.</li>
<li>Added Javascript Calendar plugin.</li>
<li>Added search feature to user guide.  Note: This is done using Google, which at the time of this writing has not crawled all the pages of the docs.</li>
<li>Updated the parser class so that it allows tag pars within other tag pairs.</li>
<li>Fixed a bug in the DB "where" function.</li>
<li>Fixed a bug that was preventing custom config files to be auto-loaded.</li>
<li>Fixed a bug in the mysql class bind feature that prevented question marks in the replacement data.</li>
<li>Fixed some bugs in the xss_clean function</li>
</ul>





<h2>Version Beta 1.1</h2>
<p>Release Date: March 10, 2006</p>

<ul>
<li>Added a <a href="./libraries/calendar.html">Calendaring class</a>.</li>
<li>Added support for running <a href="managing_apps.html">multiple applications</a> that share a common CodeIgniter backend.</li>
<li>Moved the "uri protocol" variable from the index.php file into the config.php file</li>
<li>Fixed a problem that was preventing certain function calls from working within constructors.</li>
<li>Fixed a problem that was preventing the $this->load->library function from working in constructors.</li>
<li>Fixed a bug that occurred when the session class was loaded using the auto-load routine.</li>
<li>Fixed a bug that can happen with PHP versions that do not support the E_STRICT constant</li>
<li>Fixed a data type error in the form_radio function (form helper)</li>
<li>Fixed a bug that was preventing the xss_clean function from being called from the validation class.</li>
<li>Fixed the cookie related config names, which were incorrectly specified as $conf rather than $config</li>
<li>Fixed a pagination problem in the scaffolding.</li>
<li>Fixed a bug in the mysql class "where" function.</li>
<li>Fixed a regex problem in some code that trimmed duplicate slashes.</li>
<li>Fixed a bug in the br() function in the HTML helper</li>
<li>Fixed a syntax mistake in the form_dropdown function in the Form Helper.</li>
<li>Removed the "style" attributes form the form helpers.</li>
<li>Updated the documentation. Added "next/previous" links to each page and fixed various typos.</li>
</ul>

<h2>Version Beta 1.0 </h2>
<p>Release Date: February 28, 2006</p>
<p>First publicly released version.</p>