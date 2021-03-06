<h1>Shopping Cart Class</h1>

<p>The Cart Class permits items to be added to a session that stays active while a user is browsing your site.
These items can be retrieved and displayed in a standard "shopping cart" format, allowing the user to update the quantity or remove items from the cart.</p>

<p>Please note that the Cart Class ONLY provides the core "cart" functionality. It does not provide shipping, credit card authorization, or other processing components.</p>


<h2>Initializing the Shopping Cart Class</h2>

<p><strong>Important:</strong> The Cart class utilizes CodeIgniter's
<a href="sessions.html">Session Class</a>  to save the cart information to a database, so before using the Cart class you must set up a database table
as indicated in the <a href="sessions.html">Session Documentation</a> , and set the session preferences in your <kbd>application/config/config.php</kbd> file to utilize a database.</p>

<p>To initialize the Shopping Cart Class in your controller constructor, use the <dfn>$this->load->library</dfn> function:</p>

<code>$this->load->library('cart');</code>
<p>Once loaded, the Cart object will be available using: <dfn>$this->cart</dfn></p>

<p class="important"><strong>Note:</strong> The Cart Class will load and initialize the Session Class automatically, so unless you are using sessions elsewhere in your application, you do not need to load the Session class.</p>

<h2>Adding an Item to The Cart</h2>

<p>To add an item to the shopping cart, simply pass an array with the product information to the <dfn>$this->cart->insert()</dfn> function, as shown below:</p>

<code>
$data = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'id'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; => 'sku_123ABC',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'qty'&nbsp;&nbsp;&nbsp;&nbsp; => 1,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'price'&nbsp;&nbsp; => 39.95,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'name'&nbsp;&nbsp;&nbsp; => 'T-Shirt',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'options' => array('Size' => 'L', 'Color' => 'Red')<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />

$this->cart->insert($data);

</code>

<p class="important"><strong>Important:</strong> The first four array indexes above (<dfn>id</dfn>, <dfn>qty</dfn>, <dfn>price</dfn>, and <dfn>name</dfn>) are <strong>required</strong>.
If you omit any of them the data will not be saved to the cart. The fifth index (<dfn>options</dfn>) is optional.
It is intended to be used in cases where your product has options associated with it. Use an array for options, as shown above.</p>

<p>The five reserved indexes are:</p>

<ul>
<li><strong>id</strong> - Each product in your store must have a unique identifier. Typically this will be an "sku" or other such identifier.</li>
<li><strong>qty</strong> - The quantity being purchased.
<li><strong>price</strong> - The price of the item.
<li><strong>name</strong> - The name of the item.
<li><strong>options</strong> - Any additional attributes that are needed to identify the product. These must be passed via an array.
</ul>

<p>In addition to the five indexes above, there are two reserved words: <dfn>rowid</dfn> and <dfn>subtotal</dfn>.  These are used internally by the Cart class, so
please do NOT use those words as index names when inserting data into the cart.</p>

<p>Your array may contain additional data. Anything you include in your array will be stored in the session. However, it is best to standardize your data among all your products in order to make displaying the information in a table easier.</p>

<p>The insert() method will return the $rowid if you successfully insert a single item.</p>


<h2>Adding Multiple Items to The Cart</h2>

<p>By using a multi-dimensional array, as shown below, it is possible to add multiple products to the cart in one action. This is useful in cases where you wish to allow people to select from among several items on the same page.</p>


<code>
$data = array(<br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'id'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; => 'sku_123ABC',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'qty'&nbsp;&nbsp;&nbsp;&nbsp; => 1,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'price'&nbsp;&nbsp; => 39.95,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'name'&nbsp;&nbsp;&nbsp; => 'T-Shirt',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'options' => array('Size' => 'L', 'Color' => 'Red')<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'id'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; => 'sku_567ZYX',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'qty'&nbsp;&nbsp;&nbsp;&nbsp; => 1,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'price'&nbsp;&nbsp; => 9.95,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'name'&nbsp;&nbsp;&nbsp; => 'Coffee Mug'<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'id'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; => 'sku_965QRS',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'qty'&nbsp;&nbsp;&nbsp;&nbsp; => 1,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'price'&nbsp;&nbsp; => 29.95,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'name'&nbsp;&nbsp;&nbsp; => 'Shot Glass'<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />

$this->cart->insert($data);

</code>




<h2>Displaying the Cart</h2>

<p>To display the cart you will create a <a href="../general/views.html">view file</a> with code similar to the one shown below.</p>

<p>Please note that this example uses the <a href="../helpers/form_helper.html">form helper</a>.</p>


<textarea class="textarea" style="width:100%" cols="50" rows="55">
&lt;?php echo form_open('path/to/controller/update/function'); ?>

&lt;table cellpadding="6" cellspacing="1" style="width:100%" border="0">

&lt;tr>
  &lt;th>QTY&lt;/th>
  &lt;th>Item Description&lt;/th>
  &lt;th style="text-align:right">Item Price&lt;/th>
  &lt;th style="text-align:right">Sub-Total&lt;/th>
&lt;/tr>

&lt;?php $i = 1; ?>

&lt;?php foreach ($this->cart->contents() as $items): ?>

	&lt;?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

	&lt;tr>
	  &lt;td>&lt;?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>&lt;/td>
	  &lt;td>
		&lt;?php echo $items['name']; ?>

			&lt;?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				&lt;p>
					&lt;?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						&lt;strong>&lt;?php echo $option_name; ?>:&lt;/strong> &lt;?php echo $option_value; ?>&lt;br />

					&lt;?php endforeach; ?>
				&lt;/p>

			&lt;?php endif; ?>

	  &lt;/td>
	  &lt;td style="text-align:right">&lt;?php echo $this->cart->format_number($items['price']); ?>&lt;/td>
	  &lt;td style="text-align:right">$&lt;?php echo $this->cart->format_number($items['subtotal']); ?>&lt;/td>
	&lt;/tr>

&lt;?php $i++; ?>

&lt;?php endforeach; ?>

&lt;tr>
  &lt;td colspan="2">&nbsp;&lt;/td>
  &lt;td class="right">&lt;strong>Total&lt;/strong>&lt;/td>
  &lt;td class="right">$&lt;?php echo $this->cart->format_number($this->cart->total()); ?>&lt;/td>
&lt;/tr>

&lt;/table>

&lt;p>&lt;?php echo form_submit('', 'Update your Cart'); ?>&lt;/p>
</textarea>




<h2>Updating The Cart</h2>

<p>To update the information in your cart, you must pass an array containing the <kbd>Row ID</kbd> and quantity to the <dfn>$this->cart->update()</dfn> function:</p>

<p class="important"><strong>Note:</strong> If the quantity is set to zero, the item will be removed from the cart.</p>

<code>
$data = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'rowid' => 'b99ccdf16028f015540f341130b6d8ec',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'qty'&nbsp;&nbsp; => 3<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />

$this->cart->update($data);
<br /><br />
// Or a multi-dimensional array<br /><br />
$data = array(<br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'rowid'&nbsp;&nbsp; => 'b99ccdf16028f015540f341130b6d8ec',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'qty'&nbsp;&nbsp;&nbsp;&nbsp; => 3<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'rowid'&nbsp;&nbsp; => 'xw82g9q3r495893iajdh473990rikw23',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'qty'&nbsp;&nbsp;&nbsp;&nbsp; => 4<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'rowid'&nbsp;&nbsp; => 'fh4kdkkkaoe30njgoe92rkdkkobec333',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'qty'&nbsp;&nbsp;&nbsp;&nbsp; => 2<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />

$this->cart->update($data);




</code>

<p><strong>What is a Row ID?</strong>&nbsp; The <kbd>row ID</kbd> is a unique identifier that is generated by the cart code when an item is added to the cart.  The reason a
unique ID is created is so that identical products with different options can be managed by the cart.</p>

<p>For example, let's say someone buys two identical t-shirts (same product ID), but in different sizes. The product ID (and other attributes) will be
identical for both sizes because it's the same shirt. The only difference will be the size. The cart must therefore have a means of identifying this
difference so that the two sizes of shirts can be managed independently. It does so by creating a unique "row ID" based on the product ID and any options associated with it.</p>

<p>In nearly all cases, updating the cart will be something the user does via the "view cart" page, so as a developer, it is unlikely that you will ever have to concern yourself
with the "row ID", other then making sure your "view cart" page contains this information in a hidden form field, and making sure it gets passed to the update
function when the update form is submitted. Please examine the construction of the "view cart" page above for more information.</p>



<p>&nbsp;<br /></p>


<h1>Function Reference</h1>

<h2>$this->cart->insert();</h2>

<p>Permits you to add items to the shopping cart, as outlined above.</p>


<h2>$this->cart->update();</h2>

<p>Permits you to update items in the shopping cart, as outlined above.</p>


<h2>$this->cart->total();</h2>

<p>Displays the total amount in the cart.</p>


<h2>$this->cart->total_items();</h2>

<p>Displays the total number of items in the cart.</p>


<h2>$this->cart->contents();</h2>

<p>Returns an array containing everything in the cart.</p>



<h2>$this->cart->has_options(rowid);</h2>

<p>Returns TRUE (boolean) if a particular row in the cart contains options. This function is designed to be used in a loop with <dfn>$this->cart->contents()</dfn>, since you must pass the <kbd>rowid</kbd> to this function, as shown in the <dfn>Displaying the Cart</dfn> example above.</p>


<h2>$this->cart->product_options(rowid);</h2>

<p>Returns an array of options for a particular product. This function is designed to be used in a loop with <dfn>$this->cart->contents()</dfn>, since you must pass the <kbd>rowid</kbd> to this function, as shown in the <dfn>Displaying the Cart</dfn> example above.</p>



<h2>$this->cart->destroy();</h2>

<p>Permits you to destroy the cart. This function will likely be called when you are finished processing the customer's order.</p>

