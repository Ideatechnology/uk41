

<h1>Tutorial - Create news items</h1>

<p>You now know how you can read data from a database using CodeIgnite, but you haven't written any information to the database yet. In this section you'll expand your news controller and model created earlier to include this functionality.</p>

<h2>Create a form</h2>

<p>To input data into the database you need to create a form where you can input the information to be stored. This means you'll be needing a form with two fields, one for the title and one for the text. You'll derive the slug from our title in the model. Create the new view at <dfn>application/views/news/create.php</dfn>.</p>

<textarea class="textarea" style="width:100%" cols="50" rows="16">
<h2>Create a news item</h2>

&lt;?php echo validation_errors(); ?>

&lt;?php echo form_open('news/create') ?>

	<label for="title">Title</label>
	<input type="input" name="title" /><br />

	<label for="text">Text</label>
	<textarea name="text">&lt;/textarea><br />

	<input type="submit" name="submit" value="Create news item" />

&lt;/form>
</textarea>

<p>There are only two things here that probably look unfamiliar to you: the <dfn>form_open()</dfn> function and the <dfn>validation_errors()</dfn> function.</p>

<p>The first function is provided by the <a href="../helpers/form_helper.html">form helper</a> and renders the form element and adds extra functionality, like adding a hidden <a href="../libraries/security.html">CSFR prevention field</a>. The latter is used to report errors related to form validation.</p>

<p>Go back to your news controller. You're going to do two things here, check whether the form was submitted and whether the submitted data passed the validation rules. You'll use the <a href="../libraries/form_validation.html">form validation</a> library to do this.</p>

<pre>
public function create()
{
	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['title'] = 'Create a news item';

	$this->form_validation->set_rules('title', 'Title', 'required');
	$this->form_validation->set_rules('text', 'text', 'required');

	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);
		$this->load->view('news/create');
		$this->load->view('templates/footer');

	}
	else
	{
		$this->news_model->set_news();
		$this->load->view('news/success');
	}
}
</pre>

<p>The code above adds a lot of functionality. The first few lines load the form helper and the form validation library. After that, rules for the form validation are set. The <var>set_rules()</var> method takes three arguments; the name of the input field, the name to be used in error messages, and the rule. In this case the title and text fields are required.</p>

<p>CodeIgniter has a powerful form validation library as demonstrated above. You can read <a href="../libraries/form_validation.html">more about this library here</a>.</p>

<p>Continuing down, you can see a condition that checks whether the form validation ran successfully. If it did not, the form is displayed, if it was submitted <strong>and</strong> passed all the rules, the model is called. After this, a view is loaded to display a success message. Create a view at <dfn>application/view/news/success.php</dfn> and write a success message.</p>

<h2>Model</h2>

<p>The only thing that remains is writing a method that writes the data to the database. You'll use the Active Record class to insert the information and use the input library to get the posted data. Open up the model created earlier and add the following:</p>

<pre>
public function set_news()
{
	$this->load->helper('url');

	$slug = url_title($this->input->post('title'), 'dash', TRUE);

	$data = array(
		'title' => $this->input->post('title'),
		'slug' => $slug,
		'text' => $this->input->post('text')
	);

	return $this->db->insert('news', $data);
}
</pre>

<p>This new method takes care of inserting the news item into the database. The third line contains a new function, <dfn>url_title()</dfn>. This function - provided by the <a href="../helpers/url_helper.html">URL helper</a> - strips down the string you pass it, replacing all spaces by dashes (-) and makes sure everything is in lowercase characters. This leaves you with a nice slug, perfect for creating URIs.</p>

<p>Let's continue with preparing the record that is going to be inserted later, inside the <var>$data</var> array. Each element corresponds with a column in the database table created earlier. You might notice a new method here, namely the <dfn>post()</dfn> method from the <a href="../libraries/input.html">input library</a>. This method makes sure the data is sanitized, protecting you from nasty attacks from others. The input library is loaded by default. At last, you insert our <var>$data</var> array into our database.</p>

<h2>Routing</h2>

<p>Before you can start adding news items into your CodeIgniter application you have to add an extra rule to <dfn>config/routes.php</dfn> file. Make sure your file contains the following. This makes sure CodeIgniter sees 'create' as a method instead of a news item's slug.</p>

<pre>
$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
</pre>

<p>Now point your browser to your local development environment where you installed CodeIgniter and add <dfn>index.php/news/create</dfn> to the URL. Congratulations, you just created your first CodeIgniter application! Add some news and check out the different pages you made.</p>
