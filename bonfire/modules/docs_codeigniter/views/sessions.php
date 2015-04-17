
<h1>Session Class</h1>

<p>The Session class permits you maintain a user's "state" and track their activity while they browse your site.
The Session class stores session information for each user as serialized (and optionally encrypted) data in a cookie.
It can also store the session data in a database table for added security, as this permits the session ID in the
user's cookie to be matched against the stored session ID. By default only the cookie is saved.  If you choose to
use the database option you'll need to create the session table as indicated below.
</p>

<p class="important"><strong>Note:</strong> The Session class does <strong>not</strong> utilize native PHP sessions. It
generates its own session data, offering more flexibility for developers.</p>

<p class="important"><strong>Note:</strong> Even if you are not using encrypted sessions, you must set
an <a href="./encryption.html">encryption key</a> in your config file which is used to aid in preventing session data manipulation.</p>

<h2>Initializing a Session</h2>

<p>Sessions will typically run globally with each page load, so the session class must either be
<a href="../general/libraries.html">initialized</a> in your
<a href="../general/controllers.html">controller</a> constructors, or it can be
<a href="../general/autoloader.html">auto-loaded</a> by the system.
For the most part the session class will run unattended in the background, so simply initializing the class
will cause it to read, create, and update sessions.</p>


<p>To initialize the Session class manually in your controller constructor, use the <dfn>$this->load->library</dfn> function:</p>

<code>$this->load->library('session');</code>
<p>Once loaded, the Sessions library object will be available using: <dfn>$this->session</dfn></p>


<h2>How do Sessions work?</h2>

<p>When a page is loaded, the session class will check to see if valid session data exists in the user's session cookie.
If sessions data does <strong>not</strong> exist (or if it has expired) a new session will be created and saved in the cookie.
If a session does exist, its information will be updated and the cookie will be updated. With each update, the session_id will be regenerated.</p>

<p>It's important for you to understand that once initialized, the Session class runs automatically.  There is nothing
you need to do to cause the above behavior to happen.  You can, as you'll see below, work with session data or
even add your own data to a user's session, but the process of reading, writing, and updating a session is automatic.</p>


<h2>What is Session Data?</h2>

<p>A <em>session</em>, as far as CodeIgniter is concerned, is simply an array containing the following information:</p>

<ul>
<li>The user's unique Session ID (this is a statistically random string with very strong entropy, hashed with MD5 for portability, and regenerated (by default) every five minutes)</li>
<li>The user's IP Address</li>
<li>The user's User Agent data (the first 120 characters of the browser data string)</li>
<li>The "last activity" time stamp.</li>
</ul>

<p>The above data is stored in a cookie as a serialized array with this prototype:</p>

<code>[array]<br />
(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'session_id'&nbsp;&nbsp;&nbsp;&nbsp;=> random hash,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'ip_address'&nbsp;&nbsp;&nbsp;&nbsp;=> 'string - user IP address',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'user_agent'&nbsp;&nbsp;&nbsp;&nbsp;=> 'string - user agent data',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'last_activity' => timestamp<br />
)</code>

<p>If you have the encryption option enabled, the serialized array will be encrypted before being stored in the cookie,
making the data highly secure and impervious to being read or altered by someone. More info regarding encryption
can be <a href="encryption.html">found here</a>, although the Session class will take care of initializing
and encrypting the data automatically.</p>

<p>Note: Session cookies are only updated every five minutes by default to reduce processor load.  If you repeatedly reload a page
you'll notice that the "last activity" time only updates if five minutes or more has passed since the last time
the cookie was written. This time is configurable by changing the $config['sess_time_to_update'] line in your system/config/config.php file.</p>

<h2>Retrieving Session Data</h2>

<p>Any piece of information from the session array is available using the following function:</p>

<code>$this->session->userdata('<samp>item</samp>');</code>

<p>Where <samp>item</samp> is the array index corresponding to the item you wish to fetch.  For example, to fetch the session ID you
will do this:</p>

<code>$session_id = $this->session->userdata('<samp>session_id</samp>');</code>

<p><strong>Note:</strong> The function returns FALSE (boolean) if the item you are trying to access does not exist.</p>


<h2>Adding Custom Session Data</h2>

<p>A useful aspect of the session array is that you can add your own data to it and it will be stored in the user's cookie.
Why would you want to do this?  Here's one example:</p>

<p>Let's say a particular user logs into your site. Once authenticated,
you could add their username and email address to the session cookie, making that data globally available to you without
having to run a database query when you need it.</p>

<p>To add your data to the session array involves passing an array containing your new data to this function:</p>

<code>$this->session->set_userdata(<samp>$array</samp>);</code>

<p>Where <samp>$array</samp> is an associative array containing your new data.  Here's an example:</p>


<p><code>$newdata = array(<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'username'&nbsp; => 'johndoe',<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'email'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=> 'johndoe@some-site.com',<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'logged_in' => TRUE<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
	<br />
	$this->session->set_userdata(<samp>$newdata</samp>);</code></p>
<p>If you want to add userdata one value at a time, set_userdata() also supports this syntax. </p>
<p><code>$this-&gt;session-&gt;set_userdata('some_name', 'some_value');</code></p>
<p class="important"><strong>Note:</strong> Cookies can only hold 4KB of data, so be careful not to exceed the capacity.  The
encryption process in particular produces a longer data string than the original so keep careful track of how much data you are storing.</p>

<h2>Retrieving All Session Data</h2>
<p>An array of all userdata can be retrieved as follows:</p>
<code>$this-&gt;session-&gt;all_userdata()</code>

<p>And returns an associative array like the following:</p>

<pre>
Array
(
    [session_id] => 4a5a5dca22728fb0a84364eeb405b601
    [ip_address] => 127.0.0.1
    [user_agent] => Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7;
    [last_activity] => 1303142623
)
</pre>


<h2>Removing Session Data</h2>
<p>Just as set_userdata() can be used to add information into a session, unset_userdata() can be used to remove it, by passing the session key. For example, if you wanted to remove 'some_name' from your session information: </p>
<p><code>$this-&gt;session-&gt;unset_userdata('some_name');</code></p>
<p>This function can also be passed an associative array of items to unset.</p>
<p><code>$array_items = array('username' => '', 'email' => '');<br />
<br />
$this-&gt;session-&gt;unset_userdata(<samp>$array_items</samp>);</code></p>
<h2>Flashdata</h2>
<p>CodeIgniter supports &quot;flashdata&quot;, or session data that will only be available for the next server request, and are then automatically cleared. These can be very useful, and are typically used for informational or status messages (for example: &quot;record 2 deleted&quot;).</p>
<p>Note: Flash variables are prefaced with &quot;flash_&quot; so avoid this prefix in your own session names.</p>
<p>To add flashdata:</p>
<p><code>$this-&gt;session-&gt;set_flashdata('item', 'value');</code></p>
<p>You can also pass an array to set_flashdata(), in the same manner as set_userdata(). </p>
<p>To read a flashdata variable:</p>
<p><code>$this-&gt;session-&gt;flashdata('item');</code></p>
<p>If you find that you need to preserve a flashdata variable through an additional request, you can do so using the keep_flashdata() function.</p>
<p><code>$this-&gt;session-&gt;keep_flashdata('item');</code></p>
<h2>Saving Session Data to a Database</h2>
<p>While the session data array stored in the user's cookie contains a Session ID,
unless you store session data in a database there is no way to validate it.  For some applications that require little or no
security, session ID validation may not be needed, but if your application requires security, validation is mandatory.  Otherwise, an old session
could be restored by a user modifying their cookies.</p>

<p>When session data is available in a database, every time a valid session is found in the user's cookie, a database
query is performed to match it.  If the session ID does not match, the session is destroyed.  Session IDs can never
be updated, they can only be generated when a new session is created.</p>


<p>In order to store sessions, you must first create a database table for this purpose.  Here is the basic
prototype (for MySQL) required by the session class:</p>

<textarea class="textarea" style="width:100%" cols="50" rows="10">
CREATE TABLE IF NOT EXISTS  `ci_sessions` (
	session_id varchar(40) DEFAULT '0' NOT NULL,
	ip_address varchar(45) DEFAULT '0' NOT NULL,
	user_agent varchar(120) NOT NULL,
	last_activity int(10) unsigned DEFAULT 0 NOT NULL,
	user_data text NOT NULL,
	PRIMARY KEY (session_id),
	KEY `last_activity_idx` (`last_activity`)
);
</textarea>

<p><strong>Note:</strong> By default the table is called <dfn>ci_sessions</dfn>, but you can name it anything you want
as long as you update the <kbd>application/config/config.php</kbd> file so that it contains the name you have chosen.
Once you have created your database table you can enable the database option in your config.php file as follows:</p>

<code>$config['sess_use_database'] = TRUE;</code>

<p>Once enabled, the Session class will store session data in the DB.</p>

<p>Make sure you've specified the table name in your config file as well:</p>

<code>$config['sess_table_name'] = 'ci_sessions';</code>

<p class="important"><strong>Note:</strong> The Session class has built-in garbage collection which clears out expired sessions so you
do not need to write your own routine to do it.</p>


<h2>Destroying a Session </h2>
<p>To clear the current session: </p>
<code>$this-&gt;session-&gt;sess_destroy();</code>
<p class="important"><strong>Note:</strong> This function should be the last one called, and even flash variables will no longer be available.  If you only want some items destroyed and not all, use <dfn>unset_userdata()</dfn>.</p>



<h2>Session Preferences</h2>
<p>You'll find the following Session related preferences in your <kbd>application/config/config.php</kbd> file:</p>


<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder">
<tr>
	<th>Preference</th>
	<th>Default</th>
	<th>Options</th>
	<th>Description</th>
</tr>
<tr>
	<td class="td"><strong>sess_cookie_name</strong></td>
	<td class="td">ci_session</td>
	<td class="td">None</td>
	<td class="td">The name you want the session cookie saved as.</td>
</tr>
<tr>
	<td class="td"><strong>sess_expiration</strong></td>
	<td class="td">7200</td>
	<td class="td">None</td>
	<td class="td">The number of seconds you would like the session to last. The default value is 2 hours (7200 seconds). If you would like a non-expiring session set the value to zero: 0</td>
</tr>
<tr>
	<td class="td"><strong>sess_expire_on_close</strong></td>
	<td class="td">FALSE</td>
	<td class="td">TRUE/FALSE (boolean)</td>
	<td class="td">Whether to cause the session to expire automatically when the browser window is closed.</td>
</tr>
<tr>
	<td class="td"><strong>sess_encrypt_cookie</strong></td>
	<td class="td">FALSE</td>
	<td class="td">TRUE/FALSE (boolean)</td>
	<td class="td">Whether to encrypt the session data.</td>
</tr>
<tr>
	<td class="td"><strong>sess_use_database</strong></td>
	<td class="td">FALSE</td>
	<td class="td">TRUE/FALSE (boolean)</td>
	<td class="td">Whether to save the session data to a database.  You must create the table before enabling this option.</td>
</tr>
<tr>
	<td class="td"><strong>sess_table_name</strong></td>
	<td class="td">ci_sessions</td>
	<td class="td">Any valid SQL table name</td>
	<td class="td">The name of the session database table.</td>
</tr>
<tr>
	<td class="td"><strong>sess_time_to_update</strong></td>
	<td class="td">300</td>
	<td class="td">Time in seconds</td>
	<td class="td">This options controls how often the session class will regenerate itself and create a new session id.</td>
</tr>
<tr>
	<td class="td"><strong>sess_match_ip</strong></td>
	<td class="td">FALSE</td>
	<td class="td">TRUE/FALSE (boolean)</td>
	<td class="td">Whether to match the user's IP address when reading the session data.  Note that some ISPs dynamically
	changes the IP, so if you want a non-expiring session you will likely set this to FALSE.</td>
</tr>
<tr>
	<td class="td"><strong>sess_match_useragent</strong></td>
	<td class="td">TRUE</td>
	<td class="td">TRUE/FALSE (boolean)</td>
	<td class="td">Whether to match the User Agent when reading the session data.</td>
</tr>
</table>
