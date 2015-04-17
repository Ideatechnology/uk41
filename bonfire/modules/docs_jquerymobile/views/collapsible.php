 <h1>Collapsible</h1>

        <p>Collapsibles are simple widgets that allow you to expand or collapse content when tapped and are useful in mobile to provide a compact presentation of content.</p>

        <h2>Basic collapsible</h2>

        <p>To create a collapsible block of content, create a container and add the <code> data-role="collapsible"</code> attribute. Directly inside this container, add any header (H1-H6) or legend element. The framework will style the header to look like a clickable button and add a "+" icon to the left to indicate it's expandable. After the header, add any HTML markup you want to be collapsible. The framework will wrap this markup in a container that will be hidden/shown when the heading is clicked.</p>

        <div data-demo-html="true">
            <div data-role="collapsible">
                <h4>Heading</h4>
                <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
            </div>
        </div><!--/demo-html -->

        <h2>Theme</h2>

        <p>Add the <code>data-theme</code> attribute to set a theme for the collapsible, and the <code>data-content-theme</code> attribute to the wrapper and specify a theme swatch letter.</p>

        <div data-demo-html="true">
            <div data-role="collapsible" data-theme="b" data-content-theme="b">
                <h4>Heading</h4>
                <p>I'm the collapsible content with a themed content block set to "b".</p>
            </div>
        </div><!--/demo-html -->

        <p>The collapsible content inherits a theme by default. Set <code>data-content-theme</code> to <code>false</code> to have no theme at all.</p>

        <div data-demo-html="true">
            <div data-role="collapsible" data-content-theme="false">
                <h4>Heading</h4>
                <p>I'm the collapsible content without a theme.</p>
            </div>
        </div><!--/demo-html -->

        <h2>Expanded</h2>

        <p>To expand the content when the page loads, add the <code>data-collapsed="false"</code> attribute to the wrapper.</p>

        <div data-demo-html="true">
            <div data-role="collapsible" data-collapsed="false">
                <h4>Heading</h4>
                <ul data-role="listview">
                    <li><a href="#">List item 1</a></li>
                    <li><a href="#">List item 2</a></li>
                    <li><a href="#">List item 3</a></li>
                </ul>
            </div>
        </div><!--/demo-html -->

        <h2>Mini sized</h2>

        <p>For a more compact version that is useful in toolbars and tight spaces, add the <code>data-mini="true"</code> attribute to the element to create a mini version. </p>

        <div data-demo-html="true">
            <div data-role="collapsible" data-mini="true">
                <h4>Heading</h4>
                <ul data-role="listview">
                    <li><a href="#">List item 1</a></li>
                    <li><a href="#">List item 2</a></li>
                    <li><a href="#">List item 3</a></li>
                </ul>
            </div>
        </div><!--/demo-html -->

            <h2>Icons</h2>

            <p>The default icons of collapsible headings can be overridden by using the <code>data-collapsed-icon</code> and <code>data-expanded-icon</code> attributes. In the example below, <code>data-collapsed-icon="carat-d"</code> and <code>data-expanded-icon="carat-u"</code>.</p>

            <div data-demo-html="true">
                <div data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u">
                    <h4>Heading</h4>
                    <ul data-role="listview" data-inset="false">
                        <li>Read-only list item 1</li>
                        <li>Read-only list item 2</li>
                        <li>Read-only list item 3</li>
                    </ul>
                </div>
            </div><!--/demo-html -->

            <h2>Icon positioning</h2>

            <p>The default icon positioning of collapsible headings can be overridden by using the <code>data-iconpos</code> attribute. In the below case, <code>data-iconpos="right"</code>.</p>

            <div data-role="collapsible" data-iconpos="right">
                <h3>I'm a header</h3>
                <p><code>data-iconpos="right"</code></p>
            </div>

        <h2>Legend</h2>

        <p>For forms, use a <code>fieldset</code> and <code>legend</code> for the collapsible.</p>
        <div data-demo-html="true">
            <form>
                <fieldset data-role="collapsible">
                    <legend>Legend</legend>

                    <label for="textinput-f">Text Input:</label>
                    <input type="text" name="textinput-f" id="textinput-f" placeholder="Text input" value="">

                    <div data-role="controlgroup">
                        <input type="checkbox" name="checkbox-1-a" id="checkbox-1-a">
                        <label for="checkbox-1-a">One</label>
                        <input type="checkbox" name="checkbox-2-a" id="checkbox-2-a">
                        <label for="checkbox-2-a">Two</label>
                        <input type="checkbox" name="checkbox-3-a" id="checkbox-3-a">
                        <label for="checkbox-3-a">Three</label>
                    </div>
                </fieldset>
            </form>
        </div><!--/demo-html -->

        <h2>Non-inset collapsible</h2>

        <p>By default collapsibles have an inset appearance. To make them full width without corner styling add the <code>data-inset="false"</code> attribute to the element.</p>

        <div data-demo-html="true">
            <div data-role="collapsible" data-inset="false">
                <h4>Heading</h4>
                <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
            </div>
        </div><!--/demo-html -->

        <h2>Set of individual collapsibles</h2>

        <p>This is an example of a series of individual collapsibles. The difference with a "Collapsible Set" is that multiple collapsible rows can be open at once.</p>

        <div data-demo-html="true">
            <div data-role="collapsible" data-inset="false">
                <h3>Pets</h3>
                <ul data-role="listview">
                    <li><a href="#">Canary</a></li>
                    <li><a href="#">Cat</a></li>
                    <li><a href="#">Dog</a></li>
                    <li><a href="#">Gerbil</a></li>
                    <li><a href="#">Iguana</a></li>
                    <li><a href="#">Mouse</a></li>
                </ul>
            </div><!-- /collapsible -->
            <div data-role="collapsible" data-inset="false">
                <h3>Farm animals</h3>
                <ul data-role="listview">
                    <li><a href="#">Chicken</a></li>
                    <li><a href="#">Cow</a></li>
                    <li><a href="#">Duck</a></li>
                    <li><a href="#">Horse</a></li>
                    <li><a href="#">Pig</a></li>
                    <li><a href="#">Sheep</a></li>
                </ul>
            </div><!-- /collapsible -->
            <div data-role="collapsible" data-inset="false">
                <h3>Wild Animals</h3>
                <ul data-role="listview">
                    <li><a href="#">Aardvark</a></li>
                    <li><a href="#">Alligator</a></li>
                    <li><a href="#">Ant</a></li>
                    <li><a href="#">Bear</a></li>
                    <li><a href="#">Beaver</a></li>
                    <li><a href="#">Cougar</a></li>
                    <li><a href="#">Dingo</a></li>
                </ul>
            </div><!-- /collapsible -->
        </div><!--/demo-html -->

        <p>To avoid "double" borders the framework removes the top border of collapsibles that are immediately preceded by another collapsible. Here we show how to negate this with custom CSS.</p>

        <div data-demo-html="true" data-demo-css="#negateDoubleBorder">
            <div id="demo-borders">
                <div data-role="collapsible" data-inset="false">
                    <h3>Pets</h3>
                    <ul data-role="listview">
                        <li><a href="#">Canary</a></li>
                        <li><a href="#">Cat</a></li>
                        <li><a href="#">Dog</a></li>
                        <li><a href="#">Gerbil</a></li>
                        <li><a href="#">Iguana</a></li>
                        <li><a href="#">Mouse</a></li>
                    </ul>
                </div><!-- /collapsible -->
                <div data-role="collapsible" data-inset="false">
                    <h3>Farm animals</h3>
                    <ul data-role="listview">
                        <li><a href="#">Chicken</a></li>
                        <li><a href="#">Cow</a></li>
                        <li><a href="#">Duck</a></li>
                        <li><a href="#">Horse</a></li>
                        <li><a href="#">Pig</a></li>
                        <li><a href="#">Sheep</a></li>
                    </ul>
                </div><!-- /collapsible -->
            </div>
        </div><!--/demo-html -->

			<h2>Pre-rendered markup</h2>
			<p>You can supply pre-rendered markup for any collapsible to save startup time. The example below illustrates the markup you have to provide for a pre-rendered collapsible.</p>
				<div data-demo-html="true">
					<div data-role="collapsible" data-enhanced="true" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-collapsed">
						<h4 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
							<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-icon-plus">
							Heading
							<div class="ui-collapsible-heading-status"> click to expand contents</div>
							</a>
						</h4>
						<div class="ui-collapsible-content ui-collapsible-content-collapsed" aria-hidden="true">
						<p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
						</div>
					</div>
				</div>