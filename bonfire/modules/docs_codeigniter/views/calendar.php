<p>The Calendar class enables you to dynamically create calendars. Your calendars can be formatted through the use of a calendar
template, allowing 100% control over every aspect of its design. In addition, you can pass data to your calendar cells.</p>

<h2>Initializing the Class</h2>

<p>Like most other classes in CodeIgniter, the Calendar class is initialized in your controller using the <dfn>$this->load->library</dfn> function:</p>

<code>$this->load->library('calendar');</code>
<p>Once loaded, the Calendar object will be available using: <dfn>$this->calendar</dfn></p>


<h2>Displaying a Calendar</h2>

<p>Here is a very simple example showing how you can display a calendar:</p>

<code>$this->load->library('calendar');<br />
<br />
echo $this->calendar->generate();</code>

<p>The above code will generate a calendar for the current month/year based on your server time.
To show a calendar for a specific month and year you will pass this information to the calendar generating function:</p>

<code>$this->load->library('calendar');<br />
<br />
echo $this->calendar->generate(<kbd>2006</kbd>, <kbd>6</kbd>);</code>

<p>The above code will generate a calendar showing the month of June in 2006.  The first parameter specifies the year, the second parameter specifies the month.</p>

<h2>Passing Data to your Calendar Cells</h2>

<p>To add data to your calendar cells involves creating an associative array in which the keys correspond to the days
you wish to populate and the array value contains the data.  The array is passed to the third parameter of the calendar
generating function.  Consider this example:</p>

<code>$this->load->library('calendar');<br />
<br />
$data = array(<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp; => 'http://example.com/news/article/2006/03/',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp; => 'http://example.com/news/article/2006/07/',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13 => 'http://example.com/news/article/2006/13/',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26 => 'http://example.com/news/article/2006/26/'<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />
echo $this->calendar->generate(<kbd>2006</kbd>, <kbd>6</kbd>, <var>$data</var>);</code>

<p>Using the above example, day numbers 3, 7, 13, and 26 will become links pointing to the URLs you've provided.</p>

<p class="important"><strong>Note:</strong> By default it is assumed that your array will contain links.
In the section that explains the calendar template below you'll see how you can customize
how data passed to your cells is handled so you can pass different types of information.</p>


<h2>Setting Display Preferences</h2>

<p>There are seven preferences you can set to control various aspects of the calendar.  Preferences are set by passing an
array of preferences in the second parameter of the loading function. Here is an example:</p>


<code>
$prefs = array (<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'start_day'&nbsp;&nbsp;&nbsp; => 'saturday',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'month_type'&nbsp;&nbsp; => 'long',<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'day_type'&nbsp;&nbsp;&nbsp;&nbsp; => 'short'<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />
$this->load->library('calendar', $prefs);<br />
<br />
echo $this->calendar->generate();</code>

<p>The above code would start the calendar on saturday, use the "long" month heading, and the "short" day names.  More information
regarding preferences below.</p>




<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder">
<tr>
<th>Preference</th>
<th>Default&nbsp;Value</th>
<th>Options</th>
<th>Description</th>
</tr><tr>
<td class="td"><strong>template</strong></td><td class="td">None</td><td class="td">None</td><td class="td">A string containing your calendar template. See the template section below.</td>
</tr><tr>
<td class="td"><strong>local_time</strong></td><td class="td">time()</td><td class="td">None</td><td class="td">A Unix timestamp corresponding to the current time.</td>
</tr><tr>
<td class="td"><strong>start_day</strong></td><td class="td">sunday</td><td class="td">Any week day (sunday, monday, tuesday, etc.)</td><td class="td">Sets the day of the week the calendar should start on.</td>
</tr><tr>
<td class="td"><strong>month_type</strong></td><td class="td">long</td><td class="td">long, short</td><td class="td">Determines what version of the month name to use in the header. long = January, short = Jan.</td>
</tr><tr>
<td class="td"><strong>day_type</strong></td><td class="td">abr</td><td class="td">long, short, abr</td><td class="td">Determines what version of the weekday names to use in the column headers. long = Sunday, short = Sun, abr = Su.</td>
</tr><tr>
<td class="td"><strong>show_next_prev</strong></td><td class="td">FALSE</td><td class="td">TRUE/FALSE (boolean)</td><td class="td">Determines whether to display links allowing you to toggle to next/previous months. See information on this feature below.</td>
</tr><tr>
<td class="td"><strong>next_prev_url</strong></td><td class="td">None</td><td class="td">A URL</td><td class="td">Sets the basepath used in the next/previous calendar links.</td>
</tr>
</table>



<h2>Showing Next/Previous Month Links</h2>

<p>To allow your calendar to dynamically increment/decrement via the next/previous links requires that you set up your calendar
code similar to this example:</p>


<code>$prefs = array (<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'show_next_prev'&nbsp;&nbsp;=> TRUE,<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'next_prev_url'&nbsp;&nbsp; => 'http://example.com/index.php/calendar/show/'<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />
<br />
$this-&gt;load-&gt;library('calendar', $prefs);<br />
<br />
echo $this->calendar->generate(<var>$this->uri->segment(3)</var>, <var>$this->uri->segment(4)</var>);</code>

<p>You'll notice a few things about the above example:</p>

<ul>
<li>You must set the "show_next_prev" to TRUE.</li>
<li>You must supply the URL to the controller containing your calendar in the "next_prev_url" preference.</li>
<li>You must supply the "year" and "month" to the calendar generating function via the URI segments where they appear (Note:  The calendar class automatically adds the year/month to the base URL you provide.).</li>
</ul>



<h2>Creating a Calendar Template</h2>

<p>By creating a calendar template you have 100% control over the design of your calendar. Each component of your
calendar will be placed within a pair of pseudo-variables as shown here:</p>


<code>
$prefs['template'] = '<br /><br />
&nbsp;&nbsp;&nbsp;<dfn>{table_open}</dfn><var>&lt;table border="0" cellpadding="0" cellspacing="0"></var><dfn>{/table_open}</dfn><br />
<br />
&nbsp;&nbsp;&nbsp;<dfn>{heading_row_start}</dfn><var>&lt;tr></var><dfn>{/heading_row_start}</dfn><br />
<br />
&nbsp;&nbsp;&nbsp;<dfn>{heading_previous_cell}</dfn><var>&lt;th>&lt;a href="</var><kbd>{previous_url}</kbd><var>">&amp;lt;&amp;lt;&lt;/a>&lt;/th></var><dfn>{/heading_previous_cell}</dfn><br />
&nbsp;&nbsp;&nbsp;<dfn>{heading_title_cell}</dfn><var>&lt;th colspan="</var><kbd>{colspan}</kbd><var>"></var><kbd>{heading}</kbd><var>&lt;/th></var><dfn>{/heading_title_cell}</dfn><br />
&nbsp;&nbsp;&nbsp;<dfn>{heading_next_cell}</dfn><var>&lt;th>&lt;a href="</var><kbd>{next_url}</kbd><var>">&amp;gt;&amp;gt;&lt;/a>&lt;/th></var><dfn>{/heading_next_cell}</dfn><br />
<br />
&nbsp;&nbsp;&nbsp;<dfn>{heading_row_end}</dfn><var>&lt;/tr></var><dfn>{/heading_row_end}</dfn><br />
<br />
&nbsp;&nbsp;&nbsp;<dfn>{week_row_start}</dfn><var>&lt;tr></var><dfn>{/week_row_start}</dfn><br />
&nbsp;&nbsp;&nbsp;<dfn>{week_day_cell}</dfn><var>&lt;td></var><dfn>{week_day}</dfn><var>&lt;/td></var><dfn>{/week_day_cell}</dfn><br />
&nbsp;&nbsp;&nbsp;<dfn>{week_row_end}</dfn><var>&lt;/tr></var><dfn>{/week_row_end}</dfn><br />
<br />
&nbsp;&nbsp;&nbsp;<dfn>{cal_row_start}</dfn><var>&lt;tr></var><dfn>{/cal_row_start}</dfn><br />
&nbsp;&nbsp;&nbsp;<dfn>{cal_cell_start}</dfn><var>&lt;td></var><dfn>{/cal_cell_start}</dfn><br />
<br />
&nbsp;&nbsp;&nbsp;<dfn>{cal_cell_content}</dfn><var>&lt;a href="</var><kbd>{content}</kbd><var>"></var><kbd>{day}</kbd><var>&lt;/a></var><dfn>{/cal_cell_content}</dfn><br />
&nbsp;&nbsp;&nbsp;<dfn>{cal_cell_content_today}</dfn><var>&lt;div class="highlight">&lt;a href="</var><kbd>{content}</kbd><var>"></var><kbd>{day}</kbd><var>&lt;/a>&lt;/div></var><dfn>{/cal_cell_content_today}</dfn><br />
<br />
&nbsp;&nbsp;&nbsp;<dfn>{cal_cell_no_content}</dfn><var></var><kbd>{day}</kbd><var></var><dfn>{/cal_cell_no_content}</dfn><br />
&nbsp;&nbsp;&nbsp;<dfn>{cal_cell_no_content_today}</dfn><var>&lt;div class="highlight"></var><kbd>{day}</kbd><var>&lt;/div></var><dfn>{/cal_cell_no_content_today}</dfn><br />
<br />
&nbsp;&nbsp;&nbsp;<dfn>{cal_cell_blank}</dfn><var>&amp;nbsp;</var><dfn>{/cal_cell_blank}</dfn><br />
<br />
&nbsp;&nbsp;&nbsp;<dfn>{cal_cell_end}</dfn><var>&lt;/td></var><dfn>{/cal_cell_end}</dfn><br />
&nbsp;&nbsp;&nbsp;<dfn>{cal_row_end}</dfn><var>&lt;/tr></var><dfn>{/cal_row_end}</dfn><br />
<br />
&nbsp;&nbsp;&nbsp;<dfn>{table_close}</dfn><var>&lt;/table></var><dfn>{/table_close}</dfn><br />
';<br />
<br />
$this->load->library('calendar', $prefs);<br />
<br />
echo $this->calendar->generate();</code>
