
<h1>Tutorial &minus; Static pages</h1>

<p class="important"><strong>Note:</strong> This tutorial assumes you've downloaded CodeIgniter and <a href="../installation/index.html">installed the framework</a> in your development environment.</p>

<p>The first thing you're going to do is set up a <strong>controller</strong> to handle static pages.
A controller is simply a class that helps delegate work. It is the glue of your
web application.</p>

<p>For example, when a call is made to: <code>http://example.com/news/latest/10</code> We might imagine
that there is a controller named &quot;news&quot;. The method being called on news
would be &quot;latest&quot;. The news method's job could be to grab 10
news items, and render them on the page. Very often in MVC, you'll see URL
patterns that match: <code>http://example.com/[controller-class]/[controller-method]/[arguments]</code>
As URL schemes become more complex, this may change. But for now, this is all we will need to know.</p>

<p>Create a file at <dfn>application/controllers/pages.php</dfn> with the following code.</p>

<textarea class="textarea" style="width:100%" cols="50" rows="10">
&lt;?php

class Pages extends CI_Controller {

	public function view($page = 'home')
	{

	}
}
</textarea>

<p>You have created a class named &quot;pages&quot;, with a view method that accepts one argument named <var>$page</var>.
The pages class is extending the CI_Controller class.
This means that the new pages class can access the methods and variables defined in the CI_Controller class
(<dfn>system/core/Controller.php</dfn>).</p>

<p>The <strong>controller is what will become the center of every request</strong> to your web application.
In very technical CodeIgniter discussions, it may be referred to as the <em>super object</em>.
Like any php class, you refer to it within your controllers as <var>$this</var>.
Referring to <var>$this</var> is how you will load libraries, views, and generally
command the framework.</p>

<p>Now you've created your first method, it's time to make some basic page templates.
We will be creating two &quot;views&quot; (page templates) that act as our page footer and header.</p>

<p>Create the header at <dfn>application/views/templates/header.php</dfn> and add the following code.</p>

<textarea class="textarea" style="width:100%" cols="50" rows="8">
<html>
<head>
	<title><?php echo $title ?> - CodeIgniter 2 Tutorial</title>
</head>
<body>
	<h1>CodeIgniter 2 Tutorial</h1>

</textarea>

<p>The header contains the basic HTML code that you'll want to display before loading the main view, together with a heading.
It will also output the <var>$title</var> variable, which we'll define later in the controller.
Now create a footer at <dfn>application/views/templates/footer.php</dfn> that includes the following code:</p>

<textarea class="textarea" style="width:100%" cols="50" rows="4">
<strong>&#38;copy; 2011</strong>
</body>
</html>
</textarea>

<h2>Adding logic to the controller</h2>

<p>Earlier you set up a controller with a view() method. The method accepts one parameter, which is the name of the page to be loaded.
The static page templates will be located in the <dfn>application/views/pages/</dfn> directory.</p>

<p>In that directory, create two files named <dfn>home.php</dfn> and <dfn>about.php</dfn>.
Within those files, type some text &minus; anything you'd like &minus; and save them.
If you like to be particularly un-original, try &quot;Hello World!&quot;.</p>

<p>In order to load those pages, you'll have to check whether the requested page actually exists:</p>

<pre>
public function view($page = 'home')
{

	if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}

	$data['title'] = ucfirst($page); // Capitalize the first letter

	$this->load->view('templates/header', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);

}
</pre>

<p>Now, when the page does exist, it is loaded, including the header and footer, and displayed to the user. If the page doesn't exist, a "404 Page not found" error is shown.</p>

<p>The first line in this method checks whether the page actually exists. PHP's native <var>file_exists()</var> function is used to check whether the file is where it's expected to be. <var>show_404()</var> is a built-in CodeIgniter function that renders the default error page.</p>

<p>In the header template, the <var>$title</var> variable was used to customize the page title. The value of title is defined in this method, but instead of assigning the value to a variable, it is assigned to the title element in the <var>$data</var> array.</p>

<p>The last thing that has to be done is loading the views in the order they should be displayed.
The second parameter in the <var>view()</var> method is used to pass values to the view. Each value in the <var>$data</var> array is assigned to a variable with the name of its key. So the value of <var>$data['title']</var> in the controller is equivalent to $title in the view.<p>

<h2>Routing</h2>

<p>The controller is now functioning! Point your browser to <dfn>[your-site-url]index.php/pages/view</dfn> to see your page. When you visit <dfn>index.php/pages/view/about</dfn> you'll see the about page, again including the header and footer.</p>

<p>Using custom routing rules, you have the power to map any URI to any controller and method, and break free from the normal convention:
<code>http://example.com/[controller-class]/[controller-method]/[arguments]</code></p>

<p>Let's do that. Open the routing file located at <dfn>application/config/routes.php</dfn> and add the following two lines. Remove all other code that sets any element in the <var>$route</var> array.</p>

<pre>
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
</pre>

<p>CodeIgniter reads its routing rules from top to bottom and routes the request to the first matching rule. Each rule is a regular expression
(left-side) mapped to a controller and method name separated by slashes (right-side).
When a request comes in, CodeIgniter looks for the first match, and calls the appropriate controller and method, possibly with arguments.</p>

<p>More information about routing can be found in the URI Routing <a href="../general/routing.html">documentation</a>.</p>

<p>Here, the second rule in the <var>$routes</var> array matches <strong>any</strong> request using the wildcard string <dfn>(:any)</dfn>.
and passes the parameter to the view() method of the pages class.</p>

<p>Now visit <dfn>index.php/about</dfn>. Did it get routed correctly to the <var>view()</var> method
in the pages controller? Awesome!</p>
