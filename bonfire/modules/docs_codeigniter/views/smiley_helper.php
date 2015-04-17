

<h1>Smiley Helper</h1>

<p>The Smiley Helper file contains functions that let you manage smileys (emoticons).</p>


<h2>Loading this Helper</h2>

<p>This helper is loaded using the following code:</p>
<code>$this->load->helper('smiley');</code>

<h2>Overview</h2>

<p>The Smiley helper has a renderer that takes plain text simileys, like <dfn>:-)</dfn> and turns
them into a image representation, like <img src="../images/smile.gif" width="19" height="19" border="0" alt="smile!" /></p>

<p>It also lets you display a set of smiley images that when clicked will be inserted into a form field.
For example, if you have a blog that allows user commenting you can show the smileys next to the comment form.
Your users can click a desired smiley and with the help of some JavaScript it will be placed into the form field.</p>



<h2>Clickable Smileys Tutorial</h2>

<p>Here is an example demonstrating how you might create a set of clickable smileys next to a form field. This example
requires that you first download and install the smiley images, then create a controller and the View as described.</p>

<p class="important"><strong>Important:</strong> Before you begin, please <a href="http://ellislab.com/asset/ci_download_files/smileys.zip">download the smiley images</a> and put them in
a publicly accessible place on your server.  This helper also assumes you have the smiley replacement array located at
<dfn>application/config/smileys.php</dfn></p>


<h3>The Controller</h3>

<p>In your <dfn>application/controllers/</dfn> folder, create a file called <kbd>smileys.php</kbd> and place the code below in it.</p>

<p><strong>Important:</strong> Change the URL in the <dfn>get_clickable_smileys()</dfn> function below so that it points to
your <dfn>smiley</dfn> folder.</p>

<p>You'll notice that in addition to the smiley helper we are using the <a href="../libraries/table.html">Table Class</a>.</p>

<textarea class="textarea" style="width:100%" cols="50" rows="25">
&lt;?php

class Smileys extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->helper('smiley');
		$this->load->library('table');

		$image_array = get_clickable_smileys('http://example.com/images/smileys/', 'comments');

		$col_array = $this->table->make_columns($image_array, 8);

		$data['smiley_table'] = $this->table->generate($col_array);

		$this->load->view('smiley_view', $data);
	}

}
?&gt;
</textarea>

<p>In your <dfn>application/views/</dfn> folder, create a file called <kbd>smiley_view.php</kbd> and place this code in it:</p>

<textarea class="textarea" style="width:100%" cols="50" rows="20">
&lt;html>
&lt;head>
&lt;title>Smileys&lt;/title>

&lt;?php echo smiley_js(); ?>

&lt;/head>
&lt;body>

&lt;form name="blog">
&lt;textarea name="comments" id="comments" cols="40" rows="4">&lt;/textarea>
&lt;/form>

&lt;p>Click to insert a smiley!&lt;/p>

&lt;?php echo $smiley_table; ?>

&lt;/body>
&lt;/html>
</textarea>


<p>When you have created the above controller and view, load it by visiting <dfn>http://www.example.com/index.php/smileys/</dfn></p>


<h3>Field Aliases</h3>

<p>When making changes to a view it can be inconvenient to have the field id in the controller. To work around this,
you can give your smiley links a generic name that will be tied to a specific id in your view.</p>
<code>$image_array = get_smiley_links("http://example.com/images/smileys/", "comment_textarea_alias");</code>

<p>To map the alias to the field id, pass them both into the smiley_js function:</p>
<code>$image_array = smiley_js("comment_textarea_alias", "comments");</code>


<h1>Function Reference</h1>

<h2>get_clickable_smileys()</h2>

<p>Returns an array containing your smiley images wrapped in a clickable link.  You must supply the URL to your smiley folder
and a field id or field alias.</p>

<code>$image_array = get_smiley_links("http://example.com/images/smileys/", "comment");</code>
<p class="important">Note: Usage of this function without the second parameter, in combination with js_insert_smiley has been deprecated.</p>


<h2>smiley_js()</h2>

<p>Generates the JavaScript that allows the images to be clicked and inserted into a form field.
If you supplied an alias instead of an id when generating your smiley links, you need to pass the
alias and corresponding form id into the function.
This function is designed to be placed into the &lt;head&gt; area of your web page.</p>

<code>&lt;?php echo smiley_js(); ?&gt;</code>
<p class="important">Note: This function replaces js_insert_smiley, which has been deprecated.</p>


<h2>parse_smileys()</h2>

<p>Takes a string of text as input and replaces any contained plain text smileys into the image
equivalent.  The first parameter must contain your string, the second must contain  the URL to your smiley folder:</p>

<code>
$str = 'Here are some simileys: :-)  ;-)';

$str = parse_smileys($str, "http://example.com/images/smileys/");

echo $str;
</code>