

<h1>Queries</h1>

<h2>$this->db->query();</h2>

<p>To submit a query, use the following function:</p>

<code>$this->db->query('YOUR QUERY HERE');</code>

<p>The <dfn>query()</dfn> function returns a database result <strong>object</strong> when "read" type queries are run,
which you can use to <a href="results.html">show your results</a>.  When "write" type queries are run it simply returns TRUE or FALSE
depending on success or failure.  When retrieving data you will typically assign the query to your own variable, like this:</p>

<code><var>$query</var> = $this->db->query('YOUR QUERY HERE');</code>

<h2>$this->db->simple_query();</h2>

<p>This is a simplified version of the <dfn>$this->db->query()</dfn> function.  It ONLY returns TRUE/FALSE on success or failure.
It DOES NOT return a database result set, nor does it set the query timer, or compile bind data, or store your query for debugging.
It simply lets you submit a query. Most users will rarely use this function.</p>


<h1>Working with Database prefixes manually</h1>
<p>If you have configured a database prefix and would like to prepend it to a table name for use in a native SQL query for example, then you can use the following:</p>
<p><code>$this-&gt;db-&gt;dbprefix('tablename');<br />
// outputs prefix_tablename</code></p>

<p>If for any reason you would like to change the prefix programatically without needing to create a new connection, you can use this method:</p>
<p><code>$this-&gt;db-&gt;set_dbprefix('newprefix');<br /><br />
$this-&gt;db-&gt;dbprefix('tablename');<br />
// outputs newprefix_tablename</code></p>


<h1>Protecting identifiers</h1>
<p>In many databases it is advisable to protect table and field names - for example with backticks in MySQL. <strong>Active Record queries are automatically protected</strong>, however if you need to manually protect an identifier you can use:</p>
<p><code>$this-&gt;db-&gt;protect_identifiers('table_name');</code></p>

<p>This function will also add a table prefix to your table, assuming you have a prefix specified in your database config file. To enable the prefixing set <kbd>TRUE</kbd> (boolen) via the second parameter:</p>
<p><code>$this-&gt;db-&gt;protect_identifiers('table_name', <kbd>TRUE</kbd>);</code></p>


<h1>Escaping Queries</h1>
<p>It's a very good security practice to escape your data before submitting it into your database.
CodeIgniter has three methods that help you do this:</p>

<ol>
<li><strong>$this->db->escape()</strong> This function determines the data type so that it
can escape only string data.  It also automatically adds single quotes around the data so you don't have to:

<code>$sql = "INSERT INTO table (title) VALUES(".$this->db->escape($title).")";</code></li>

<li><strong>$this->db->escape_str()</strong>  This function escapes the data passed to it, regardless of type.
Most of the time you'll use the above function rather than this one. Use the function like this:

<code>$sql = "INSERT INTO table (title) VALUES('".$this->db->escape_str($title)."')";</code></li>

<li><strong>$this->db->escape_like_str()</strong>  This method should be used when strings are to be used in LIKE
conditions so that LIKE wildcards ('%', '_') in the string are also properly escaped.

<code>$search = '20% raise';<br />
$sql = "SELECT id FROM table WHERE column LIKE '%".$this->db->escape_like_str($search)."%'";</code></li>

</ol>


<h1>Query Bindings</h1>


<p>Bindings enable you to simplify your query syntax by letting the system put the queries together for you. Consider the following example:</p>

<code>
$sql = "SELECT * FROM some_table WHERE id = <var>?</var> AND status = <var>?</var> AND author = <var>?</var>";
<br /><br />
$this->db->query($sql, array(3, 'live', 'Rick'));
</code>

<p>The question marks in the query are automatically replaced with the values in the array in the second parameter of the query function.</p>
<p class="important">The secondary benefit of using binds is that the values are automatically escaped, producing safer queries.  You don't have to remember to manually escape data; the engine does it automatically for you.</p>

