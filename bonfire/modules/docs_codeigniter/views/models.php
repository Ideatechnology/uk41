
<h1>Models</h1>

<p>Models are <strong>optionally</strong> available for those who want to use a more traditional MVC approach.</p>



<ul>
<li><a href="#what">What is a Model?</a></li>
<li><a href="#anatomy">Anatomy of a Model</a></li>
<li><a href="#loading">Loading a Model</a></li>
<li><a href="#auto_load_model">Auto-Loading a Model</a> </li>
<li><a href="#conn">Connecting to your Database</a></li>
</ul>



<h2><a name="what"></a>What is a Model?</h2>

<p>Models are PHP classes that are designed to work with information in your database.  For example, let's say
you use CodeIgniter to manage a blog.  You might have a model class that contains functions to insert, update, and
retrieve your blog data. Here is an example of what such a model class might look like:</p>

<code>
class&nbsp;Blogmodel&nbsp;extends&nbsp;CI_Model&nbsp;{<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;var $title&nbsp;&nbsp; = '';<br />
&nbsp;&nbsp;&nbsp;&nbsp;var $content = '';<br />
&nbsp;&nbsp;&nbsp;&nbsp;var $date&nbsp;&nbsp;&nbsp; = '';<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;__construct()<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Call the Model constructor<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent::__construct();<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;get_last_ten_entries()<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$query = $this->db->get('entries', 10);<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $query->result();<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;insert_entry()<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->title&nbsp;&nbsp; = $_POST['title']; // please read the below note<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->content = $_POST['content'];<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->date&nbsp;&nbsp;&nbsp; = time();<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->db->insert('entries',&nbsp;$this);<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;update_entry()<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->title&nbsp;&nbsp; = $_POST['title'];<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->content = $_POST['content'];<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->date&nbsp;&nbsp;&nbsp; = time();<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->db->update('entries',&nbsp;$this, array('id' => $_POST['id']));<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
<br />
}</code>

<p>Note: The functions in the above example use the <a href="../database/active_record.html">Active Record</a> database functions.</p>
<p class="important"><strong>Note:</strong> For the sake of simplicity in this example we're using $_POST directly.  This is generally bad practice, and a more common approach would be to use the <a href="../libraries/input.html">Input Class</a> $this-&gt;input-&gt;post('title')</p>
<h2><a name="anatomy"></a>Anatomy of a Model</h2>

<p>Model classes are stored in your <dfn>application/models/</dfn> folder.  They can be nested within sub-folders if you
want this type of organization.</p>

<p>The basic prototype for a model class is this:</p>


<code>
class&nbsp;<var>Model_name</var>&nbsp;extends&nbsp;CI_Model&nbsp;{<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;<var>__construct</var>()<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent::__construct();<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
}</code>

<p>Where <var>Model_name</var> is the name of your class.  Class names <strong>must</strong> have the first letter capitalized with the rest of the name lowercase.
Make sure your class extends the base Model class.</p>

<p>The file name will be a lower case version of your class name.  For example, if your class is this:</p>

<code>
class&nbsp;<var>User_model</var>&nbsp;extends&nbsp;CI_Model&nbsp;{<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;<var>__construct</var>()<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent::__construct();<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
}</code>

<p>Your file will be this:</p>

<code>application/models/<var>user_model.php</var></code>



<h2><a name="loading"></a>Loading a Model</h2>

<p>Your models will typically be loaded and called from within your <a href="controllers.html">controller</a> functions.
To load a model you will use the following function:</p>

<code>$this->load->model('<var>Model_name</var>');</code>

<p>If your model is located in a sub-folder, include the relative path from your models folder.  For example, if
you have a model located at <dfn>application/models/blog/queries.php</dfn> you'll load it using:</p>

<code>$this->load->model('<var>blog/queries</var>');</code>


<p>Once loaded, you will access your model functions using an object with the same name as your class:</p>

<code>
$this->load->model('<var>Model_name</var>');<br />
<br />
$this-><var>Model_name</var>->function();
</code>

<p>If you would like your model assigned to a different object name you can specify it via the second parameter of the loading
function:</p>


<code>
$this->load->model('<var>Model_name</var>', '<kbd>fubar</kbd>');<br />
<br />
$this-><kbd>fubar</kbd>->function();
</code>

<p>Here is an example of a controller, that loads a model, then serves a view:</p>

<code>
class&nbsp;Blog_controller&nbsp;extends&nbsp;CI_Controller&nbsp;{<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;blog()<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->load->model('Blog');<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$data['query'] = $this->Blog->get_last_ten_entries();<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->load->view('blog', $data);<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
}</code>

<h2><a name="auto_load_model" id="auto_load_model"></a>Auto-loading Models</h2>
<p>If you find that you need a particular model globally throughout your  application, you can tell CodeIgniter to auto-load it during system  initialization.  This is done by opening the application/config/autoload.php file and adding the model to the autoload array.</p>


<h2><a name="conn"></a>Connecting to your Database</h2>

<p>When a model is loaded it does <strong>NOT</strong> connect automatically to your database.  The following options for connecting are available to you:</p>

<ul>
<li>You can connect using the standard database methods <a href="../database/connecting.html">described here</a>, either from within your Controller class or your Model class.</li>
<li>You can tell the model loading function to auto-connect by passing <kbd>TRUE</kbd> (boolean) via the third parameter,
and connectivity settings, as defined in your database config file will be used:

	<code>$this->load->model('<var>Model_name</var>', '', <kbd>TRUE</kbd>);</code>
	</li>


<li>You can manually pass database connectivity settings via the third parameter:


		<code>$config['hostname'] = "localhost";<br />
		$config['username'] = "myusername";<br />
		$config['password'] = "mypassword";<br />
		$config['database'] = "mydatabase";<br />
		$config['dbdriver'] = "mysql";<br />
		$config['dbprefix'] = "";<br />
		$config['pconnect'] = FALSE;<br />
		$config['db_debug'] = TRUE;<br />
		<br />
		$this->load->model('<var>Model_name</var>', '', <kbd>$config</kbd>);</code></li>
</ul>
