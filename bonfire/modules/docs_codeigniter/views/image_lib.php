<h1>Image Manipulation Class</h1>

<p>CodeIgniter's Image Manipulation class lets you perform the following actions:</p>

<ul>
<li>Image Resizing</li>
<li>Thumbnail Creation</li>
<li>Image Cropping</li>
<li>Image Rotating</li>
<li>Image Watermarking</li>
</ul>

<p>All three major image libraries are supported:  GD/GD2, NetPBM, and ImageMagick</p>

<p class="important"><strong>Note:</strong> Watermarking is only available using the GD/GD2 library.
In addition, even though other libraries are supported, GD is required in
order for the script to calculate the image properties.  The image processing, however, will be performed with the
library you specify.</p>


<h2>Initializing the Class</h2>

<p>Like most other classes in CodeIgniter, the image class is initialized in your controller
using the <dfn>$this->load-&gt;library</dfn> function:</p>
<code>$this->load->library('image_lib');</code>

<p>Once the library is loaded it will be ready for use.  The image library object you will use to call all functions is: <dfn>$this->image_lib</dfn></p>


<h2>Processing an Image</h2>

<p>Regardless of the type of processing you would like to perform (resizing, cropping, rotation, or watermarking), the general process is
identical. You will set some preferences corresponding to the action you intend to perform, then
call one of four available processing functions.  For example, to create an image thumbnail you'll do this:</p>

<code>$config['image_library'] = 'gd2';<br />
$config['source_image']	= '/path/to/image/mypic.jpg';<br />
$config['create_thumb'] = TRUE;<br />
$config['maintain_ratio'] = TRUE;<br />
$config['width']		= 75;<br />
$config['height']	= 50;<br />
<br />
$this->load->library('image_lib', $config);
<br />
<br />
$this->image_lib->resize();</code>

<p>The above code tells the <dfn>image_resize</dfn> function to look for an image called <em>mypic.jpg</em>
located in the <dfn>source_image</dfn> folder, then create a thumbnail that is 75 X 50 pixels using the GD2 <dfn>image_library</dfn>.
Since the <dfn>maintain_ratio</dfn> option is enabled, the thumb will be as close to the target <dfn>width</dfn> and
<dfn>height</dfn> as possible while preserving the original aspect ratio.  The thumbnail will be called <em>mypic_thumb.jpg</em>
</p>

<p class="important"><strong>Note:</strong> In order for the image class to be allowed to do any processing, the
folder containing the image files must have write permissions.</p>

<p class="important"><strong>Note:</strong> Image processing can require a considerable amount of server memory for some operations. If you are experiencing out of memory errors while processing images you may need to limit their maximum size, and/or adjust PHP memory limits.</p>

<h2>Processing Functions</h2>

<p>There are four available processing functions:</p>

<ul>
<li>$this->image_lib->resize()</li>
<li>$this->image_lib->crop()</li>
<li>$this->image_lib->rotate()</li>
<li>$this->image_lib->watermark()</li>
<li>$this-&gt;image_lib-&gt;clear()</li>
</ul>

<p>These functions return boolean TRUE upon success and FALSE for failure.  If they fail you can retrieve the
error message using this function:</p>

<code>echo $this->image_lib->display_errors();</code>

<p>A good practice is use the processing function conditionally, showing an error upon failure, like this:</p>

<code>if ( ! $this->image_lib->resize())<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;echo $this->image_lib->display_errors();<br />
}</code>

<p>Note:  You can optionally specify the HTML formatting to be applied to the errors, by submitting the opening/closing
tags in the function, like this:</p>

<code>$this->image_lib->display_errors('<var>&lt;p></var>', '<var>&lt;/p></var>');</code>


<h2>Preferences</h2>

<p>The  preferences described below allow you to tailor the image processing to suit your needs.</p>

<p>Note that not all preferences are available for every
function.  For example, the x/y axis preferences are only available for image cropping. Likewise, the width and height
preferences have no effect on cropping.  The "availability" column indicates which functions support a given preference.</p>

<p>Availability Legend:</p>

<ul>
<li><var>R</var> - Image Resizing</li>
<li><var>C</var> - Image Cropping</li>
<li><var>X</var> - Image Rotation</li>
<li><var>W</var> - Image Watermarking</li>

</ul>





<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder">
<tr>
<th>Preference</th>
<th>Default&nbsp;Value</th>
<th>Options</th>
<th>Description</th>
<th>Availability</th>
</tr>

<tr>
<td class="td"><strong>image_library</strong></td>
<td class="td">GD2</td>
<td class="td">GD, GD2, ImageMagick, NetPBM</td>
<td class="td">Sets the image library to be used.</td>
<td class="td">R, C, X, W</td>
</tr>

<tr>
<td class="td"><strong>library_path</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">Sets the server path to your ImageMagick or NetPBM library.  If you use either of those libraries you must supply the path.</td>
<td class="td">R, C, X</td>
</tr>

<tr>
<td class="td"><strong>source_image</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">Sets the source image name/path.  The path must be a relative or absolute server path, not a URL.</td>
<td class="td">R, C, S, W</td>
</tr>

<tr>
<td class="td"><strong>dynamic_output</strong></td>
<td class="td">FALSE</td>
<td class="td">TRUE/FALSE (boolean)</td>
<td class="td">Determines whether the new image file should be written to disk or generated dynamically.  Note: If you choose the dynamic setting, only one image can be shown at a time, and it can't be positioned on the page. It simply outputs the raw image dynamically to your browser, along with image headers.</td>
<td class="td">R, C, X, W</td>
</tr>


<tr>
<td class="td"><strong>quality</strong></td>
<td class="td">90%</td>
<td class="td">1 - 100%</td>
<td class="td">Sets the quality of the image. The higher the quality the larger the file size.</td>
<td class="td">R, C, X, W</td>
</tr>


<tr>
<td class="td"><strong>new_image</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">Sets the destination image name/path.  You'll use this preference when creating an image copy. The path must be a relative or absolute server path, not a URL.</td>
<td class="td">R, C, X, W</td>
</tr>

<tr>
<td class="td"><strong>width</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">Sets the width you would like the image set to.</td>
<td class="td">R, C </td>
</tr>

<tr>
<td class="td"><strong>height</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">Sets the height you would like the image set to.</td>
<td class="td">R, C </td>
</tr>

<tr>
<td class="td"><strong>create_thumb</strong></td>
<td class="td">FALSE</td>
<td class="td">TRUE/FALSE (boolean)</td>
<td class="td">Tells the image processing function to create a thumb.</td>
<td class="td">R</td>
</tr>

<tr>
<td class="td"><strong>thumb_marker</strong></td>
<td class="td">_thumb</td>
<td class="td">None</td>
<td class="td">Specifies the thumbnail indicator.  It will be inserted just before the file extension, so mypic.jpg would become mypic_thumb.jpg</td>
<td class="td">R</td>
</tr>

<tr>
<td class="td"><strong>maintain_ratio</strong></td>
<td class="td">TRUE</td>
<td class="td">TRUE/FALSE (boolean)</td>
<td class="td">Specifies whether to maintain the original aspect ratio when resizing or use hard values.</td>
<td class="td">R, C</td>
</tr>


<tr>
<td class="td"><strong>master_dim</strong></td>
<td class="td">auto</td>
<td class="td">auto, width, height</td>
<td class="td">Specifies what to use as the master axis when resizing or creating thumbs. For example, let's say you want to resize an image to 100 X 75 pixels. If the source image size does not allow perfect resizing to those dimensions, this setting determines which axis should be used as the hard value. "auto" sets the axis automatically based on whether the image is taller then wider, or vice versa.</td>
<td class="td">R</td>
</tr>




<tr>
<td class="td"><strong>rotation_angle</strong></td>
<td class="td">None</td>
<td class="td">90, 180, 270, vrt, hor</td>
<td class="td">Specifies the angle of rotation when rotating images.  Note that PHP rotates counter-clockwise, so a 90 degree rotation to the right must be specified as 270.</td>
<td class="td">X</td>
</tr>

<tr>
<td class="td"><strong>x_axis</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">Sets the X coordinate in pixels for image cropping. For example, a setting of 30 will crop an image 30 pixels from the left.</td>
<td class="td">C</td>
</tr>
<tr>
<td class="td"><strong>y_axis</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">Sets the Y coordinate in pixels for image cropping. For example, a setting of 30 will crop an image 30 pixels from the top.</td>
<td class="td">C</td>
</tr>

</table>


<h2>Setting preferences in a config file</h2>

<p>If you prefer not to set preferences using the above method, you can instead put them into a config file.
Simply create a new file called <var>image_lib.php</var>,  add the <var>$config</var>
array in that file. Then save the file in: <var>config/image_lib.php</var> and it will be used automatically. You
will NOT need to use the <dfn>$this->image_lib->initialize</dfn> function if you save your preferences in a config file.</p>


<h2>$this->image_lib->resize()</h2>

<p>The image resizing function lets you resize the original image, create a copy (with or without resizing),
or create a thumbnail image.</p>

<p>For practical purposes there is no difference between creating a copy and creating
a thumbnail except a thumb will have the thumbnail marker as part of the name (ie, mypic_thumb.jpg).</p>

<p>All preferences listed in the table above are available for this function except these three:  rotation_angle, x_axis, and y_axis.</p>

<h3>Creating a Thumbnail</h3>

<p>The resizing function will create a thumbnail file (and preserve the original) if you set this preference to TRUE:</p>

<code>$config['create_thumb'] = TRUE;</code>

<p>This single preference determines whether a thumbnail is created or not.</p>

<h3>Creating a Copy</h3>

<p>The resizing function will create a copy of the image file (and preserve the original) if you set
a path and/or a new filename using this preference:</p>

<code>$config['new_image'] = '/path/to/new_image.jpg';</code>

<p>Notes regarding this preference:</p>
<ul>
<li>If only the new image name is specified it will be placed in the same folder as the original</li>
<li>If only the path is specified, the new image will be placed in the destination with the same name as the original.</li>
<li>If both the path and image name are specified it will placed in its own destination and given the new name.</li>
</ul>


<h3>Resizing the Original Image</h3>

<p>If neither of the two preferences listed above (create_thumb, and new_image) are used, the resizing function will instead
target the original image for processing.</p>


<h2>$this->image_lib->crop()</h2>

<p>The cropping function works nearly identically to the resizing function except it requires that you set
preferences for the X and Y axis (in pixels) specifying where to crop, like this:</p>

<code>$config['x_axis'] = '100';<br />
$config['y_axis'] = '40';</code>

<p>All preferences listed in the table above are available for this function except these:  rotation_angle, width, height, create_thumb, new_image.</p>

<p>Here's an example showing how you might crop an image:</p>

<code>$config['image_library'] = 'imagemagick';<br />
$config['library_path'] = '/usr/X11R6/bin/';<br />
$config['source_image']	= '/path/to/image/mypic.jpg';<br />
$config['x_axis'] = '100';<br />
$config['y_axis'] = '60';<br />
<br />
$this->image_lib->initialize($config);
<br />
<br />
if ( ! $this->image_lib->crop())<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;echo $this->image_lib->display_errors();<br />
}</code>


<p>Note: Without a visual interface it is difficult to crop images, so this function is not very useful
unless you intend to build such an interface.  That's exactly what we did using for the photo
gallery module in ExpressionEngine, the CMS we develop.  We added a JavaScript UI that lets the cropping
area be selected.</p>

<h2>$this->image_lib->rotate()</h2>

<p>The image rotation function requires that the angle of rotation be set via its preference:</p>

<code>$config['rotation_angle'] = '90';</code>

<p>There are 5 rotation options:</p>

<ol>
<li>90 - rotates counter-clockwise by 90 degrees.</li>
<li>180 - rotates counter-clockwise by 180 degrees.</li>
<li>270 - rotates counter-clockwise by 270 degrees.</li>
<li>hor - flips the image horizontally.</li>
<li>vrt - flips the image vertically.</li>
</ol>

<p>Here's an example showing how you might rotate an image:</p>

<code>$config['image_library'] = 'netpbm';<br />
$config['library_path'] = '/usr/bin/';<br />
$config['source_image']	= '/path/to/image/mypic.jpg';<br />
$config['rotation_angle'] = 'hor';<br />
<br />
$this->image_lib->initialize($config);
<br />
<br />
if ( ! $this->image_lib->rotate())<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;echo $this->image_lib->display_errors();<br />
}</code>



<h2>$this-&gt;image_lib-&gt;clear()</h2>
<p>The clear function resets all of the values used when processing an image. You will want to call this if you are processing images in a loop.</p>
<p><code>$this-&gt;image_lib-&gt;clear();</code></p>
<p>&nbsp;</p>
<h1>Image Watermarking</h1>

<p>The Watermarking feature requires the GD/GD2 library.</p>


<h2>Two Types of Watermarking</h2>

<p>There are two types of watermarking that you can use:</p>

<ul>
<li><strong>Text</strong>: The watermark message will be generating using text, either with a True Type font that you specify, or
using the native text output that the GD library supports. If you use the True Type version your GD installation
must be compiled with True Type support (most are, but not all).</li>

<li><strong>Overlay</strong>: The watermark message will be generated by overlaying an image (usually a transparent PNG or GIF)
containing your watermark over the source image.</li>

</ul>


<h2>Watermarking an Image</h2>

<p>Just as with the other functions (resizing, cropping, and rotating) the general process for watermarking
involves setting the preferences corresponding to the action you intend to perform, then
calling the watermark function.  Here is an example:</p>

<code>
$config['source_image']	= '/path/to/image/mypic.jpg';<br />
$config['wm_text'] = 'Copyright 2006 - John Doe';<br />
$config['wm_type'] = 'text';<br />
$config['wm_font_path'] = './system/fonts/texb.ttf';<br />
$config['wm_font_size']	= '16';<br />
$config['wm_font_color'] = 'ffffff';<br />
$config['wm_vrt_alignment']  = 'bottom';<br />
$config['wm_hor_alignment']  = 'center';<br />
$config['wm_padding']  = '20';<br />
<br />
$this->image_lib->initialize($config);
<br />
<br />
$this->image_lib->watermark();</code>


<p>The above example will use a 16 pixel True Type font to create the text "Copyright 2006 - John Doe".  The watermark
will be positioned at the bottom/center of the image, 20 pixels from the bottom of the image.</p>

<p class="important"><strong>Note:</strong> In order for the image class to be allowed to do any processing, the image file must have &quot;write&quot; file permissions. For example, 777.</p>


<h2>Watermarking Preferences</h2>

<p>This table shown the preferences that are available for both types of watermarking (text or overlay)</p>

<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder">
<tr>
<th>Preference</th>
<th>Default&nbsp;Value</th>
<th>Options</th>
<th>Description</th>
</tr>

<tr>
<td class="td"><strong>wm_type</strong></td>
<td class="td">text</td>
<td class="td">text, overlay</td>
<td class="td">Sets the type of watermarking that should be used.</td>
</tr>

<tr>
<td class="td"><strong>source_image</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">Sets the source image name/path.  The path must be a relative or absolute server path, not a URL.</td>
</tr>

<tr>
<td class="td"><strong>dynamic_output</strong></td>
<td class="td">FALSE</td>
<td class="td">TRUE/FALSE (boolean)</td>
<td class="td">Determines whether the new image file should be written to disk or generated dynamically.  Note: If you choose the dynamic setting, only one image can be shown at a time, and it can't be positioned on the page. It simply outputs the raw image dynamically to your browser, along with image headers.</td>
</tr>

<tr>
<td class="td"><strong>quality</strong></td>
<td class="td">90%</td>
<td class="td">1 - 100%</td>
<td class="td">Sets the quality of the image. The higher the quality the larger the file size.</td>
</tr>

<tr>
<td class="td"><strong>padding</strong></td>
<td class="td">None</td>
<td class="td">A number</td>
<td class="td">The amount of padding, set in pixels, that will be applied to the watermark to set it away from the edge of your images.</td>
</tr>

<tr>
<td class="td"><strong>wm_vrt_alignment</strong></td>
<td class="td">bottom</td>
<td class="td">top, middle, bottom</td>
<td class="td">Sets the vertical alignment for the watermark image.</td>
</tr>

<tr>
<td class="td"><strong>wm_hor_alignment</strong></td>
<td class="td">center</td>
<td class="td">left, center, right</td>
<td class="td">Sets the horizontal alignment for the watermark image.</td>
</tr>

<tr>
<td class="td"><strong>wm_hor_offset</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">You may specify a horizontal offset (in pixels) to apply to the watermark position. The offset normally moves the watermark to the right, except if you have your alignment set to "right" then your offset value will move the watermark toward the left of the image.</td>
</tr>

<tr>
<td class="td"><strong>wm_vrt_offset</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">You may specify a vertical offset (in pixels) to apply to the watermark position. The offset normally moves the watermark down, except if you have your alignment set to "bottom" then your offset value will move the watermark toward the top of the image.</td>
</tr>

</table>



<h3>Text Preferences</h3>
<p>This table shown the preferences that are available for the text type of watermarking.</p>


<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder">
<tr>
<th>Preference</th>
<th>Default&nbsp;Value</th>
<th>Options</th>
<th>Description</th>
</tr>

<tr>
<td class="td"><strong>wm_text</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">The text you would like shown as the watermark.  Typically this will be a copyright notice.</td>
</tr>

<tr>
<td class="td"><strong>wm_font_path</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">The server path to the True Type Font you would like to use.  If you do not use this option, the native GD font will be used.</td>
</tr>

<tr>
<td class="td"><strong>wm_font_size</strong></td>
<td class="td">16</td>
<td class="td">None</td>
<td class="td">The size of the text.  Note: If you are not using the True Type option above, the number is set using a range of 1 - 5.  Otherwise, you can use any valid pixel size for the font you're using.</td>
</tr>

<tr>
<td class="td"><strong>wm_font_color</strong></td>
<td class="td">ffffff</td>
<td class="td">None</td>
<td class="td">The font color, specified in hex.  Note, you must use the full 6 character hex value (ie, 993300), rather than the three character abbreviated version (ie fff).</td>
</tr>


<tr>
<td class="td"><strong>wm_shadow_color</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">The color of the drop shadow, specified in hex. If you leave this blank a drop shadow will not be used. Note, you must use the full 6 character hex value (ie, 993300), rather than the three character abbreviated version (ie fff).</td>
</tr>

<tr>
<td class="td"><strong>wm_shadow_distance</strong></td>
<td class="td">3</td>
<td class="td">None</td>
<td class="td">The distance (in pixels) from the font that the drop shadow should appear.</td>
</tr>

</table>




<h3>Overlay Preferences</h3>
<p>This table shown the preferences that are available for the overlay type of watermarking.</p>


<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder">
<tr>
<th>Preference</th>
<th>Default&nbsp;Value</th>
<th>Options</th>
<th>Description</th>
</tr>

<tr>
<td class="td"><strong>wm_overlay_path</strong></td>
<td class="td">None</td>
<td class="td">None</td>
<td class="td">The server path to the image you wish to use as your watermark. Required only if you are using the overlay method.</td>
</tr>

<tr>
<td class="td"><strong>wm_opacity</strong></td>
<td class="td">50</td>
<td class="td">1 - 100</td>
<td class="td">Image opacity. You may specify the opacity (i.e. transparency) of your watermark image. This allows the watermark to be faint and not completely obscure the details from the original image behind it. A 50% opacity is typical.</td>
</tr>

<tr>
<td class="td"><strong>wm_x_transp</strong></td>
<td class="td">4</td>
<td class="td">A number</td>
<td class="td">If your watermark image is a PNG or GIF image, you may specify a color on the image to be "transparent". This setting (along with the next) will allow you to specify that color. This works by specifying the "X" and "Y" coordinate pixel (measured from the upper left) within the image that corresponds to a pixel representative of the color you want to be transparent.</td>
</tr>

<tr>
<td class="td"><strong>wm_y_transp</strong></td>
<td class="td">4</td>
<td class="td">A number</td>
<td class="td">Along with the previous setting, this allows you to specify the coordinate to a pixel representative of the color you want to be transparent.</td>
</tr>
</table>
