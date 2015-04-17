

<h1>Form Helper</h1>

<p>The Form Helper file contains functions that assist in working with forms.</p>


<h2>Loading this Helper</h2>

<p>This helper is loaded using the following code:</p>
<code>$this->load->helper('form');</code>

<p>The following functions are available:</p>



<h2>form_open()</h2>

<p>Creates an opening form tag with a base URL <strong>built from your config preferences</strong>.  It will optionally let you
add form attributes and hidden input fields, and will always add the attribute <kbd>accept-charset</kbd> based on the charset value in your config file.</p>

<p>The main benefit of using this tag rather than hard coding your own HTML is that it permits your site to be more portable
in the event your URLs ever change.</p>

<p>Here's a simple example:</p>

<code>echo form_open('email/send');</code>

<p>The above example would create a form that points to your base URL plus the "email/send" URI segments, like this:</p>

<code>&lt;form method="post" accept-charset="utf-8" action="http:/example.com/index.php/email/send" /></code>

<h4>Adding Attributes</h4>

<p>Attributes can be added by passing an associative array to the second parameter, like this:</p>

<code>
$attributes = array('class' => 'email', 'id' => 'myform');<br />
<br />
echo form_open('email/send', $attributes);</code>

<p>The above example would create a form similar to this:</p>

<code>&lt;form method="post" accept-charset="utf-8" action="http:/example.com/index.php/email/send" &nbsp;class="email" &nbsp;id="myform" /></code>

<h4>Adding Hidden Input Fields</h4>

<p>Hidden fields can be added by passing an associative array to the third parameter, like this:</p>

<code>
$hidden = array('username' => 'Joe', 'member_id' => '234');<br />
<br />
echo form_open('email/send', '', $hidden);</code>

<p>The above example would create a form similar to this:</p>

<code>&lt;form method="post" accept-charset="utf-8" action="http:/example.com/index.php/email/send"><br />
&lt;input type="hidden" name="username" value="Joe" /><br />
&lt;input type="hidden" name="member_id" value="234" /></code>


<h2>form_open_multipart()</h2>

<p>This function is absolutely identical to the <dfn>form_open()</dfn> tag above except that it adds a multipart attribute,
which is necessary if you would like to use the form to upload files with.</p>

<h2>form_hidden()</h2>

<p>Lets you generate hidden input fields.  You can either submit a name/value string to create one field:</p>

<code>form_hidden('username', 'johndoe');<br />
<br />
// Would produce:<br /><br />
&lt;input type="hidden" name="username" value="johndoe" /></code>

<p>Or you can submit an associative array to create multiple fields:</p>

<code>$data = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'name'&nbsp;&nbsp;=> 'John Doe',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'email' => 'john@example.com',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'url'&nbsp;&nbsp;&nbsp;=> 'http://example.com'<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />
echo form_hidden($data);<br />
<br />
// Would produce:<br /><br />
&lt;input type="hidden" name="name" value="John Doe" /><br />
&lt;input type="hidden" name="email" value="john@example.com" /><br />
&lt;input type="hidden" name="url" value="http://example.com" /></code>




<h2>form_input()</h2>

<p>Lets you generate a standard text input field.  You can minimally pass the field name and value in the first
and second parameter:</p>

<code>echo form_input('username', 'johndoe');</code>

<p>Or you can pass an associative array containing any data you wish your form to contain:</p>

<code>$data = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'name'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=> 'username',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'id'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=> 'username',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'value'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=> 'johndoe',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'maxlength'&nbsp;&nbsp;&nbsp;=> '100',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'size'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=> '50',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'style'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; => 'width:50%',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />
echo form_input($data);<br />
<br />
// Would produce:<br /><br />
&lt;input type="text" name="username" id="username" value="johndoe" maxlength="100" size="50" style="width:50%" /></code>

<p>If you would like your form to contain some additional data, like Javascript, you can pass it as a string in the
third parameter:</p>

<code>$js = 'onClick="some_function()"';<br />
<br />
echo form_input('username', 'johndoe', $js);</code>

<h2>form_password()</h2>

<p>This function is identical in all respects to the <dfn>form_input()</dfn> function above
except that is sets it as a "password" type.</p>

<h2>form_upload()</h2>

<p>This function is identical in all respects to the <dfn>form_input()</dfn> function above
except that is sets it as a "file" type, allowing it to be used to upload files.</p>

<h2>form_textarea()</h2>

<p>This function is identical in all respects to the <dfn>form_input()</dfn> function above
except that it generates a "textarea" type. Note: Instead of the "maxlength" and "size" attributes in the above
example, you will instead specify "rows" and "cols".</p>


<h2>form_dropdown()</h2>

<p>Lets you create a standard drop-down field.  The first parameter will contain the name of the field,
the second parameter will contain an associative array of options, and the third parameter will contain the
value you wish to be selected.  You can also pass an array of multiple items through the third parameter, and CodeIgniter will create a multiple select for you. Example:</p>

<code>$options = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'small'&nbsp;&nbsp;=> 'Small Shirt',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'med'&nbsp;&nbsp;&nbsp;&nbsp;=> 'Medium Shirt',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'large'&nbsp;&nbsp; => 'Large Shirt',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'xlarge' => 'Extra Large Shirt',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />
$shirts_on_sale = array('small', 'large');<br />
<br />
echo form_dropdown('shirts', $options, 'large');<br />
<br />
// Would produce:<br />
<br />
&lt;select name=&quot;shirts&quot;&gt;<br />
&lt;option value=&quot;small&quot;&gt;Small Shirt&lt;/option&gt;<br />
&lt;option value=&quot;med&quot;&gt;Medium  Shirt&lt;/option&gt;<br />
&lt;option value=&quot;large&quot; selected=&quot;selected&quot;&gt;Large Shirt&lt;/option&gt;<br />
&lt;option value=&quot;xlarge&quot;&gt;Extra Large Shirt&lt;/option&gt;<br />
&lt;/select&gt;<br />
<br />
echo form_dropdown('shirts', $options, $shirts_on_sale);<br />
<br />
// Would produce:<br />
<br />
&lt;select name=&quot;shirts&quot; multiple=&quot;multiple&quot;&gt;<br />
&lt;option value=&quot;small&quot; selected=&quot;selected&quot;&gt;Small Shirt&lt;/option&gt;<br />
&lt;option value=&quot;med&quot;&gt;Medium  Shirt&lt;/option&gt;<br />
&lt;option value=&quot;large&quot; selected=&quot;selected&quot;&gt;Large Shirt&lt;/option&gt;<br />
&lt;option value=&quot;xlarge&quot;&gt;Extra Large Shirt&lt;/option&gt;<br />
&lt;/select&gt;</code>


<p>If you would like the opening &lt;select> to contain additional data, like an <kbd>id</kbd> attribute or JavaScript, you can pass it as a string in the
fourth parameter:</p>

<code>$js = 'id="shirts" onChange="some_function();"';<br />
<br />
echo form_dropdown('shirts', $options, 'large', $js);</code>

<p>If the array passed as $options is a multidimensional array, form_dropdown() will produce an &lt;optgroup&gt; with the array key as the label.</p>

<h2>form_multiselect()</h2>

<p>Lets you create a standard multiselect field.  The first parameter will contain the name of the field,
the second parameter will contain an associative array of options, and the third parameter will contain the
value or values you wish to be selected.  The parameter usage is identical to using <kbd>form_dropdown()</kbd> above,
except of course that the name of the field will need to use POST array syntax, e.g. <samp>foo[]</samp>.</p>


<h2>form_fieldset()</h2>

<p>Lets you generate fieldset/legend fields.</p>
<code>echo form_fieldset('Address Information');<br />
echo &quot;&lt;p&gt;fieldset content here&lt;/p&gt;\n&quot;;<br />
echo form_fieldset_close();
<br />
<br />
// Produces<br />
&lt;fieldset&gt;
<br />
&lt;legend&gt;Address Information&lt;/legend&gt;
<br />
&lt;p&gt;form content here&lt;/p&gt;
<br />
&lt;/fieldset&gt;</code>
<p>Similar to other functions, you can submit an associative array in the second parameter if you prefer to set additional attributes. </p>
<p><code>$attributes = array('id' =&gt; 'address_info', 'class' =&gt; 'address_info');<br />
    echo form_fieldset('Address Information', $attributes);<br />
echo &quot;&lt;p&gt;fieldset content here&lt;/p&gt;\n&quot;;<br />
echo form_fieldset_close(); <br />
<br />
// Produces<br />
&lt;fieldset id=&quot;address_info&quot; class=&quot;address_info&quot;&gt; <br />
&lt;legend&gt;Address Information&lt;/legend&gt; <br />
&lt;p&gt;form content here&lt;/p&gt; <br />
&lt;/fieldset&gt;</code></p>
<h2>form_fieldset_close()</h2>
<p>Produces a closing &lt;/fieldset&gt; tag.  The only advantage to using this function is it permits you to pass data to it
    which will be added below the tag.  For example:</p>
<code>$string = &quot;&lt;/div&gt;&lt;/div&gt;&quot;;<br />
<br />
echo form_fieldset_close($string);<br />
<br />
// Would produce:<br />
&lt;/fieldset&gt;<br />
&lt;/div&gt;&lt;/div&gt;</code>
<h2>form_checkbox()</h2>
<p>Lets you generate a checkbox field. Simple example:</p>
<code>echo form_checkbox('newsletter', 'accept', TRUE);<br />
<br />
// Would produce:<br />
<br />
&lt;input type=&quot;checkbox&quot; name=&quot;newsletter&quot; value=&quot;accept&quot; checked=&quot;checked&quot; /&gt;</code>
<p>The third parameter contains a boolean TRUE/FALSE to determine whether the box should be checked or not.</p>
<p>Similar to the other form functions in this helper, you can also pass an array of attributes to the function:</p>

<code>$data = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;'name'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=> 'newsletter',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'id'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=> 'newsletter',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'value'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=> 'accept',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'checked'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=> TRUE,<br />
&nbsp;&nbsp;&nbsp;&nbsp;'style'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; => 'margin:10px',<br />
&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />
echo form_checkbox($data);<br />
<br />
// Would produce:<br /><br />
&lt;input type="checkbox" name="newsletter" id="newsletter" value="accept" checked="checked" style="margin:10px" /></code>

<p>As with other functions, if you would like the tag to contain  additional data, like JavaScript, you can pass it as a string in the
fourth parameter:</p>

<code>$js = 'onClick="some_function()"';<br />
<br />
 echo form_checkbox('newsletter', 'accept', TRUE, $js)</code>


<h2>form_radio()</h2>
<p>This function is identical in all respects to the <dfn>form_checkbox()</dfn> function above except that is sets it as a "radio" type.</p>


<h2>form_submit()</h2>

<p>Lets you generate a standard submit button. Simple example:</p>
<code>echo form_submit('mysubmit', 'Submit Post!');<br />
<br />
// Would produce:<br />
<br />
&lt;input type=&quot;submit&quot; name=&quot;mysubmit&quot; value=&quot;Submit Post!&quot; /&gt;</code>
<p>Similar to other functions, you can submit an associative array in the first parameter if you prefer to set your own attributes.
    The third parameter lets you add extra data to your form, like JavaScript.</p>
<h2>form_label()</h2>
<p>Lets you generate a &lt;label&gt;. Simple example:</p>
<code>echo form_label('What is your Name', 'username');<br />
<br />
// Would produce:
<br />
&lt;label for=&quot;username&quot;&gt;What is your Name&lt;/label&gt;</code>
<p>Similar to other functions, you can submit an associative array in the third parameter if you prefer to set additional attributes.    </p>
<p><code>$attributes = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;'class' =&gt; 'mycustomclass',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'style' =&gt; 'color: #000;',<br />
);<br />
    echo form_label('What is your Name', 'username', $attributes);<br />
        <br />
// Would produce: <br />
&lt;label for=&quot;username&quot; class=&quot;mycustomclass&quot; style=&quot;color: #000;&quot;&gt;What is your Name&lt;/label&gt;</code></p>
<h2>form_reset()</h2>

<p>Lets you generate a standard reset button. Use is identical to <dfn>form_submit()</dfn>.</p>

<h2>form_button()</h2>

<p>Lets you generate a standard button element. You can minimally pass the button name and content in the first and second parameter:</p>
<code>
echo form_button('name','content');<br />
<br />
// Would produce<br />
&lt;button name="name" type="button"&gt;Content&lt;/button&gt;
</code>

Or you can pass an associative array containing any data you wish your form to contain:
<code>
$data = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;'name' => 'button',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'id' => 'button',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'value' => 'true',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'type' => 'reset',<br />
&nbsp;&nbsp;&nbsp;&nbsp;'content' => 'Reset'<br />
);<br />
<br />
echo form_button($data);<br />
<br />
// Would produce:<br />
&lt;button name="button" id="button" value="true" type="reset"&gt;Reset&lt;/button&gt;
</code>

If you would like your form to contain some additional data, like JavaScript, you can pass it as a string in the third parameter:
<code>
$js = 'onClick="some_function()"';<br /><br />
echo form_button('mybutton', 'Click Me', $js);
</code>


<h2>form_close()</h2>

<p>Produces a closing &lt;/form> tag.  The only advantage to using this function is it permits you to pass data to it
which will be added below the tag.  For example:</p>

<code>$string = "&lt;/div>&lt;/div>";<br />
<br />
echo form_close($string);<br />
<br />
// Would produce:<br />
<br />
&lt;/form><br />
&lt;/div>&lt;/div></code>





<h2>form_prep()</h2>

<p>Allows you to safely use HTML and characters such as quotes within form elements without breaking out of the form.  Consider this example:</p>

<code>$string = 'Here is a string containing <strong>"quoted"</strong> text.';<br />
<br />
&lt;input type="text" name="myform" value="<var>$string</var>" /></code>

<p>Since the above string contains a set of quotes it will cause the form to break.
The form_prep function converts HTML so that it can be used safely:</p>

<code>&lt;input type="text" name="myform" value="<var>&lt;?php echo form_prep($string); ?></var>" /></code>

<p class="important"><strong>Note:</strong> If you use any of the form helper functions listed in this page the form
values will be prepped automatically, so there is no need to call this function. Use it only if you are
creating your own form elements.</p>


<h2>set_value()</h2>

<p>Permits you to set the value of an input form or textarea. You must supply the field name via the first parameter of the function.
The second (optional) parameter allows you to set a default value for the form. Example:</p>

<code>&lt;input type="text" name="quantity" value="<dfn>&lt;?php echo set_value('quantity', '0'); ?></dfn>" size="50" /></code>

<p>The above form will show "0" when loaded for the first time.</p>

<h2>set_select()</h2>

<p>If you use a <dfn>&lt;select></dfn> menu, this function permits you to display the menu item that was selected.  The first parameter
must contain the name of the select menu, the second parameter must contain the value of
each item, and the third (optional) parameter lets you set an item as the default (use boolean TRUE/FALSE).</p>

<p>Example:</p>

<code>
&lt;select name="myselect"><br />
&lt;option value="one" <dfn>&lt;?php echo  set_select('myselect', 'one', TRUE); ?></dfn> >One&lt;/option><br />
&lt;option value="two" <dfn>&lt;?php echo  set_select('myselect', 'two'); ?></dfn> >Two&lt;/option><br />
&lt;option value="three" <dfn>&lt;?php echo  set_select('myselect', 'three'); ?></dfn> >Three&lt;/option><br />
&lt;/select>
</code>


<h2>set_checkbox()</h2>

<p>Permits you to display a checkbox in the state it was submitted.  The first parameter
must contain the name of the checkbox, the second parameter must contain its value, and the third (optional) parameter lets you set an item as the default (use boolean TRUE/FALSE). Example:</p>

<code>&lt;input type="checkbox" name="mycheck" value="1" <dfn>&lt;?php echo set_checkbox('mycheck', '1'); ?></dfn> /><br />
&lt;input type="checkbox" name="mycheck" value="2" <dfn>&lt;?php echo set_checkbox('mycheck', '2'); ?></dfn> /></code>


<h2>set_radio()</h2>

<p>Permits you to display radio buttons in the state they were submitted. This function is identical to the <strong>set_checkbox()</strong> function above.</p>

<code>&lt;input type="radio" name="myradio" value="1" <dfn>&lt;?php echo  set_radio('myradio', '1', TRUE); ?></dfn> /><br />
&lt;input type="radio" name="myradio" value="2" <dfn>&lt;?php echo  set_radio('myradio', '2'); ?></dfn> /></code>

