

<h1>Loader Class</h1>

<p>Loader, as the name suggests, is used to load elements.  These elements can be libraries (classes) <a href="../general/views.html">View files</a>,
<a href="../general/helpers.html">Helpers</a>, <a href="../general/models.html">Models</a>, or your own files.</p>

<p class="important"><strong>Note:</strong> This class is initialized automatically by the system so there is no need to do it manually.</p>

<p>The following functions are available in this class:</p>


<h2>$this->load->library('<var>class_name</var>', <samp>$config</samp>, <kbd>'object name'</kbd>)</h2>


<p>This function is used to load core classes.  Where <var>class_name</var> is the name of the class you want to load.
Note: We use the terms "class" and "library" interchangeably.</p>

<p>For example, if you would like to send email with CodeIgniter, the first step is to load the email class within your controller:</p>

<code>$this->load->library('email');</code>

<p>Once loaded, the library will be ready for use, using <kbd>$this->email-></kbd><samp><em>some_function</em>()</samp>.</p>

<p>Library files can be stored in subdirectories within the main "libraries" folder, or within your personal <dfn>application/libraries</dfn> folder.
To load a file located in a subdirectory, simply include the path, relative to the "libraries" folder.
For example, if you have file located at:</p>

<code>libraries/flavors/chocolate.php</code>

<p>You will load it using:</p>

<code>$this->load->library('flavors/chocolate');</code>

<p>You may nest the file in as many subdirectories as you want.</p>

<p>Additionally, multiple libraries can be loaded at the same time by passing an array of libraries to the load function.</p>

<code>$this->load->library(array('<var>email</var>', '<var>table</var>'));</code>

<h3>Setting options</h3>

<p>The second (optional) parameter allows you to optionally pass configuration setting.  You will typically pass these as an array:</p>

<code>
$config = array (<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'mailtype' => 'html',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'charset'&nbsp; => 'utf-8,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'priority' => '1'<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />
$this->load->library('email', $config);</code>

<p>Config options can usually also be set via a config file. Each library is explained in detail in its own page, so please read the information regarding each one you would like to use.</p>

<p>Please take note, when multiple libraries are supplied in an array for the first parameter, each will receive the same parameter information.</p>

<h3>Assigning a Library to a different object name</h3>

<p>If the third (optional) parameter is blank, the library will usually be assigned to an object with the same name as the library.  For example, if the library is named <dfn>Session</dfn>, it
will be assigned to a variable named <dfn>$this->session</dfn>.</p>

<p>If you prefer to set your own class names you can pass its value to the third parameter:</p>

<code>$this->load->library('session', '', 'my_session');<br /><br />

// Session class is now accessed using:<br /><br />

$this->my_session

</code>

<p>Please take note, when multiple libraries are supplied in an array for the first parameter, this parameter is discarded.</p>


<h2>$this->load->view('<var>file_name</var>', <samp>$data</samp>, <kbd>true/false</kbd>)</h2>

<p>This function is used to load your View files.  If you haven't read the <a href="../general/views.html">Views</a> section of the
user guide it is recommended that you do since it shows you how this function is typically used.</p>

<p>The first parameter is required.  It is the name of the view file you would like to load. &nbsp;Note: The .php file extension does not need to be specified unless you use something other than <kbd>.php</kbd>.</p>

<p>The second <strong>optional</strong> parameter can take
an associative array or an object as input, which it runs through the PHP <a href="http://www.php.net/extract">extract</a> function to
convert to variables that can be used in your view files.  Again, read the <a href="../general/views.html">Views</a> page to learn
how this might be useful.</p>

<p>The third <strong>optional</strong> parameter lets you change the behavior of the function so that it returns data as a string
rather than sending it to your browser.  This can be useful if you want to process the data in some way.  If you
set the parameter to <kbd>true</kbd> (boolean) it will return data.  The default behavior is <kbd>false</kbd>, which sends it
to your browser.  Remember to assign it to a variable if you want the data returned:</p>

<code>$string = $this->load->view('<var>myfile</var>', '', <kbd>true</kbd>);</code>


<h2>$this-&gt;load-&gt;model('<var>Model_name</var>');</h2>
<p><code>$this-&gt;load-&gt;model('<var>Model_name</var>');</code></p>
<p>If your model is located in a sub-folder, include the relative path from your models folder. For example, if you have a model located at application/models/blog/queries.php you'll load it using:</p>
<p><code>$this-&gt;load-&gt;model('<var>blog/queries</var>');</code></p>
<p>If you would like your model assigned to a different object name you can specify it via the second parameter of the loading
	function:</p>
<code> $this-&gt;load-&gt;model('<var>Model_name</var>', '<kbd>fubar</kbd>');<br />
<br />
$this-&gt;<kbd>fubar</kbd>-&gt;function();</code>
<h2>$this->load->database('<var>options</var>', <kbd>true/false</kbd>)</h2>
<p>This function lets you load the database class.  The two parameters are <strong>optional</strong>.  Please see the
<a href="../database/index.html">database</a> section for more info.</p>




<h2>$this->load->vars(<samp>$array</samp>)</h2>

<p>This function takes an associative array as input and generates variables using the PHP <a href="http://www.php.net/extract">extract</a> function.
This function produces the same result as using the second parameter of the <dfn>$this->load->view()</dfn> function above.  The reason you might
want to use this function independently is if you would like to set some global variables in the constructor of your controller
and have them become available in any view file loaded from any function.  You can have multiple calls to this function.  The data get cached
and merged into one array for conversion to variables.
</p>


<h2>$this->load->get_var(<samp>$key</samp>)</h2>

<p>This function checks the associative array of variables available to your views. This is useful if for any reason a var is set in a library or another controller method using $this->load->vars().
</p>


<h2>$this->load->helper('<var>file_name</var>')</h2>
<p>This function loads helper files, where <var>file_name</var> is the name of the file, without the <kbd>_helper.php</kbd> extension.</p>


<h2>$this->load->file('<var>filepath/filename</var>', <kbd>true/false</kbd>)</h2>
<p>This is a generic file loading function.  Supply the filepath and name in the first parameter and it will open and read the file.
By default the data is sent to your browser, just like a View file, but if you set the second parameter to <kbd>true</kbd> (boolean)
it will instead return the data as a string.</p>


<h2>$this->load->language('<var>file_name</var>')</h2>
<p>This function is an alias of the <a href="language.html">language loading function</a>: $this->lang->load()</p>

<h2>$this->load->config('<var>file_name</var>')</h2>
<p>This function is an alias of the <a href="config.html">config file loading function</a>: $this->config->load()</p>


<h2>Application "Packages"</h2>

<p>An application package allows for the easy distribution of complete sets of resources in a single directory, complete with its own libraries, models, helpers, config, and language files.  It is recommended that these packages be placed in the <dfn>application/third_party</dfn> folder.  Below is a sample map of an package directory</p>


<h2>Sample Package "Foo Bar" Directory Map</h2>

<p>The following is an example of a directory for an application package named "Foo Bar".</p>

<code>/application/third_party/foo_bar<br />
<br />
config/<br />
helpers/<br />
language/<br />
libraries/<br />
models/<br />
</code>

<p>Whatever the purpose of the "Foo Bar" application package, it has its own config files, helpers, language files, libraries, and models.  To use these resources in your controllers, you first need to tell the Loader that you are going to be loading resources from a package, by adding the package path.</p>

<h3>$this->load->add_package_path()</h3>

<p>Adding a package path instructs the Loader class to prepend a given path for subsequent requests for resources.  As an example, the "Foo Bar" application package above has a library named <dfn>Foo_bar.php</dfn>. In our controller, we'd do the following:</p>

<code>$this->load->add_package_path(<var>APPPATH</var>.'third_party/<var>foo_bar</var>/');<br />
$this->load->library('foo_bar');</code>

<h3>$this->load->remove_package_path()</h3>

<p>When your controller is finished using resources from an application package, and particularly if you have other application packages you want to work with, you may wish to remove the package path so the Loader no longer looks in that folder for resources.  To remove the last path added, simply call the method with no parameters.</p>

<h3>$this->load->remove_package_path()</h3>

<p>Or to remove a specific package path, specify the same path previously given to <kbd>add_package_path() for a package.</kbd>:</p>

<code>$this->load->remove_package_path(<var>APPPATH</var>.'third_party/<var>foo_bar</var>/');</code>

<h3>Package view files</h3>

<p>By Default, package view files paths are set when <samp>add_package_path()</samp> is called.  View paths are looped through, and once a match is encountered that view is loaded.</p>
<p>In this instance, it is possible for view naming collisions within packages to occur, and possibly the incorrect package being loaded.  To ensure against this, set an optional second parameter of <var>FALSE</var> when calling <samp>add_package_path()</samp>.</p>

<code>
$this->load->add_package_path(APPPATH.'my_app', TRUE);<br>
$this->load->view('my_app_index'); // Loads<br>
$this->load->view('welcome_message'); // Will not load the default welcome_message b/c the second param to add_package_path is TRUE<br>
<br>
// Reset things<br>
$this->load->remove_package_path(APPPATH.'my_app');<br>
<br>
// Again without the second parameter:<br>
$this->load->add_package_path(APPPATH.'my_app', TRUE);<br>
$this->load->view('my_app_index'); // Loads<br>
$this->load->view('welcome_message'); // Loads<br>
</code>
