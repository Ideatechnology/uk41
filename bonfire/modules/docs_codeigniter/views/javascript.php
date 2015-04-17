
<p class="important"><strong>Note:</strong> This driver is experimental. Its feature set and implementation may change in future releases.</p><br>

<h1>Javascript Class</h1>
<p>CodeIgniter provides a library to help you with certain common functions that you may want to use with Javascript. Please note that CodeIgniter does not require the jQuery library to run, and that any scripting library will work equally well. The jQuery library is simply presented as a convenience if you choose to use it.</p>
<h2>Initializing the Class</h2>
<p>To initialize the Javascript class manually in your controller constructor, use the <dfn>$this-&gt;load-&gt;library</dfn> function. Currently, the only available library is jQuery, which will automatically be loaded like this:</p>

<code>$this-&gt;load-&gt;library('javascript');</code>

<p>The Javascript class also accepts parameters, <dfn>js_library_driver (string) default 'jquery'</dfn> and <dfn>autoload (bool) default TRUE</dfn>.  You may override the defaults if you wish by sending an associative array:</p>

<code>$this-&gt;load-&gt;library('javascript', array('js_library_driver' =&gt; 'scripto', 'autoload' =&gt; FALSE));</code>

<p>Again, presently only 'jquery' is available.  You may wish to set <dfn>autoload</dfn> to FALSE, though, if you do not want the jQuery library to automatically include a script tag for the main jQuery script file.  This is useful if you are loading it from a location outside of CodeIgniter, or already have the script tag in your markup.</p>

<p>Once loaded, the jQuery library object will be available using: <dfn>$this-&gt;javascript</dfn></p>
<h2>Setup and Configuration</h2>
<h3>Set these variables in your view</h3>
<p>As a Javascript library, your files must be available to your application.</p>
<p>As Javascript is a client side language, the library must be able to write content into your final output. This generally means a view. You'll need to include the following variables in the &lt;head&gt; sections of your output.</p>
<p><code>&lt;?php echo $library_src;?&gt;<br />
&lt;?php echo $script_head;?&gt;
</code></p>
<p>$library_src, is where the actual library file will be loaded, as well as any subsequent plugin script calls; $script_head is where specific events, functions and other commands will be rendered.</p>
<h3>Set the path to the librarys with config items</h3>
<p>There are some configuration items in Javascript library. These can either be set in application/config.php, within its own config/javascript.php file, or within any controller usings the set_item() function. </p>
<p>An image to be used as an &quot;ajax loader&quot;, or progress indicator. Without one, the simple text message of &quot;loading&quot; will appear when Ajax calls need to be made.</p>
<p><code>$config['javascript_location'] = 'http://localhost/codeigniter/themes/js/jquery/';<br />
		$config['javascript_ajax_img'] = 'images/ajax-loader.gif';</code></p>
<p>If you keep your files in the same directories they were downloaded from, then you need not set this configuration items.</p>

<h2>The jQuery Class</h2>

<p>To initialize the jQuery class manually in your controller constructor, use the <dfn>$this-&gt;load-&gt;library</dfn> function:</p>

<code>$this-&gt;load-&gt;library('jquery');</code>

<p>You may send an optional parameter to determine whether or not a script tag for the main jQuery file will be automatically included when loading the library.  It will be created by default.  To prevent this, load the library as follows:</p>

<code>$this-&gt;load-&gt;library('jquery', FALSE);</code>

<p>Once loaded, the jQuery library object will be available using: <dfn>$this-&gt;jquery</dfn></p>

<h2>jQuery Events</h2>

<p>Events are set using the following syntax.</p>

<p><code>$this-&gt;jquery-&gt;event('element_path', code_to_run());</code></p>

<p>In the above example:</p>

<ul>
	<li>&quot;event&quot; is any of blur, change, click, dblclick, error, focus, hover, keydown, keyup, load, mousedown, mouseup, mouseover, mouseup, resize, scroll, or unload.</li>
	<li>&quot;element_path&quot; is any valid <a href="http://docs.jquery.com/Selectors">jQuery selector</a>. Due to jQuery's unique selector syntax, this is usually an element id, or CSS selector. For example &quot;#notice_area&quot; would effect &lt;div id=&quot;notice_area&quot;&gt;, and &quot;#content a.notice&quot; would effect all anchors with a class of &quot;notice&quot; in the div with id &quot;content&quot;.</li>
	<li>&quot;code_to_run()&quot; is script your write yourself, or an action such as an effect from the jQuery library below.</li>
	</ul>

<h2>Effects</h2>

<p>The query library supports a powerful <a href="http://docs.jquery.com/Effects">Effects</a> repertoire.  Before an effect can be used, it must be loaded:</p>

<p><code>$this->jquery->effect([optional path] plugin name);
// for example
$this->jquery->effect('bounce');
</code></p>

<h3>hide() / show()</h3>

<p>Each of this functions will affect the visibility of an item on your page. hide() will set an item invisible, show() will reveal it.</p>
<p><code>$this-&gt;jquery-&gt;hide(target,  optional speed, optional extra information);<br />
	$this-&gt;jquery-&gt;show(target,  optional speed, optional extra information);</code></p>

<ul>
	<li>&quot;target&quot; will be any valid jQuery selector or selectors.</li>
	<li>&quot;speed&quot; is optional, and is set to either slow, normal, fast, or alternatively a number of milliseconds.</li>
	<li>&quot;extra information&quot; is optional, and could include a callback, or other additional information.</li>
</ul>

<h3>toggle()</h3>

<p>toggle() will change the visibility of an item to the opposite of its current state, hiding visible elements, and revealing hidden ones.</p>
<p><code>$this-&gt;jquery-&gt;toggle(target);</code></p>
<ul>
	<li>&quot;target&quot; will be any valid jQuery selector or selectors.</li>
</ul>

<h3>animate()</h3>

<p><code> $this-&gt;jquery-&gt;animate(target, parameters, optional speed, optional extra information);</code></p>
<ul>
	<li>&quot;target&quot; will be any valid jQuery selector or selectors.</li>
	<li>&quot;parameters&quot; in jQuery would generally include a series of CSS properties that you wish to change.</li>
	<li>&quot;speed&quot; is optional, and is set to either slow, normal, fast, or alternatively a number of milliseconds.</li>
	<li>&quot;extra information&quot; is optional, and could include a callback, or other additional information.</li>
</ul>
<p>For a full summary, see <a href="http://docs.jquery.com/Effects/animate">http://docs.jquery.com/Effects/animate</a></p>
<p>Here is an example of an animate() called on a div with an id of &quot;note&quot;, and triggered by a click using the jQuery library's click() event.</p>
<p><code> $params = array(<br />
	'height' =&gt; 80,<br />
	'width' =&gt; '50%',<br />
	'marginLeft' =&gt; 125<br />
);<br />
$this-&gt;jquery-&gt;click('#trigger', $this-&gt;jquery-&gt;animate('#note', $params, normal));</code></p>

<h3>fadeIn() / fadeOut()</h3>

<p><code>$this-&gt;jquery-&gt;fadeIn(target,  optional speed, optional extra information);<br />
	$this-&gt;jquery-&gt;fadeOut(target,  optional speed, optional extra information);</code></p>
<ul>
	<li>&quot;target&quot; will be any valid jQuery selector or selectors.</li>
	<li>&quot;speed&quot; is optional, and is set to either slow, normal, fast, or alternatively a number of milliseconds.</li>
	<li>&quot;extra information&quot; is optional, and could include a callback, or other additional information.</li>
</ul>

<h3>toggleClass()</h3>

<p>This function will add or remove a CSS class to its target.</p>
<p><code>$this-&gt;jquery-&gt;toggleClass(target, class)</code></p>
<ul>
	<li>&quot;target&quot; will be any valid jQuery selector or selectors.</li>
	<li>&quot;class&quot; is any CSS classname. Note that this class must be defined and available in a CSS that is already loaded.</li>
	</ul>

<h3>fadeIn() / fadeOut()</h3>

<p>These effects cause an element(s) to disappear or reappear over time.</p>
<p><code>$this-&gt;jquery-&gt;fadeIn(target,  optional speed, optional extra information);<br />
	$this-&gt;jquery-&gt;fadeOut(target,  optional speed, optional extra information);</code></p>
<ul>
	<li>&quot;target&quot; will be any valid jQuery selector or selectors.</li>
	<li>&quot;speed&quot; is optional, and is set to either slow, normal, fast, or alternatively a number of milliseconds.</li>
	<li>&quot;extra information&quot; is optional, and could include a callback, or other additional information.</li>
</ul>

<h3>slideUp() / slideDown() / slideToggle()</h3>

<p>These effects cause an element(s) to slide.</p>
<p><code>$this-&gt;jquery-&gt;slideUp(target,  optional speed, optional extra information);<br />
	$this-&gt;jquery-&gt;slideDown(target,  optional speed, optional extra information);<br />
$this-&gt;jquery-&gt;slideToggle(target,  optional speed, optional extra information);</code></p>
<ul>
	<li>&quot;target&quot; will be any valid jQuery selector or selectors.</li>
	<li>&quot;speed&quot; is optional, and is set to either slow, normal, fast, or alternatively a number of milliseconds.</li>
	<li>&quot;extra information&quot; is optional, and could include a callback, or other additional information.</li>
</ul>

<h2>Plugins</h2>

<p>

<p>Some select jQuery plugins are made available using this library.</p>

<h3>corner()</h3>
<p>Used to add distinct corners to page elements. For full details see <a href="http://www.malsup.com/jquery/corner/">http://www.malsup.com/jquery/corner/</a></p>
<p><code>$this-&gt;jquery-&gt;corner(target, corner_style);</code></p>
<ul>
	<li>&quot;target&quot; will be any valid jQuery selector or selectors.</li>
	<li>&quot;corner_style&quot; is optional, and can be set to any valid style such as round, sharp, bevel, bite, dog, etc. Individual corners can be set by following the style with a space and using &quot;tl&quot; (top left), &quot;tr&quot; (top right), &quot;bl&quot; (bottom left), or &quot;br&quot; (bottom right).</li>
</ul>
<p><code>$this-&gt;jquery-&gt;corner(&quot;#note&quot;, &quot;cool tl br&quot;);</code></p>

<h3>tablesorter()</h3>

<p>description to come</p>

<h3>modal()</h3>

<p>description to come</p>

<h3>calendar()</h3>

<p>description to come</p>